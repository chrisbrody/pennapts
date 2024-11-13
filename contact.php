<?php 

$pageTitle = "Amo Realty - Contact Us";
$h1Tag = "Contact Us";

require_once 'inc/header.php';

?>
    <style>
        form#contact {
            width: 100%;
        }
    </style>
	<section class="main" id="contactus">

        <div id="status"></div>

		<div class="wrap">

			<p>Pennsylvania Apartments is open 7 days a week between 8am and 11pm. Please email us with any questions and we usually respond within less than 1 hour! If you email us after offices hours, we will get back to you asap the following day! Also, call us at 617-247-1933 with any questions and we look forward to meeting you soon!</p>

			<form id="contact">

				<input type="hidden" name="source" value="contact" />

                <!-- Honeypot field for bots -->
                <div style="display: none;">
                    <label for="website">If you are human, leave this field blank.</label>
                    <input type="text" id="website" name="website" />
                </div>

				<h2>Contact Us</h2>

				<div class="row">

					<div>
						<label for="first-name">First Name <span>* is required</span></label>
						<input type="text" id="first-name" name="first-name" class="req" />
					</div>

					<div>
						<label for="lastname">Last Name <span>* is required</span></label>
						<input type="text" id="lastname" name="last-name" class="req" />
					</div>

				</div>

				<div class="row">

					<div>
						<label for="email">Email <span>* is required</span></label>
						<input type="text" id="email" name="email" class="req" />
					</div>

					<div>
						<label for="phone">Phone</label>
						<input type="text" id="phone" name="phone" />
					</div>

				</div>

				<label for="message">Message</label>
				<textarea id="message" name="message"></textarea>

				<button type="submit">send</button>

			</form>

		</div>

	</section>

<?php require_once 'inc/footer.php'; ?>