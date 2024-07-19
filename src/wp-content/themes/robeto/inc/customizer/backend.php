<?php

if ( NOVA_KIRKI_IS_ACTIVE ) {

  require_once(get_template_directory() .'/inc/customizer/backend/index.php');
  require_once(get_template_directory() .'/inc/customizer/backend/go-to-page.php');

  require_once(get_template_directory() .'/inc/customizer/backend/global/index.php');
	require_once(get_template_directory() .'/inc/customizer/backend/header/index.php');
	require_once(get_template_directory() .'/inc/customizer/backend/fonts/index.php');
  require_once(get_template_directory() .'/inc/customizer/backend/styles/index.php');
  require_once(get_template_directory() .'/inc/customizer/backend/blog/index.php');
	require_once(get_template_directory() .'/inc/customizer/backend/footer/index.php');
	require_once(get_template_directory() .'/inc/customizer/backend/social/index.php');
	require_once(get_template_directory() .'/inc/customizer/backend/social-share/index.php');
	require_once(get_template_directory() .'/inc/customizer/backend/404/index.php');

	if (NOVA_WOOCOMMERCE_IS_ACTIVE) {
		require_once(get_template_directory() .'/inc/customizer/backend/shop/index.php');
		require_once(get_template_directory() .'/inc/customizer/backend/product/index.php');
	}
}
