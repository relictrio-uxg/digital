<?php
  /*
  * Template part for Post Live P_banner commponent
  *
  * @package Relictrio Digital
  */
 ?>


  <div class="container container--fluid">
    <div class="container--content">
      <div class="relictrio--row jus-cnt--cent mar-tpbt--40">
        <div class="postlive__banner col--5">
          <h3 class="text--center mar-bot--25">

        <?php 
        $hero_section_number = get_field('hero_section_number');
        if( $hero_section_number ) {
        ?>
          <span class="postlive__banner--logo">
              <?php echo $hero_section_number; ?>
          </span>
        <?php 
            }
        ?>

        <?php 
        $hero_section_icon = get_field('hero_section_icon');
        if( $hero_section_icon ) {
        ?>
            <img src="<?php echo $hero_section_icon; ?>" alt="postlive-banner-icon"></h3>
        <?php 
            }
        ?>
          
        <?php 
          $hero_section_heading = get_field('hero_section_heading');
          if( $hero_section_heading ) {
        ?>
          <h3 class="postlive__banner--heading text--center">
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
          <img class="postlive__banner--img" src="<?php echo $hero_section_right_image; ?>" alt="postlive__banner--img">
        <?php 
            }
        ?>

        </div>
      </div>
    </div>
  </div>
