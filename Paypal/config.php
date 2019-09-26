<?php
/*
 * PayPal and database configuration
 */

// PayPal configuration
define('PAYPAL_ID', 'ibrahim_facilitator@gmail.com'); //Business Email
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE

define('PAYPAL_RETURN_URL', 'http://localhost/projects/SHIPMENTSBANK/paypal/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/projects/SHIPMENTSBANK/paypal/cancel.php');
define('PAYPAL_NOTIFY_URL', 'http://localhost/projects/SHIPMENTSBANK/paypal/ipn.php');
define('PAYPAL_CURRENCY', 'USD');

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shipmintsbank');

// Change not required
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");