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
        wp_enqueue_style('relictrio-a_banner-style', get_template_directory_uri()."/assets/css/a_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-a_leadership-style', get_template_directory_uri()."/assets/css/a_leadership.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-a_wanttoknow-style', get_template_directory_uri()."/assets/css/a_wanttoknow.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-a_whyus-style', get_template_directory_uri()."/assets/css/a_whyus.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-a_weareexperts-style', get_template_directory_uri()."/assets/css/a_weareexperts.css", array(), $version, 'all');

        #Design & Development Page
        wp_enqueue_style('relictrio-d&d_banner-style', get_template_directory_uri()."/assets/css/d&d_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-d&d_commerce-style', get_template_directory_uri()."/assets/css/d&d_commerce.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-d&d_digitaldesign-style', get_template_directory_uri()."/assets/css/d&d_digitaldesign.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-d&d_digitalservices-style', get_template_directory_uri()."/assets/css/d&d_digitalservices.css", array(), $version, 'all');

        #Post_Live Page
        wp_enqueue_style('relictrio-postlive_banner-style', get_template_directory_uri()."/assets/css/postlive_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-postlive_digitalmanaged-style', get_template_directory_uri()."/assets/css/postlive_digitalmanaged.css", array(), $version, 'all');

        #Portfolio Page
        wp_enqueue_style('relictrio-pf_banner-style', get_template_directory_uri()."/assets/css/pf_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-pf_card-style', get_template_directory_uri()."/assets/css/pf_card.css", array(), $version, 'all');

        #Footer Section
        wp_enqueue_style('relictrio-footer-style', get_template_directory_uri()."/assets/css/footer.css", array(), $version, 'all');

        #Portfolio - Property_Ladder Page
        wp_enqueue_style('relictrio-pf_property_ladder_banner-style', get_template_directory_uri()."/assets/css/pf_property_ladder_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-pf_property_ladder_body-style', get_template_directory_uri()."/assets/css/pf_property_ladder_body.css", array(), $version, 'all');
    
        #Portfolio - MDR_Rugby Page
        wp_enqueue_style('relictrio-pf_mdrrugby_banner-style', get_template_directory_uri()."/assets/css/pf_mdrrugby_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-pf_mdrrugby_body-style', get_template_directory_uri()."/assets/css/pf_mdrrugby_body.css", array(), $version, 'all');
    
        #Header Section
        wp_enqueue_style('relictrio-header-style', get_template_directory_uri()."/assets/css/header.css", array(), $version, 'all');

        #Portfolio - Rozgarkart Page
        wp_enqueue_style('relictrio-pf_rozgarkart_banner-style', get_template_directory_uri()."/assets/css/pf_rozgarkart_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-pf_rozgarkart_body-style', get_template_directory_uri()."/assets/css/pf_rozgarkart_body.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-pf_rozgarkart_other_screen-style', get_template_directory_uri()."/assets/css/pf_rozgarkart_otherscreen.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-pf_rozgarkart_main_screen-style', get_template_directory_uri()."/assets/css/pf_rozgarkart_mainscreen.css", array(), $version, 'all');

        #Contact_Us Page
        wp_enqueue_style('relictrio-contact_form-style', get_template_directory_uri()."/assets/css/contact_form.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-contactus-style', get_template_directory_uri()."/assets/css/contactus.css", array(), $version, 'all');
    
        #Inception Page
        wp_enqueue_style('relictrio-i_banner-style', get_template_directory_uri()."/assets/css/i_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-i_body-style', get_template_directory_uri()."/assets/css/i_body.css", array(), $version, 'all');

        #Slick carousel CSS 
        wp_enqueue_style('relictrio-slick-style','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), $version, 'all');

        #Home Page
        wp_enqueue_style('relictrio-home-style', get_template_directory_uri()."/assets/css/home.css", array(), $version, 'all');

        #Chat Page
        wp_enqueue_style('relictrio-chat-style', get_template_directory_uri()."/assets/css/chat.css", array(), $version, 'all');

        #Chat-new Page
        wp_enqueue_style('relictrio-chat-new-style', get_template_directory_uri()."/assets/css/chat-new.css", array(), $version, 'all');

        #Pre_Live Page
        wp_enqueue_style('relictrio-prelive_banner-style', get_template_directory_uri()."/assets/css/prelive_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-prelive_digitalmanaged-style', get_template_directory_uri()."/assets/css/prelive_digitalmanaged.css", array(), $version, 'all');

        #Services Page
        wp_enqueue_style('relictrio-services_banner-style', get_template_directory_uri()."/assets/css/services_banner.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-services_serviceslist-style', get_template_directory_uri()."/assets/css/services_serviceslist.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-services_experts-style', get_template_directory_uri()."/assets/css/services_experts.css", array(), $version, 'all');

    }

    add_action('wp_enqueue_scripts', 'relictrio_register_styles');
    
?>