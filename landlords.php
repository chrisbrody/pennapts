<?php

    require_once('inc/config.php');

    $pageID = "index";

    $pageTitle = "Amo Realty - PA Landlords";

    $pageDescription = "Amo Realty - PA Landlords";

    $pageKeywords = "";

    require_once('inc/header-NEW.php');

?>

	<section class="main" id="contactus">

        <div id="status"></div>

		<div class="wrap">

			<h2>Landlords, submit your listing for FREE!</h2>

    <p>Fill in the information below and we will notify all of our agents about your listing. Amo Realty has one of the largest rental departments in the Pennsylvania area. We will contact you ASAP with any potential renters who are looking for apartments in your criteria!</p>

			<form id="contact">

				<input type="hidden" name="source" value="landlord" />

                <!-- Honeypot field for bots -->
                <div style="display: none;">
                    <label for="website">If you are human, leave this field blank.</label>
                    <input type="text" id="website" name="website" />
                </div>

				<h2>Contact Information</h2>

				<div class="row">

					<div>
						<label for="landlordname">Landlord Name <span>* is required</span></label>
						<input type="text" id="landlordname" name="full-name" class="req" />
					</div>

				</div>

				<div class="row">

					<div>
						<label for="email">Landlord Email <span>* is required</span></label>
						<input type="email" id="email" name="email" class="req" />
					</div>

					<div>
						<label for="phone">Landlord Phone</label>
						<input type="text" id="phone" name="phone" />
					</div>

				</div>
                
                <div class="row">

					<div>
						<label for="address">Address</label>
						<input type="text" id="address" name="address" />
					</div>

					<div>
						<label for="price">Price</label>
						<input type="text" id="price" name="price" />
					</div>
                    
                    <div>
						<label for="date">Date Available</label>
						<input type="date" id="date" name="date" />
					</div>

				</div>

				<label for="message">Description</label>
				<textarea id="message" name="message"></textarea>

				<button type="submit">send</button>

			</form>



		</div>

	</section>

<?php require_once('inc/footer-NEW.php'); ?>

<script>
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
