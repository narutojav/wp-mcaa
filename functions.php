<?php
// require_once('td_deploy_mode.php');
// require_once('includes/td_config.php');
// add_action('td_global_after', array('td_config', 'on_td_global_after_config'), 9); //we run on 9 priority to allow plugins to updage_key our apis while using the default priority of 10
// require_once('includes/wp_booster/td_wp_booster_functions.php');
// require_once('includes/shortcodes/td_misc_shortcodes.php');
// require_once('includes/widgets/td_page_builder_widgets.php'); // widgets
// require_once('mobile/includes/td_css_generator_mob.php');
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
             $classes[] = 'active';
     }
     return $classes;
}
add_action("admin_menu", "setup_theme_admin_menus");
function setup_theme_admin_menus() {
  add_menu_page('Theme settings', 'MCAA', 'manage_options',
       'tut_theme_settings', 'theme_settings_page');
   add_submenu_page('tut_theme_settings',
       'Front Page Elements', 'Front Page', 'manage_options',
       'front-page-elements', 'theme_front_page_settings');
}
function theme_settings_page() {
  function logo_display()
  {
      ?>
          <input type="hidden" name="ologo" value="<?php echo get_option('logo'); ?>" readonly /><input type="file" name="logo" id="imgupload" style="display: none;" />
    <a id="OpenImgUpload" class="button button-primary">Image Upload</a>
          <?php echo get_option('logo'); ?>
     <?php
  }
  function handle_logo_upload()
  {
      if(isset($_FILES["logo"]) && !empty($_FILES['logo']['name']))
      {
          $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
          $temp = $urls["url"];
         return $temp;
      }
   elseif(isset($_FILES["logo"]) && empty($_FILES['logo']['name'])){
    $urls = $_POST["ologo"];
    return $urls;
   }
     return $option;
  }
  function display_theme_panel_fields()
  {
      add_settings_section("section", "All Settings", null, "theme-options");
      add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");
      register_setting("section", "logo", "handle_logo_upload");
  }
  add_action("admin_init", "display_theme_panel_fields");
}
function theme_front_page_settings() {
?>
<script type="text/javascript">
    var elementCounter = 0;
    jQuery(document).ready(function() {
        jQuery("#add-featured-post").click(function() {
            var elementRow = jQuery("#front-page-element-placeholder").clone();
            var newId = "front-page-element-" + elementCounter;
            elementRow.attr("id", newId);
            elementRow.show();
            var inputField = jQuery("select", elementRow);
            inputField.attr("name", "element-page-id-" + elementCounter);
            var labelField = jQuery("label", elementRow);
            labelField.attr("for", "element-page-id-" + elementCounter);
            elementCounter++;
            jQuery("input[name=element-max-id]").val(elementCounter);
            jQuery("#featured-posts-list").append(elementRow);
            return false;
        });
    });
</script>
<div class="wrap">
    <?php screen_icon('themes'); ?> <h2>Front page elements</h2>
    <form method="POST" action="">
        <table class="form-table">
            <tr valign="top">
                <th scope="row">
                    <label for="num_elements">
                        Number of elements on a row:
                    </label>
                </th>
                <td>
                    <input type="text" name="num_elements" size="25" />
                </td>
            </tr>
        </table>
        <h3>Featured posts</h3>
        <ul id="featured-posts-list">
        </ul>
        <input type="hidden" name="element-max-id" />
        <a href="#" id="add-featured-post">Add featured post</a>
    </form>
    <li class="front-page-element" id="front-page-element-placeholder"
        style="display:none;">
        <label for="element-page-id">Featured post:</label>
        <select name="element-page-id">
            <?php foreach ($posts as $post) : ?>
                <option value="<?php echo $post->ID; ?>">
                    <?php echo $post->post_title; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <a href="#">Remeove</a>
    </li>
</div>
<?php
}
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
