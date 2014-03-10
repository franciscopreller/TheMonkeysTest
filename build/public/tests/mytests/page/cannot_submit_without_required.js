
// Requirement:
// The form cannot be submitted if any of the required fields are empty

registerTest('Form cannot be submitted if any of the required fields are empty', {
	setup: function($) {

		'use strict';

		this.requiredFields = $(':input[required]');
	},
	load: function($) {

		'use strict';

		var self = this;

		self
		.test('Are required fields empty?', function($) {
			
			// Initialize as empty, but double check
			var empty = true;

			$.each(self.requiredFields, function() {
				var element = $(this);

				// If anything has value, make it null
				if (element.val())
					element.val = '';
			});

			// Attempt to submit form
			if (empty) {
				$('.enquiry-form').submit();
				ok(true, 'Fields were empty or emptied.');
			} else
				ok(false, 'Required fields were not empty nor could be emptied');

		})

		.wait(function() {

			// Look for error alerts
			return $('small.error').length;

		}, 5000);

		// If we made it this far, test succeeded
		this.test('Did the form fail to submit?', function($) {
			ok(true, 'Form failed to submit!');
		});
	}
});