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
