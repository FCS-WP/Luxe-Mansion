<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_filter('kitify/logo/attr/src', 'robeto_kitify_logo_attr_src');
if(!function_exists('robeto_kitify_logo_attr_src')){
    function robeto_kitify_logo_attr_src( $src ){
        if(!$src){
	        $src = esc_url( Nova_OP::getOption('header_logo') );
        }
        return $src;
    }
}

add_filter('kitify/logo/attr/src4l', 'robeto_kitify_logo_attr_src4l');
if(!function_exists('robeto_kitify_logo_attr_src4l')){
    function robeto_kitify_logo_attr_src4l( $src ){
        if(!$src){
	        $src = esc_url( Nova_OP::getOption('header_logo_light') );
        }
        return $src;
    }
}

add_filter('kitify/logo/attr/width', 'robeto_kitify_logo_attr_width');
if(!function_exists('robeto_kitify_logo_attr_width')){
    function robeto_kitify_logo_attr_width( $value ){
        if(!$value){
            $value = esc_html(Nova_OP::getOption('header_logo_width'));
        }
        return $value;
    }
}

add_action('elementor/frontend/widget/before_render', 'robeto_kitify_add_class_into_sidebar_widget');
if(!function_exists('robeto_kitify_add_class_into_sidebar_widget')){
    function robeto_kitify_add_class_into_sidebar_widget( $widget ){
        if('sidebar' == $widget->get_name()){
            $widget->add_render_attribute('_wrapper', 'class' , 'widget-area');
        }

    }
}
add_filter('kitify/nova-menu/control/style', 'robeto_kitify_add_nova_menu_style');
if(!function_exists('robeto_kitify_add_nova_menu_style')){
    function robeto_kitify_add_nova_menu_style(){
        return [
          'default' => esc_html__( 'Default', 'robeto' ),
          'top-line' => esc_html__( 'Top Line', 'robeto' ),
          'bottom-line' => esc_html__( 'Bottom Line', 'robeto' ),
        ];
    }
}
add_filter('kitify/nova-menu-cart/control/preset', 'robeto_kitify_add_nova_cart_style');
if(!function_exists('robeto_kitify_add_nova_cart_style')){
    function robeto_kitify_add_nova_cart_style(){
        return [
          'default' => esc_html__( 'Default', 'robeto' ),
          'robeto' => esc_html__( 'Robeto', 'robeto' ),
        ];
    }
}
add_filter('kitify/banner/control/simple_style', 'robeto_kitify_add_simple_style');
if(!function_exists('robeto_kitify_add_simple_style')){
    function robeto_kitify_add_simple_style(){
        return [
          'none' => esc_html__( 'None', 'robeto' ),
          'cat' => esc_html__( 'Category', 'robeto' ),
        ];
    }
}
add_filter('kitify/banner/control/simple_style', 'robeto_kitify_add_simple_style');
if(!function_exists('robeto_kitify_add_simple_style')){
    function robeto_kitify_add_simple_style(){
        return [
          'none' => esc_html__( 'None', 'robeto' ),
          'cat' => esc_html__( 'Category', 'robeto' ),
        ];
    }
}
add_filter('kitify/banner-list/preset_overlay', 'robeto_kitify_banner_list_overlay_preset');
if(!function_exists('robeto_kitify_banner_list_overlay_preset')){
    function robeto_kitify_banner_list_overlay_preset(){
        return [
          'default' => esc_html__( 'Default', 'robeto' ),
          'hidden_title' => esc_html__( 'Hidden Title', 'robeto' ),
        ];
    }
}
add_filter('kitify/advanced_carousel/control/item_layout', 'robeto_kitify_add_advanced_carousel_item_layout');
if(!function_exists('robeto_kitify_add_advanced_carousel_item_layout')){
    function robeto_kitify_add_advanced_carousel_item_layout(){
        return [
          'banners'   => esc_html__( 'Banners', 'robeto' ),
          'simple'   => esc_html__( 'Simple', 'robeto' ),
          'category'   => esc_html__( 'Category', 'robeto' ),
        ];
    }
}

add_filter('kitify/products/control/grid_style', 'robeto_kitify_add_product_grid_style');
if(!function_exists('robeto_kitify_add_product_grid_style')){
    function robeto_kitify_add_product_grid_style(){
        return [
            '2' => esc_html__('Robeto Style', 'robeto'),
            '3' => esc_html__('Robeto Furniture Style', 'robeto'),
            '1' => esc_html__('Default', 'robeto'),
        ];
    }
}

add_filter('kitify/products/control/list_style', 'robeto_kitify_add_product_list_style');
if(!function_exists('robeto_kitify_add_product_list_style')){
    function robeto_kitify_add_product_list_style(){
        return [
            '1' => esc_html__('Type 1', 'robeto'),
            'mini' => esc_html__('Mini', 'robeto'),
        ];
    }
}
add_filter('kitify/woo-categories/control/preset', 'robeto_kitify_add_woo_categories_style');
if(!function_exists('robeto_kitify_add_woo_categories_style')){
    function robeto_kitify_add_woo_categories_style(){
        return [
          'default' => esc_html__( 'Default', 'robeto' ),
          'robeto-01' => esc_html__( 'Robeto 01', 'robeto' ),
          'robeto-02' => esc_html__( 'Robeto 02', 'robeto' ),
          'robeto-03' => esc_html__( 'Robeto 03', 'robeto' ),
        ];
    }
}
add_filter('kitify/posts/control/preset', 'robeto_kitify_add_posts_preset');
if(!function_exists('robeto_kitify_add_posts_preset')){
    function robeto_kitify_add_posts_preset(){
        return [
          'grid-1' => esc_html__( 'Grid 1', 'robeto' ),
					'grid-2' => esc_html__( 'Grid 2', 'robeto' ),
					'list-1' => esc_html__( 'List 1', 'robeto' ),
					'list-2' => esc_html__( 'List 2', 'robeto' ),
          'robeto-1' => esc_html__( 'Robeto Style', 'robeto' ),
        ];
    }
}
add_filter('kitify/tabs/control/preset', 'robeto_kitify_add_tabs_preset');
if(!function_exists('robeto_kitify_add_tabs_preset')){
    function robeto_kitify_add_tabs_preset(){
        return [
          'default' => esc_html__( 'Default', 'robeto' ),
          'robeto-1' => esc_html__( 'Robeto Style', 'robeto' ),
        ];
    }
}

