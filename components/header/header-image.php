<?php
		// You can upload a custom header and it'll output in a smaller logo size.
		$header_image = get_header_image();

		if ( ! empty( $header_image ) ) { ?>
			<div id="header-image" class="custom-header">
				<div class="header-wrapper">
					<div class="site-branding">
					</div><!-- .site-branding -->
				</div><!-- .header-wrapper -->
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
			</div><!-- #header-image .custom-header -->
		<?php } else { ?>
			<div class="site-branding">
			</div><!-- .site-branding -->
		<?php } ?>