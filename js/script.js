var isSubmitting = false;
$(document).ready(function(){

	$('#popup i').on('click', function(){
		$('#overlay, #popup').fadeOut();
	});

	$('form').on('submit', function(e) {

		e.preventDefault();

		// Disable the submit button to prevent multiple submissions
		const submitButton = $(this).find('button[type="submit"]');
		submitButton.prop('disabled', true);  // Disable the button

		console.log(isSubmitting)
		if (isSubmitting) {
			return false; // Prevent duplicate submissions
		}
		isSubmitting = true;

		// Check the honeypot field
		const honeypot = document.getElementById('website').value;
		if (honeypot) {
			console.warn("Bot detected, form submission blocked.");
			return; // Stop the form submission
		}

		let allGood = true;

		$('.req').each(function(){
			if ($(this).val() === '') {
				allGood = false;
			};
		});

		if (allGood === false) {
			$('#popup span').text("Please fill out the required fields.");
			$('#overlay, #popup').fadeIn();
		    $('html, body').animate({
		        scrollTop: 0
		    }, 1000);
			submitButton.prop('disabled', false);
			return;
		} else if (allGood === true) {
			// Use `this` to refer to the current form element
			const form = this;
			const formData = new FormData(form);

			// Create the current date and time
			const now = new Date();

			// Format the date and time to `mm/dd/yyyy hh:mm:ss EST`
			const month = String(now.getMonth() + 1).padStart(2, '0');
			const day = String(now.getDate()).padStart(2, '0');
			const year = now.getFullYear();
			const hours = String(now.getHours()).padStart(2, '0');
			const minutes = String(now.getMinutes()).padStart(2, '0');
			const seconds = String(now.getSeconds()).padStart(2, '0');
			const timezone = "EST";

			// Construct the datetime string
			const datetime = `${month}/${day}/${year} ${hours}:${minutes}:${seconds} ${timezone}`;

			// Add additional fields
			formData.append("website", window.location.href);
			formData.append("page", window.location.href.replace(/^https?:\/\//, ""));
			formData.append("datatime", datetime);
			formData.append("system", systemName);
			formData.append("systemKey", systemKey);
			formData.append("stateletter", stateLetters);

			// determine if source == search to add locations
			if($('input[name="source"]').val() == "Sales" || $('input[name="source"]').val() == "Rentals"){
				// Add each location individually as location1, location2, etc.
				locations.forEach((location, index) => {
					formData.append(`location${index + 1}`, location); // location1, location2, etc.
				});
			}

			const webhookUrl = "https://hook.us1.make.com/g8avvnscv5jnjwwjgzh8xsf4rkxuntmm";

			fetch(webhookUrl, {
				method: "POST",
				body: formData,
			})
				.then(response => {
					const status = document.getElementById("status");
					if (response.ok) {
						status.innerHTML = "<p>Thank you for submitting the form. We usually send the list within 1 hour. We are open 8am-11pm 7 days a week, and if submitted after hours we will have it for you tomorrow! E-mail us at <a href='mailto:info@amorealty.com'>info@amorealty.com</a> or call us at <a href='tel:6172471933'>617-247-1933</a> in the meantime with any questions</p>";
						status.style.display = "block"
						// form.reset(); // Reset form fields after submission
						form.style.display = "none";
						// hide heading / paragraph wrap on success
						$('.wrap').hide();
					} else {
						throw new Error("Network response was not ok.");
					}
				})
				.catch(error => {
					document.getElementById("status").textContent = "Failed to send message, please refresh the page and try again.";
					status.style.display = "block"
					console.error("Error:", error);
				});
		};
	     	
	});


});
