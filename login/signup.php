<?php
//@formatter:off
include_once "resource/Database.php";		// soule purpose of this is to make the connection to the database and if there is any error(exception) then it will show it.
// well we have done that in the index page also so, well if you have an error it will show at that time BUT NOTE : you have to add this everywhere you try to intereact to the database (any where you wanna use SQL statements)

// process the form
include_once "resource/utilities.php";

include_once 'resource/send-email-gmail.php';
include_once "partials/parseSignup.php";
?>

<!-- **********************************************   HTML PART   *******************************************************-->
<!-- <body> is already into the header file-->
<?php 	$page_title = 'Signup Form';
		include_once 'partials/headers.php'; 	?>

<link rel="stylesheet" href="../assets/css/select2.css">

<!-- Import countries -->
<script src="../includes/library/country-region/assets/js/geodatasource-cr.min.js"></script>
<link rel="stylesheet" href="../includes/library/country-region/assets/css/geodatasource-countryflag.css">

<!-- link to all languages po files -->
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/ar/LC_MESSAGES/ar.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/cs/LC_MESSAGES/cs.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/da/LC_MESSAGES/da.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/de/LC_MESSAGES/de.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/en/LC_MESSAGES/en.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/es/LC_MESSAGES/es.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/fr/LC_MESSAGES/fr.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/it/LC_MESSAGES/it.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/ja/LC_MESSAGES/ja.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/ko/LC_MESSAGES/ko.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/ms/LC_MESSAGES/ms.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/nl/LC_MESSAGES/nl.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/pt/LC_MESSAGES/pt.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/ru/LC_MESSAGES/ru.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/sv/LC_MESSAGES/sv.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/vi/LC_MESSAGES/vi.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/zh-cn/LC_MESSAGES/zh-cn.po" />
<link rel="gettext" type="application/x-po" href="../includes/library/country-region/languages/zh-tw/LC_MESSAGES/zh-tw.po" />

<script type="text/javascript" src="../includes/library/country-region/assets/js/Gettext.js"></script>
<!----  <body> is already into the header file  -- -->
<h2>Sign-up Form </h2><hr/>

<div class="container">
	<section class="col col-lg-7">
		<?php  if (isset($result) ) echo $result;  ?>	
		<?php if (!empty($form_errors) )  echo show_errors($form_errors);  ?>
	</section>
</div>
<!--                                      ---  all have id ending with 2  --                                 -->

<div class="container" >

	<section class="col col-lg-7">

		<form action="" method="post" >
			<div class="form-group">
    			<label for="emailField2">E-mail:</label>
    			<input type="text" class="form-control" name="email"  id="emailField2" placeholder="E-mail">
  			</div>
  			<div class="form-group">
    			<label for="usernameField2">Username:</label>
    			<input type="text" class="form-control" name="username"  id="usernameField2" placeholder="Username">
  			</div>
  			<div class="form-group">
                <label for="password2">Password:</label>
                <input type="password" class="form-control" name="password" id="password2" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <!--<input type="text" class="form-control gds-cr" name="country" id="country" placeholder="Country" country-data-region-id="gds-cr-one" data-language="en">-->
                <select class="form-control gds-cr" name="country" id="country" country-data-region-id="gds-cr-one" data-language="en">

                </select>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <select class="form-control" name="city" id="gds-cr-one">

                </select>
                <!--<input type="text" class="form-control" name="city" id="gds-cr-one" placeholder="City">-->
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone">
            </div>
            <div class="form-group">
            <label>Activity:</label>
            <div class="radio_group">
                <input type="radio" name="item_name" value="carshipping"> Car shipping<br>
                <input type="radio" name="item_name" value="generalcargo"> General Cargo<br>
                <input type="radio" name="item_name" value="homeshifting"> Home Shifting<br>
                <input type="radio" name="item_name" value="localdelivery"> Local Delivery <br>
                <input type="radio" name="item_name" value="heavyequipment"> Heavy Equipment<br>
                <input type="radio" name="item_name" value="importcar"> Import Car<br>
            </div>
            </div>
        <input type="hidden" name="token" value="<?php echo _token() ?>">
  			<button type="submit" class="btn btn-primary pull-right" name="signup_sbt">Sign up</button>
		</form>
    </section>
	<p><a href="index.php">Back</a></p>
</div>

<?php  include_once 'partials/footers.php';
//@formatter:on
?>
<script src="../assets/js/select2.min.js"></script>
<!----  </body> is already into the fppter file  -- -->
<!-- **********************************************   HTML PART   *******************************************************-->
