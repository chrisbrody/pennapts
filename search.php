<?php 

$pageID = $_GET['type'];

if ($pageID != 'sales' && $pageID != 'rentals') {

	$pageID = 'sales';

};

$pageID = ucwords($pageID);
$pageTitle = "Pennsylvania Apartments - Search " . $pageID;
$h1Tag = "Free Access to the Largest Real Estate Database in Pennsylvania";

require_once 'inc/header.php'; 

?>

	<section class="main" id="search-page">

        <div id="status"></div>

		<div class="wrap">

		    <p>Fill in the boxes below and the system will narrow the list to properties that match your search criteria. <br />Email us or call 617-247-1933 to view any listings. Listings are updated daily!</p>

			<form id="search">

                <?php

                echo '<input type="hidden" name="source" value="' . $pageID . '">';

                if (isset($_GET['ref'])) {
                    echo '<input type="hidden" name="ref" value="' . $_GET['ref'] . '">';
                };

                ?>
				<input type="hidden" name="page" value="https://pennsylvaniaapartments.com/search" >
				<input type="hidden" name="form-type" value= "<?php echo $pageID; ?>">
                <!-- Honeypot field for bots -->
                <div style="display: none;">
                    <label for="website">If you are human, leave this field blank.</label>
                    <input type="text" id="website" name="website" />
                </div>

				<div class="c4">

					<fieldset>

						<h2>Contact</h2>

						<div class="c5">
							<label for="first-name">First Name <span>* is required</span></label>
							<input type="text" id="first-name" name="first-name" class="req" />
						</div>

						<div class="c5">
							<label for="lastname">Last Name <span>* is required</span></label>
							<input type="text" id="lastname" name="last-name" class="req" />
						</div>

						<div class="c5">
							<label for="email">Email <span>* is required</span></label>
							<input type="email" id="email" name="email" class="req" />
						</div>

						<div class="c5">
							<label for="phone">Phone <span>* is required</span></label>
							<input type="text" id="phone" name="phone" class="req" />
						</div>

						<div class="c5">
							<label>Timeframe</label>
							<select name="timeframe">
								<option value="" selected>I need to move...</option>
								<option value="ASAP">ASAP</option>
								<option value="Within 30 days">Within 30 days</option>
								<option value="Within 60 days">Within 60 days</option>
								<option value="Within 90 days">Within 90 days</option>
								<option value="Within 1 year">Within 1 year</option>
								<option value="Next year">Next year</option>
								<option value="Just browsing">Just browsing</option>
							</select>
						</div>

						<div class="c5">
							<label>Relocating</label>
							<select name="relocating">
								<option value="" selected>Are you relocating?</option>
								<option value="I live in PA">No, I currently live in PA</option>
								<option value="I'm out of state">Yes, I'm from out of state</option>
								<option value="I'm out of country">Yes, I'm from out of country</option>
							</select>
						</div>						

						<label for="message">Message</label>
						<textarea id="message" name="message"></textarea>

					</fieldset>

				</div><!--

			 --><div class="c6">

					<fieldset>

						<h2>Advanced</h2>

						<div class="c5">
							<label>Price Range</label>
							<div class="c5">
								<?php

								if ($pageID == 'Sales') {

								echo '<select name="min-price">';
									echo '<option value="$0" selected>No min</option>';
									echo '<option value="$25,000">$25,000</option>';
									echo '<option value="$50,000">$50,000</option>';
									echo '<option value="$75,000">$75,000</option>';
									echo '<option value="$100,000">$100,000</option>';
									echo '<option value="$125,000">$125,000</option>';
									echo '<option value="$150,000">$150,000</option>';
									echo '<option value="$175,000">$175,000</option>';
									echo '<option value="$200,000">$200,000</option>';
									echo '<option value="$225,000">$225,000</option>';
									echo '<option value="$250,000">$250,000</option>';
									echo '<option value="$275,000">$275,000</option>';
									echo '<option value="$300,000">$300,000</option>';
									echo '<option value="$350,000">$350,000</option>';
									echo '<option value="$400,000">$400,000</option>';
									echo '<option value="$450,000">$450,000</option>';
									echo '<option value="$500,000">$500,000</option>';
									echo '<option value="$550,000">$550,000</option>';
									echo '<option value="$600,000">$600,000</option>';
									echo '<option value="$650,000">$650,000</option>';
									echo '<option value="$700,000">$700,000</option>';
									echo '<option value="$750,000">$750,000</option>';
									echo '<option value="$800,000">$800,000</option>';
									echo '<option value="$900,000">$900,000</option>';
									echo '<option value="$1,000,000+">$1,000,000+</option>';
								echo '</select>';

								} else if ($pageID == 'Rentals') {

									echo '<select name="min-price">';
									echo '<option value="$0" selected>No min</option>';
									echo '<option value="$1,000">$1,000</option>';
									echo '<option value="$1,250">$1,250</option>';
									echo '<option value="$1,500">$1,500</option>';
									echo '<option value="$1,750">$1,750</option>';
									echo '<option value="$2,000">$2,000</option>';
									echo '<option value="$2,250">$2,250</option>';
									echo '<option value="$2,500">$2,500</option>';
									echo '<option value="$2,750">$2,750</option>';
									echo '<option value="$3,000">$3,000</option>';
									echo '<option value="$3,250">$3,250</option>';
									echo '<option value="$3,500">$3,500</option>';
									echo '<option value="$3,750">$3,750</option>';
									echo '<option value="$4,000">$4,000</option>';
									echo '<option value="$4,250">$4,250</option>';
									echo '<option value="$4,500">$4,500</option>';
									echo '<option value="$4,750">$4,750</option>';
									echo '<option value="$5,000">$5,000</option>';
									echo '<option value="$5,250">$5,250</option>';
									echo '<option value="$5,500">$5,500</option>';
									echo '<option value="$5,750">$5,750</option>';
									echo '<option value="$6,000">$6,000</option>';
									echo '<option value="$6,250">$6,250</option>';
									echo '<option value="$6,500">$6,500</option>';
									echo '<option value="$6,750">$6,750</option>';
									echo '<option value="$7,000">$7,000</option>';
									echo '<option value="$7,250">$7,250</option>';
									echo '<option value="$7,500">$7,500</option>';
									echo '<option value="$7,750">$7,750</option>';
									echo '<option value="$8,000">$8,000</option>';
									echo '<option value="$8,250">$8,250</option>';
									echo '<option value="$8,500">$8,500</option>';
									echo '<option value="$8,750">$8,750</option>';
									echo '<option value="$9,000">$9,000</option>';
									echo '<option value="$9,250">$9,250</option>';
									echo '<option value="$9,500">$9,500</option>';
									echo '<option value="$9,750">$9,750</option>';
									echo '<option value="$10,000">$10,000</option>';
								echo '</select>';

								} else {

									// do nothing

								};

							?>

							</div>

							<div class="c5">
							 	<?php

								if ($pageID == 'Sales') {

								echo '<select name="max-price">';
									echo '<option value="$0" selected>No maximum</option>';
									echo '<option value="$25,000">$25,000</option>';
									echo '<option value="$50,000">$50,000</option>';
									echo '<option value="$75,000">$75,000</option>';
									echo '<option value="$100,000">$100,000</option>';
									echo '<option value="$125,000">$125,000</option>';
									echo '<option value="$150,000">$150,000</option>';
									echo '<option value="$175,000">$175,000</option>';
									echo '<option value="$200,000">$200,000</option>';
									echo '<option value="$225,000">$225,000</option>';
									echo '<option value="$250,000">$250,000</option>';
									echo '<option value="$275,000">$275,000</option>';
									echo '<option value="$300,000">$300,000</option>';
									echo '<option value="$350,000">$350,000</option>';
									echo '<option value="$400,000">$400,000</option>';
									echo '<option value="$450,000">$450,000</option>';
									echo '<option value="$500,000">$500,000</option>';
									echo '<option value="$550,000">$550,000</option>';
									echo '<option value="$600,000">$600,000</option>';
									echo '<option value="$650,000">$650,000</option>';
									echo '<option value="$700,000">$700,000</option>';
									echo '<option value="$750,000">$750,000</option>';
									echo '<option value="$800,000">$800,000</option>';
									echo '<option value="$900,000">$900,000</option>';
									echo '<option value="$1,000,000+">$1,000,000+</option>';
								echo '</select>';

								} else if ($pageID == 'Rentals') {

									echo '<select name="max-price">';
									echo '<option value="$0" selected>No max</option>';
									echo '<option value="$1,000">$1,000</option>';
									echo '<option value="$1,250">$1,250</option>';
									echo '<option value="$1,500">$1,500</option>';
									echo '<option value="$1,750">$1,750</option>';
									echo '<option value="$2,000">$2,000</option>';
									echo '<option value="$2,250">$2,250</option>';
									echo '<option value="$2,500">$2,500</option>';
									echo '<option value="$2,750">$2,750</option>';
									echo '<option value="$3,000">$3,000</option>';
									echo '<option value="$3,250">$3,250</option>';
									echo '<option value="$3,500">$3,500</option>';
									echo '<option value="$3,750">$3,750</option>';
									echo '<option value="$4,000">$4,000</option>';
									echo '<option value="$4,250">$4,250</option>';
									echo '<option value="$4,500">$4,500</option>';
									echo '<option value="$4,750">$4,750</option>';
									echo '<option value="$5,000">$5,000</option>';
									echo '<option value="$5,250">$5,250</option>';
									echo '<option value="$5,500">$5,500</option>';
									echo '<option value="$5,750">$5,750</option>';
									echo '<option value="$6,000">$6,000</option>';
									echo '<option value="$6,250">$6,250</option>';
									echo '<option value="$6,500">$6,500</option>';
									echo '<option value="$6,750">$6,750</option>';
									echo '<option value="$7,000">$7,000</option>';
									echo '<option value="$7,250">$7,250</option>';
									echo '<option value="$7,500">$7,500</option>';
									echo '<option value="$7,750">$7,750</option>';
									echo '<option value="$8,000">$8,000</option>';
									echo '<option value="$8,250">$8,250</option>';
									echo '<option value="$8,500">$8,500</option>';
									echo '<option value="$8,750">$8,750</option>';
									echo '<option value="$9,000">$9,000</option>';
									echo '<option value="$9,250">$9,250</option>';
									echo '<option value="$9,500">$9,500</option>';
									echo '<option value="$9,750">$9,750</option>';
									echo '<option value="$10,000">$10,000</option>';
									echo '<option value="$15,000">$15,000</option>';
									echo '<option value="$20,000">$20,000</option>';
									echo '<option value="$25,000">$25,000</option>';
									echo '<option value="$30,000">$30,000</option>';
								echo '</select>';

								} else {

									// do nothing

								};

							?>
							</div>
						</div>

					 	<div class="c5">
							<div class="c5">
								<label>Bedrooms</label>
								<select name="beds">
									<option value="0" selected>0+</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
									<option value="4">4+</option>
									<option value="5+">5+</option>
								</select>
							</div>

							<div class="c5">
							<label>Bathrooms</label>
								<select name="baths">
									<option value="1" selected>1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
									<option value="4">4+</option>
									<option value="5+">5+</option>
								</select>
							</div>
						</div>					

						<div class="c5">
							<label>Minimum Living Area (sq ft)</label>
							<select name="living-area">
								<option value="250" selected>250</option>
								<option value="500">500</option>
								<option value="750">750</option>
								<option value="1000">1000</option>
								<option value="1250">1250</option>
								<option value="1500">1500</option>
								<option value="1750">1750</option>
								<option value="2000">2000</option>
								<option value="2250">2250</option>
								<option value="2500">2500</option>
								<option value="2750">2750</option>
								<option value="3000">3000</option>
								<option value="3500">3500</option>
								<option value="4000">4000</option>
								<option value="4500">4500</option>
								<option value="5000">5000</option>
								<option value="5500">5500</option>
								<option value="6000">6000</option>
								<option value="6500">6500</option>
								<option value="7000">7000</option>
								<option value="7500">7500</option>
								<option value="8000">8000</option>
								<option value="8500">8500</option>
								<option value="9000">9000</option>
								<option value="9500">9500</option>
								<option value="10000">10000+</option>
							</select>
						</div>

						<div class="c5">
							<label>Property Type</label>

							<?php

								if ($pageID == 'Sales') {

									echo '<select name="property">';
									echo '<option value="Rentals">Rentals</option>';
									echo '<option value="Rentals & Sales">Rentals & Sales</option>';
									echo '<option selected value="Sales">Sales</option>';
									echo '</select>';

								} else if ($pageID == 'Rentals') {

									echo '<select name="property">';
									echo '<option selected value="Rentals">Rentals</option>';
									echo '<option value="Rentals & Sales">Rentals & Sales</option>';
									echo '<option value="Sales">Sales</option>';
									echo '</select>';

								} else {

									// do nothing

								};

							?>
						</div>

					</fieldset>

				<fieldset id="locations">

					<h2>Locations <span>* is required</span></h2>

					<span id="selectall">Select All</span>
					<span id="divide">/</span>
					<span id="deselectall">Deselect All</span>

					<select id="multi" multiple="multiple" name="locations[]">
						<option value="Philadelphia (All)" style="text-transform: uppercase;">Philadelphia (All)</option>
						<option value="Bella Vista">&mdash;&nbsp; Bella Vista</option>
						<option value="Center City">&mdash;&nbsp;  Center City</option>
						<option value="Chestnut Hill">&mdash;&nbsp;  Chestnut Hill</option>
						<option value="Chinatown">&mdash;&nbsp;  Chinatown</option>
						<option value="Fairmount">&mdash;&nbsp;  Fairmount</option>
						<option value="Fishtown">&mdash;&nbsp;  Fishtown</option>
						<option value="Germantown">&mdash;&nbsp;  Germantown</option>
						<option value="Kensington">&mdash;&nbsp;  Kensington</option>
						<option value="Manayunk">&mdash;&nbsp;  Manayunk</option>
						<option value="Midtown Village">&mdash;&nbsp;  Midtown Village</option>
						<option value="North Philadelphia">&mdash;&nbsp;  North Philadelphia</option>
						<option value="Northeast Philadelphia">&mdash;&nbsp;  Northeast Philadelphia</option>
						<option value="Northern Liberties">&mdash;&nbsp;  Northern Liberties</option>
						<option value="Old City">&mdash;&nbsp;  Old City</option>
						<option value="Penn's Landing">&mdash;&nbsp;  Penn's Landing</option>
						<option value="Pennsport">&mdash;&nbsp;  Pennsport</option>
						<option value="Rittenhouse Square">&mdash;&nbsp;  Rittenhouse Square</option>
						<option value="Society Hill">&mdash;&nbsp;  Society Hill</option>
						<option value="South Philadelphia">&mdash;&nbsp;  South Philadelphia</option>
						<option value="University City">&mdash;&nbsp;  University City</option>
						<option value="West Philadelphia">&mdash;&nbsp;  West Philadelphia</option>
						<option value="Pittsburgh" style="text-transform: uppercase;">Pittsburgh (All)</option>
						<option value="Allentown ">&mdash;&nbsp;  Allentown </option>
						<option value="Beechview">&mdash;&nbsp;  Beechview</option>
						<option value="Bloomfield">&mdash;&nbsp;  Bloomfield</option>
						<option value="Brighton Heights">&mdash;&nbsp;  Brighton Heights</option>
						<option value="Brookline">&mdash;&nbsp;  Brookline</option>
						<option value="Downtown">&mdash;&nbsp;  Downtown</option>
						<option value="East Liberty">&mdash;&nbsp;  East Liberty</option>
						<option value="Mount Washington">&mdash;&nbsp;  Mount Washington</option>
						<option value="North Oakland">&mdash;&nbsp;  North Oakland</option>
						<option value="North Shore">&mdash;&nbsp;  North Shore</option>
						<option value="Point Breeze">&mdash;&nbsp;  Point Breeze</option>
						<option value="Shadyside">&mdash;&nbsp;  Shadyside</option>
						<option value="Strip District ">&mdash;&nbsp;  Strip District </option>
						<option value="South Oakland">&mdash;&nbsp;  South Oakland</option>
						<option value="Southside Flats">&mdash;&nbsp;  Southside Flats</option>
						<option value="South Shore">&mdash;&nbsp;  South Shore</option>
						<option value="Squirrel Hill North">&mdash;&nbsp;  Squirrel Hill North</option>
						<option value="Squirrel Hill South">&mdash;&nbsp;  Squirrel Hill South</option>
						<option value="All Cities/Towns" style="text-transform: uppercase;">All Cities/Towns</option>
						<option value="Aaronsburg">&mdash;&nbsp; Aaronsburg</option>
						<option value="Abbottstown">&mdash;&nbsp; Abbottstown</option>
						<option value="Adamsburg">&mdash;&nbsp; Adamsburg</option>
						<option value="Adamstown">&mdash;&nbsp; Adamstown</option>
						<option value="Addison">&mdash;&nbsp; Addison</option>
						<option value="Akron">&mdash;&nbsp; Akron</option>
						<option value="Albion">&mdash;&nbsp; Albion</option>
						<option value="Alburtis">&mdash;&nbsp; Alburtis</option>
						<option value="Alexandria">&mdash;&nbsp; Alexandria</option>
						<option value="Aliquippa">&mdash;&nbsp; Aliquippa</option>
						<option value="Allenport">&mdash;&nbsp; Allenport</option>
						<option value="Allentown">&mdash;&nbsp; Allentown</option>
						<option value="Altoona">&mdash;&nbsp; Altoona</option>
						<option value="Ambler">&mdash;&nbsp; Ambler</option>
						<option value="Ambridge">&mdash;&nbsp; Ambridge</option>
						<option value="Amity">&mdash;&nbsp; Amity</option>
						<option value="Annville">&mdash;&nbsp; Annville</option>
						<option value="Apollo">&mdash;&nbsp; Apollo</option>
						<option value="Archbald">&mdash;&nbsp; Archbald</option>
						<option value="Ardmore">&mdash;&nbsp; Ardmore</option>
						<option value="Arendtsville">&mdash;&nbsp; Arendtsville</option>
						<option value="Aristes">&mdash;&nbsp; Aristes</option>
						<option value="Arona">&mdash;&nbsp; Arona</option>
						<option value="Ashland">&mdash;&nbsp; Ashland</option>
						<option value="Ashville">&mdash;&nbsp; Ashville</option>
						<option value="Atglen">&mdash;&nbsp; Atglen</option>
						<option value="Auburn">&mdash;&nbsp; Auburn</option>
						<option value="Audubon">&mdash;&nbsp; Audubon</option>
						<option value="Austin">&mdash;&nbsp; Austin</option>
						<option value="Avis">&mdash;&nbsp; Avis</option>
						<option value="Avondale">&mdash;&nbsp; Avondale</option>
						<option value="Avonmore">&mdash;&nbsp; Avonmore</option>
						<option value="Baden">&mdash;&nbsp; Baden</option>
						<option value="Bally">&mdash;&nbsp; Bally</option>
						<option value="Bangor">&mdash;&nbsp; Bangor</option>
						<option value="Bath">&mdash;&nbsp; Bath</option>
						<option value="Beallsville">&mdash;&nbsp; Beallsville</option>
						<option value="Bear Creek">&mdash;&nbsp; Bear Creek</option>
						<option value="Beaver Falls">&mdash;&nbsp; Beaver Falls</option>
						<option value="Beaver Meadows">&mdash;&nbsp; Beaver Meadows</option>
						<option value="Beaver Springs">&mdash;&nbsp; Beaver Springs</option>
						<option value="Beaver">&mdash;&nbsp; Beaver</option>
						<option value="Beaverdale">&mdash;&nbsp; Beaverdale</option>
						<option value="Beavertown">&mdash;&nbsp; Beavertown</option>
						<option value="Bechtelsville">&mdash;&nbsp; Bechtelsville</option>
						<option value="Beech Creek">&mdash;&nbsp; Beech Creek</option>
						<option value="Belle Vernon">&mdash;&nbsp; Belle Vernon</option>
						<option value="Bellefonte">&mdash;&nbsp; Bellefonte</option>
						<option value="Belleville">&mdash;&nbsp; Belleville</option>
						<option value="Bellwood">&mdash;&nbsp; Bellwood</option>
						<option value="Bendersville">&mdash;&nbsp; Bendersville</option>
						<option value="Bentleyville">&mdash;&nbsp; Bentleyville</option>
						<option value="Benton">&mdash;&nbsp; Benton</option>
						<option value="Berlin">&mdash;&nbsp; Berlin</option>
						<option value="Bernville">&mdash;&nbsp; Bernville</option>
						<option value="Berrysburg">&mdash;&nbsp; Berrysburg</option>
						<option value="Berwick">&mdash;&nbsp; Berwick</option>
						<option value="Bessemer">&mdash;&nbsp; Bessemer</option>
						<option value="Bethel Park">&mdash;&nbsp; Bethel Park</option>
						<option value="Bethlehem">&mdash;&nbsp; Bethlehem</option>
						<option value="Big Run">&mdash;&nbsp; Big Run</option>
						<option value="Biglerville">&mdash;&nbsp; Biglerville</option>
						<option value="Birdsboro">&mdash;&nbsp; Birdsboro</option>
						<option value="Black Lick">&mdash;&nbsp; Black Lick</option>
						<option value="Blain">&mdash;&nbsp; Blain</option>
						<option value="Blairsville">&mdash;&nbsp; Blairsville</option>
						<option value="Blanchard">&mdash;&nbsp; Blanchard</option>
						<option value="Blooming Glen">&mdash;&nbsp; Blooming Glen</option>
						<option value="Bloomsburg">&mdash;&nbsp; Bloomsburg</option>
						<option value="Blossburg">&mdash;&nbsp; Blossburg</option>
						<option value="Blue Bell">&mdash;&nbsp; Blue Bell</option>
						<option value="Boalsburg">&mdash;&nbsp; Boalsburg</option>
						<option value="Boiling Springs">&mdash;&nbsp; Boiling Springs</option>
						<option value="Bolivar">&mdash;&nbsp; Bolivar</option>
						<option value="Boswell">&mdash;&nbsp; Boswell</option>
						<option value="Bowmanstown">&mdash;&nbsp; Bowmanstown</option>
						<option value="Boyertown">&mdash;&nbsp; Boyertown</option>
						<option value="Brackenridge">&mdash;&nbsp; Brackenridge</option>
						<option value="Braddock">&mdash;&nbsp; Braddock</option>
						<option value="Bradford">&mdash;&nbsp; Bradford</option>
						<option value="Bradfordwoods">&mdash;&nbsp; Bradfordwoods</option>
						<option value="Branchdale">&mdash;&nbsp; Branchdale</option>
						<option value="Bridgeport">&mdash;&nbsp; Bridgeport</option>
						<option value="Brisbin">&mdash;&nbsp; Brisbin</option>
						<option value="Bristol">&mdash;&nbsp; Bristol</option>
						<option value="Broad Top">&mdash;&nbsp; Broad Top</option>
						<option value="Brockway">&mdash;&nbsp; Brockway</option>
						<option value="Brodheadsville">&mdash;&nbsp; Brodheadsville</option>
						<option value="Brookhaven">&mdash;&nbsp; Brookhaven</option>
						<option value="Brookville">&mdash;&nbsp; Brookville</option>
						<option value="Broomall">&mdash;&nbsp; Broomall</option>
						<option value="Brownstown">&mdash;&nbsp; Brownstown</option>
						<option value="Brownsville">&mdash;&nbsp; Brownsville</option>
						<option value="Bruin">&mdash;&nbsp; Bruin</option>
						<option value="Bryn Athyn">&mdash;&nbsp; Bryn Athyn</option>
						<option value="Bryn Mawr">&mdash;&nbsp; Bryn Mawr</option>
						<option value="Burgettstown">&mdash;&nbsp; Burgettstown</option>
						<option value="Burnham">&mdash;&nbsp; Burnham</option>
						<option value="Burnside">&mdash;&nbsp; Burnside</option>
						<option value="Butler">&mdash;&nbsp; Butler</option>
						<option value="California">&mdash;&nbsp; California</option>
						<option value="Callensburg">&mdash;&nbsp; Callensburg</option>
						<option value="Callery">&mdash;&nbsp; Callery</option>
						<option value="Calumet">&mdash;&nbsp; Calumet</option>
						<option value="Cambridge Springs">&mdash;&nbsp; Cambridge Springs</option>
						<option value="Camp Hill">&mdash;&nbsp; Camp Hill</option>
						<option value="Campbelltown">&mdash;&nbsp; Campbelltown</option>
						<option value="Canonsburg">&mdash;&nbsp; Canonsburg</option>
						<option value="Canton">&mdash;&nbsp; Canton</option>
						<option value="Carbondale">&mdash;&nbsp; Carbondale</option>
						<option value="Carlisle">&mdash;&nbsp; Carlisle</option>
						<option value="Carmichaels">&mdash;&nbsp; Carmichaels</option>
						<option value="Carnegie">&mdash;&nbsp; Carnegie</option>
						<option value="Carrolltown">&mdash;&nbsp; Carrolltown</option>
						<option value="Cashtown">&mdash;&nbsp; Cashtown</option>
						<option value="Catasauqua">&mdash;&nbsp; Catasauqua</option>
						<option value="Catawissa">&mdash;&nbsp; Catawissa</option>
						<option value="Cecil">&mdash;&nbsp; Cecil</option>
						<option value="Centerport">&mdash;&nbsp; Centerport</option>
						<option value="Centerville">&mdash;&nbsp; Centerville</option>
						<option value="Central City">&mdash;&nbsp; Central City</option>
						<option value="Centre Hall">&mdash;&nbsp; Centre Hall</option>
						<option value="Chalfont">&mdash;&nbsp; Chalfont</option>
						<option value="Chambersburg">&mdash;&nbsp; Chambersburg</option>
						<option value="Charleroi">&mdash;&nbsp; Charleroi</option>
						<option value="Cherry Tree">&mdash;&nbsp; Cherry Tree</option>
						<option value="Chester Heights">&mdash;&nbsp; Chester Heights</option>
						<option value="Chester">&mdash;&nbsp; Chester</option>
						<option value="Chicora">&mdash;&nbsp; Chicora</option>
						<option value="Christiana">&mdash;&nbsp; Christiana</option>
						<option value="Clairton">&mdash;&nbsp; Clairton</option>
						<option value="Clarence">&mdash;&nbsp; Clarence</option>
						<option value="Clarendon">&mdash;&nbsp; Clarendon</option>
						<option value="Clarion">&mdash;&nbsp; Clarion</option>
						<option value="Clark">&mdash;&nbsp; Clark</option>
						<option value="Clarks Summit">&mdash;&nbsp; Clarks Summit</option>
						<option value="Clarksville">&mdash;&nbsp; Clarksville</option>
						<option value="Claysburg">&mdash;&nbsp; Claysburg</option>
						<option value="Claysville">&mdash;&nbsp; Claysville</option>
						<option value="Clearfield">&mdash;&nbsp; Clearfield</option>
						<option value="Clifton Heights">&mdash;&nbsp; Clifton Heights</option>
						<option value="Clintonville">&mdash;&nbsp; Clintonville</option>
						<option value="Clymer">&mdash;&nbsp; Clymer</option>
						<option value="Coaldale">&mdash;&nbsp; Coaldale</option>
						<option value="Coalport">&mdash;&nbsp; Coalport</option>
						<option value="Coatesville">&mdash;&nbsp; Coatesville</option>
						<option value="Cochranton">&mdash;&nbsp; Cochranton</option>
						<option value="Cokeburg">&mdash;&nbsp; Cokeburg</option>
						<option value="Collegeville">&mdash;&nbsp; Collegeville</option>
						<option value="Columbia">&mdash;&nbsp; Columbia</option>
						<option value="Colver">&mdash;&nbsp; Colver</option>
						<option value="Commodore">&mdash;&nbsp; Commodore</option>
						<option value="Confluence">&mdash;&nbsp; Confluence</option>
						<option value="Conneaut Lake">&mdash;&nbsp; Conneaut Lake</option>
						<option value="Conneautville">&mdash;&nbsp; Conneautville</option>
						<option value="Connellsville">&mdash;&nbsp; Connellsville</option>
						<option value="Connoquenessing">&mdash;&nbsp; Connoquenessing</option>
						<option value="Conshohocken">&mdash;&nbsp; Conshohocken</option>
						<option value="Conway">&mdash;&nbsp; Conway</option>
						<option value="Conyngham">&mdash;&nbsp; Conyngham</option>
						<option value="Coopersburg">&mdash;&nbsp; Coopersburg</option>
						<option value="Cooperstown">&mdash;&nbsp; Cooperstown</option>
						<option value="Coplay">&mdash;&nbsp; Coplay</option>
						<option value="Coraopolis">&mdash;&nbsp; Coraopolis</option>
						<option value="Cornwall">&mdash;&nbsp; Cornwall</option>
						<option value="Corry">&mdash;&nbsp; Corry</option>
						<option value="Corsica">&mdash;&nbsp; Corsica</option>
						<option value="Coudersport">&mdash;&nbsp; Coudersport</option>
						<option value="Crabtree">&mdash;&nbsp; Crabtree</option>
						<option value="Cranesville">&mdash;&nbsp; Cranesville</option>
						<option value="Creekside">&mdash;&nbsp; Creekside</option>
						<option value="Cresson">&mdash;&nbsp; Cresson</option>
						<option value="Cressona">&mdash;&nbsp; Cressona</option>
						<option value="Croydon">&mdash;&nbsp; Croydon</option>
						<option value="Curtisville">&mdash;&nbsp; Curtisville</option>
						<option value="Curwensville">&mdash;&nbsp; Curwensville</option>
						<option value="Daisytown">&mdash;&nbsp; Daisytown</option>
						<option value="Dallas">&mdash;&nbsp; Dallas</option>
						<option value="Dallastown">&mdash;&nbsp; Dallastown</option>
						<option value="Dalton">&mdash;&nbsp; Dalton</option>
						<option value="Danville">&mdash;&nbsp; Danville</option>
						<option value="Darby">&mdash;&nbsp; Darby</option>
						<option value="Darlington">&mdash;&nbsp; Darlington</option>
						<option value="Dauphin">&mdash;&nbsp; Dauphin</option>
						<option value="Davidsville">&mdash;&nbsp; Davidsville</option>
						<option value="Dawson">&mdash;&nbsp; Dawson</option>
						<option value="Dayton">&mdash;&nbsp; Dayton</option>
						<option value="Delano">&mdash;&nbsp; Delano</option>
						<option value="Delaware Water Gap">&mdash;&nbsp; Delaware Water Gap</option>
						<option value="Delmont">&mdash;&nbsp; Delmont</option>
						<option value="Delta">&mdash;&nbsp; Delta</option>
						<option value="Denver">&mdash;&nbsp; Denver</option>
						<option value="Derry">&mdash;&nbsp; Derry</option>
						<option value="Dickson City">&mdash;&nbsp; Dickson City</option>
						<option value="Dillsburg">&mdash;&nbsp; Dillsburg</option>
						<option value="Donora">&mdash;&nbsp; Donora</option>
						<option value="Dover">&mdash;&nbsp; Dover</option>
						<option value="Doylestown">&mdash;&nbsp; Doylestown</option>
						<option value="Dravosburg">&mdash;&nbsp; Dravosburg</option>
						<option value="Drexel Hill">&mdash;&nbsp; Drexel Hill</option>
						<option value="Du Bois">&mdash;&nbsp; Du Bois</option>
						<option value="Dublin">&mdash;&nbsp; Dublin</option>
						<option value="Dunbar">&mdash;&nbsp; Dunbar</option>
						<option value="Duncannon">&mdash;&nbsp; Duncannon</option>
						<option value="Duncansville">&mdash;&nbsp; Duncansville</option>
						<option value="Dunlevy">&mdash;&nbsp; Dunlevy</option>
						<option value="Duquesne">&mdash;&nbsp; Duquesne</option>
						<option value="Duryea">&mdash;&nbsp; Duryea</option>
						<option value="Dushore">&mdash;&nbsp; Dushore</option>
						<option value="Eagleville">&mdash;&nbsp; Eagleville</option>
						<option value="East Berlin">&mdash;&nbsp; East Berlin</option>
						<option value="East Brady">&mdash;&nbsp; East Brady</option>
						<option value="East Butler">&mdash;&nbsp; East Butler</option>
						<option value="East Greenville">&mdash;&nbsp; East Greenville</option>
						<option value="East Mc Keesport">&mdash;&nbsp; East Mc Keesport</option>
						<option value="East Petersburg">&mdash;&nbsp; East Petersburg</option>
						<option value="East Pittsburgh">&mdash;&nbsp; East Pittsburgh</option>
						<option value="East Prospect">&mdash;&nbsp; East Prospect</option>
						<option value="East Stroudsburg">&mdash;&nbsp; East Stroudsburg</option>
						<option value="East Vandergrift">&mdash;&nbsp; East Vandergrift</option>
						<option value="Easton">&mdash;&nbsp; Easton</option>
						<option value="Eau Claire">&mdash;&nbsp; Eau Claire</option>
						<option value="Ebensburg">&mdash;&nbsp; Ebensburg</option>
						<option value="Edinboro">&mdash;&nbsp; Edinboro</option>
						<option value="Elco">&mdash;&nbsp; Elco</option>
						<option value="Elderton">&mdash;&nbsp; Elderton</option>
						<option value="Eldred">&mdash;&nbsp; Eldred</option>
						<option value="Elgin">&mdash;&nbsp; Elgin</option>
						<option value="Elizabeth">&mdash;&nbsp; Elizabeth</option>
						<option value="Elizabethtown">&mdash;&nbsp; Elizabethtown</option>
						<option value="Elizabethville">&mdash;&nbsp; Elizabethville</option>
						<option value="Elkland">&mdash;&nbsp; Elkland</option>
						<option value="Ellsworth">&mdash;&nbsp; Ellsworth</option>
						<option value="Ellwood City">&mdash;&nbsp; Ellwood City</option>
						<option value="Elysburg">&mdash;&nbsp; Elysburg</option>
						<option value="Emigsville">&mdash;&nbsp; Emigsville</option>
						<option value="Emlenton">&mdash;&nbsp; Emlenton</option>
						<option value="Emmaus">&mdash;&nbsp; Emmaus</option>
						<option value="Emporium">&mdash;&nbsp; Emporium</option>
						<option value="Enola">&mdash;&nbsp; Enola</option>
						<option value="Enon Valley">&mdash;&nbsp; Enon Valley</option>
						<option value="Ephrata">&mdash;&nbsp; Ephrata</option>
						<option value="Erie">&mdash;&nbsp; Erie</option>
						<option value="Ernest">&mdash;&nbsp; Ernest</option>
						<option value="Evans City">&mdash;&nbsp; Evans City</option>
						<option value="Everett">&mdash;&nbsp; Everett</option>
						<option value="Everson">&mdash;&nbsp; Everson</option>
						<option value="Export">&mdash;&nbsp; Export</option>
						<option value="Exton">&mdash;&nbsp; Exton</option>
						<option value="Factoryville">&mdash;&nbsp; Factoryville</option>
						<option value="Fairchance">&mdash;&nbsp; Fairchance</option>
						<option value="Fairfield">&mdash;&nbsp; Fairfield</option>
						<option value="Fairless Hills">&mdash;&nbsp; Fairless Hills</option>
						<option value="Fairview">&mdash;&nbsp; Fairview</option>
						<option value="Falls Creek">&mdash;&nbsp; Falls Creek</option>
						<option value="Farrell">&mdash;&nbsp; Farrell</option>
						<option value="Fawn Grove">&mdash;&nbsp; Fawn Grove</option>
						<option value="Fayette City">&mdash;&nbsp; Fayette City</option>
						<option value="Fayetteville">&mdash;&nbsp; Fayetteville</option>
						<option value="Feasterville Trevose">&mdash;&nbsp; Feasterville Trevose</option>
						<option value="Felton">&mdash;&nbsp; Felton</option>
						<option value="Ferndale">&mdash;&nbsp; Ferndale</option>
						<option value="Finleyville">&mdash;&nbsp; Finleyville</option>
						<option value="Fleetwood">&mdash;&nbsp; Fleetwood</option>
						<option value="Flourtown">&mdash;&nbsp; Flourtown</option>
						<option value="Folcroft">&mdash;&nbsp; Folcroft</option>
						<option value="Folsom">&mdash;&nbsp; Folsom</option>
						<option value="Ford City">&mdash;&nbsp; Ford City</option>
						<option value="Ford Cliff">&mdash;&nbsp; Ford Cliff</option>
						<option value="Forest City">&mdash;&nbsp; Forest City</option>
						<option value="Forest Grove">&mdash;&nbsp; Forest Grove</option>
						<option value="Forestville">&mdash;&nbsp; Forestville</option>
						<option value="Fort Washington">&mdash;&nbsp; Fort Washington</option>
						<option value="Foxburg">&mdash;&nbsp; Foxburg</option>
						<option value="Frackville">&mdash;&nbsp; Frackville</option>
						<option value="Franklin">&mdash;&nbsp; Franklin</option>
						<option value="Franklintown">&mdash;&nbsp; Franklintown</option>
						<option value="Fredericksburg">&mdash;&nbsp; Fredericksburg</option>
						<option value="Fredericktown">&mdash;&nbsp; Fredericktown</option>
						<option value="Fredonia">&mdash;&nbsp; Fredonia</option>
						<option value="Freeburg">&mdash;&nbsp; Freeburg</option>
						<option value="Freedom">&mdash;&nbsp; Freedom</option>
						<option value="Freeland">&mdash;&nbsp; Freeland</option>
						<option value="Freeport">&mdash;&nbsp; Freeport</option>
						<option value="Friedens">&mdash;&nbsp; Friedens</option>
						<option value="Friedensburg">&mdash;&nbsp; Friedensburg</option>
						<option value="Galeton">&mdash;&nbsp; Galeton</option>
						<option value="Gallitzin">&mdash;&nbsp; Gallitzin</option>
						<option value="Gap">&mdash;&nbsp; Gap</option>
						<option value="Garrett">&mdash;&nbsp; Garrett</option>
						<option value="Gastonville">&mdash;&nbsp; Gastonville</option>
						<option value="Gettysburg">&mdash;&nbsp; Gettysburg</option>
						<option value="Gilberton">&mdash;&nbsp; Gilberton</option>
						<option value="Gilbertsville">&mdash;&nbsp; Gilbertsville</option>
						<option value="Girard">&mdash;&nbsp; Girard</option>
						<option value="Glassport">&mdash;&nbsp; Glassport</option>
						<option value="Glen Campbell">&mdash;&nbsp; Glen Campbell</option>
						<option value="Glen Lyon">&mdash;&nbsp; Glen Lyon</option>
						<option value="Glen Rock">&mdash;&nbsp; Glen Rock</option>
						<option value="Glenolden">&mdash;&nbsp; Glenolden</option>
						<option value="Glenside">&mdash;&nbsp; Glenside</option>
						<option value="Gordon">&mdash;&nbsp; Gordon</option>
						<option value="Grampian">&mdash;&nbsp; Grampian</option>
						<option value="Grapeville">&mdash;&nbsp; Grapeville</option>
						<option value="Gratz">&mdash;&nbsp; Gratz</option>
						<option value="Great Bend">&mdash;&nbsp; Great Bend</option>
						<option value="Green Lane">&mdash;&nbsp; Green Lane</option>
						<option value="Greensburg">&mdash;&nbsp; Greensburg</option>
						<option value="Greenville">&mdash;&nbsp; Greenville</option>
						<option value="Grindstone">&mdash;&nbsp; Grindstone</option>
						<option value="Grove City">&mdash;&nbsp; Grove City</option>
						<option value="Halifax">&mdash;&nbsp; Halifax</option>
						<option value="Hallstead">&mdash;&nbsp; Hallstead</option>
						<option value="Hamburg">&mdash;&nbsp; Hamburg</option>
						<option value="Hanover">&mdash;&nbsp; Hanover</option>
						<option value="Harleysville">&mdash;&nbsp; Harleysville</option>
						<option value="Harmonsburg">&mdash;&nbsp; Harmonsburg</option>
						<option value="Harmony">&mdash;&nbsp; Harmony</option>
						<option value="Harrisburg">&mdash;&nbsp; Harrisburg</option>
						<option value="Harrisville">&mdash;&nbsp; Harrisville</option>
						<option value="Hartleton">&mdash;&nbsp; Hartleton</option>
						<option value="Hartstown">&mdash;&nbsp; Hartstown</option>
						<option value="Harveys Lake">&mdash;&nbsp; Harveys Lake</option>
						<option value="Hastings">&mdash;&nbsp; Hastings</option>
						<option value="Hatboro">&mdash;&nbsp; Hatboro</option>
						<option value="Hatfield">&mdash;&nbsp; Hatfield</option>
						<option value="Hawley">&mdash;&nbsp; Hawley</option>
						<option value="Hawthorn">&mdash;&nbsp; Hawthorn</option>
						<option value="Hazleton">&mdash;&nbsp; Hazleton</option>
						<option value="Heilwood">&mdash;&nbsp; Heilwood</option>
						<option value="Hellertown">&mdash;&nbsp; Hellertown</option>
						<option value="Herminie">&mdash;&nbsp; Herminie</option>
						<option value="Hermitage">&mdash;&nbsp; Hermitage</option>
						<option value="Herndon">&mdash;&nbsp; Herndon</option>
						<option value="Hershey">&mdash;&nbsp; Hershey</option>
						<option value="Highspire">&mdash;&nbsp; Highspire</option>
						<option value="Hiller">&mdash;&nbsp; Hiller</option>
						<option value="Hollidaysburg">&mdash;&nbsp; Hollidaysburg</option>
						<option value="Homer City">&mdash;&nbsp; Homer City</option>
						<option value="Homestead">&mdash;&nbsp; Homestead</option>
						<option value="Honesdale">&mdash;&nbsp; Honesdale</option>
						<option value="Honey Brook">&mdash;&nbsp; Honey Brook</option>
						<option value="Hooversville">&mdash;&nbsp; Hooversville</option>
						<option value="Hop Bottom">&mdash;&nbsp; Hop Bottom</option>
						<option value="Hopewell">&mdash;&nbsp; Hopewell</option>
						<option value="Hopwood">&mdash;&nbsp; Hopwood</option>
						<option value="Horsham">&mdash;&nbsp; Horsham</option>
						<option value="Houston">&mdash;&nbsp; Houston</option>
						<option value="Houtzdale">&mdash;&nbsp; Houtzdale</option>
						<option value="Howard">&mdash;&nbsp; Howard</option>
						<option value="Hughesville">&mdash;&nbsp; Hughesville</option>
						<option value="Hummels Wharf">&mdash;&nbsp; Hummels Wharf</option>
						<option value="Hummelstown">&mdash;&nbsp; Hummelstown</option>
						<option value="Hunker">&mdash;&nbsp; Hunker</option>
						<option value="Huntingdon">&mdash;&nbsp; Huntingdon</option>
						<option value="Hyde Park">&mdash;&nbsp; Hyde Park</option>
						<option value="Hyde">&mdash;&nbsp; Hyde</option>
						<option value="Hydetown">&mdash;&nbsp; Hydetown</option>
						<option value="Hyndman">&mdash;&nbsp; Hyndman</option>
						<option value="Imperial">&mdash;&nbsp; Imperial</option>
						<option value="Jackson Center">&mdash;&nbsp; Jackson Center</option>
						<option value="Jackson">&mdash;&nbsp; Jackson</option>
						<option value="Jamestown">&mdash;&nbsp; Jamestown</option>
						<option value="Jeannette">&mdash;&nbsp; Jeannette</option>
						<option value="Jefferson">&mdash;&nbsp; Jefferson</option>
						<option value="Jenkintown">&mdash;&nbsp; Jenkintown</option>
						<option value="Jennerstown">&mdash;&nbsp; Jennerstown</option>
						<option value="Jermyn">&mdash;&nbsp; Jermyn</option>
						<option value="Jerome">&mdash;&nbsp; Jerome</option>
						<option value="Jersey Shore">&mdash;&nbsp; Jersey Shore</option>
						<option value="Jessup">&mdash;&nbsp; Jessup</option>
						<option value="Jim Thorpe">&mdash;&nbsp; Jim Thorpe</option>
						<option value="Johnsonburg">&mdash;&nbsp; Johnsonburg</option>
						<option value="Johnstown">&mdash;&nbsp; Johnstown</option>
						<option value="Jonestown">&mdash;&nbsp; Jonestown</option>
						<option value="Kane">&mdash;&nbsp; Kane</option>
						<option value="King Of Prussia">&mdash;&nbsp; King Of Prussia</option>
						<option value="Kingston">&mdash;&nbsp; Kingston</option>
						<option value="Kittanning">&mdash;&nbsp; Kittanning</option>
						<option value="Knox">&mdash;&nbsp; Knox</option>
						<option value="Knoxville">&mdash;&nbsp; Knoxville</option>
						<option value="Koppel">&mdash;&nbsp; Koppel</option>
						<option value="Kreamer">&mdash;&nbsp; Kreamer</option>
						<option value="Kulpmont">&mdash;&nbsp; Kulpmont</option>
						<option value="Kulpsville">&mdash;&nbsp; Kulpsville</option>
						<option value="Kutztown">&mdash;&nbsp; Kutztown</option>
						<option value="Laceyville">&mdash;&nbsp; Laceyville</option>
						<option value="Lake City">&mdash;&nbsp; Lake City</option>
						<option value="Lancaster">&mdash;&nbsp; Lancaster</option>
						<option value="Lanesboro">&mdash;&nbsp; Lanesboro</option>
						<option value="Langhorne">&mdash;&nbsp; Langhorne</option>
						<option value="Lansdale">&mdash;&nbsp; Lansdale</option>
						<option value="Lansdowne">&mdash;&nbsp; Lansdowne</option>
						<option value="Lansford">&mdash;&nbsp; Lansford</option>
						<option value="Laporte">&mdash;&nbsp; Laporte</option>
						<option value="Latrobe">&mdash;&nbsp; Latrobe</option>
						<option value="Lavelle">&mdash;&nbsp; Lavelle</option>
						<option value="Lawrenceville">&mdash;&nbsp; Lawrenceville</option>
						<option value="Lawton">&mdash;&nbsp; Lawton</option>
						<option value="Le Raysville">&mdash;&nbsp; Le Raysville</option>
						<option value="Lebanon">&mdash;&nbsp; Lebanon</option>
						<option value="Leechburg">&mdash;&nbsp; Leechburg</option>
						<option value="Leesport">&mdash;&nbsp; Leesport</option>
						<option value="Leetsdale">&mdash;&nbsp; Leetsdale</option>
						<option value="Lehighton">&mdash;&nbsp; Lehighton</option>
						<option value="Lemont">&mdash;&nbsp; Lemont</option>
						<option value="Lemoyne">&mdash;&nbsp; Lemoyne</option>
						<option value="Levittown">&mdash;&nbsp; Levittown</option>
						<option value="Lewis Run">&mdash;&nbsp; Lewis Run</option>
						<option value="Lewisberry">&mdash;&nbsp; Lewisberry</option>
						<option value="Lewisburg">&mdash;&nbsp; Lewisburg</option>
						<option value="Lewistown">&mdash;&nbsp; Lewistown</option>
						<option value="Liberty">&mdash;&nbsp; Liberty</option>
						<option value="Light Street">&mdash;&nbsp; Light Street</option>
						<option value="Ligonier">&mdash;&nbsp; Ligonier</option>
						<option value="Lilly">&mdash;&nbsp; Lilly</option>
						<option value="Linesville">&mdash;&nbsp; Linesville</option>
						<option value="Lionville">&mdash;&nbsp; Lionville</option>
						<option value="Lititz">&mdash;&nbsp; Lititz</option>
						<option value="Little Meadows">&mdash;&nbsp; Little Meadows</option>
						<option value="Littlestown">&mdash;&nbsp; Littlestown</option>
						<option value="Liverpool">&mdash;&nbsp; Liverpool</option>
						<option value="Lock Haven">&mdash;&nbsp; Lock Haven</option>
						<option value="Loganton">&mdash;&nbsp; Loganton</option>
						<option value="Loganville">&mdash;&nbsp; Loganville</option>
						<option value="Loretto">&mdash;&nbsp; Loretto</option>
						<option value="Lucernemines">&mdash;&nbsp; Lucernemines</option>
						<option value="Luzerne">&mdash;&nbsp; Luzerne</option>
						<option value="Lykens">&mdash;&nbsp; Lykens</option>
						<option value="Lyon Station">&mdash;&nbsp; Lyon Station</option>
						<option value="Macungie">&mdash;&nbsp; Macungie</option>
						<option value="Madison">&mdash;&nbsp; Madison</option>
						<option value="Mahaffey">&mdash;&nbsp; Mahaffey</option>
						<option value="Mahanoy City">&mdash;&nbsp; Mahanoy City</option>
						<option value="Malvern">&mdash;&nbsp; Malvern</option>
						<option value="Manchester">&mdash;&nbsp; Manchester</option>
						<option value="Manheim">&mdash;&nbsp; Manheim</option>
						<option value="Manns Choice">&mdash;&nbsp; Manns Choice</option>
						<option value="Manor">&mdash;&nbsp; Manor</option>
						<option value="Mansfield">&mdash;&nbsp; Mansfield</option>
						<option value="Mapleton Depot">&mdash;&nbsp; Mapleton Depot</option>
						<option value="Marcus Hook">&mdash;&nbsp; Marcus Hook</option>
						<option value="Marianna">&mdash;&nbsp; Marianna</option>
						<option value="Marietta">&mdash;&nbsp; Marietta</option>
						<option value="Marion Center">&mdash;&nbsp; Marion Center</option>
						<option value="Marion Heights">&mdash;&nbsp; Marion Heights</option>
						<option value="Markleysburg">&mdash;&nbsp; Markleysburg</option>
						<option value="Mars">&mdash;&nbsp; Mars</option>
						<option value="Martin">&mdash;&nbsp; Martin</option>
						<option value="Martinsburg">&mdash;&nbsp; Martinsburg</option>
						<option value="Marysville">&mdash;&nbsp; Marysville</option>
						<option value="Masontown">&mdash;&nbsp; Masontown</option>
						<option value="Matamoras">&mdash;&nbsp; Matamoras</option>
						<option value="Maytown">&mdash;&nbsp; Maytown</option>
						<option value="Mc Alisterville">&mdash;&nbsp; Mc Alisterville</option>
						<option value="Mc Clure">&mdash;&nbsp; Mc Clure</option>
						<option value="Mc Connellsburg">&mdash;&nbsp; Mc Connellsburg</option>
						<option value="Mc Donald">&mdash;&nbsp; Mc Donald</option>
						<option value="Mc Ewensville">&mdash;&nbsp; Mc Ewensville</option>
						<option value="Mc Kean">&mdash;&nbsp; Mc Kean</option>
						<option value="Mc Kees Rocks">&mdash;&nbsp; Mc Kees Rocks</option>
						<option value="Mc Keesport">&mdash;&nbsp; Mc Keesport</option>
						<option value="Mc Sherrystown">&mdash;&nbsp; Mc Sherrystown</option>
						<option value="Mc Veytown">&mdash;&nbsp; Mc Veytown</option>
						<option value="Meadville">&mdash;&nbsp; Meadville</option>
						<option value="Mechanicsburg">&mdash;&nbsp; Mechanicsburg</option>
						<option value="Mechanicsville">&mdash;&nbsp; Mechanicsville</option>
						<option value="Media">&mdash;&nbsp; Media</option>
						<option value="Mercer">&mdash;&nbsp; Mercer</option>
						<option value="Mercersburg">&mdash;&nbsp; Mercersburg</option>
						<option value="Meshoppen">&mdash;&nbsp; Meshoppen</option>
						<option value="Mexico">&mdash;&nbsp; Mexico</option>
						<option value="Meyersdale">&mdash;&nbsp; Meyersdale</option>
						<option value="Middleburg">&mdash;&nbsp; Middleburg</option>
						<option value="Middleport">&mdash;&nbsp; Middleport</option>
						<option value="Middletown">&mdash;&nbsp; Middletown</option>
						<option value="Midland">&mdash;&nbsp; Midland</option>
						<option value="Midway">&mdash;&nbsp; Midway</option>
						<option value="Mifflin">&mdash;&nbsp; Mifflin</option>
						<option value="Mifflinburg">&mdash;&nbsp; Mifflinburg</option>
						<option value="Mifflintown">&mdash;&nbsp; Mifflintown</option>
						<option value="Mifflinville">&mdash;&nbsp; Mifflinville</option>
						<option value="Milesburg">&mdash;&nbsp; Milesburg</option>
						<option value="Milford">&mdash;&nbsp; Milford</option>
						<option value="Mill Creek">&mdash;&nbsp; Mill Creek</option>
						<option value="Mill Hall">&mdash;&nbsp; Mill Hall</option>
						<option value="Mill Village">&mdash;&nbsp; Mill Village</option>
						<option value="Millersburg">&mdash;&nbsp; Millersburg</option>
						<option value="Millerstown">&mdash;&nbsp; Millerstown</option>
						<option value="Millersville">&mdash;&nbsp; Millersville</option>
						<option value="Millheim">&mdash;&nbsp; Millheim</option>
						<option value="Millville">&mdash;&nbsp; Millville</option>
						<option value="Milroy">&mdash;&nbsp; Milroy</option>
						<option value="Milton">&mdash;&nbsp; Milton</option>
						<option value="Minersville">&mdash;&nbsp; Minersville</option>
						<option value="Modena">&mdash;&nbsp; Modena</option>
						<option value="Mohnton">&mdash;&nbsp; Mohnton</option>
						<option value="Monaca">&mdash;&nbsp; Monaca</option>
						<option value="Monessen">&mdash;&nbsp; Monessen</option>
						<option value="Monongahela">&mdash;&nbsp; Monongahela</option>
						<option value="Monroeville">&mdash;&nbsp; Monroeville</option>
						<option value="Mont Alto">&mdash;&nbsp; Mont Alto</option>
						<option value="Montgomery">&mdash;&nbsp; Montgomery</option>
						<option value="Montgomeryville">&mdash;&nbsp; Montgomeryville</option>
						<option value="Montoursville">&mdash;&nbsp; Montoursville</option>
						<option value="Montrose">&mdash;&nbsp; Montrose</option>
						<option value="Moosic">&mdash;&nbsp; Moosic</option>
						<option value="Morrisville">&mdash;&nbsp; Morrisville</option>
						<option value="Morton">&mdash;&nbsp; Morton</option>
						<option value="Moscow">&mdash;&nbsp; Moscow</option>
						<option value="Mount Carmel">&mdash;&nbsp; Mount Carmel</option>
						<option value="Mount Gretna">&mdash;&nbsp; Mount Gretna</option>
						<option value="Mount Holly Springs">&mdash;&nbsp; Mount Holly Springs</option>
						<option value="Mount Jewett">&mdash;&nbsp; Mount Jewett</option>
						<option value="Mount Joy">&mdash;&nbsp; Mount Joy</option>
						<option value="Mount Pleasant Mills">&mdash;&nbsp; Mount Pleasant Mills</option>
						<option value="Mount Pleasant">&mdash;&nbsp; Mount Pleasant</option>
						<option value="Mount Pocono">&mdash;&nbsp; Mount Pocono</option>
						<option value="Mount Union">&mdash;&nbsp; Mount Union</option>
						<option value="Mount Wolf">&mdash;&nbsp; Mount Wolf</option>
						<option value="Mountainhome">&mdash;&nbsp; Mountainhome</option>
						<option value="Mountville">&mdash;&nbsp; Mountville</option>
						<option value="Muncy">&mdash;&nbsp; Muncy</option>
						<option value="Myerstown">&mdash;&nbsp; Myerstown</option>
						<option value="Nanticoke">&mdash;&nbsp; Nanticoke</option>
						<option value="Nanty Glo">&mdash;&nbsp; Nanty Glo</option>
						<option value="Narberth">&mdash;&nbsp; Narberth</option>
						<option value="Nazareth">&mdash;&nbsp; Nazareth</option>
						<option value="Nemacolin">&mdash;&nbsp; Nemacolin</option>
						<option value="Nescopeck">&mdash;&nbsp; Nescopeck</option>
						<option value="Nesquehoning">&mdash;&nbsp; Nesquehoning</option>
						<option value="New Albany">&mdash;&nbsp; New Albany</option>
						<option value="New Alexandria">&mdash;&nbsp; New Alexandria</option>
						<option value="New Berlin">&mdash;&nbsp; New Berlin</option>
						<option value="New Bethlehem">&mdash;&nbsp; New Bethlehem</option>
						<option value="New Brighton">&mdash;&nbsp; New Brighton</option>
						<option value="New Castle">&mdash;&nbsp; New Castle</option>
						<option value="New Columbia">&mdash;&nbsp; New Columbia</option>
						<option value="New Cumberland">&mdash;&nbsp; New Cumberland</option>
						<option value="New Eagle">&mdash;&nbsp; New Eagle</option>
						<option value="New Florence">&mdash;&nbsp; New Florence</option>
						<option value="New Freedom">&mdash;&nbsp; New Freedom</option>
						<option value="New Galilee">&mdash;&nbsp; New Galilee</option>
						<option value="New Holland">&mdash;&nbsp; New Holland</option>
						<option value="New Hope">&mdash;&nbsp; New Hope</option>
						<option value="New Kensington">&mdash;&nbsp; New Kensington</option>
						<option value="New Kingstown">&mdash;&nbsp; New Kingstown</option>
						<option value="New Milford">&mdash;&nbsp; New Milford</option>
						<option value="New Oxford">&mdash;&nbsp; New Oxford</option>
						<option value="New Paris">&mdash;&nbsp; New Paris</option>
						<option value="New Philadelphia">&mdash;&nbsp; New Philadelphia</option>
						<option value="New Ringgold">&mdash;&nbsp; New Ringgold</option>
						<option value="New Salem">&mdash;&nbsp; New Salem</option>
						<option value="New Stanton">&mdash;&nbsp; New Stanton</option>
						<option value="New Wilmington">&mdash;&nbsp; New Wilmington</option>
						<option value="Newburg">&mdash;&nbsp; Newburg</option>
						<option value="Newell">&mdash;&nbsp; Newell</option>
						<option value="Newmanstown">&mdash;&nbsp; Newmanstown</option>
						<option value="Newport">&mdash;&nbsp; Newport</option>
						<option value="Newry">&mdash;&nbsp; Newry</option>
						<option value="Newton Hamilton">&mdash;&nbsp; Newton Hamilton</option>
						<option value="Newtown">&mdash;&nbsp; Newtown</option>
						<option value="Newville">&mdash;&nbsp; Newville</option>
						<option value="Nicholson">&mdash;&nbsp; Nicholson</option>
						<option value="Norristown">&mdash;&nbsp; Norristown</option>
						<option value="North Apollo">&mdash;&nbsp; North Apollo</option>
						<option value="North East">&mdash;&nbsp; North East</option>
						<option value="North Versailles">&mdash;&nbsp; North Versailles</option>
						<option value="North Wales">&mdash;&nbsp; North Wales</option>
						<option value="Northampton">&mdash;&nbsp; Northampton</option>
						<option value="Northern Cambria">&mdash;&nbsp; Northern Cambria</option>
						<option value="Northumberland">&mdash;&nbsp; Northumberland</option>
						<option value="Norwood">&mdash;&nbsp; Norwood</option>
						<option value="Numidia">&mdash;&nbsp; Numidia</option>
						<option value="Nuremberg">&mdash;&nbsp; Nuremberg</option>
						<option value="Oakdale">&mdash;&nbsp; Oakdale</option>
						<option value="Oakmont">&mdash;&nbsp; Oakmont</option>
						<option value="Oil City">&mdash;&nbsp; Oil City</option>
						<option value="Old Forge">&mdash;&nbsp; Old Forge</option>
						<option value="Oliver">&mdash;&nbsp; Oliver</option>
						<option value="Olyphant">&mdash;&nbsp; Olyphant</option>
						<option value="Oneida">&mdash;&nbsp; Oneida</option>
						<option value="Orangeville">&mdash;&nbsp; Orangeville</option>
						<option value="Orbisonia">&mdash;&nbsp; Orbisonia</option>
						<option value="Oreland">&mdash;&nbsp; Oreland</option>
						<option value="Orrstown">&mdash;&nbsp; Orrstown</option>
						<option value="Orwigsburg">&mdash;&nbsp; Orwigsburg</option>
						<option value="Osceola Mills">&mdash;&nbsp; Osceola Mills</option>
						<option value="Oxford">&mdash;&nbsp; Oxford</option>
						<option value="Palmerton">&mdash;&nbsp; Palmerton</option>
						<option value="Palmyra">&mdash;&nbsp; Palmyra</option>
						<option value="Paoli">&mdash;&nbsp; Paoli</option>
						<option value="Paradise">&mdash;&nbsp; Paradise</option>
						<option value="Parker">&mdash;&nbsp; Parker</option>
						<option value="Parkesburg">&mdash;&nbsp; Parkesburg</option>
						<option value="Parryville">&mdash;&nbsp; Parryville</option>
						<option value="Patton">&mdash;&nbsp; Patton</option>
						<option value="Paxtonville">&mdash;&nbsp; Paxtonville</option>
						<option value="Pen Argyl">&mdash;&nbsp; Pen Argyl</option>
						<option value="Penn">&mdash;&nbsp; Penn</option>
						<option value="Penns Creek">&mdash;&nbsp; Penns Creek</option>
						<option value="Pennsburg">&mdash;&nbsp; Pennsburg</option>
						<option value="Perkasie">&mdash;&nbsp; Perkasie</option>
						<option value="Perryopolis">&mdash;&nbsp; Perryopolis</option>
						<option value="Petersburg">&mdash;&nbsp; Petersburg</option>
						<option value="Petrolia">&mdash;&nbsp; Petrolia</option>
						<option value="Philadelphia  (All)">&mdash;&nbsp; Philadelphia  (All)</option>
						<option value="Philipsburg">&mdash;&nbsp; Philipsburg</option>
						<option value="Phoenixville">&mdash;&nbsp; Phoenixville</option>
						<option value="Picture Rocks">&mdash;&nbsp; Picture Rocks</option>
						<option value="Pillow">&mdash;&nbsp; Pillow</option>
						<option value="Pine Grove Mills">&mdash;&nbsp; Pine Grove Mills</option>
						<option value="Pine Grove">&mdash;&nbsp; Pine Grove</option>
						<option value="Pitcairn">&mdash;&nbsp; Pitcairn</option>
						<option value="Pittsburgh (All)">&mdash;&nbsp; Pittsburgh (All)</option>
						<option value="Pittston">&mdash;&nbsp; Pittston</option>
						<option value="Plainfield">&mdash;&nbsp; Plainfield</option>
						<option value="Pleasantville">&mdash;&nbsp; Pleasantville</option>
						<option value="Plumville">&mdash;&nbsp; Plumville</option>
						<option value="Plymouth Meeting">&mdash;&nbsp; Plymouth Meeting</option>
						<option value="Plymouth">&mdash;&nbsp; Plymouth</option>
						<option value="Pocono Pines">&mdash;&nbsp; Pocono Pines</option>
						<option value="Point Marion">&mdash;&nbsp; Point Marion</option>
						<option value="Polk">&mdash;&nbsp; Polk</option>
						<option value="Port Allegany">&mdash;&nbsp; Port Allegany</option>
						<option value="Port Clinton">&mdash;&nbsp; Port Clinton</option>
						<option value="Port Matilda">&mdash;&nbsp; Port Matilda</option>
						<option value="Port Royal">&mdash;&nbsp; Port Royal</option>
						<option value="Port Trevorton">&mdash;&nbsp; Port Trevorton</option>
						<option value="Portage">&mdash;&nbsp; Portage</option>
						<option value="Portersville">&mdash;&nbsp; Portersville</option>
						<option value="Portland">&mdash;&nbsp; Portland</option>
						<option value="Potts Grove">&mdash;&nbsp; Potts Grove</option>
						<option value="Pottstown">&mdash;&nbsp; Pottstown</option>
						<option value="Pottsville">&mdash;&nbsp; Pottsville</option>
						<option value="Prompton">&mdash;&nbsp; Prompton</option>
						<option value="Prospect Park">&mdash;&nbsp; Prospect Park</option>
						<option value="Prospect">&mdash;&nbsp; Prospect</option>
						<option value="Punxsutawney">&mdash;&nbsp; Punxsutawney</option>
						<option value="Quakertown">&mdash;&nbsp; Quakertown</option>
						<option value="Quarryville">&mdash;&nbsp; Quarryville</option>
						<option value="Quentin">&mdash;&nbsp; Quentin</option>
						<option value="Railroad">&mdash;&nbsp; Railroad</option>
						<option value="Ramey">&mdash;&nbsp; Ramey</option>
						<option value="Ravine">&mdash;&nbsp; Ravine</option>
						<option value="Reading">&mdash;&nbsp; Reading</option>
						<option value="Reamstown">&mdash;&nbsp; Reamstown</option>
						<option value="Rebersburg">&mdash;&nbsp; Rebersburg</option>
						<option value="Red Hill">&mdash;&nbsp; Red Hill</option>
						<option value="Red Lion">&mdash;&nbsp; Red Lion</option>
						<option value="Reedsville">&mdash;&nbsp; Reedsville</option>
						<option value="Renovo">&mdash;&nbsp; Renovo</option>
						<option value="Republic">&mdash;&nbsp; Republic</option>
						<option value="Reynoldsville">&mdash;&nbsp; Reynoldsville</option>
						<option value="Rheems">&mdash;&nbsp; Rheems</option>
						<option value="Rices Landing">&mdash;&nbsp; Rices Landing</option>
						<option value="Richboro">&mdash;&nbsp; Richboro</option>
						<option value="Richfield">&mdash;&nbsp; Richfield</option>
						<option value="Richland">&mdash;&nbsp; Richland</option>
						<option value="Richlandtown">&mdash;&nbsp; Richlandtown</option>
						<option value="Ridgway">&mdash;&nbsp; Ridgway</option>
						<option value="Ridley Park">&mdash;&nbsp; Ridley Park</option>
						<option value="Riegelsville">&mdash;&nbsp; Riegelsville</option>
						<option value="Rimersburg">&mdash;&nbsp; Rimersburg</option>
						<option value="Ringtown">&mdash;&nbsp; Ringtown</option>
						<option value="Riverside">&mdash;&nbsp; Riverside</option>
						<option value="Roaring Spring">&mdash;&nbsp; Roaring Spring</option>
						<option value="Robesonia">&mdash;&nbsp; Robesonia</option>
						<option value="Robinson">&mdash;&nbsp; Robinson</option>
						<option value="Rochester">&mdash;&nbsp; Rochester</option>
						<option value="Rockhill Furnace">&mdash;&nbsp; Rockhill Furnace</option>
						<option value="Rockwood">&mdash;&nbsp; Rockwood</option>
						<option value="Rome">&mdash;&nbsp; Rome</option>
						<option value="Roscoe">&mdash;&nbsp; Roscoe</option>
						<option value="Rossiter">&mdash;&nbsp; Rossiter</option>
						<option value="Rouseville">&mdash;&nbsp; Rouseville</option>
						<option value="Rouzerville">&mdash;&nbsp; Rouzerville</option>
						<option value="Royersford">&mdash;&nbsp; Royersford</option>
						<option value="Rural Valley">&mdash;&nbsp; Rural Valley</option>
						<option value="Russellton">&mdash;&nbsp; Russellton</option>
						<option value="Saint Clair">&mdash;&nbsp; Saint Clair</option>
						<option value="Saint Marys">&mdash;&nbsp; Saint Marys</option>
						<option value="Saint Michael">&mdash;&nbsp; Saint Michael</option>
						<option value="Saint Petersburg">&mdash;&nbsp; Saint Petersburg</option>
						<option value="Salisbury">&mdash;&nbsp; Salisbury</option>
						<option value="Saltillo">&mdash;&nbsp; Saltillo</option>
						<option value="Saltsburg">&mdash;&nbsp; Saltsburg</option>
						<option value="Sandy Lake">&mdash;&nbsp; Sandy Lake</option>
						<option value="Sandy Ridge">&mdash;&nbsp; Sandy Ridge</option>
						<option value="Saxonburg">&mdash;&nbsp; Saxonburg</option>
						<option value="Sayre">&mdash;&nbsp; Sayre</option>
						<option value="Schaefferstown">&mdash;&nbsp; Schaefferstown</option>
						<option value="Schellsburg">&mdash;&nbsp; Schellsburg</option>
						<option value="Schnecksville">&mdash;&nbsp; Schnecksville</option>
						<option value="Schuylkill Haven">&mdash;&nbsp; Schuylkill Haven</option>
						<option value="Schwenksville">&mdash;&nbsp; Schwenksville</option>
						<option value="Scottdale">&mdash;&nbsp; Scottdale</option>
						<option value="Scranton">&mdash;&nbsp; Scranton</option>
						<option value="Selinsgrove">&mdash;&nbsp; Selinsgrove</option>
						<option value="Sellersville">&mdash;&nbsp; Sellersville</option>
						<option value="Seltzer">&mdash;&nbsp; Seltzer</option>
						<option value="Seneca">&mdash;&nbsp; Seneca</option>
						<option value="Seven Valleys">&mdash;&nbsp; Seven Valleys</option>
						<option value="Seward">&mdash;&nbsp; Seward</option>
						<option value="Sewickley">&mdash;&nbsp; Sewickley</option>
						<option value="Shamokin Dam">&mdash;&nbsp; Shamokin Dam</option>
						<option value="Shamokin">&mdash;&nbsp; Shamokin</option>
						<option value="Shanksville">&mdash;&nbsp; Shanksville</option>
						<option value="Sharon Hill">&mdash;&nbsp; Sharon Hill</option>
						<option value="Sharon">&mdash;&nbsp; Sharon</option>
						<option value="Sharpsville">&mdash;&nbsp; Sharpsville</option>
						<option value="Sheffield">&mdash;&nbsp; Sheffield</option>
						<option value="Shenandoah">&mdash;&nbsp; Shenandoah</option>
						<option value="Sheppton">&mdash;&nbsp; Sheppton</option>
						<option value="Shickshinny">&mdash;&nbsp; Shickshinny</option>
						<option value="Shippenville">&mdash;&nbsp; Shippenville</option>
						<option value="Shippingport">&mdash;&nbsp; Shippingport</option>
						<option value="Shoemakersville">&mdash;&nbsp; Shoemakersville</option>
						<option value="Silverdale">&mdash;&nbsp; Silverdale</option>
						<option value="Skippack">&mdash;&nbsp; Skippack</option>
						<option value="Slatington">&mdash;&nbsp; Slatington</option>
						<option value="Slickville">&mdash;&nbsp; Slickville</option>
						<option value="Sligo">&mdash;&nbsp; Sligo</option>
						<option value="Slippery Rock">&mdash;&nbsp; Slippery Rock</option>
						<option value="Smethport">&mdash;&nbsp; Smethport</option>
						<option value="Smithfield">&mdash;&nbsp; Smithfield</option>
						<option value="Smithton">&mdash;&nbsp; Smithton</option>
						<option value="Snow Shoe">&mdash;&nbsp; Snow Shoe</option>
						<option value="Snydertown">&mdash;&nbsp; Snydertown</option>
						<option value="Somerset">&mdash;&nbsp; Somerset</option>
						<option value="Souderton">&mdash;&nbsp; Souderton</option>
						<option value="South Fork">&mdash;&nbsp; South Fork</option>
						<option value="South Heights">&mdash;&nbsp; South Heights</option>
						<option value="South Park">&mdash;&nbsp; South Park</option>
						<option value="Southwest">&mdash;&nbsp; Southwest</option>
						<option value="Spartansburg">&mdash;&nbsp; Spartansburg</option>
						<option value="Spring City">&mdash;&nbsp; Spring City</option>
						<option value="Spring Grove">&mdash;&nbsp; Spring Grove</option>
						<option value="Spring House">&mdash;&nbsp; Spring House</option>
						<option value="Spring Mills">&mdash;&nbsp; Spring Mills</option>
						<option value="Spring Mount">&mdash;&nbsp; Spring Mount</option>
						<option value="Springboro">&mdash;&nbsp; Springboro</option>
						<option value="Springdale">&mdash;&nbsp; Springdale</option>
						<option value="Springfield">&mdash;&nbsp; Springfield</option>
						<option value="Starrucca">&mdash;&nbsp; Starrucca</option>
						<option value="State College">&mdash;&nbsp; State College</option>
						<option value="Stewartstown">&mdash;&nbsp; Stewartstown</option>
						<option value="Stockdale">&mdash;&nbsp; Stockdale</option>
						<option value="Stockertown">&mdash;&nbsp; Stockertown</option>
						<option value="Stoneboro">&mdash;&nbsp; Stoneboro</option>
						<option value="Stoystown">&mdash;&nbsp; Stoystown</option>
						<option value="Strasburg">&mdash;&nbsp; Strasburg</option>
						<option value="Strattanville">&mdash;&nbsp; Strattanville</option>
						<option value="Strausstown">&mdash;&nbsp; Strausstown</option>
						<option value="Stroudsburg">&mdash;&nbsp; Stroudsburg</option>
						<option value="Sturgeon">&mdash;&nbsp; Sturgeon</option>
						<option value="Sugar Grove">&mdash;&nbsp; Sugar Grove</option>
						<option value="Summerhill">&mdash;&nbsp; Summerhill</option>
						<option value="Summerville">&mdash;&nbsp; Summerville</option>
						<option value="Summit Hill">&mdash;&nbsp; Summit Hill</option>
						<option value="Summit Station">&mdash;&nbsp; Summit Station</option>
						<option value="Sunbury">&mdash;&nbsp; Sunbury</option>
						<option value="Susquehanna">&mdash;&nbsp; Susquehanna</option>
						<option value="Sutersville">&mdash;&nbsp; Sutersville</option>
						<option value="Swarthmore">&mdash;&nbsp; Swarthmore</option>
						<option value="Sykesville">&mdash;&nbsp; Sykesville</option>
						<option value="Tamaqua">&mdash;&nbsp; Tamaqua</option>
						<option value="Tarentum">&mdash;&nbsp; Tarentum</option>
						<option value="Tatamy">&mdash;&nbsp; Tatamy</option>
						<option value="Taylor">&mdash;&nbsp; Taylor</option>
						<option value="Telford">&mdash;&nbsp; Telford</option>
						<option value="Terre Hill">&mdash;&nbsp; Terre Hill</option>
						<option value="Thompson">&mdash;&nbsp; Thompson</option>
						<option value="Thompsontown">&mdash;&nbsp; Thompsontown</option>
						<option value="Three Springs">&mdash;&nbsp; Three Springs</option>
						<option value="Tidioute">&mdash;&nbsp; Tidioute</option>
						<option value="Tioga">&mdash;&nbsp; Tioga</option>
						<option value="Tionesta">&mdash;&nbsp; Tionesta</option>
						<option value="Tipton">&mdash;&nbsp; Tipton</option>
						<option value="Titusville">&mdash;&nbsp; Titusville</option>
						<option value="Topton">&mdash;&nbsp; Topton</option>
						<option value="Toughkenamon">&mdash;&nbsp; Toughkenamon</option>
						<option value="Towanda">&mdash;&nbsp; Towanda</option>
						<option value="Tower City">&mdash;&nbsp; Tower City</option>
						<option value="Townville">&mdash;&nbsp; Townville</option>
						<option value="Trafford">&mdash;&nbsp; Trafford</option>
						<option value="Tremont">&mdash;&nbsp; Tremont</option>
						<option value="Tresckow">&mdash;&nbsp; Tresckow</option>
						<option value="Trevorton">&mdash;&nbsp; Trevorton</option>
						<option value="Troutville">&mdash;&nbsp; Troutville</option>
						<option value="Troy">&mdash;&nbsp; Troy</option>
						<option value="Trumbauersville">&mdash;&nbsp; Trumbauersville</option>
						<option value="Tunkhannock">&mdash;&nbsp; Tunkhannock</option>
						<option value="Turbotville">&mdash;&nbsp; Turbotville</option>
						<option value="Turtle Creek">&mdash;&nbsp; Turtle Creek</option>
						<option value="Tuscarora">&mdash;&nbsp; Tuscarora</option>
						<option value="Tyrone">&mdash;&nbsp; Tyrone</option>
						<option value="Ulysses">&mdash;&nbsp; Ulysses</option>
						<option value="Union City">&mdash;&nbsp; Union City</option>
						<option value="Union Dale">&mdash;&nbsp; Union Dale</option>
						<option value="Uniontown">&mdash;&nbsp; Uniontown</option>
						<option value="Ursina">&mdash;&nbsp; Ursina</option>
						<option value="Utica">&mdash;&nbsp; Utica</option>
						<option value="Valencia">&mdash;&nbsp; Valencia</option>
						<option value="Valley View">&mdash;&nbsp; Valley View</option>
						<option value="Vanderbilt">&mdash;&nbsp; Vanderbilt</option>
						<option value="Vandergrift">&mdash;&nbsp; Vandergrift</option>
						<option value="Venango">&mdash;&nbsp; Venango</option>
						<option value="Verona">&mdash;&nbsp; Verona</option>
						<option value="Vintondale">&mdash;&nbsp; Vintondale</option>
						<option value="Wallaceton">&mdash;&nbsp; Wallaceton</option>
						<option value="Walnutport">&mdash;&nbsp; Walnutport</option>
						<option value="Wampum">&mdash;&nbsp; Wampum</option>
						<option value="Warminster">&mdash;&nbsp; Warminster</option>
						<option value="Warren">&mdash;&nbsp; Warren</option>
						<option value="Washington">&mdash;&nbsp; Washington</option>
						<option value="Washingtonville">&mdash;&nbsp; Washingtonville</option>
						<option value="Waterford">&mdash;&nbsp; Waterford</option>
						<option value="Watsontown">&mdash;&nbsp; Watsontown</option>
						<option value="Wattsburg">&mdash;&nbsp; Wattsburg</option>
						<option value="Waymart">&mdash;&nbsp; Waymart</option>
						<option value="Wayne">&mdash;&nbsp; Wayne</option>
						<option value="Waynesboro">&mdash;&nbsp; Waynesboro</option>
						<option value="Waynesburg">&mdash;&nbsp; Waynesburg</option>
						<option value="Weatherly">&mdash;&nbsp; Weatherly</option>
						<option value="Wellsboro">&mdash;&nbsp; Wellsboro</option>
						<option value="Wellsville">&mdash;&nbsp; Wellsville</option>
						<option value="Wernersville">&mdash;&nbsp; Wernersville</option>
						<option value="West Alexander">&mdash;&nbsp; West Alexander</option>
						<option value="West Chester">&mdash;&nbsp; West Chester</option>
						<option value="West Elizabeth">&mdash;&nbsp; West Elizabeth</option>
						<option value="West Grove">&mdash;&nbsp; West Grove</option>
						<option value="West Middlesex">&mdash;&nbsp; West Middlesex</option>
						<option value="West Mifflin">&mdash;&nbsp; West Mifflin</option>
						<option value="West Newton">&mdash;&nbsp; West Newton</option>
						<option value="Westfield">&mdash;&nbsp; Westfield</option>
						<option value="Westover">&mdash;&nbsp; Westover</option>
						<option value="Wheatland">&mdash;&nbsp; Wheatland</option>
						<option value="White Haven">&mdash;&nbsp; White Haven</option>
						<option value="White">&mdash;&nbsp; White</option>
						<option value="Whitehall">&mdash;&nbsp; Whitehall</option>
						<option value="Wilkes Barre">&mdash;&nbsp; Wilkes Barre</option>
						<option value="Williamsburg">&mdash;&nbsp; Williamsburg</option>
						<option value="Williamsport">&mdash;&nbsp; Williamsport</option>
						<option value="Williamstown">&mdash;&nbsp; Williamstown</option>
						<option value="Willow Grove">&mdash;&nbsp; Willow Grove</option>
						<option value="Willow Street">&mdash;&nbsp; Willow Street</option>
						<option value="Wilmerding">&mdash;&nbsp; Wilmerding</option>
						<option value="Wilmore">&mdash;&nbsp; Wilmore</option>
						<option value="Wind Gap">&mdash;&nbsp; Wind Gap</option>
						<option value="Windber">&mdash;&nbsp; Windber</option>
						<option value="Windsor">&mdash;&nbsp; Windsor</option>
						<option value="Womelsdorf">&mdash;&nbsp; Womelsdorf</option>
						<option value="Wood">&mdash;&nbsp; Wood</option>
						<option value="Woodbury">&mdash;&nbsp; Woodbury</option>
						<option value="Woodland">&mdash;&nbsp; Woodland</option>
						<option value="Woodlyn">&mdash;&nbsp; Woodlyn</option>
						<option value="Worthington">&mdash;&nbsp; Worthington</option>
						<option value="Wrightsville">&mdash;&nbsp; Wrightsville</option>
						<option value="Wyalusing">&mdash;&nbsp; Wyalusing</option>
						<option value="Wyncote">&mdash;&nbsp; Wyncote</option>
						<option value="Wyoming">&mdash;&nbsp; Wyoming</option>
						<option value="Yeagertown">&mdash;&nbsp; Yeagertown</option>
						<option value="York Haven">&mdash;&nbsp; York Haven</option>
						<option value="York Springs">&mdash;&nbsp; York Springs</option>
						<option value="York">&mdash;&nbsp; York</option>
						<option value="Youngstown">&mdash;&nbsp; Youngstown</option>
						<option value="Youngsville">&mdash;&nbsp; Youngsville</option>
						<option value="Youngwood">&mdash;&nbsp; Youngwood</option>
						<option value="Zelienople">&mdash;&nbsp; Zelienople</option>
						<option value="Zion Grove						">&mdash;&nbsp; Zion Grove						</option>
					</select>

					<button type="submit">Click Here to Receive Property List</button>

				</fieldset>

			</div>

			</form>

		</div>

	</section>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="js/script.js"></script>



