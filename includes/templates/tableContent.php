    <?php
    $userid = $_SESSION['id'];
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
                if (isset($_POST['search'])) {
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
                }
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
                if (isset($_POST['search'])) {
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
                }
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
                if (isset($_POST['search'])) {
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
                }
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
                if (isset($_POST['search'])) {
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
                }
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
                if (isset($_POST['search'])) {
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
                }
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
                if (isset($_POST['search'])) {
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
                }
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