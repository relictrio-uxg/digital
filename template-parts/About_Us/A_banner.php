  <?php
  /*
  * Template part for About us banner component
  *
  * @package Relictrio Digital
  */
  ?>

<section>
    <div class="container container--fluid">
      <div class="container--content">

        <div class="relictrio--row justify-content--between mar-tpbt--80 aboutussection__mobile">
          
          <?php 
            $hero_section_image_block = get_field('hero_section_image_block');
            if( $hero_section_image_block ) {
            foreach( $hero_section_image_block as $row ) {
          ?>
          <div class="col--3 aboutussection__col--6">
            <picture>
              <source media="(max-width: 540px)" srcset="<?php echo $row['banner_image_mobile'] ;?>">
              <source media="(max-width: 834px)" srcset="<?php echo $row['banner_image_tab'] ;?>">
              <img class="aboutussection__img" src="<?php echo $row['banner_image'] ;?>" alt="aboutus-banner">
            </picture>
          </div>
          <?php
                }
              }
          ?>

        </div>

        <div class="aboutussection__content">

          <?php 
                $hero_section_banner_content = get_field('hero_section_banner_content');
                if( $hero_section_banner_content ) {
            ?>
          <p class="col--12 heading heading--variation2">
          <?php echo $hero_section_banner_content; ?>
          </p>
          <?php 
                }
            ?>

        </div>

        <?php 
            $hero_section_digital_advisory_image = get_field('hero_section_digital_advisory_image');
            if( $hero_section_digital_advisory_image ) {
            foreach( $hero_section_digital_advisory_image as $row ) {
        ?>
        <div class="aboutussection__services relictrio--row jus-cnt--cent">
          <picture>
            <source media="(max-width: 540px)" srcset="<?php echo $row['digital_advisory_image_mobile'] ;?>">
            <source media="(max-width: 834px)" srcset="<?php echo $row['digital_advisory_image_tab'] ;?>">
            <img src="<?php echo $row['digital_advisory_image'] ;?>" alt="aboutus-services-img">
          </picture>
        </div>
        <?php
                }
              }
        ?>

        <div class="relictrio--row jus-cnt--spcard">
          <div class="col--2"></div>

          <div class="aboutussection__services--block col--8 relictrio--row jus-cnt--spcard">

          <?php 
            $hero_section_services_block = get_field('hero_section_services_block');
            if( $hero_section_services_block ) {
            foreach( $hero_section_services_block as $row ) {
          ?>
            <div>
              <picture>
                <source media="(max-width: 540px)" srcset="<?php echo $row['services_image_mobile'] ;?>">
                <source media="(max-width: 834px)" srcset="<?php echo $row['services_image_tab'] ;?>">
                <img src="<?php echo $row['services_image'] ;?>" alt="aboutus-services">
              </picture>
              <h4 class="heading heading--variation4 text--center">
                <?php echo $row['services_heading'] ;?>
              </h4>
            </div>
          <?php
              }
            }
          ?>

          </div>
          <div class="col--2"></div>
        </div>
      </div>
    </div>
  </section>