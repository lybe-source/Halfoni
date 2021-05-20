<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'site' ); ?>>

    <?php wp_body_open(); ?>

    <header class="site__header">
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        
        <?php wp_nav_menu(array( 
            'theme_location' => 'main',
            'container' => 'ul',
            'menu_class' => 'site__header__menu',
            'menu_id' => 'main_nav',
            )); ?>
        
    </header>
    