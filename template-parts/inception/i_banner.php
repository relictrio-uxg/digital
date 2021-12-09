<?php
  /*
  * Template part for Inception I_banner component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container container--fluid">
  <div class="container--content">
    <div class="relictrio--row jus-cnt--cent mar-tpbt--40">
      <div class="inception__banner col--5">
        <h3 class="text--center mar-bot--25">

          <?php 
            $banner_section_number = get_field('banner_section_number');
            if( $banner_section_number ) {
          ?>
          <span class="heading heading--variation5 inception__banner--logo">
            <?php echo $banner_section_number; ?>
          </span>
          <?php 
            }
          ?>

          <picture>

            <?php 
              $banner_section_image_mobile = get_field('banner_section_image_mobile');
              if( $banner_section_image_mobile ) {
            ?>
            <source media="(max-width: 540px)" srcset="<?php echo $banner_section_image_mobile; ?>">
            <?php 
              }
            ?>

            <?php 
              $banner_section_image = get_field('banner_section_image');
              if( $banner_section_image ) {
            ?>
            <img src="<?php echo $banner_section_image; ?>" alt="inception-banner-icon">
            <?php 
              }
            ?>

          </picture>

        </h3>

        <?php 
          $banner_section_heading = get_field('banner_section_heading');
          if( $banner_section_heading ) {
        ?>
        <h3 class="heading heading--variation5 inception__banner--heading text--center">
          <?php echo $banner_section_heading; ?>
        </h3>
        <?php 
          }
        ?>

      </div>
      <div class="col--7">

        <?php 
          $banner_section_right_image = get_field('banner_section_right_image');
          if( $banner_section_right_image ) {
        ?>
        <img class="inception__banner--img" src="<?php echo $banner_section_right_image; ?>"
          alt="inception-banner-image">
        <?php 
          }
        ?>

        <div class="inception__banner--overlayimg">
          <?php 
            $banner_section_right_image_overlay = get_field('banner_section_right_image_overlay');
            if( $banner_section_right_image_overlay ) {
          ?>
            <img class="inception__banner--img" src="<?php echo $banner_section_right_image_overlay; ?>"
              alt="inception-banner-image-overlay">
          <?php 
            }
          ?>
        </div>



      </div>
    </div>
  </div>
</div>