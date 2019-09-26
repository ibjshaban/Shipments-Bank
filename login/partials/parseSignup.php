<?php

if (isset($_POST['signup_sbt'], $_POST['token'] ) ) { ## does both validation and data processing
    //echo $_POST['token'];
	//if ( validate_token($_POST['token']) ) {
	if ($_POST['token'] ) {
		// form validation BEGINS:==================================================================================================

		#initialize an array to store any error message from the form
		$form_errors = array();
		
		#form validation
		$required_fields = array('username','email','password'); // these are the name of the fields in the html form which forms the key in the associative array (here $_POST)

		//call the function to check empty field and merge the return data into form_error array
	    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

	    //Fields that requires checking for minimum length ,HERE we declared an array from ourself, here we are defining the minimum length of the element with respect to its key, so we can excess through its key and chek its length.
	    $fields_to_check_length = array('username' => 4, 'password' => 6, 'email'=>12);

	    //call the function to check minimum required length and merge the return data into form_error array
	    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

	    //email validation / merge the return data into form_error array
	    $form_errors = array_merge($form_errors, check_email($_POST));

		// form validation ENDS:==================================================================================================

	    #############################################   FORM PROCESSING AND ERROR SHOWING   ####################################

		# check if the error array is empty or not , if yes then process the form data, and insert record
		if (empty($form_errors)) {
			$username = $_POST['username'];	//the method post is acutally an associative array of the value we passed 
			$password = $_POST['password'];
			$hashed_password = password_hash($password,PASSWORD_DEFAULT); # immediately hassing the password we got
			$email = $_POST['email'];
			$country = $_POST['country'];
			$city = $_POST['city'];
			$phone = $_POST['phone'];
            $item_name = $_POST['item_name'];


			# NOW , BEFORE CREATING THE USER (ie. entering the user data into the database) WE HAVE TO CHECK WHETHER THIS USERNAME IS TAKEN OR NOT IF IT DOES ,THEN SHOW MESSAGE, "sorry this username is already taken"

	 		# checkDuplicasy($input, $columnName, $databaseName, $tableName, $db)
			$arrayReturned = checkDuplicasy($username, 'username', 'shipmintsbank', 'users', $db);//returns an array of 'status' and 																				'message' key and their value
			if ($arrayReturned['status'] == false ) {//ie no duplicasy for username found in the database, 
				#checking email duplicasy
				$arrayReturned = checkDuplicasy($email, 'email', 'shipmintsbank', 'users', $db);
				if ($arrayReturned['status'] == false ) {//ie no duplicasy for email found in the database	
					try{
						$sqlInsert = "INSERT INTO shipmintsbank.users (username, password, email, join_date, country, city, phone) 
										VALUES  (:username, :password, :email, now(), :country, :city, :phone) ";

						$statement = $db->prepare($sqlInsert);
						$statement->execute( array(':username'=>$username,':password'=>$hashed_password,':email'=>$email,':country'=>$country,':city'=>$city,':phone'=>$phone ) );

						if($statement->rowcount()==1){ # ie if one row is changed theb ...
							$user_id = $db->lastInsertId();
							$encode_id = base64_encode("encodeUserid{$user_id}");
							//prepare email body
							$mail_body = '<html>
											<body style="background-color:#CCCCCC; color:#000; font-family: Arial, Helvetica, sans-serif;
											                line-height:1.8em;">
												<h2>User Authentication System </h2>
												<p>Dear '.$username.'<br><br>Thank you for registering, please click on the link below to
												confirm your email address</p>
												<p><a href="http://localhost/projects/SHIPMENTSBANK/login/activate.php?id='.$encode_id.'&item_name='.$item_name.'"> Confirm Email</a></p>
												<p><strong>&copy;2019 Shipments Bank System </strong></p>
											</body>
									</html>';

							$mail->addAddress($email, $username); #  $email is necessary BUT $username is optional..
							$mail->Subject = "message from USER AUTHENTICATION SYSTEM.";
							$mail->Body = $mail_body;

							// error handiling for PHPmailer
							if ($mail->Send()) {
								# popupMessage($title, $text, $type, $page)
								$result = popupMessage("Hey {$username}!!",'Hurray, registration successfull.<br>Please check your email for conformation link!','success','login.php');
							}else{
								$result = popupMessage("E-mail sending FAILED!!",$mail->ErrorInfo,'error','signup.php');
							}	
						
						}else{
							$result = flashMessage("Signup unsuccessfull");
						}

					}catch(PDOException $ex){ // thsi will be the error from the conection and not from the user
						$result = flashMessage("An error occured: WHILE INSERTING THE FORM DATA INTO THE DATABASE==>".$ex->getMessage());
					}
				}else{	$result =  flashMessage($arrayReturned['message']);	}

			}else{# here we dont care what is the status of the array( either true OR exception), we have to print the 				message in any case, SO
				$result =  flashMessage($arrayReturned['message']);
			}
		} // so if there will be an error then it will be checked and displayed in the html BODY element

	}else{
			$result = popupMessage("HACKER ALERT !!",'this request originates from an unknown source !','error','index.php');	
	}
}else{			//activation code
	if(isset($_GET['id'], $_GET['item_name'])) {
	    $item_name = $_GET['item_name'];
        $encoded_id = $_GET['id'];
		$decode_id = base64_decode($encoded_id);
		$user_id_array = explode("encodeUserid", $decode_id);
		$id = $user_id_array[1];

        $sql = "UPDATE shipmintsbank.users SET activated =:activated WHERE id=:id AND activated='0'"; # so if the account has been already updated then this script will not work

        $statement = $db->prepare($sql);
        $statement->execute(array(':activated' => "1", ':id' => $id));

        if ($statement->rowCount() == 1) {

            /*Add defuelt subscription data in user_subscriptopn table here ...*/
            $user_idSql = "SELECT id FROM shipmintsbank.users ORDER BY id DESC LIMIT 1";
            $user_idStatment = $db->query($user_idSql);
            $user_idRow = $user_idStatment->fetch(PDO::FETCH_ASSOC);
            $user_id = $user_idRow['id'];

            //$user_id = $user_idStatment;

            //$user_id = "35";
            //$user_id = $db->lastInsertId();
            $sqlSubscriptionInsert = "INSERT INTO shipmintsbank.user_subscriptions (user_id, payment_method, item_name) 
										VALUES  (:user_id, :payment_method, :item_name)";
            $subsStatement = $db->prepare($sqlSubscriptionInsert);
            $subsStatement->execute( array(':user_id'=> $user_id, ':payment_method'=>"Free", ':item_name'=>$item_name));

            $updateDateSql = "UPDATE shipmintsbank.user_subscriptions SET `valid_to` = DATE_ADD(`valid_from`, INTERVAL 10 DAY)WHERE `user_id` = :user_id";
            $updateDateStatement = $db->prepare($updateDateSql);
            $updateDateStatement->execute(array(':user_id' => $user_id));

			$result = "<div class=\"container\"  style=\"padding-top:25%\"><h2>Email Confirmed </h2>
			<p class='lead' style=\"padding-top:6px\">Your email address has been verified, you can now <a href=\"login.php\">login</a> with your email and password.</p></div>";
		} else {
			$result = "<div class=\"container\" style=\"padding-top:30%\"><p class='lead'>No changes made please contact site admin,
		    if you have not confirmed your email before</p></div>";
		}
	}
}
?>