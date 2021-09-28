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
        
		wp_enqueue_style('fonts', get_template_directory_uri()."/clientlib-base/css/partials/fonts.css", array(), $version, 'all');
        wp_enqueue_style('grid-layout', get_template_directory_uri()."/clientlib-base/css/partials/grid.css", array(), $version, 'all');
        wp_enqueue_style('mixins', get_template_directory_uri()."/clientlib-base/css/partials/mixins.css", array(), $version, 'all');
        wp_enqueue_style('reset', get_template_directory_uri()."/clientlib-base/css/partials/reset.css", array(), $version, 'all');
        wp_enqueue_style('typography', get_template_directory_uri()."/clientlib-base/css/partials/typography.css", array(), $version, 'all');
        wp_enqueue_style('variables', get_template_directory_uri()."/clientlib-base/css/partials/variables.css", array(), $version, 'all');
        wp_enqueue_style('media', get_template_directory_uri()."/clientlib-base/css/media.css", array(), $version, 'all');
        wp_enqueue_style('home-style', get_template_directory_uri()."/clientlib-base/css/home.css", array(), $version, 'all');
        wp_enqueue_script('slider', get_template_directory_uri()."/clientlib-base/js/slider.js", array(), $version, 'all');
		
	}

    add_action('wp_enqueue_scripts', 'relictrio_register_styles');

?>