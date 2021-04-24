<?php

// Load Stylesheets
function load_stylesheets()
{

	wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css' , array(), false, 'all');
	wp_enqueue_style('bootstrap');


	wp_register_style('main', get_template_directory_uri() .'/css/main.css' , array(), false, 'all');
	wp_enqueue_style('main');

	
}


add_action('wp_enqueue_scripts', 'load_stylesheets');


// Load Javascript

function include_jquery()
{

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery' , get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true);

	add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');





function loadjs() {


	wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true );
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


// Theme Options

add_theme_support('menus');

add_theme_support('post-thumbnails');

add_theme_support('widgets');

// Menus
register_nav_menus(

	array(

		'top-menu' =>'Top menu', 'theme',
		'footer-menu' =>'Top menu', 'theme',
		'mobile-menu'=>'Mobile Menu Location',

	)

);


add_image_size('smallest' , 300, 300, true);
add_image_size('largest' , 800, 800, true);





// Register Sidebars
function my_sidebars()

{
	register_sidebar(

				array(

					'name' => 'Page Sidebar',
					'id' => 'page-sidebar',
					'before_title' => '<h4 class="widget-title">',
					'after_title' => '</h4>'




					)


	);

	register_sidebar(

		array(

					'name' => 'Blog Sidebar',
					'id' => 'blog-sidebar',
					'before_title' => '<h4 class="widget-title">',
					'after_title' => '</h4>'




					)


	);


}

add_action('widgets_init' , 'my_sidebars');






