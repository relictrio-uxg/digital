<?php
  /*
  * Template part for Design & Development D&D_digitalservices component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container container--fluid">
  <div class="container--content">
    <div class="relictrio--row jus-cnt--cent">
      <div class="col--12 designdevelop__service">

        <?php 
          $digital_services_section_heading = get_field('digital_services_section_heading');
          if( $digital_services_section_heading ) {
        ?>
        <h2 class="heading heading--variation1 text--center">
          <?php echo $digital_services_section_heading; ?>
        </h2>
        <?php 
          }
        ?>

        <?php 
          $digital_services_section_paragraph_block = get_field('digital_services_section_paragraph_block');
          if( $digital_services_section_paragraph_block ) {
          foreach( $digital_services_section_paragraph_block as $row ) {
        ?>
        <p class="heading heading--variation2 designdevelop__service--para">
          <?php echo $row['para_section'] ;?>
        </p>
        <?php
              }
            }
        ?>

      </div>
    </div>
  </div>

  <!--slider sec: start-->
  <div class="container--fullwdh bg--white">
    
      <section class="designdevelop__service--slider">

        <?php 
          $digital_services_section_slider = get_field('digital_services_section_slider');
          if( $digital_services_section_slider ) {
          foreach( $digital_services_section_slider as $row ) {
        ?>
        <div class="slide">
          <img src="<?php echo $row['slider_section'] ;?>" alt="slider images">
        </div>
        <?php
            }
          }
        ?>

      </section>
    
  </div>
  <!--slider sec: end-->

  <div class="container--content">
    <div class="relictrio--row jus-cnt--cent">
      <div class="col--12">

        <?php 
                $digital_services_section_paragraph = get_field('digital_services_section_paragraph');
                if( $digital_services_section_paragraph ) {
            ?>
        <p class="heading heading--variation2 designdevelop__service--para">
          <?php echo $digital_services_section_paragraph; ?>
        </p>
        <?php 
                }
            ?>

        <?php 
                $digital_services_section_paragraph_blue = get_field('digital_services_section_paragraph_blue');
                if( $digital_services_section_paragraph_blue ) {
            ?>
        <p class="heading heading--variation2 designdevelop__service--parablue">
          <?php echo $digital_services_section_paragraph_blue; ?>
        </p>
        <?php 
                }
            ?>


      </div>
    </div>
    <div class="designdevelop__service--block relictrio--row jus-cnt--spbtw mar-bot--50">



      <?php 
                $digital_services_section_block_list = get_field('digital_services_section_block_list');
                if( $digital_services_section_block_list ) {
                foreach( $digital_services_section_block_list as $row ) {
              ?>
      <div class="text--center">
        <img class="designdevelop__service--icons" src="<?php echo $row['services_block_icon'] ;?>"
          alt="d&d-services-icon-1">
        <p class="heading heading--variation4">
          <?php echo $row['services_block_heading'] ;?>
        </p>
      </div>
      <?php
                    }
                   }
              ?>

    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>

  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>../assets/js/slider.js?v=4.76" defer></script>