add_filter('kitify/products/box_selector', 'robeto_kitify_product_change_box_selector');
if(!function_exists('robeto_kitify_product_change_box_selector')){
    function robeto_kitify_product_change_box_selector(){
        return '{{WRAPPER}} ul.products .product-item';
    }
}

add_filter('kitify/posts/format-icon', 'robeto_kitify_change_postformat_icon', 10, 2);
if(!function_exists('robeto_kitify_change_postformat_icon')){
    function robeto_kitify_change_postformat_icon( $icon, $type ){
        return $icon;
    }
}
add_filter('kitify/sidebar/style/sidebar_style', 'robeto_kitify_add_sidebar_style');
if(!function_exists('robeto_kitify_add_sidebar_style')){
    function robeto_kitify_add_sidebar_style(){
        return [
            '1' => esc_html__('Default', 'robeto'),
            '2' => esc_html__('Shop Sidebar', 'robeto'),
        ];
    }
}
add_filter('kitify/wootabs/layout/tabs_layout', 'robeto_kitify_tabs_layout');
if(!function_exists('robeto_kitify_tabs_layout')){
    function robeto_kitify_tabs_layout(){
        return [
            'default' => esc_html__('Default', 'robeto'),
            'tab_left' => esc_html__('Tabs left', 'robeto'),
            'accordion' => esc_html__('Accordion', 'robeto'),
        ];
    }
}
// -----------------------------------------------------------------------------
// Elementor register breakpoint
// -----------------------------------------------------------------------------

if ( ! function_exists( 'robeto_register_breakpoint' ) ) :
function robeto_register_breakpoint(){
  if(defined('ELEMENTOR_VERSION')){
      $has_register_breakpoint = get_option('robeto_has_register_breakpoint', false);
      if(empty($has_register_breakpoint)){
          update_option('elementor_experiment-additional_custom_breakpoints', 'active');
          update_option('elementor_experiment-container', 'active');
          $kit_active_id = Elementor\Plugin::$instance->kits_manager->get_active_id();
          $raw_kit_settings = get_post_meta( $kit_active_id, '_elementor_page_settings', true );
          if(empty($raw_kit_settings)){
            $raw_kit_settings = [];
          }
          $default_settings = [
              'space_between_widgets' => '0',
              'page_title_selector' => 'h1.entry-title',
              'stretched_section_container' => '',
              'active_breakpoints' => [
                  'viewport_mobile',
                  'viewport_mobile_extra',
                  'viewport_tablet',
                  'viewport_tablet_extra',
                  'viewport_laptop',
              ],
              'viewport_mobile' => 767,
              'viewport_md' => 768,
              'viewport_mobile_extra' => 991,
              'viewport_tablet' => 1024,
              'viewport_tablet_extra' => 1279,
              'viewport_lg' => 1280,
              'viewport_laptop' => 1599,
              'system_colors' => [
                [
                  '_id' => 'primary',
                  'title' => esc_html__( 'Primary', 'robeto' )
                ],
                [
                  '_id' => 'secondary',
                  'title' => esc_html__( 'Secondary', 'robeto' )
                ],
                [
                  '_id' => 'text',
                  'title' => esc_html__( 'Text', 'robeto' )
                ],
                [
                  '_id' => 'accent',
                  'title' => esc_html__( 'Accent', 'robeto' )
                ]
              ],
              'system_typography' => [
                [
                  '_id' => 'primary',
                  'title' => esc_html__( 'Primary', 'robeto' )
                ],
                [
                  '_id' => 'secondary',
                  'title' => esc_html__( 'Secondary', 'robeto' )
                ],
                [
                  '_id' => 'text',
                  'title' => esc_html__( 'Text', 'robeto' )
                ],
                [
                  '_id' => 'accent',
                  'title' => esc_html__( 'Accent', 'robeto' )
                ]
              ]
          ];
          $raw_kit_settings = array_merge($raw_kit_settings, $default_settings);
          update_post_meta( $kit_active_id, '_elementor_page_settings', $raw_kit_settings );
          Elementor\Core\Breakpoints\Manager::compile_stylesheet_templates();
          update_option('robeto_has_register_breakpoint', true);
      }
  }
}
endif;
add_action( 'elementor/init', 'robeto_register_breakpoint' );

/**
 * Add support for Elementor Pro locations
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'robeto_register_elementor_locations' ) ) :
  function robeto_register_elementor_locations( $elementor_theme_manager ) {
      $elementor_theme_manager->register_all_core_location();
  }
endif;
// Add support for Elementor Pro locations
add_action( 'elementor/theme/register_locations', 'robeto_register_elementor_locations' );
