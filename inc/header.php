<?php require_once('config.php'); ?>

<!doctype html>

<html lang="en">

<head>

	<title><?php echo $pageTitle; ?></title>

	<meta charset="utf-8" />
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Standard favicon -->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <!-- For browsers that support PNG favicons -->
    <link rel="icon" href="./images/favicon-16x16.png" sizes="16x16">
    <link rel="icon" href="./images/favicon-32x32.png" sizes="32x32">
    <!-- For Android devices -->
    <link rel="icon" href="./images/android-chrome-192x192.png" sizes="192x192" type="image/png">
    <link rel="icon" href="./images/android-chrome-512x512.png" sizes="512x512" type="image/png">
    <!-- For Apple devices -->
    <link rel="apple-touch-icon" href="./images/apple-touch-icon.png">

	<link rel="stylesheet" media="all" href="<?php echo $webPath; ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo $webPath; ?>css/font-awesome.css" />
	<link rel='stylesheet' media="all" href='https://fonts.googleapis.com/css?family=Open+Sans:800italic,400,800|Roboto+Condensed' />



</head>


<body>

<div id="overlay"></div>
	<p id="popup">
		<i class="fa fa-close"></i>
		<span></span>
	</p>

	<header>

		<div class="header-wrap">

			<a href="<?php echo $webPath; ?>"><img src="<?php echo $webPath; ?>images/logo.png" alt="Pennsylvania Apartments" /></a>

		</div>

	</header>

	<div class="header-wrap">

		<h1><?php echo $h1Tag; ?></h1>

	</div>
