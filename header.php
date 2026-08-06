<?php
/**
 * Header Template
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
    <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo NadBarayad.png" alt="logo">
    </a>
    <nav class="menus">
          <?php
                    wp_nav_menu(array( // Affiche le menu principal
                        'theme_location' => 'header',
                        'container' => false,
                        'menu_class' => 'nav-menu',
                        'menu_id'    => 'nav-menu',
                    ));
                ?>

    </nav>
</header>
  
    <main>

        <h1>Bienvenue</h1>

    </main>




   
    

    
