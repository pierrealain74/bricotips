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

    // Chargement du theme.css du child theme
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/theme.css'));

    // Chargement du banniere-titre.css pour shortcode banniere titre
 /*    wp_enqueue_style('banniere-titre-shortcode', get_stylesheet_directory_uri() . '/assets/css/shortcodes/banniere_titre.css', array(), '1.0'); */

    wp_enqueue_style('banniere-titre-shortcode', get_stylesheet_directory_uri() . '/assets/css/shortcodes/banniere_titre.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/shortcodes/banniere_titre.css'));


   

}

// Ajoute un shortcode 'banniere-titre'
add_shortcode('banniere-titre', 'banniere_titre_func');

// Je génère le html retourné par mon shortcode
function banniere_titre_func($atts)
{
    //Je récupère les attributs mis sur le shortcode
    $atts = shortcode_atts(array(
        'src' => '',
        'titre' => 'Titre'
    ), $atts, 'banniere-titre');

    //Je commence à récupéré le flux d'information
    ob_start();

    if ($atts['src'] != "") {
        ?>

        <div class="banniere" style="background-image: url(<?= $atts['src'] ?>)">
            <h2 class="titre-banniere"><?= $atts['titre'] ?></h2>
        </div>

        <?php
    }

    //J'arrête de récupérer le flux d'information et le stock dans la fonction $output
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
?>