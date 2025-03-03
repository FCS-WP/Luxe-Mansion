<?php

//Register sidebar for website
if (function_exists("register_sidebar")) {
  register_sidebar();
}

function enqueue_wc_cart_fragments()
{
  wp_enqueue_script('wc-cart-fragments');
}
add_action('wp_enqueue_scripts', 'enqueue_wc_cart_fragments');

//function display name category in loop product elementor
function display_specific_parent_category_in_loop()
{
  global $product;

  $categories = get_the_terms($product->get_id(), 'product_cat');

  if (!empty($categories) && !is_wp_error($categories)) {
    foreach ($categories as $category) {
      $current_category = $category;
      while ($current_category->parent != 0) {
        $parent_category = get_term($current_category->parent, 'product_cat');

        if (!is_wp_error($parent_category)) {
          if ($parent_category->parent == 0) {
            echo '<div class="name-category-in-loop"><span>' . esc_html($current_category->name) . '</span></div>';
            return;
          }
        }
        $current_category = $parent_category;
      }

      if ($category->parent == 0) {
        echo '<div class="name-category-in-loop"><span>' . esc_html($category->name) . '</span></div>';
        return;
      }
    }
  }
}
add_action('woocommerce_after_shop_loop_item', 'display_specific_parent_category_in_loop', 15);

function custom_coupon_success_message($message, $message_code, $coupon)
{
  if ($message_code === WC_Coupon::WC_COUPON_SUCCESS) {
    $coupon_description = $coupon->get_description() ?? '';
    return "Coupon applied successfully! </br> Promo Code: " . strtoupper(esc_html($coupon->get_code())) . "</br> Promotion mechanics: " . $coupon_description;
  }
  return $message;
}
add_filter('woocommerce_coupon_message', 'custom_coupon_success_message', 10, 3);

function custom_div_below_payment_method()
{
  echo '<div class="custom-checkout-message">
      <div role="button" class="term-toggle-btn">
        <a>Terms & Conditions</a>
        <span class="toggle-icon open">&#8853;</span>
      </div>
      <div class="term-collapse" style="display: none;">
        <ol>
          <li>Offer valid for first-time clients only.</li>
          <li>Minimum spend of $600 and maximum spend of $5,999 required to qualify for the $60 discount.</li>
          <li>Discount applies to a single transaction only and cannot be combined with other promotions or discounts.</li>
          <li>Offer is non-transferable and cannot be exchanged for cash or credit.</li>
          <li>Valid for a limited time only. The company reserves the right to amend or cancel the promotion at any time without prior notice.</li>
        </ol>
      </div>
  </div>';
}
add_action('woocommerce_review_order_before_payment', 'custom_div_below_payment_method');

function custom_checkout_promo_message()
{
?>
  <div class="custom-promo-message">
    <div class="promo-message">
      <p>Enjoy $60 OFF your first purchase when you spend $600 - $5,999!</p>
      <p>Promo Code: <strong>LMSG60</strong></p>
    </div>
  </div>
<?php
}
add_action('woocommerce_before_checkout_form', 'custom_checkout_promo_message', 5);
