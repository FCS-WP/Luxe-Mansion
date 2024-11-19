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
function display_specific_parent_category_in_loop() {
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



