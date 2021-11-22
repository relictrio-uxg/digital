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

  <?php 
            $hero_banner_image_block = get_field('hero_banner_image_block');
            if( $hero_banner_image_block ) {
            foreach( $hero_banner_image_block as $row ) {
          ?>
  <div class="property__banner--overlay">
    <img class="property__banner--img" src="<?php echo $row['banner_image'] ;?>"
      alt="portfolio-property-ladder-banner-img">
    <div class="overlaytext">
      <h2 class="heading property__banner--overlayheading">
        <?php echo $row['overlay_text'] ;?>
      </h2>
    </div>
    <div class="overlayimg">
      <img class="property__banner--img" src="<?php echo $row['overlay_img'] ;?>"
        alt="portfolio-property-ladder-banner-img">
    </div>
  </div>
  <?php
              }
            }
          ?>

</div>