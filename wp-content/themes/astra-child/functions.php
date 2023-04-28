<?php

/**
 * Child Astra functions and definitions
 *
 */

// Hook qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'astrachild_enqueue_styles');
function astrachild_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/unminified/theme.css du child theme
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/unminified/theme.css', array(), '1.0');
}

//ajout theme.json du theme enfant -- NE FONCTIONNE PAS
/* add_action( 'after_setup_theme', 'montheme_add_theme_support' );
function montheme_add_theme_support() {
    add_theme_support( 'editor-color-palette' );

    $theme_json = get_theme_file_path( 'theme.json' );

    if ( file_exists( $theme_json ) ) {
        $theme_json_data = json_decode( file_get_contents( $theme_json ), true );
        if ( isset( $theme_json_data['settings']['colors']['palette-planty'] ) && is_array( $theme_json_data['settings']['colors']['palette-planty'] ) ) {
            $colors = array();
            foreach ( $theme_json_data['settings']['colors']['palette-planty'] as $color ) {
                $colors[] = array(
                    'name'  => $color['name'],
                    'slug'  => $color['slug'],
                    'color' => $color['color'],
                );
            }
            add_theme_support( 'editor-color-palette', $colors );
        }
    }
}
 */