<?php require_once 'inc/footer.php'; ?>

	<script src="js/multi.js"></script>

	<script>

        // Initialize the multi-select plugin
        $('#multi').multiSelect();

        // Initialize the locations array
        let locations = [];

        // Select All button
        $('#selectall').click(function() {
            $('#multi').multiSelect('select_all');
            // Add all options to the locations array
            locations = $('#multi').val();
            console.log('Locations after select all:', locations);
            return false;
        });

        // Deselect All button
        $('#deselectall').click(function() {
            $('#multi').multiSelect('deselect_all');
            // Clear the locations array
            locations = [];
            console.log('Locations after deselect all:', locations);
            return false;
        });

        // Update locations array when an option is selected or deselected
        $('#multi').change(function() {
            // Get selected values
            const selectedValues = $(this).val() || [];
            locations = selectedValues;
            console.log('Updated locations:', locations);
        });

        $('#phone').on('input', function() {
            var input = $(this).val().replace(/\D/g, ''); // Remove all non-digit characters
            var formattedPhone = '';

            if (input.length > 0) {
                formattedPhone = '(' + input.substring(0, 3);
            }
            if (input.length >= 4) {
                formattedPhone += ') ' + input.substring(3, 6);
            }
            if (input.length >= 7) {
                formattedPhone += '-' + input.substring(6, 10);
            }

            $(this).val(formattedPhone);
        });

	</script>
