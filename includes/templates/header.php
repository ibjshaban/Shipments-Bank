<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>SHIPMENTS BANK</title>
		<meta name="description" content="Free Bootstrap 4 Theme by uicookies.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/myStyle.css">
    <link rel="stylesheet" href="assets/css/media.css">

        <!-- Import countries -->
        <script src="includes/library/country-region/assets/js/geodatasource-cr.min.js"></script>
        <link rel="stylesheet" href="includes/library/country-region/assets/css/geodatasource-countryflag.css">

        <!-- link to all languages po files -->
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/ar/LC_MESSAGES/ar.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/cs/LC_MESSAGES/cs.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/da/LC_MESSAGES/da.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/de/LC_MESSAGES/de.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/en/LC_MESSAGES/en.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/es/LC_MESSAGES/es.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/fr/LC_MESSAGES/fr.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/it/LC_MESSAGES/it.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/ja/LC_MESSAGES/ja.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/ko/LC_MESSAGES/ko.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/ms/LC_MESSAGES/ms.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/nl/LC_MESSAGES/nl.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/pt/LC_MESSAGES/pt.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/ru/LC_MESSAGES/ru.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/sv/LC_MESSAGES/sv.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/vi/LC_MESSAGES/vi.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/zh-cn/LC_MESSAGES/zh-cn.po" />
        <link rel="gettext" type="application/x-po" href="includes/library/country-region/languages/zh-tw/LC_MESSAGES/zh-tw.po" />

        <script type="text/javascript" src="includes/library/country-region/assets/js/Gettext.js"></script>

	</head>
	<body>
  
    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand font-italic logo" href="index.php"><span class="shipments">SHIPMENTS</span><span class="bank">BANK</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
           <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION['username'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="shipments.php"><i class="fa fa-fw fa-home"></i> View Shipments</a>
                        </li>
                        <li>
                            <a href="login/profile.php"><i class="fas fa-user-edit"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="login/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->