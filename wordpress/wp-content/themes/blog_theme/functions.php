<?php

add_action('after_setup_theme', function() {
    // on demande à WP d'injecter une balise <title> dynamique
    // dans le <head> via add_theme_support()
    add_theme_support('title-tag');
  
    register_nav_menus([
        // location (slug name/id) => description
        'navbar-top' => 'Liens de la navigation',
        'navbar-down' => 'Liens de la navigation en bas',
        'navbar-categories' => 'Liens pour les categories'
        // 'navbar-authors' => 'Liens pour les auteurs'
    ]);
});