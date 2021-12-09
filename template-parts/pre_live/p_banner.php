<?php
  /*
  * Template part for Pre Live P_banner component
  *
  * @package Relictrio Digital
  */
 ?>


  <div class="container container--fluid">
    <div class="container--content">
      <div class="relictrio--row jus-cnt--cent mar-tpbt--40">
        <div class="prelive__banner col--5">
          <h3 class="text--center mar-bot--25">

        <?php 
        $hero_section_number = get_field('hero_section_number');
        if( $hero_section_number ) {
        ?>
          <span class="heading heading--variation5 prelive__banner--logo">
              <?php echo $hero_section_number; ?>
          </span>
        <?php 
            }
        ?>

          <picture>

            <?php 
              $hero_section_icon_mobile = get_field('hero_section_icon_mobile');
              if( $hero_section_icon_mobile ) {
            ?>
            <source media="(max-width: 540px)" srcset="<?php echo $hero_section_icon_mobile; ?>">
            <?php 
              }
            ?>

            <?php 
              $hero_section_icon = get_field('hero_section_icon');
              if( $hero_section_icon ) {
            ?>
            <img src="<?php echo $hero_section_icon; ?>" alt="postlive-banner-icon">
            <?php 
              }
            ?>

          </picture>

        </h3>

          
        <?php 
          $hero_section_heading = get_field('hero_section_heading');
          if( $hero_section_heading ) {
        ?>
          <h3 class="heading heading--variation5 prelive__banner--heading text--center">
          <?php echo $hero_section_heading; ?>
          </h3>
        <?php 
            }
        ?>

        </div>
        <div class="col--7">
          
        <?php 
            $hero_section_right_image = get_field('hero_section_right_image');
            if( $hero_section_right_image ) {
        ?>
          <img class="prelive__banner--img" src="<?php echo $hero_section_right_image; ?>" alt="prelive__banner--img">
        <?php 
            }
        ?>
        <div class="prelive__banner--overlayimg">
          <?php 
            $hero_section_right_image_overlay = get_field('hero_section_right_image_overlay');
            if( $hero_section_right_image_overlay ) {
          ?>
            <img class="prelive__banner--img" src="<?php echo $hero_section_right_image_overlay; ?>"
              alt="prelive-banner-image-overlay">
          <?php 
            }
          ?>
        </div>

        </div>
      </div>
    </div>
  </div>
