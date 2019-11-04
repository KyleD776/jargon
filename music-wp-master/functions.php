<?php

if (!function_exists('music_setup')) {
    // wordpress functionality
    function music_setup()
    {
        add_theme_support('title_tag');
        
    }

}

add_theme_support("after_setup", "music_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);

function music_styles()
{
    wp_enqueue_style('music_reboot', get_template_directory_uri() . '/assets/css/reboot.css');
    wp_enqueue_style('music_fonts', "https: //fonts.googleapis.com/css?family=Montserrat:400,700|PT+Sans:400,700|Roboto:400,700&display=swap");
    wp_enqueue_style('music_styles', get_stylesheet_uri());
}

function music_scripts()
{
    wp_enqueue_script('music_nav', get_template_directory_uri() . '/assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'music_styles');
add_action('wp_enqueue_scripts', 'mobile_nav');

?>
