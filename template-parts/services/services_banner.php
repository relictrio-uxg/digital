<?php
  /*
  * Template part for Services - services_banner component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container--fullwdh">
  <div class="services__banner">
    <picture>

      <?php 
        $hero_banner_mobile_image = get_field('hero_banner_mobile_image');
        if( $hero_banner_mobile_image ) {
        ?>
      <source media="(max-width: 540px)" srcset="<?php echo $hero_banner_mobile_image; ?>">
      <?php 
          }
        ?>

      <?php 
        $hero_banner_image = get_field('hero_banner_image');
        if( $hero_banner_image ) {
        ?>
      <img src="<?php echo $hero_banner_image; ?>" alt="services-banner-image">
      <?php 
          }
        ?>

    </picture>
    <div class="services__banner--overlayimg">
      <picture>

        <?php 
        $hero_banner_mobile_overlay_image = get_field('hero_banner_mobile_overlay_image');
        if( $hero_banner_mobile_overlay_image ) {
        ?>
        <source media="(max-width: 540px)" srcset="<?php echo $hero_banner_mobile_overlay_image; ?>">
        <?php 
          }
        ?>

        <?php 
        $hero_banner_overlay_image = get_field('hero_banner_overlay_image');
        if( $hero_banner_overlay_image ) {
        ?>
        <img src="<?php echo $hero_banner_overlay_image; ?>" alt="services-banner-overlay-image">
        <?php 
          }
        ?>

      </picture>
    </div>
    <div class="services__banner--overlaytext">

      <?php 
        $hero_banner_heading = get_field('hero_banner_heading');
        if( $hero_banner_heading ) {
        ?>
      <h2 class="heading heading--variation5">
        <?php echo $hero_banner_heading; ?>
      </h2>
      <?php 
          }
        ?>

      <?php 
        $hero_banner_paragraph = get_field('hero_banner_paragraph');
        if( $hero_banner_paragraph ) {
        ?>
      <p class="heading heading--variation1">
        <?php echo $hero_banner_paragraph; ?>
      </p>
      <?php 
          }
        ?>

    </div>
  </div>
</div>