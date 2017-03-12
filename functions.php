<?php





function load_styles_and_scripts(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('mainJS', get_template_directory_uri() .'/js/main.js');
    wp_enqueue_style('mainCSS', get_template_directory_uri() .'/css/main.css');
};
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
add_theme_support('post-thumbnails') ;

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>
    */

    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
};


if (function_exists('add_theme_support')) {
    add_theme_support('menus');

};

register_nav_menus( array(
    'top_menu' => 'Меню сверху',
    'footer_menu' => 'Меню в подвале'
) );

