<?php

// Enregistre les deux menus du theme.
function register_my_menu() {
    register_nav_menu( 'header' , 'En tête du menu' );
    register_nav_menu( 'footer' , 'Pied de page' );
}
add_action( 'after_setup_theme', 'register_my_menu' );

  // Charge la feuille de style declaree par WordPress.
 



