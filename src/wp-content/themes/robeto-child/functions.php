<?php //Start building your awesome child theme functions

add_action('wp_enqueue_scripts', 'robeto_enqueue_styles', 100);
function robeto_enqueue_styles()
{
    wp_enqueue_style('robeto-child-styles',  get_stylesheet_directory_uri() . '/style.css', array('nova-robeto-styles'), wp_get_theme()->get('Version'));
}


/*
 * Define Variables
 */
if (!defined('THEME_DIR'))
    define('THEME_DIR', get_template_directory());
if (!defined('THEME_URL'))
    define('THEME_URL', get_template_directory_uri());


/*
 * Include framework files
 */
foreach (glob(THEME_DIR . '-child' . "/includes/*.php") as $file_name) {
    require_once($file_name);
}
