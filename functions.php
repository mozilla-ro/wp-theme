<?php add_theme_support('post-thumbnails'); ?>
<?php set_post_thumbnail_size( 200, 130 ); // 200 pixels wide by 130 pixels tall, resize mode
?>
<?php 
function new_excerpt_length($length) {
	return 70;
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
'name' => 'Sidebar',
'before_widget' => '<aside class="widget%1$s" id="%2$s">',
'after_widget' => '</aside>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

register_sidebar(array('name'=>'Sidebar ( Single Page )',
'before_widget' => '<aside class="widget%1$s" id="%2$s">',
'after_widget' => '</aside>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
?>