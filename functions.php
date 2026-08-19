<?php
//Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title_tag');

// Enregistre les deux menus du theme.
function register_my_menu() {
    register_nav_menu( 'header' , 'En tête du menu' );
    register_nav_menu( 'footer' , 'Pied de page' );
}
add_action( 'after_setup_theme', 'register_my_menu' );

  // Charge la feuille de style declaree par WordPress.
 


function nadbarayad_enqueue_assets() {

    // Feuille de style principale
    wp_enqueue_style(
        'nadbarayad-style',
        get_template_directory_uri() . '/assets/sass/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Fichier JavaScript
    wp_enqueue_script(
        'nadbarayad-script',
        get_template_directory_uri() . '/assets/sass/js/script.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

}

add_action( 'wp_enqueue_scripts', 'nadbarayad_enqueue_assets' );


