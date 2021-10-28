<?php
/**
 * Relictrio Digital functions and definitions
 *
 * @package Relictrio Digital
 */
?>
<?php 

	function relictrio_register_styles(){
        $version = wp_get_theme()->get('Version');
        
		wp_enqueue_style('fonts', get_template_directory_uri()."/assets/css/partials/fonts.css", array(), $version, 'all');
        wp_enqueue_style('grid-layout', get_template_directory_uri()."/assets/css/partials/grid.css", array(), $version, 'all');
        wp_enqueue_style('mixins', get_template_directory_uri()."/assets/css/partials/mixins.css", array(), $version, 'all');
        wp_enqueue_style('reset', get_template_directory_uri()."/assets/css/partials/reset.css", array(), $version, 'all');
        wp_enqueue_style('typography', get_template_directory_uri()."/assets/css/partials/typography.css", array(), $version, 'all');
        wp_enqueue_style('variables', get_template_directory_uri()."/assets/css/partials/variables.css", array(), $version, 'all');
        wp_enqueue_style('media', get_template_directory_uri()."/assets/css/media.css", array(), $version, 'all');
        wp_enqueue_style('home-style', get_template_directory_uri()."/assets/css/home.css", array(), $version, 'all');
        wp_enqueue_style('services-style', get_template_directory_uri()."/assets/css/services.css", array(), $version, 'all');
        wp_enqueue_style('preLive-style', get_template_directory_uri()."/assets/css/preLive.css", array(), $version, 'all');
        wp_enqueue_style('rozgarkart-style', get_template_directory_uri()."/assets/css/portfolio_rozgarkart.css", array(), $version, 'all');
        
        wp_enqueue_script( 'jquery-min', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), false );
        wp_enqueue_script( 'menu-bar', get_template_directory_uri()."/assets/js/menubar.js", array(), false );
    }

    add_action('wp_enqueue_scripts', 'relictrio_register_styles');

?>