<?php 

    function relictrio_register_styles(){

        $version = wp_get_theme()->get('Version');

        #Partials
        wp_enqueue_style('relictrio-fonts-style', get_template_directory_uri()."/assets/css/partials/fonts.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-grid-style', get_template_directory_uri()."/assets/css/partials/grid.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-mixins-style', get_template_directory_uri()."/assets/css/partials/mixins.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-reset-style', get_template_directory_uri()."/assets/css/partials/reset.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-typography-style', get_template_directory_uri()."/assets/css/partials/typography.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-variables-style', get_template_directory_uri()."/assets/css/partials/variables.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-media-style', get_template_directory_uri()."/assets/css/partials/media.css", array(), $version, 'all');

        #About_Us Page
        wp_enqueue_style('relictrio-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_banner-style', get_template_directory_uri()."/assets/css/A_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_leadership-style', get_template_directory_uri()."/assets/css/A_leadership.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_wanttoknow-style', get_template_directory_uri()."/assets/css/A_wanttoknow.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_whyus-style', get_template_directory_uri()."/assets/css/A_whyus.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-A_weareexperts-style', get_template_directory_uri()."/assets/css/A_weareexperts.css", array(), $version, 'all');

        #Design & Development Page
        wp_enqueue_style('relictrio-D&D_banner-style', get_template_directory_uri()."/assets/css/D&D_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-D&D_commerce-style', get_template_directory_uri()."/assets/css/D&D_commerce.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-D&D_digitaldesign-style', get_template_directory_uri()."/assets/css/D&D_digitaldesign.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-D&D_digitalservices-style', get_template_directory_uri()."/assets/css/D&D_digitalservices.css", array(), $version, 'all');

        #Post_Live Page
        wp_enqueue_style('relictrio-P_banner-style', get_template_directory_uri()."/assets/css/P_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-P_digitalmanaged-style', get_template_directory_uri()."/assets/css/P_digitalmanaged.css", array(), $version, 'all');

        #Portfolio Page
        wp_enqueue_style('relictrio-PF_banner-style', get_template_directory_uri()."/assets/css/PF_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-PF_card-style', get_template_directory_uri()."/assets/css/PF_card.css", array(), $version, 'all');

        #Footer Page
        wp_enqueue_style('relictrio-footer-style', get_template_directory_uri()."/assets/css/footer.css", array(), $version, 'all');

        #Portfolio - Property_Ladder Page
        wp_enqueue_style('relictrio-PF_property_ladder_banner-style', get_template_directory_uri()."/assets/css/PF_property_ladder_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-PF_property_ladder_body-style', get_template_directory_uri()."/assets/css/PF_property_ladder_body.css", array(), $version, 'all');
    
        #Portfolio - MDR_Rugby Page
        wp_enqueue_style('relictrio-PF_mdrrugby_banner-style', get_template_directory_uri()."/assets/css/PF_mdrrugby_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-PF_mdrrugby_body-style', get_template_directory_uri()."/assets/css/PF_mdrrugby_body.css", array(), $version, 'all');
    
    }

    add_action('wp_enqueue_scripts', 'relictrio_register_styles');
    
?>