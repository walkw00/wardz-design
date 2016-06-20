
jQuery(function() {
	jQuery.scrollify({
		section:".panel"
	});

	jQuery(".scroll,.scroll-btn").click(function(e) {
		e.preventDefault();

		jQuery.scrollify.next();
	});

	
});
