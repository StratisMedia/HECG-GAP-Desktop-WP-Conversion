<?php
register_nav_menu( 'primary', 'Primary Menu' );


/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'silverline-script', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));

add_filter( 'author_link', 'my_author_link' );

function my_author_link() {
	return home_url( '?page_id=106' );
}

add_theme_support( 'post-thumbnails' ); 


class Child_Wrap extends Walker_Nav_Menu
{
   function start_lvl(&$output, $depth)
   {
       $indent = str_repeat("\t", $depth);
       $output .= "\n$indent<div class=\"submenu\"><ul class=\"sub-menu\" style=\"margin-top:80px;\">\n";
   }
   function end_lvl(&$output, $depth)
   {
       $indent = str_repeat("\t", $depth);
       $output .= "$indent</ul></div>\n";
   }} 

function my_function_admin_bar(){ 
  return false; 
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


?>