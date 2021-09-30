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

        wp_enqueue_style('relictrio-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-header-style', get_template_directory_uri()."/assets/css/header.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-header-nav-style', get_template_directory_uri()."/assets/css/header_nav.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-contact-style', get_template_directory_uri()."/assets/css/contactus.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-contactform-style', get_template_directory_uri()."/assets/css/contact_form.css", array(), $version, 'all');


        wp_enqueue_style('relictrio-fonts-style', get_template_directory_uri()."/assets/css/partials/fonts.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-grid-style', get_template_directory_uri()."/assets/css/partials/grid.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-mixins-style', get_template_directory_uri()."/assets/css/partials/mixins.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-reset-style', get_template_directory_uri()."/assets/css/partials/reset.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-typography-style', get_template_directory_uri()."/assets/css/partials/typography.css", array(), $version, 'all');
        wp_enqueue_style('relictrio-variables-style', get_template_directory_uri()."/assets/css/partials/variables.css", array(), $version, 'all');


    }

    add_action('wp_enqueue_scripts', 'relictrio_register_styles');
    
?>
<?php 

function relictrio_register_images(){

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('relictrio-images', get_template_directory_uri()."/assets/images", array(), $version, 'all');




}

add_action('wp_enqueue_scripts', 'relictrio_register_images');

?>

<?php
 add_theme_support('post-thumbnails');
 add_theme_support('custom-header')
?>