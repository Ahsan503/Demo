<?php
 
 register_nav_menus(array('Primary-menu'=>'Top Menu',
                        'Footer-menu'=>'Down Menu'
                    ));


function Theme_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','Theme_resources');


add_theme_support('post-thumbnails');

add_theme_support('custom-header');

add_post_type_support('page','excerpt');

add_theme_support('custom-background');

register_sidebar(
    array(
        'name'=>"sidebar loaction",
        'id'=>'slidebar')
);

register_sidebar(
    array(
        'name'=>"Footer 1",
        'id'=>'sidebar')
);



include_once(get_stylesheet_directory() . '/services.php');


function my_shortcode() 
{

    // daynamic code

    $message="<h2>In today’s era, web development offers a promising job.</h2>";


    echo $message ;

}

//register shortcode


add_shortcode('greeting','my_shortcode');


?>



