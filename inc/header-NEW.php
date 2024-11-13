<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <title><?php echo $pageTitle; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway&display=swap" rel="stylesheet">
    <link href="<?php echo $cssPath; ?>style-new.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo $imgPath; ?>icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $imgPath; ?>icons/favicon.ico" type="image/x-icon">

</head>

<body>

    <header>

        <a href="<?php echo $webPath; ?>" class="logo"><img src="<?php echo $imgPath; ?>home/logo-new.png" alt="Pennsylvania Apartments"></a>

        <nav>
            <div>
                <a href="<?php echo $webPath; ?>search?type=sales">Sales</a>
                <a href="<?php echo $webPath; ?>search?type=rentals">Rentals</a>
                <a href="<?php echo $webPath; ?>blog">Blog</a>
                <a href="<?php echo $webPath; ?>contact">Contact</a>
            </div>

            <div>
                <ul class="social-icons">
                    <li>
                        <a href="https://www.facebook.com/amorealty">
                            <img src="<?php echo $imgPath; ?>home/facebook.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/amo-realty/">
                            <img src="<?php echo $imgPath; ?>home/linkedin.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/amorealty/">
                            <img src="<?php echo $imgPath; ?>home/instagram.png">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>