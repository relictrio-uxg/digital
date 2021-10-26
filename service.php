<?php
/**
 	* Template Name: Service
 	*
 	* @package WordPress
	* @subpackage Relictrio Digital
 	* @since 1.0.0
*/
get_header();
?>
<div class="container--fluid container--fullhgt dis--flx flex--column flx-alnitm--cent">
    <!-- banner -->
    
    <?php include('templates/relictrio_banner.php') ?>

    <div class="container mar-top--60 services__main">
        <div class="container--fluid dis--flx flex--column flx-alnitm--cent">
            <div class="col--2"></div>
            <div class="col--8 heading--variation1 txt-align--cent">
                We transform businesses successfully through our services
            </div>
            <div class="col--2"></div>
        </div>

        <?php include("templates/service_sections.php") ?>
    </div>
    <div class="container--fluid dis--flx justify-content--center heading heading--variation1 mar-top--120">
        We are Experts in
    </div>
        <?php include("templates/services_tech.php") ?>
</div>