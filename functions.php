<?php 

	function relictrio_register_styles(){
        $version = wp_get_theme()->get('Version');
        
		wp_enqueue_style('fonts', get_template_directory_uri()."/assets/css/partials/fonts.css", array(), $version, 'all');
        wp_enqueue_style('grid-layout', get_template_directory_uri()."/assets/css/partials/grid.css", array(), $version, 'all');
        wp_enqueue_style('mixins', get_template_directory_uri()."/assets/css/partials/mixins.css", array(), $version, 'all');
        wp_enqueue_style('reset', get_template_directory_uri()."/assets/css/partials/reset.css", array(), $version, 'all');
        wp_enqueue_style('typography', get_template_directory_uri()."/assets/css/partials/typography.css", array(), $version, 'all');
        wp_enqueue_style('variables', get_template_directory_uri()."/assets/css/partials/variables.css", array(), $version, 'all');
        
		wp_enqueue_style('service-style', get_template_directory_uri()."/assets/css/services.css", array(), $version, 'all');
	}

    add_action('wp_enqueue_scripts', 'relictrio_register_styles');

?>