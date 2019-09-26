<?php
session_start();
if ( isset($_SESSION['username']) ){
    include 'includes/templates/header.php';
    include 'login/resource/Database.php';
}else{
    header('Location: index.php');
}
?>
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md col-x-12 decription">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Select what category you want!</h2>
            <p class="lead mb-5 probootstrap-animate">Here the explain how to use this website </p>
            <p class="probootstrap-animate">
              <a href="index.php" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3" style="width:100%;">See Tutorial Video</a> 
            </p>
          </div> 
          <div class="col-md probootstrap-animate">
            <form action="#searchContent" class="probootstrap-form" method="post">
              <div class="form-group">
                <div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single">From Country</label>

                      <label for="id_label_single" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control gds-cr" name="fromCountry" id="id_label_single" country-data-region-id="gds-cr-one" data-language="en">

                        </select>
                      </label>


                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single2">To Country</label>
                      <div class="probootstrap_select-wrap">
                        <label for="id_label_single2" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control gds-cr" name="toCountry" id="id_label_single2" country-data-region-id="gds-cr-two" data-language="en">

                        </select>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single">From City</label>

                      <label for="id_label_single" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control" name="fromCity" id="gds-cr-one" style="width: 100%;">

                        </select>
                      </label>


                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single2">To City</label>
                      <div class="probootstrap_select-wrap">
                        <label for="id_label_single2" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control" name="toCity" id="gds-cr-two" style="width: 100%;">

                        </select>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <!--<div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-departure">Departure</label>
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar"></span> 
                        <input type="text" id="probootstrap-date-departure" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-arrival">Arrival</label>
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar"></span> 
                        <input type="text" id="probootstrap-date-arrival" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>-->
                <!-- END row -->
                <!--<div class="row mb-5">
                    <div class="row">
                    <label for="round" class="col-md-6"><input type="checkbox" id="checkbox" name="direction">  Car Shipping</label>
                        <label for="Car" class="col-md-6"><input type="checkbox" id="checkbox" name="direction">  General Cargo</label>
                        <label for="General" class="col-md-6"><input type="checkbox" id="checkbox" name="direction">  Recovery Services</label>
                        <label for="Recovery" class="col-md-6"><input type="checkbox" id="checkbox" name="direction">  Home Shifting</label>
                        <label for="Home" class="col-md-6"><input type="checkbox" id="checkbox" name="direction">  Local Delivery</label>
                        <label for="Local" class="col-md-6"><input type="checkbox" id="checkbox" name="direction">  Heavy Equipment</label>
                        <label for="Heavy" class="col-md-6"><input type="checkbox" id="checkbox" name="direction"> mport Car</label>
                  </div>
                </div>-->
                <!-- END Checkboxes row -->
                <div class="row">
                  <div class="selectBtn">
                    <input type="submit" name="search" class="btn btn-primary btn-block">
                  </div>
                </div>
                <!-- END row -->
              </div>
            </form>
          </div>
        </div>
      </div>
    
    </section>
    <!-- END section -->
    

    <section class="probootstrap_section" id="searchContent">
        <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 text-center mb-5 probootstrap-animate">
                <h2 class="display-4 border-bottom probootstrap-section-heading">Current shipping requests</h2>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="carShipping-tab" data-toggle="tab" href="#carShipping" role="tab" aria-controls="home" aria-selected="true">Car Shipping</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="generalCargo-tab" data-toggle="tab" href="#generalCargo" role="tab" aria-controls="profile" aria-selected="false">General Cargo</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="homeShifting-tab" data-toggle="tab" href="#homeShifting" role="tab" aria-controls="contact" aria-selected="false">Home Shifting</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="localDelivery-tab" data-toggle="tab" href="#localDelivery" role="tab" aria-controls="contact" aria-selected="false">local Delivery</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="heavyEquipment-tab" data-toggle="tab" href="#heavyEquipment" role="tab" aria-controls="contact" aria-selected="false">Heavy Equipment</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="importCar-tab" data-toggle="tab" href="#importCar" role="tab" aria-controls="contact" aria-selected="false">Import Car</a>
                      </li>

                </ul>
                  <div class="tab-content" id="myTabContent"></div>
                <div class="tab-content" id="myTabContent">
                    <?php
                    $userid = $_SESSION['id'];
                    $useridsql = $db->query("SELECT country FROM shipmintsbank.users WHERE id = '".$userid."'");
                    $rowid = $useridsql->fetch(PDO::FETCH_ASSOC);
                    $basicCountry = $rowid['country'];

                    $userSubs = $db->query("SELECT item_name, valid_to FROM shipmintsbank.user_subscriptions WHERE user_id = '".$userid."'");
                    $row = $userSubs->fetch(PDO::FETCH_ASSOC);
                    $item_name = $row['item_name'];
                    $valid_to = $row['valid_to'];
                    $dateNow = date("Y-m-d H:i:s");
                    ?>
                  <div class="tab-pane fade show active" id="carShipping" role="tabpanel" aria-labelledby="carShipping-tab">
        <table class="table">
			<thead>
				<tr>
					<th scope="col">Choose your vehicle</th>
					<th scope="col">From Country</th>
					<th scope="col">From City</th>
					<th scope="col">To Country</th>
					<th scope="col">To City</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Phone</th>
				</tr>
			</thead>
			<tbody>
            <?php
            if ($item_name !== 'carshipping') {
                echo "<p> You are not subscribe here! </p>";
            }elseif ($dateNow > $valid_to){
                echo "<p>Your subscription has expired</p>";
            }else {
                // Search button feature
                /*if (isset($_POST['search'])) {
                    $fromCountry = $_POST['fromCountry'];
                    $fromCity = $_POST['fromCity'];
                    $toCountry = $_POST['toCountry'];
                    $toCity = $_POST['toCity'];
                    $sql = "
SELECT * FROM carshipping_en WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
UNION
SELECT * FROM carshipping WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
";
                } else {
                    $sql = "SELECT * FROM carshipping WHERE id > 1 
                    UNION 
                    SELECT * FROM carshipping_en WHERE id > 1
                    ";
                }*/
                $sql = "
SELECT * FROM carshipping WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
UNION 
SELECT * FROM carshipping_en WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
";
//                $sql = "SELECT * FROM carshipping WHERE id > 1 UNION SELECT * FROM carshipping_en WHERE id > 1";
                $sqlStm = $idb->prepare($sql);
                $sqlStm->execute();

                while ($data = $sqlStm->fetch()) {
                    ?>
                    <tr>
                        <td> <?php echo $data['vehicle'] ?> </td>
                        <td> <?php echo $data['fromCountry'] ?> </td>
                        <td> <?php echo $data['fromCity'] ?> </td>
                        <td> <?php echo $data['toCountry'] ?> </td>
                        <td> <?php echo $data['toCity'] ?> </td>
                        <td> <?php echo $data['name'] ?> </td>
                        <td> <?php echo $data['email'] ?> </td>
                        <td> <?php echo $data['phone'] ?> </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
                    </div>
                  <div class="tab-pane fade" id="generalCargo" role="tabpanel" aria-labelledby="generalCargo-tab">
                      <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Number of packages</th>
                                    <th scope="col">Total weight</th>
                                    <th scope="col">Total Width</th>
                                    <th scope="col">Total Length</th>
                                    <th scope="col">Total Hight</th>
                                    <th scope="col">From Country</th>
                                    <th scope="col">From City</th>
                                    <th scope="col">To Country</th>
                                    <th scope="col">To City</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($item_name !== 'generalcargo') {
                                echo "<p> You are not subscribe here! </p>";
                            }elseif ($dateNow > $valid_to){
                                echo "<p>Your subscription has expired</p>";
                            }else {
                                // Search button feature
                                /*if (isset($_POST['search'])) {
                                    $fromCountry = $_POST['fromCountry'];
                                    $fromCity = $_POST['fromCity'];
                                    $toCountry = $_POST['toCountry'];
                                    $toCity = $_POST['toCity'];
                                    $sql = "
SELECT * FROM generalcargo_en WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
UNION
SELECT * FROM generalcargo WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
";
                                } else {
                                    $sql = "SELECT * FROM generalcargo WHERE id > 1 
                    UNION 
                    SELECT * FROM generalcargo_en WHERE id > 1
                    ";
                                }*/
                                $sql = "
SELECT * FROM generalcargo WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
UNION 
SELECT * FROM generalcargo_en WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
";
//                            $sql = "SELECT * FROM generalcargo WHERE id > 1 UNION SELECT * FROM generalcargo_en WHERE id > 1";
                                foreach ($idb->query($sql) as $data) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $data['pkgNum'] ?> </td>
                                        <td> <?php echo $data['weight'] ?> </td>
                                        <td> <?php echo $data['width'] ?> </td>
                                        <td> <?php echo $data['length'] ?> </td>
                                        <td> <?php echo $data['hight'] ?> </td>
                                        <td> <?php echo $data['fromCountry'] ?> </td>
                                        <td> <?php echo $data['fromCity'] ?> </td>
                                        <td> <?php echo $data['toCountry'] ?> </td>
                                        <td> <?php echo $data['toCity'] ?> </td>
                                        <td> <?php echo $data['name'] ?> </td>
                                        <td> <?php echo $data['email'] ?> </td>
                                        <td> <?php echo $data['phone'] ?> </td>
                                        <td> <?php echo $data['date'] ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                      </table>
                    </div>
                  <div class="tab-pane fade" id="homeShifting" role="tabpanel" aria-labelledby="homeShifting-tab">
        <table class="table">
			<thead>
				<tr>
					<th scope="col">Bedrooms Number</th>
					<th scope="col">Items to be shifted</th>
					<th scope="col">From Country</th>
					<th scope="col">From City</th>
					<th scope="col">From Address</th>
					<th scope="col">To Country</th>
					<th scope="col">To City</th>
					<th scope="col">To Address</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
					<th scope="col">Date</th>
				</tr>
			</thead>
			<tbody>
            <?php

            if ($item_name !== 'homeshifting') {
                echo "<p> You are not subscribe here! </p>";
            }elseif ($dateNow > $valid_to){
                echo "<p>Your subscription has expired</p>";
            }else {
                /*if (isset($_POST['search'])) {
                    $fromCountry = $_POST['fromCountry'];
                    $fromCity = $_POST['fromCity'];
                    $toCountry = $_POST['toCountry'];
                    $toCity = $_POST['toCity'];
                    $sql = "
SELECT * FROM homeshifting_en WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
UNION
SELECT * FROM homeshifting WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
";
                } else {
                    $sql = "SELECT * FROM homeshifting WHERE id > 1
                    UNION
                    SELECT * FROM homeshifting_en WHERE id > 1
                    ";
                }*/
                    $sql = "
SELECT * FROM homeshifting WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
UNION 
SELECT * FROM homeshifting_en WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
";
                foreach ($idb->query($sql) as $data) {
                    ?>
                    <tr>
                        <td> <?php echo $data['roomNum'] ?> </td>
                        <td> <?php echo $data['elemntTrans'] ?> </td>
                        <td> <?php echo $data['fromCountry'] ?> </td>
                        <td> <?php echo $data['fromCity'] ?> </td>
                        <td> <?php echo $data['fromAddress'] ?> </td>
                        <td> <?php echo $data['toCountry'] ?> </td>
                        <td> <?php echo $data['toCity'] ?> </td>
                        <td> <?php echo $data['toAddress'] ?> </td>
                        <td> <?php echo $data['name'] ?> </td>
                        <td> <?php echo $data['email'] ?> </td>
                        <td> <?php echo $data['phone'] ?> </td>
                        <td> <?php echo $data['date'] ?> </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
                    </div>

                    <div class="tab-pane fade show" id="localDelivery" role="tabpanel" aria-labelledby="localDelivery-tab">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">From Country</th>
                                <th scope="col">From City</th>
                                <th scope="col">From Address</th>
                                <th scope="col">To City</th>
                                <th scope="col">To Address</th>
                                <th scope="col">Urjent</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($item_name !== 'localdelivery') {
                                echo "<p> You are not subscribe here! </p>";
                            }elseif ($dateNow > $valid_to){
                                echo "<p>Your subscription has expired</p>";
                            }else {
                                // Feature Button search
                                /*if (isset($_POST['search'])) {
                                    $fromCountry = $_POST['fromCountry'];
                                    $fromCity = $_POST['fromCity'];
                                    $toCountry = $_POST['toCountry'];
                                    $toCity = $_POST['toCity'];
                                    $sql = "
SELECT * FROM localdelivery_en WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
UNION
SELECT * FROM localdelivery WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
";
                                } else {
                                    $sql = "SELECT * FROM localdelivery WHERE id > 1 
                    UNION 
                    SELECT * FROM localdelivery_en WHERE id > 1
                    ";
                                }*/
                                $sql = "
SELECT * FROM localdelivery WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
UNION 
SELECT * FROM localdelivery_en WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
";
//                            $sql = "SELECT * FROM localdelivery WHERE id > 1 UNION SELECT * FROM localdelivery_en WHERE id > 1";
                                foreach ($idb->query($sql) as $data) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $data['fromCountry'] ?> </td>
                                        <td> <?php echo $data['fromCity'] ?> </td>
                                        <td> <?php echo $data['fromAddress'] ?> </td>
                                        <td> <?php echo $data['toCity'] ?> </td>
                                        <td> <?php echo $data['toAddress'] ?> </td>
                                        <td> <?php echo $data['urjent'] ?> </td>
                                        <td> <?php echo $data['name'] ?> </td>
                                        <td> <?php echo $data['email'] ?> </td>
                                        <td> <?php echo $data['phone'] ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade show" id="heavyEquipment" role="tabpanel" aria-labelledby="heavyEquipment-tab">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">From Country</th>
                                <th scope="col">From City</th>
                                <th scope="col">From Address</th>
                                <th scope="col">To Country </th>
                                <th scope="col">To City</th>
                                <th scope="col">To Address</th>
                                <th scope="col">Vehicle Brand</th>
                                <th scope="col">Manufacturing year</th>
                                <th scope="col">Total weight</th>
                                <th scope="col">Length</th>
                                <th scope="col">Widht</th>
                                <th scope="col">Hight </th>
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($item_name !== 'heavyequipment') {
                                echo "<p> You are not subscribe here! </p>";
                            }elseif ($dateNow > $valid_to){
                                echo "<p>Your subscription has expired</p>";
                            }else {
                                // Button Search feature
                                /*if (isset($_POST['search'])) {
                                    $fromCountry = $_POST['fromCountry'];
                                    $fromCity = $_POST['fromCity'];
                                    $toCountry = $_POST['toCountry'];
                                    $toCity = $_POST['toCity'];
                                    $sql = "
SELECT * FROM heavyequipment_en WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
UNION
SELECT * FROM heavyequipment WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
";
                                } else {
                                    $sql = "SELECT * FROM heavyequipment WHERE id > 1
                    UNION
                    SELECT * FROM heavyequipment_en WHERE id > 1
                    ";
                                }*/
                                $sql = "
SELECT * FROM heavyequipment WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
UNION 
SELECT * FROM heavyequipment_en WHERE id > 1 AND fromCountry = '" . $basicCountry . "'
";

//                            $sql = "SELECT * FROM heavyequipment WHERE id > 1 UNION SELECT * FROM heavyequipment_en WHERE id > 1";
                                foreach ($idb->query($sql) as $data) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $data['fromCountry'] ?> </td>
                                        <td> <?php echo $data['fromCity'] ?> </td>
                                        <td> <?php echo $data['fromAddress'] ?> </td>
                                        <td> <?php echo $data['toCountry'] ?> </td>
                                        <td> <?php echo $data['toCity'] ?> </td>
                                        <td> <?php echo $data['toAddress'] ?> </td>
                                        <td> <?php echo $data['vechileType'] ?> </td>
                                        <td> <?php echo $data['dom'] ?> </td>
                                        <td> <?php echo $data['totalWghit'] ?> </td>
                                        <td> <?php echo $data['length'] ?> </td>
                                        <td> <?php echo $data['width'] ?> </td>
                                        <td> <?php echo $data['hight'] ?> </td>
                                        <td> <?php echo $data['date'] ?> </td>
                                        <td> <?php echo $data['name'] ?> </td>
                                        <td> <?php echo $data['email'] ?> </td>
                                        <td> <?php echo $data['phone'] ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade show" id="importCar" role="tabpanel" aria-labelledby="importCar-tab">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Car</th>
                                <th scope="col">Cars Number</th>
                                <th scope="col">Zip Code in UAE</th>
                                <th scope="col">Shipping to the countries:</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>



                            <?php
                            if ($item_name !== 'importcar') {
                                echo "<p> You are not subscribe here! </p>";
                            }elseif ($dateNow > $valid_to){
                                echo "<p>Your subscription has expired</p>";
                            }else {
                                // Search feature
                                /*if (isset($_POST['search'])) {
                                    $fromCountry = $_POST['fromCountry'];
                                    $fromCity = $_POST['fromCity'];
                                    $toCountry = $_POST['toCountry'];
                                    $toCity = $_POST['toCity'];
                                    $sql = "
SELECT * FROM importcar_en WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
UNION
SELECT * FROM importcar WHERE id > 1 AND fromCountry = '" . $fromCountry . "' OR toCountry = '" . $toCountry . "' OR fromCity ='" . $fromCity . "' OR toCity = '" . $toCity . "'
";
                                } else {
                                    $sql = "SELECT * FROM importcar WHERE id > 1 
                    UNION 
                    SELECT * FROM importcar_en WHERE id > 1
                    ";
                                }*/
                                $sql = "
SELECT * FROM importcar WHERE id > 1 AND toCountry = '".$basicCountry."'
UNION 
SELECT * FROM importcar_en WHERE id > 1 AND toCountry = '".$basicCountry."'
";
                                /*$sql = "SELECT * FROM importcar_en WHERE id > 1
                                        UNION
                                        SELECT * FROM importcar WHERE id > 1";*/
                                $sqlStm = $idb->prepare($sql);
                                $sqlStm->execute();

                                while ($data = $sqlStm->fetch()) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $data['car'] ?> </td>
                                        <td> <?php echo $data['carsNum'] ?> </td>
                                        <td> <?php echo $data['zipCode'] ?> </td>
                                        <td> <?php echo $data['toCountry'] ?> </td>
                                        <td> <?php echo $data['date'] ?> </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
            </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
             <h2 class="display-4 border-bottom probootstrap-section-heading">Why we should use SHIPMINTS BANK</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</em></p>
              <p class="probootstrap-author">
                <a href="https://uicookies.com/" target="_blank">
                  <img src="assets/images/person_1.jpg" alt="Free Template by uicookies.com" class="rounded-circle">
                  <span class="probootstrap-name">James Smith</span>
                  <span class="probootstrap-title">Chief Executive Officer</span>
                </a>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->


    <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Top Places Around The World</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="assets/images/img_1.jpg" alt="Free Template by uicookies.com" class="img-fluid">
              <div class="probootstrap-text">
                <h3>Buena</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="assets/images/img_2.jpg" alt="Free Template by uicookies.com" class="img-fluid">
              <h3>Road</h3>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="assets/images/img_3.jpg" alt="Free Template by uicookies.com" class="img-fluid">
              <h3>Australia</h3>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="assets/images/img_4.jpg" alt="Free Template by uicookies.com" class="img-fluid">
              <h3>Japan</h3>
            </a>
          </div>
        </div>
      </div>
    </section>
    
  

    <section class="probootstrap_section" id="section-services">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Our Services</h2>
          </div>
        </div>
      </div>
    </section>
        

    


    <footer class="probootstrap_section probootstrap-border-top">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="https://free-template.co" target="_blank">Home</a></li>
              <li><a href="https://free-template.co" target="_blank">About</a></li>
              <li><a href="https://free-template.co" target="_blank">Services</a></li>
              <li><a href="https://free-template.co" target="_blank">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="https://free-template.co" target="_blank">Home</a></li>
              <li><a href="https://free-template.co" target="_blank">About</a></li>
              <li><a href="https://free-template.co" target="_blank">Services</a></li>
              <li><a href="https://free-template.co" target="_blank">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="https://free-template.co" target="_blank">Home</a></li>
              <li><a href="https://free-template.co" target="_blank">About</a></li>
              <li><a href="https://free-template.co" target="_blank">Services</a></li>
              <li><a href="https://free-template.co" target="_blank">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="https://free-template.co" target="_blank">Home</a></li>
              <li><a href="https://free-template.co" target="_blank">About</a></li>
              <li><a href="https://free-template.co" target="_blank">Services</a></li>
              <li><a href="https://free-template.co" target="_blank">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">&copy; 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://uicookies.com/" target="_blank">uiCookies</a><small> (Don't remove credit link on this footer. See <a href="https://uicookies.com/license/">license</a>)</small></p>
            <p class="probootstrap_font-14">Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>