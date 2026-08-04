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
<header>
    <nav class="menus">
        <a href="accueil.php">Accueil</a>
        <a href="a-propos.php">À propos</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="contact.php">Contact</a>

    </nav>
</header>
  
    <main>

        <h1>Bienvenue</h1>

    </main>




   
    

    
