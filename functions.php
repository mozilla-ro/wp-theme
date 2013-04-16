<?php if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 130, true ); // default Post Thumbnail dimensions (cropped)
}
?>
<?php 
function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length'); 
?>
<?php 
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
<?php remove_action('wp_head', 'wp_generator');?>
<?php add_filter('mce_css', 'my_editor_style');
function my_editor_style($url) {

  if ( !empty($url) )
    $url .= ',';

  // Change the path here if using sub-directory
  $url .= trailingslashit( get_stylesheet_directory_uri() ) . 'editor-style.css';

  return $url;
}
?>
<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name'=>'Sidebar',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar(array('name'=>'Sidebar ( Single Page )',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

register_sidebar(array('name'=>'Sidebar ( Page )',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
?>
<?php
add_filter('widget_tag_cloud_args','style_tags');
function style_tags($args) {
$args = array(
     'largest'    => '10',
     'smallest'   => '10',
     'number'     => '20',
     );
return $args;
}
?>