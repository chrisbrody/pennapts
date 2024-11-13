<?php

    require_once('inc/config.php');

    $pageID = "index";

    $pageTitle = "Amo Realty - PA Rental Listings";

    $pageDescription = "";

    $pageKeywords = "";

    require_once('inc/header-NEW.php');

?>



    <main class="<?php echo $pageID; ?>">

         <section id="hero">
            <div>
                <span>Pennsylvania's #1 Apartment Website<br> Listings Updated Daily!</span>
            </div>
         </section>

         <a href="<?php echo $webPath; ?>search.php?type=rentals" class="test">
            <div>
                <span>Click to Search<br> <em>Apartments</em></span>
            </div>
            <img src="<?php echo $imgPath; ?>home/glass.png" alt="Glass">
         </a>

        <section id="intro">

            <div>

                <p>Amo Realty has 1000s of apartment listings across Pennsylvania. Our skilled real estate agents help renters locate apartments, and landlords get properties rented. We cover the whole state, from Philadelphia to Pittsburgh.</p>

                <p>Search houses for rent, condos, townhouses, and apartment complexes.</p>

            </div>

        </section>

        <!--

        <section id="thumbnails">

            <a href="#" id="albany"><span>Albany</span></a>
            <a href="#" id="binghamton"><span>Binghamton</span></a>
            <a href="#" id="buffalo"><span>Buffalo</span></a>
            <a href="#" id="finger-lakes"><span>Finger Lakes</span></a>
            <a href="#" id="ithaca"><span>Ithaca</span></a>
            <a href="#" id="rochester"><span>Rochester</span></a>
            <a href="#" id="syracuse"><span>Syracuse</span></a>
            <a href="#" id="utica"><span>Utica</span></a>

        </section>

    -->

        <div class="glass">
            <section class="search-buttons">
                <a href="<?php echo $webPath; ?>landlords.php" id="landlords">
                    <span>Landlords,<br> <em>List Your Property</em></span>
                </a>            
            </section>
        </div>

    </main>

<?php require_once('inc/footer-NEW.php'); ?>