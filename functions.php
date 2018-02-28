
<?php
require_once ('functions/products.php');
add_action('init', 'create_partner');
       function create_partner() {
         $feature_args = array(
            'labels' => array(
             'name' => __( 'partner' ),

             'singular_name' => __( 'partner' ),
             'add_new' => __( 'Add New partner' ),
             'add_new_item' => __( 'Add New partner' ),
             'edit_item' => __( 'Edit partner' ),
             'new_item' => __( 'Add New partner' ),
             'view_item' => __( 'View partner' ),
             'search_items' => __( 'Search partner' ),
             'not_found' => __( 'No partner found' ),
             'not_found_in_trash' => __( 'No partner found in trash' )

           ),

         'public' => true,

         'show_ui' => true,
         'capability_type' => 'post',
         'hierarchical' => false,
         'rewrite' => true,
         'menu_icon' => 'dashicons-image-filter',
         'menu_position' => 15,
         'supports' => array( 'title', 'thumbnail',  'link' ),

       );
    register_post_type('partner',$feature_args);
   }

          function create_legal() {
         $feature_args = array(
            'labels' => array(
             'name' => __( 'legal' ),

             'singular_name' => __( 'legal' ),
             'add_new' => __( 'Add New legal' ),
             'add_new_item' => __( 'Add New legal' ),
             'edit_item' => __( 'Edit legal' ),
             'new_item' => __( 'Add New legal' ),
             'view_item' => __( 'View legal' ),
             'search_items' => __( 'Search legal' ),
             'not_found' => __( 'No legal found' ),
             'not_found_in_trash' => __( 'No legal found in trash' )

           ),

         'public' => true,

         'show_ui' => true,
         'capability_type' => 'post',
         'hierarchical' => false,
         'rewrite' => true,
         'menu_icon' => 'dashicons-media-document',
         'menu_position' => 15,
         'supports' => array( 'title', 'editor','custom-fields', 'thumbnail',  'link' ),

       );
    register_post_type('legal',$feature_args);
   }

   add_action('init', 'create_legal');







add_theme_support( 'post-thumbnails' );
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'primary' ),
      'extra-menu' => __( 'Extra Menu' ),
      'top-menu' => __('top menu')
    )
  );
}
add_action( 'init', 'register_my_menus' );
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"my-sub-menu\">\n";
  }
}add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}


?>
