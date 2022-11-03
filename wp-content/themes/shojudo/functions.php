<?php

/**
 * Table of Contents:
 * Register Styles
 * Register Script
 */

//REGISTER AND ENQUEUE STYLES
function enqueue_styles()
{
    wp_enqueue_style('template-style', get_template_directory_uri() . '/release/css/style.css', '', '', false);
    wp_enqueue_style('yakuhan-style', 'https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp-noto.min.css', '', false);
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css', '', false);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

//REGISTER AND ENQUEUE SCRIPTS
function load_scripts()
{
    wp_enqueue_script('template-jq', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', '', true);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', '', '', true);
    wp_enqueue_script('matchHeight-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', '', '', true);
    wp_enqueue_script('template-main', get_template_directory_uri() . '/release/js/common.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');
//CUSTOM POST TYPE Banner
function cptui_register_my_cpts_banner()
{

    /**
     * Post Type: Banners.
     */

    $labels = [
        "name" => __("Banners", "shojudo"),
        "singular_name" => __("Banner", "shojudo"),
    ];

    $args = [
        "label" => __("Banners", "shojudo"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "banner", "with_front" => true],
        "query_var" => true,
        "menu_position" => 6,
        "supports" => ["title", "editor", "thumbnail", "excerpt"],
        "show_in_graphql" => false,
    ];

    register_post_type("banner", $args);
}
add_action('init', 'cptui_register_my_cpts_banner');

add_theme_support('post-thumbnails', array('banner','product','technology','digital'));
add_image_size('banner-feature', 450, 300, true);


function redirect_cf7()
{
?>
<script type="text/javascript">
document.addEventListener('wpcf7mailsent', function(event) {
    location = 'https://shojudo.com/thanks';
}, false);
</script>
<?php
}
