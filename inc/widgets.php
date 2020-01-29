<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webet_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'webet' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'webet' ),
		'before_widget' => '<section id="%1$s" class="widget list-type5 %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="side"><h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
		register_sidebar( array(
		  'name' => 'Footer Sidebar 1',
		  'id' => 'footer-sidebar-1',
		  'description' => 'Appears in the footer area',
		  'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		  'after_widget' => '</aside>',
		  'before_title' => '<h3 class="footer-widget-title">',
		  'after_title' => '</h3>',
		  ) );
		register_sidebar( array(
		  'name' => 'Footer Sidebar 2',
		  'id' => 'footer-sidebar-2',
		  'description' => 'Appears in the footer area',
		  'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		  'after_widget' => '</aside>',
		  'before_title' => '<h3 class="footer-widget-title">',
		  'after_title' => '</h3>',
		  ) );
		register_sidebar( array(
		  'name' => 'Footer Sidebar 3',
		  'id' => 'footer-sidebar-3',
		  'description' => 'Appears in the footer area',
		  'before_widget' => '<aside id="%1$s" class="footer-widget %2$s">',
		  'after_widget' => '</aside>',
		  'before_title' => '<h3 class="footer-widget-title">',
		  'after_title' => '</h3>',
		  ) );

}
add_action( 'widgets_init', 'webet_widgets_init' );
