<?php

//load bootstrap
function enqueue_bootstrap_cdn()
{
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    // Bootstrap JS and its dependencies (Popper.js and Bootstrap's JS)
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js', array('jquery', 'popper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_cdn');


//theme menu
add_theme_support('menus');
add_theme_support('custom-background');
add_theme_support('post-formats');
 
register_nav_menus(
    array(
        'top-menu'=> 'Top menu Location',
        'mobile menu'=> 'Moblie menu Location',
    )
 );

 //side-bar

 function my_custom_sidebar() {
    register_sidebar(array(
        'name'          => 'My Sidebar', 'mytheme',
        'id'            => 'my-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_custom_sidebar');

