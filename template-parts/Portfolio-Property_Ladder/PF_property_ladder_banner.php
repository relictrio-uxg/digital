<?php
/*
* Template part for Portfolio PF_property_ladder_banner component
*
* @package Relictrio Digital
*/
?>

<div class="container container--fluid">
  <div class="container--content">
    <div class="property__banner">

      <?php 
          $hero_banner_heading_section = get_field('hero_banner_heading_section');
          if( $hero_banner_heading_section ) {
      ?>
      <h2 class="heading heading--variation3 property__banner--heading">
        <?php echo $hero_banner_heading_section; ?>
      </h2>
      <?php 
        }
      ?>

      <ul class="property__banner--list">

        <?php 
            $hero_banner_heading_list = get_field('hero_banner_heading_list');
            if( $hero_banner_heading_list ) {
            foreach( $hero_banner_heading_list as $row ) {
          ?>
        <li>
          <p class="para para--variation2 property__banner--list-para1">
            <?php echo $row['list_name'] ;?>
          </p>
          <p class="para property__banner--list-para2">
            <?php echo $row['list_content'] ;?>
          </p>
        </li>
        <?php
              }
            }
          ?>

      </ul>
    </div>
  </div>
</div>
<div class="container--fullwdh">

  <div class="property__banner--overlay">

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
      <img class="property__banner--img" src="<?php echo $hero_banner_image; ?>"
        alt="portfolio-property-ladder-banner-img">
      <?php 
        }
      ?>

    </picture>


    <div class="overlaytext">

      <?php 
        $hero_banner_overlay_heading = get_field('hero_banner_overlay_heading');
        if( $hero_banner_overlay_heading ) {
      ?>
      <h2 class="heading property__banner--overlayheading">
        <?php echo $hero_banner_overlay_heading; ?>
      </h2>
      <?php 
        }
      ?>

    </div>
    <div class="overlayimg">

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
        <img class="property__banner--img" src="<?php echo $hero_banner_overlay_image; ?>"
          alt="portfolio-property-ladder-banner-overlay-img">
        <?php 
            }
          ?>

      </picture>

    </div>
  </div>

</div>