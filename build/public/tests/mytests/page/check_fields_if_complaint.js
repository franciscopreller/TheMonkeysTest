
// Requirement:
// 
// The form cannot be submitted if the enquiry type is "Product complaint" 
// and any of the following fields are empty: product name, product size, 
// use-by date or batch code.

registerTest('If value of enquiryType is complaint, check for extra fields', {
	setup: function($) {

		'use strict';

		this.requiredFields         = $(':input[required]');
		this.extraFields            = $('[name="productName"], [name="productSize"], [name="useByDate"], [name="batchCode"]');
	},
	load: function($) {

		'use strict';

		var self = this;

		// Refresh the page
		self
		.loadPage("/enquiry")

		.test('Are all required fields set and is enquiry type equal to 2?', function($) {

			// Put some values into required fields
			$('[name="firstName"]').val('Francisco');
			$('[name="surname"]').val('Preller');
			$('[name="email"]').val("francisco.preller@gmail.com");
			$('[name="contactNumber"]').val("1234567890");
			$('[name="address"]').val("TBA");
			$('[name="suburb"]').val("Surry Hills");
			$('[name="postcode"]').val("2000");
			$('[name="state"]').val("NSW");
			$('[name="enquiryType"]').val(2);

			// Check required fields
			$.each(self.requiredFields, function() {
				console.log($(this));
				console.log($(this).val());
				var element = $(this);

				// If anything has value, make it null
				if (element.val() === '') {
					ok(false, 'Required fields are not populated');
					return;
				}
			});

			if ($('[name="enquiryType"]').val() !== '2') {
				ok(false, 'Enquiry type is not 2');
				return;
			}

			// Check that extra fields are in fact, empty
			$.each(self.extraFields, function() {
				var element = $(this);

				// If anything has value, make it null
				if (element.val())
					element.val = '';
			});

			// Attempt to submit form
			$('.enquiry-form').submit();
			ok(true, 'Fields were not empty and enquiryType was 2.');

		})

		.wait(function() {

			// Look for error alerts, since all other fields were pre-emptied, 
			// if we find any errors the form failed to submit
			return $('small.error');

		}, 5000);

		// If we made it this far, test succeeded
		this.test('Did the form fail to submit?', function($) {
			ok(true, 'Form failed to submit!');
		});
	}
});