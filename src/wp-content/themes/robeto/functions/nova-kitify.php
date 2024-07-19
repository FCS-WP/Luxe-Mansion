<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

class Nova_Kitify {

  function __construct($settings = []) {
    add_action( 'kitify/wooproduct/loop_action', array( $this, 'custom_loop_action' ), 10 );
  }
  public function custom_loop_action() {
    add_action('woocommerce_before_shop_loop',  'kitify_setup_toolbar' , -999 );
    add_action('woocommerce_before_shop_loop',  'kitify_add_toolbar_open' , 15 );
    add_action('woocommerce_before_shop_loop',  'kitify_add_toolbar_close' , 35 );
		add_action( 'nova_woocommerce_catalog_ordering', 'kitify_add_grid_list_display', 35, 0 );
    remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
    add_action( 'woocommerce_after_shop_loop', [ $this, 'woocommerce_pagination' ], 10 );
  }
  public function woocommerce_pagination(){
      ob_start();
      woocommerce_pagination();
      $output = ob_get_clean();

      $output = str_replace('woocommerce-pagination', 'woocommerce-pagination kitify-pagination clearfix kitify-ajax-pagination', $output);

      echo $output; // PHPCS: XSS ok
  }
}
$Nova_Kitify = new Nova_Kitify;
