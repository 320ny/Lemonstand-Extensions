jQuery(document).ready(function($) {
	// LOAD ORGINAL BACKGROUND COLORS
	$("body").delegate('#option-matrix-popup', 'focusout', function(event) {
		reload_colors();

		// CHNAGE COLORS WHEN NEEDED
		$("#option_matrix_form").delegate('td.key', 'focusout', function(event) {
		//	reload_colors();
		});
	
		// ADD COLORS TO SELECTS
		$('#option-matrix-popup ul.chzn-results li.active-result').each(function() {
			var value = $(this).html();
			console.log(value);	
			$(this).css('background-color', value);
		});

		$('body').undelegate('#option-matrix-popup', 'focus');

	});	

	function reload_colors() {
		$('#option_matrix_form td.key').each(function(){
			var value = $(this).find('.cell-value').val();
			console.log(value);
			$(this).css('background-color', value);
		});
	}

});
