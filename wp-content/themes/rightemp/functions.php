<?php
if ( ! function_exists( 'ym_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentythirteen_entry_meta() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 */
function ym_entry_meta() {
 if ( is_sticky() && is_home() && ! is_paged() )
  echo '<span class="featured-post">' . __( 'Sticky', 'ym' ) . '</span>';

 if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
  ym_entry_date();

 // Translators: used between list items, there is a space after the comma.
 $categories_list = get_the_category_list( __( ', ', 'ym' ) );
 if ( $categories_list ) {
  echo '<span class="categories-links"> Category: ' . $categories_list . '</span>';
 }

 // Translators: used between list items, there is a space after the comma.
 $tag_list = get_the_tag_list( '', __( ', ', 'ym' ) );
 if ( $tag_list ) {
  echo '<span class="tags-links">' . $tag_list . '</span>';
 }

 // Post author
 if ( 'post' == get_post_type() ) {
  printf( '<span class="author vcard">Author: <a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
   esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
   esc_attr( sprintf( __( 'View all posts by %s', 'ym' ), get_the_author() ) ),
   get_the_author()
  );
 }
}
endif;
if ( ! function_exists( 'ym_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own twentythirteen_entry_date() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function ym_entry_date( $echo = true ) {
 if ( has_post_format( array( 'chat', 'status' ) ) )
  $format_prefix =  _x( '%1$s on %2$s', '1: post format name. 2: date', 'ym' );
 else
  $format_prefix = '%2$s';

 $date = sprintf( '<span class="date">Date: <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
  esc_url( get_permalink() ),
  esc_attr( sprintf( __( 'Permalink to %s', 'ym' ), the_title_attribute( 'echo=0' ) ) ),
  esc_attr( get_the_date( 'c' ) ),
  esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
 );

 if ( $echo )
  echo $date;

 return $date;
}
endif;
function re_widgets_init() {
	
// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
	) );
register_sidebar( array(
		'name'          => __( 'Right Side', 're' ),
		'id'            => 'rightside',
		'description'   => __( 'Right Side', 're' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );		

register_sidebar( array(
'name' => __( 'Call Us', 're' ),
'id' => 'phone',
'description' => __( 'Call Us' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Social link', 'ym' ),
'id' => 'social',
'description' => __( 'Social link' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => __( 'Main Menu', 're' ),
'id' => 'mainmenu',
'description' => __( 'Main Menu' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Homer banner', 're' ),
'id' => 'homerbanner',
'description' => __( 'Homer banner' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'PREVENTATIVE MAINTENANCE', 're' ),
'id' => 'itemthree-a',
'description' => __( 'PREVENTATIVE MAINTENANCE' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'FREE CONSULTATIONS', 're' ),
'id' => 'itemthree-b',
'description' => __( 'FREE CONSULTATIONS' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'MONTHLY SPECIALS', 're' ),
'id' => 'itemthree-c',
'description' => __( 'MONTHLY SPECIALS' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => __( 'Special offer-a', 're' ),
'id' => 'offer-a',
'description' => __( 'Special offer-a' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Special offer-b', 're' ),
'id' => 'offer-b',
'description' => __( 'Special offer-b' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Special offer-c', 're' ),
'id' => 'offer-c',
'description' => __( 'Special offer-c' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Special offer-d', 're' ),
'id' => 'offer-d',
'description' => __( 'Special offer-d' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'What people', 're' ),
'id' => 'whatpeople',
'description' => __( 'What people' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'About text', 're' ),
'id' => 'abouttext',
'description' => __( 'About text' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Link iteam', 're' ),
'id' => 'linkiteam',
'description' => __( 'Link iteam' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Email address', 're' ),
'id' => 'emailaddress',
'description' => __( 'Email address' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Social icon', 're' ),
'id' => 'socialicon',
'description' => __( 'Social icon' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Footer nav', 're' ),
'id' => 'footernav',
'description' => __( 'Footer nav' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Copyright', 're' ),
'id' => 'copyright',
'description' => __( 'Copyright' ),
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

}

add_action( 'widgets_init', 're_widgets_init' );

?>