<?php

function halfoni__theme_supports() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(array(
        'main' => 'Menu principal',
        'footer' => 'Pied de page'
    ));

    add_image_size('product', 800, 600, false);
    add_image_size('card-header', 295, 340, false);
    add_image_size('card-header_support', 195, 240, false);
    add_image_size('url_image', 250, 750, false);
    add_image_size('social_link', 50, 50, false);
    add_image_size('cookies', 35, 33, false);
}


function hafloni_document_title_parts($title) {
    unset($title['tagline']);
    return $title;
}


function halfoni_register_assets() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);

    wp_enqueue_style('halfoni_main_css', get_template_directory_uri() . '/assets/css/Halfoni-main.css', [], '1.0');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');

    //wp_enqueue_script('nav-responsive', get_template_directory_uri() . '/assets/js/nav-responsive.js', ['font-awesome'], '1.0', true);
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/de3b210da5.js', [], false, true);
}

function halfoni__register_custom_post_type() {
    $labels = array(
        'name' => 'Boutique',
        'all_items' => 'Boutique IRL',
        'singular_name' => 'Shop',
        'add_new' => _x('Ajouter', 'Objet'),
        'add_new_item' => __('Ajouter un objet'),
        'edit_item' => 'Modifier l\'objet',
        'menu_name' => 'Boutique',
        'capabilities' => array(
            'edit_post'          => 'edit_object', 
            'read_post'          => 'read_object', 
            'delete_post'        => 'delete_object', 
            'edit_posts'         => 'edit_objects',
            'edit_published_posts' => 'edit_plushish_object', 
            'publish_posts'      => 'publish_objects',       
            'create_posts'       => 'edit_objects',
        ),
        'hierarchical' => true,
    );

    $args = array(
        'labels' => $labels,
        'taxonomies' => array('category', 'post_tag'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart'
    );

    register_post_type('shop', $args);

    }


add_action('after_setup_theme', 'halfoni__theme_supports');
add_action('document_title_parts', 'hafloni_document_title_parts');
add_action('wp_enqueue_scripts', 'halfoni_register_assets');
add_action('init', 'halfoni__register_custom_post_type');
