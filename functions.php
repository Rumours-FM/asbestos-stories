<?php
function load_my_scripts() {
    wp_enqueue_style( 'bootstrap_css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
  wp_enqueue_script( 'boot1','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js', array('jquery'));
  wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js', array('jquery'));
  wp_enqueue_script( 'boot3','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'));
  
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'test', get_stylesheet_directory_uri() . '/responsive.css' );

}
add_action( 'wp_enqueue_scripts', 'load_my_scripts');
?>
<?php
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>
<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'top-menu' ),
) );
?>
<?php
add_theme_support('post-thumbnails'); 
?>
<?php
function asbestosstoriessite_setup_theme_supported_features() {
  add_theme_support('align-wide');

  add_theme_support('disable-custom-colors');
  add_theme_support( 'editor-color-palette', array(
    array(
      'name'  => esc_attr__( 'navy blue', 'asbestosstoriessite' ),
      'slug'  => 'navy-blue',
      'color' => '#0F2F5E',
    ),
    array(
      'name'  => esc_attr__( 'blue', 'asbestosstoriessite' ),
      'slug'  => 'blue',
      'color' => '#5E98E3',
    ),
    array(
      'name'  => esc_attr__( 'gray blue', 'asbestosstoriessite' ),
      'slug'  => 'gray-blue',
      'color' => '#CFD5DF',
    ),
    array(
      'name'  => esc_attr__( 'yellow', 'asbestosstoriessite' ),
      'slug'  => 'yellow',
      'color' => '#F0CC76',
    ),
    array(
      'name'  => esc_attr__( 'cream', 'asbestosstoriessite' ),
      'slug'  => 'cream',
      'color' => '#FFEFC8',
    ),
    array(
      'name'  => esc_attr__( 'gray yellow', 'asbestosstoriessite' ),
      'slug'  => 'gray-yellow',
      'color' => '#F9F7F1',
    ),

) );


}

add_action( 'after_setup_theme', 'asbestosstoriessite_setup_theme_supported_features' );
?>