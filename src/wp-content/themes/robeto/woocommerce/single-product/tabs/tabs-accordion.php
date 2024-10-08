<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
if ( ! empty( $tabs ) ) : ?>
<div class="nova-woocommerce-tabs">
	<ul class="tabs" data-responsive-accordion-tabs="tabs small-accordion medium-accordion large-accordion" data-allow-all-closed="true" id="single_product_tab">
		<?php $i = 0 ?>
		<?php foreach ( $tabs as $key => $tab ) : ?>
	  <li class="tabs-title"><a href="#panel_<?php echo esc_attr( $key ); ?>"<?php if($i == 0):?> aria-selected="true"<?php endif ?>><span><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></span></a></li>
		<?php $i ++ ?>
		<?php endforeach; ?>
	</ul>
	<div class="tabs-content" data-tabs-content="single_product_tab">
		<?php $j = 0 ?>
		<?php foreach ( $tabs as $key => $tab ) : ?>
	  <div class="tabs-panel<?php if($j == 0):?> is-active<?php endif ?>" id="panel_<?php echo esc_attr( $key ); ?>">
			<?php
			if ( isset( $tab['callback'] ) ) {
				call_user_func( $tab['callback'], $key, $tab );
			}
			?>
	  </div>
		<?php $j ++ ?>
		<?php endforeach; ?>
		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>
</div>
<?php endif; ?>
