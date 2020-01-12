<script src="js/ekko-lightbox.min.js"></script>
<script>
(function($) {
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
							event.preventDefault();
							$(this).ekkoLightbox();
					});
})( jQuery );
</script>
