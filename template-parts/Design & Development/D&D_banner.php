<?php
  /*
  * Template part for Design & Development D&D_banner component
  *
  * @package Relictrio Digital
  */
 ?>

  <div class="container container--fluid">
    <div class="container--content">
      <div class="relictrio--row jus-cnt--cent mar-tpbt--40">
        <div class="designdevelop__banner col--5">
          <h3 class="text--center mar-bot--25">

          <?php 
                $hero_section_number = get_field('hero_section_number');
                if( $hero_section_number ) {
            ?>
            <span class="designdevelop__banner--logo"><?php echo $hero_section_number; ?></span>
            <?php 
                }
            ?>
            
            <?php 
            $hero_section_icon_block = get_field('hero_section_icon_block');
            if( $hero_section_icon_block ) {
            foreach( $hero_section_icon_block as $row ) {
            ?>
            <picture>
              <source media="(max-width: 834px)" srcset="<?php echo $row['hero_section_icon_mobile'] ;?>">
              <source media="(max-width: 1024px)" srcset="<?php echo $row['hero_section_icon_tab'] ;?>">
              <img src="<?php echo $row['hero_section_icon'] ;?>" alt="d&d-banner-icon">
            </picture>
            </h3>
            <?php
                }
              }
            ?>

          <?php 
                $hero_section_heading = get_field('hero_section_heading');
                if( $hero_section_heading ) {
            ?>
          <h3 class="designdevelop__banner--heading text--center">
            <?php echo $hero_section_heading; ?>
          </h3>
          <?php 
                }
            ?>

        </div>
        <div class="col--7">

          <?php 
            $hero_section_right_image_block = get_field('hero_section_right_image_block');
            if( $hero_section_right_image_block ) {
            foreach( $hero_section_right_image_block as $row ) {
          ?>
          <picture>
            <source media="(max-width: 834px)" srcset="<?php echo $row['right_image_mobile'] ;?>">
            <source media="(max-width: 1024px)" srcset="<?php echo $row['right_image_tab'] ;?>">
            <img class="designdevelop__banner--img" src="<?php echo $row['right_image'] ;?>" alt="inception group icon">
          </picture>
          <?php
              }
            }
          ?>

        </div>
      </div>
    </div>
  </div>
