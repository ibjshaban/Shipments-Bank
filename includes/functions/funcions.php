<?php
/*
* checkDateTime function for check subscription date
 */
function checkDateTime($dateTime){
global $subscr_date_from;
global $subscr_date_to;
if(date("Y-m-d H:i:s", strtotime($dateTime)) >= $subscr_date_from && date("Y-m-d H:i:s", strtotime($dateTime)) < $subscr_date_to)
{
return true;
}else{
return false;
    }
}

/*if(checkDateTime("2019-9-07 08:04:10")){ //# Execute code example
echo "success";
}else{
echo "faild";
}*/

/*
 * Auto send emails function using jquery and ajax
 */

function alertEmail($dateNow){
//if(isset($_POST["query"]))
//    {
    global $db;
    global $mail;
    // `emailalert` filed in database for check if already sent email or not: 0->not send, 1->send before 5 days, 2->send after end.
    $publicQuery = "
  SELECT * FROM shipmintsbank.user_subscriptions WHERE `emailalert` = 0 
 ";
    // Check date value if < from now date or < 5 days from now date
    $valid = $db->query($publicQuery);
    foreach ($valid as $row){
        $result = $row['valid_to']."<br>\n";
        $emailAlert = $row['emailalert'];

        if ($result < $dateNow && $emailAlert < 2){
            //echo 'result less from  today:';
            //echo $result;

                $user_id = $row['user_id']."<br />\n";
                //echo $user_id."<br>";
                $query2 = "
    SELECT * FROM shipmintsbank.users
    WHERE `id` = '".$user_id."';
";
                $date2 = $db->query($query2);
                foreach ($date2 as $row2){
                    $email = $row2['email'];
                    $username = $row2['username'];
                    //echo $email."<br>";
                    $mail_body = '<html>
											<body style="background-color:#CCCCCC; color:#000; font-family: Arial, Helvetica, sans-serif;
											                line-height:1.8em;">
												<h2>Subscription Alert </h2>
												<p>Dear '.$username.'<br><br>We would like to let you know that your subscription is over, So please visit our site and subscribe again </p>
												<p><a href="https://shipmintsbank.irselha/login"> Subscribe from here..</a></p>
												<p><strong>&copy;2019 Shipments Bank System </strong></p>
											</body>
									</html>';

                    /*$mail->addAddress($email, $_SESSION['username']); #  $email is necessary BUT $username is optional..
                    $mail->Subject = "message from SHIPMENTS BANK SYSTEM.";
                    $mail->Body = $mail_body;
                    $mail->Send();*/
                    $headers = 'From: Shipments Bank kldrapqwb8dz@n3plcpnl0096.prod.ams3.secureserver.net' . "\r\n" ;
                    $headers .='Reply-To: '. $email . "\r\n" ;
                    $headers .='X-Mailer: PHP/' . phpversion();
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                    mail($email, ' SHIBMENTS BANK SYSTEM', $mail_body, $headers);

                    // Update email alert value.
                    $sqlAlertUpdate = "UPDATE shipmintsbank.user_subscriptions SET `emailalert` = 2 WHERE `user_id` =:user_id";
                    $alertUpdate = $db->prepare($sqlAlertUpdate);
                    $alertUpdate->execute(array(':user_id'=> $user_id));
                }
        }elseif ($result < date("Y-m-d H:i:s", strtotime($dateNow.'-5 days')) && $emailAlert < 1){
            //echo 'result less 5 days:';
            echo $result;

                $user_id = $row['user_id']."<br />\n";
                //echo $user_id;
                $query2 = "
    SELECT * FROM shipmintsbank.users
    WHERE `id` = '".$user_id."';
";
                $date2 = $db->query($query2);
                foreach ($date2 as $row2){
                    $email = $row2['email'];
                    $username = $row2['username'];
                    //echo $email;
                    $mail_body = '<html>
											<body style="background-color:#CCCCCC; color:#000; font-family: Arial, Helvetica, sans-serif;
											                line-height:1.8em;">
												<h2>Subscription Alert </h2>
												<p>Dear '.$username.'<br><br>We would like to let you know that your subscription is over after 5 days, So please visit our site and subscribe again </p>
												<p><a href="https://shipmintsbank.irselha/login"> Subscribe from here..</a></p>
												<p><strong>&copy;2019 Shipments Bank System </strong></p>
											</body>
									</html>';

                    /*$mail->addAddress($email, $_SESSION['username']); #  $email is necessary BUT $username is optional..
                    $mail->Subject = "message from SHIPMENTS BANK SYSTEM.";
                    $mail->Body = $mail_body;
                    $mail->Send();*/
                    $headers = 'From: Shipments Bank kldrapqwb8dz@n3plcpnl0096.prod.ams3.secureserver.net' . "\r\n" ;
                    $headers .='Reply-To: '. $email . "\r\n" ;
                    $headers .='X-Mailer: PHP/' . phpversion();
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                    mail($email, ' SHIBMENTS BANK SYSTEM', $mail_body, $headers);

                    // Update email alert value
                    $sqlAlertUpdate = "UPDATE shipmintsbank.user_subscriptions SET `emailalert` = 1 WHERE `user_id` =:user_id";
                    $alertUpdate = $db->prepare($sqlAlertUpdate);
                    $alertUpdate->execute(array(':user_id'=> $user_id));
                }
        }
    }

//}
}
