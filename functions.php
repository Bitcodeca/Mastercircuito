<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function prototipo_script_enqueue() {
	//css
     wp_enqueue_style('Bootstrap grid', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
     wp_enqueue_style('Materializecss', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css', array(), '0.97.7', 'all');
     wp_enqueue_style('material icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0', 'all');
     wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.1', 'all');
	
    //js
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), '3.1.0', true);
    wp_enqueue_script('Materialize js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js', array(), '0.97.6', true);
    wp_enqueue_script('Mixitupjs', 'https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js', array(), '2.1.11', true);
    wp_enqueue_script('Mixituppaginationjs',  'http://tseoc.co.uk/chris/jquery.mixitup-pagination.min.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'prototipo_script_enqueue');

function menunavbar() {
	add_theme_support('menus');
    register_nav_menu('admin', 'Barra de navegación');
    register_nav_menu('user', 'Barra lateral');
	}
add_action('init', 'menunavbar');


////////////////////////
// TAXONOMIA SUBGRUPO //
//////////////////////
add_action( 'init', 'taxonomiagrupo', 0 );
function taxonomiagrupo() {
  $labels = array(
    'name' => _x( 'Grupo', 'taxonomy general name' ),
    'singular_name' => _x( 'Grupo', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar grupo' ),
    'all_items' => __( 'Todos los grupos' ),
    'edit_item' => __( 'Editar grupo' ), 
    'update_item' => __( 'Actualizar grupo' ),
    'add_new_item' => __( 'Añadir grupo' ),
    'new_item_name' => __( 'Nuevo grupo' ),
    'menu_name' => __( 'Grupo' ),
  );    
  register_taxonomy('grupo', array('productos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'grupo' ),
  ));

}

////////////////////////
// TAXONOMIA IDIOMA //
//////////////////////
add_action( 'init', 'taxonomiaidioma', 0 );
function taxonomiaidioma() {
  $labels = array(
    'name' => _x( 'Idioma', 'taxonomy general name' ),
    'singular_name' => _x( 'Idioma', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar idioma' ),
    'all_items' => __( 'Todos los idiomas' ),
    'edit_item' => __( 'Editar idioma' ), 
    'update_item' => __( 'Actualizar idioma' ),
    'add_new_item' => __( 'Añadir idioma' ),
    'new_item_name' => __( 'Nuevo idioma' ),
    'menu_name' => __( 'Idioma' ),
  );    
  register_taxonomy('idioma', array('productos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'idioma' ),
  ));

}

//////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////// CUSTOM POST APLICACIONES ////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
function postproducto(){
   $args = array(
   'labels'=> array( 'name'=>'Productos',
       'singular_name'=> 'Productos',
       'menu_name'=>'Productos',
       'name_admin_bar'=> 'Productos',
       'all_items' =>'Ver todas los Productos',
       'add_new'=> 'Añadir nueva Productos' ),
   'description' =>"Este tipo de post es para Productos",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>4,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor' ),
  'taxonomies' => array('grupo', 'idioma'),
   'query_var'=>true,
  );
  register_post_type( "productos", $args );
 }
 add_action("init","postproducto");



if( ! class_exists( 'Materialize_Walker_Desktop_Nav_Menu' ) ) :

    class Materialize_Walker_Desktop_Nav_Menu extends Walker_Nav_Menu {

        private $curItem;

        /**
         * Starts the list before the elements are added.
         *
         * Adds classes to the unordered list sub-menus.
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param array  $args   An array of arguments. @see wp_nav_menu()
         */
        function start_lvl( &$output, $depth = 0, $args = array() ) {

            // Depth-dependent classes.
            $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
            $display_depth = ( $depth + 1); // because it counts the first submenu as 0
            $classes = array(
                'sub-menu',
                ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
                ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
                'menu-depth-' . $display_depth
            );
            $class_names = implode( ' ', $classes );

            // Build HTML for output.
            $output .= "\n" . $indent . '<ul id="' . $this->curItem->post_name . '" class="' . $class_names . ' dropdown-content">' . "\n";
        }

        /**
         * Start the element output.
         *
         * Adds main/sub-classes to the list items and links.
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item   Menu item data object.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param array  $args   An array of arguments. @see wp_nav_menu()
         * @param int    $id     Current item ID.
         */
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            global $wp_query;
            $this->curItem = $item;
            $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

            // Depth-dependent classes.
            $depth_classes = array(
                ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
                ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
                ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
                'menu-item-depth-' . $depth
            );

            $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

            // Passed classes.
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

            // Build HTML.
            $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
            if( in_array( 'menu-item-has-children', $item->classes ) ) {$dropdown='dropdown-button ';}else{$dropdown='';}
            // Link attributes.
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $attributes .= ' class="menu-link ' .$dropdown. ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

            if( in_array( 'menu-item-has-children', $item->classes ) ) 
                $attributes .= ' data-activates="' . $item->post_name . '"';

            // Build HTML output and pass through the proper filter.
            $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                $args->before,
                $attributes,
                $args->link_before,
                apply_filters( 'the_title', $item->title, $item->ID ),
                $args->link_after,
                $args->after
            );
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

endif;
?>