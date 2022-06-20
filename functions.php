<?php

/*// chargement  de l'autolaoding de composer
require get_template_directory().'/vendor/autoload.php';*/

// désactive l'édition de fichier dans l'admin
define( 'DISALLOW_FILE_EDIT', true );

/*// activation de la fonctionnalité des balises HTML5
add_theme_support( 'html5' );*/
// activation de la fonctionnalité du titre du site
add_theme_support( 'title-tag' );
// activation de la fonctionnalité des vignettes
add_theme_support( 'post-thumbnails' );
	
function wpct_enqueue_styles() {
	wp_enqueue_style('wpct-style', get_stylesheet_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts', 'wpct_enqueue_styles');
?>