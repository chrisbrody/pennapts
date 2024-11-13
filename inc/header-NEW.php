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

</head>

<body>

    <header>

        <a href="<?php echo $webPath; ?>" class="logo"><img src="<?php echo $imgPath; ?>home/logo-new.png" alt="Pennsylvania Apartments"></a>

        <nav>
            <div>
                <a href="<?php echo $webPath; ?>search.php?type=sales">Sales</a>
                <a href="<?php echo $webPath; ?>search.php?type=rentals">Rentals</a>
                <a href="<?php echo $webPath; ?>blog.php">Blog</a>
                <a href="<?php echo $webPath; ?>contact.php">Contact</a>
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