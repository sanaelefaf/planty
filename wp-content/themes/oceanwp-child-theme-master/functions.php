<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */


function ocean_child_Support() {
	add_theme_support('menus');
	register_nav_menu('header','main');
	register_nav_menu('footer', 'Pied de page');

}

function montheme_menu_class(array $classes): array
{ $classes[] = 'nav-item';
return $classes;	
}

function montheme_menu_link_class(array $attrs): array 
{
    $sattrs['class'] = 'nav-link';
    return $attrs;
}


add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
add_filter('nav_menu_css_class','montheme_menu_class');

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2 );
function ajouter_lien_admin_menu( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == 'main_menu' ) {
        // Recherche de la position du lien "Commander"
        $pos = strpos( $items, '<li id="menu-item-1067"' );

        // Ajout du lien "Admin" avant le lien "Commander"
        $items = substr_replace( $items, '<li><a href="' . admin_url() . '">Admin</a></li>', $pos, 0 );
    }
    return $items;
}
