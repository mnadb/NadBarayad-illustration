<?php
/**
 * Template Name: Header
 *
 * @package WordPress
 * @subpackage NadBarayad
 * @since 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<header class="header">   
    <nav class="menus">

       

        <!-- Menu WordPress -->
        <div class="navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'menu_id'        => 'nav-menu',
            ));
            ?>
        </div>
        <!-- Bouton hamburger -->
        <button 
            class="menu-toggle" 
            aria-controls="nav-menu" 
            aria-expanded="false"
            aria-label="Ouvrir le menu"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
</header>

  
   




   
    

    

