<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function awesome_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fancyboxcss', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '1.0.0', 'all');
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
	wp_enqueue_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '1.0.0', true);
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);
	wp_enqueue_script('fancyboxjs', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

/*
	==========================================
	 Sidebar function
	==========================================
*/
function awesome_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','awesome_widget_setup');

function my_custom_sliders_posttype(){
   $args = array(
   'labels'=> array( 'name'=>'sliders',
       'singular_name'=> 'slider',
       'menu_name'=>'sliders',
       'name_admin_bar'=> 'sliders',
       'all_items' =>'View all sliders',
       'add_new'=> 'Add New sliders' ),
   'description' =>"This post type is for sliders",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt',
    ),
   'query_var'=>true,
  );
  register_post_type( "sliders", $args );
 }
 add_action("init","my_custom_sliders_posttype");

function contactomc(){
   $args = array(
   'labels'=> array( 'name'=>'contactos',
       'singular_name'=> 'contacto',
       'menu_name'=>'contacto',
       'name_admin_bar'=> 'contacto',
       'all_items' =>'Ver todo los contactos',
       'add_new'=> 'Agregar' ),
   'description' =>"Estas publicaciones son para los contactos",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt',
    ),
   'query_var'=>true,
  );
  register_post_type( "contactos", $args );
 }
 add_action("init","contactomc");