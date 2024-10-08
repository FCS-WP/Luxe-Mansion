<?php
get_header();
 ?>
<div class="page-404">
	<div class="row small-collapse">

		<div class="small-12 columns">

			<div class="site-content">

				<section class="error-404 not-found">
					<div class="page-title">
						<h1><?php esc_html_e( 'Error 404', 'robeto' ); ?></h1>
						<h4><?php esc_html_e( 'Opps!', 'robeto' ); ?></h4>
					</header>

					<div class="page-content">
						<div class="error-404-description"><?php esc_html_e( 'The page you’re looking for isn’t available.
            Try to search again or use the go back button below.', 'robeto' ); ?></div>
						<div class="error-404-button">
							<a class="button button-with-icon-left" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'robeto' ); ?></a>
						</div>
					</div>
				</section>

			</div>

		</div>

	</div>
</div>
<?php
get_footer();
