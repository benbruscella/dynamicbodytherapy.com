<?php

// Register widgetized areas

function the_widgets_init() {
    if ( !function_exists('register_sidebars') )
        return;

    register_sidebars(1,array('name' => 'Blog Sidebar','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
    register_sidebars(3,array('name' => 'Blog Footer %d','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
    register_sidebars(3,array('name' => 'Front Footer %d','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
    
    
/* More Sidebars... if you feel the need.
    register_sidebar(array('name' => 'Sidebar 1','id' => 'sidebar-2','before_widget' => '<div id="%1$s" class="block widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
    register_sidebar(array('name' => 'Footer 1','id' => 'footer-1','before_widget' => '<div id="%1$s" class="block widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
    register_sidebar(array('name' => 'Footer 2','id' => 'footer-2','before_widget' => '<div id="%1$s" class="block widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
    register_sidebar(array('name' => 'Footer 3','id' => 'footer-3','before_widget' => '<div id="%1$s" class="block widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
    register_sidebar(array('name' => 'Footer 4','id' => 'footer-4','before_widget' => '<div id="%1$s" class="block widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
*/
}

add_action( 'init', 'the_widgets_init' );


    
?>