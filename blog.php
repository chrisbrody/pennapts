<?php
    require_once('inc/config.php');

    $pageID = "blog";

    $pageTitle = "Amo Realty - Pennsylvania Apartments Blog Posts";

    $pageDescription = "";

    $pageKeywords = "";

    require_once('inc/header-NEW.php');
?>
<style>
    h1.banner {
        font-family: "Open Sans", sans-serif;
        padding: 30px 3%;
        background: black;
        color: white;
        text-align: center;
    }
    .wrapper {
        padding: 0 3%;
    }
    .blog .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-column-gap: 40px;
        grid-row-gap: 40px;
        margin: 40px 0;
    }
    .post {
        background: #eee;
        padding: 20px;
        border-radius: 5px;
    }
    .post img {
        display: block;
        width: 100%;
        margin: 0 0 20px;
        border: 1px solid black;
        height: 175px;
    }
    .post a {
        text-decoration: none;
        font-size: 24px;
        font-family: "Ubuntu", sans-serif;
        color: blue;
        line-height: 1.3;
    }
    .post p {
        font-size: 16px;
        font-family: "Open Sans", sans-serif;
        margin-top: 10px;
        line-height: 1.5;
    }
    .post p a {
        font-size: 14px;
        font-family: "Open Sans", sans-serif;
        color: black;
        font-style: italic;
        color: blue;
        line-height: 1.5;
    }

    @media screen and (max-width: 900px) {
        .blog .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media screen and (max-width: 675px) {
        .blog .grid {
            grid-template-columns: 1fr;
        }
        .post img {
            height: 275px;
        }
    }
</style>
<main class="blog">
    <h1 class="banner">Pennsylvania Real Estate News &amp; Articles</h1>

    <div class="wrapper">

        <div class="grid">

            <div class="post">
                <img src="<?php echo $imgPath; ?>articles/philadelphia-luxury-apartments-that-allow-pets.png" alt="Philadelphia Luxury Apartments that Allow Pets">
                <a href="<?php echo $articlePath;?>philadelphia-luxury-apartments-that-allow-pets.php">Philadelphia Luxury Apartments that Allow Pets</a>
                <p>Discover Philadelphia’s top luxury apartments, offering everything from eco-friendly designs and city-center convenience to pet-friendly spaces and exclusive amenities like fitness clubs, pools, and concierge services. Find your ideal space with stylish features and prime locations...<a href="<?php echo $articlePath;?>philadelphia-luxury-apartments-that-allow-pets.php">read more</a>.</p>
            </div>

            <div class="post">
                <img src="<?php echo $imgPath; ?>articles/review-of-glasshouse-pittsburgh.png" alt="Review of Glasshouse Pittsburgh">
                <a href="<?php echo $articlePath;?>review-of-glasshouse-pittsburgh.php">Review of Glasshouse Pittsburgh</a>
                <p>The Glasshouse in Pittsburgh offers luxury living on the South Shore, combining stunning river views, refined amenities, and a sense of community. With floor plans from studios to two-bedroom units, residents enjoy gourmet kitchens, scenic courtyards, a fitness center, zero-edge pool, pet spa, and a welcoming atmosphere suited for families and professionals alike...<a href="<?php echo $articlePath;?>review-of-glasshouse-pittsburgh.php">read more</a>.</p>
            </div>

            <div class="post">
                <img src="<?php echo $imgPath; ?>articles/review-of-the-district-in-pittsburgh.png" alt="Review of The District in Pittsburgh">
                <a href="<?php echo $articlePath;?>review-of-the-district-in-pittsburgh.php">Review of The District in Pittsburgh</a>
                <p>The District in Pittsburgh's Strip District offers luxury studio to three-bedroom apartments, ranging from 478 to 1,340 square feet. Built in 2022, this riverfront complex blends modern design with upscale amenities, providing a work-life balanced lifestyle. Each unit includes a high-end kitchen, in-unit laundry, and select units feature balconies...<a href="<?php echo $articlePath;?>review-of-the-district-in-pittsburgh.php">read more</a>.</p>
            </div>

            <div class="post">
                <img src="<?php echo $imgPath; ?>articles/review-of-100-park-at-wyomissing-square-in-reading-pa.png" alt="Review of 100 park at Wyomissing Square in Reading Pa">
                <a href="<?php echo $articlePath;?>review-of-100-park-at-wyomissing-square-in-reading-pa.php">Review of 100 park at Wyomissing Square in Reading Pa</a>
                <p>100 Park at Wyomissing Square offers luxury mid-rise living in Reading, PA, with options for everyone, including pets. This elegant complex features a range of floor plans, private garages, and upscale amenities like a resort-style pool, fitness center, clubhouse, and on-site dining. Spacious units include high-end kitchens, nine-foot ceilings, and in-unit laundry...<a href="<?php echo $articlePath;?>review-of-100-park-at-wyomissing-square-in-reading-pa.php">read more</a>.</p>
            </div>

        </div> <!-- end grid -->

    </div>
</main>
<?php require_once('inc/footer-NEW.php'); ?>
