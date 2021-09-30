<?php 

    function relictrio_register_styles(){

        $version = wp_get_theme()->get('Version');

        wp_enqueue_style('relictrio-fonts-style', get_template_directory_uri()."/assets/css/partials/fonts.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-grid-style', get_template_directory_uri()."/assets/css/partials/grid.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-mixins-style', get_template_directory_uri()."/assets/css/partials/mixins.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-reset-style', get_template_directory_uri()."/assets/css/partials/reset.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-typography-style', get_template_directory_uri()."/assets/css/partials/typography.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-variables-style', get_template_directory_uri()."/assets/css/partials/variables.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-media-style', get_template_directory_uri()."/assets/css/partials/media.css", array(), $version, 'all');

        wp_enqueue_style('relictrio-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_banner-style', get_template_directory_uri()."/assets/css/A_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_leadership-style', get_template_directory_uri()."/assets/css/A_leadership.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-footer-style', get_template_directory_uri()."/assets/css/footer.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_wanttoknow-style', get_template_directory_uri()."/assets/css/A_wanttoknow.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_whyus-style', get_template_directory_uri()."/assets/css/A_whyus.css", array(), $version, 'all');

    }

    add_action('wp_enqueue_scripts', 'relictrio_register_styles');
    
?>