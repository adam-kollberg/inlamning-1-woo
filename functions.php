<?php

use Automattic\WooCommerce\Blocks\Domain\Bootstrap;


// Creates functions that will make it possible to connect all the styles and scripts
function add_css()
{
   wp_enqueue_style('first', get_stylesheet_directory_uri() . '/css/style.css', array('bootstrap'), 1.0,'all');

   wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(),1.0,'all');

   wp_enqueue_style('awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css', array(), 1.0, 'all');


}

// action so the function can run
add_action('wp_enqueue_scripts', 'add_css');


function add_script()
{
   wp_enqueue_script('js-script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array ( 'jquery' ), 1.1, true);

  
  
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );


// A menu function that works in wordpress admin
function register_my_menus() {
    register_nav_menus(
      array(
        'home' => __( 'Header Menu', 'text_domain' ),
        'mobile' => ('Mobile Menu'),
        'secondMenu' => __('SidebarMenu', 'text_domain'),
        'sidebarMenu' => __('sidebar1Menu', 'text_domain')
      )
    );
  }
  
  add_action( 'init', 'register_my_menus' );


  //create a function that will add feature imaage support
  function add_thumbnails(){
    
    add_theme_support('post-thumbnails');
  }

  add_action ('after_setup_theme', 'add_thumbnails');

 
// using a widget init hook to hook custom function, call the register sidebar ( the widget is created as a option inside appearance in wordpress)