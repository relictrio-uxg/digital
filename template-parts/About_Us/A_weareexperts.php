<?php
  /*
  * Template part for About us weareexperts commponent
  *
  * @package Relictrio Digital
  */
  ?>

<section class="weareexperts container--fullwdh">

  <?php 
    $experts_section_heading = get_field('experts_section_heading');
    if( $experts_section_heading ) {
  ?>
    <h2 class="heading heading--variation1 text--center">
      <?php echo $experts_section_heading; ?>
    </h2>
    <?php 
        }
    ?>

    <!--slider sec: start-->
    <div class="container container--fluid bg--white pad-tpbt--120 slider__pad-tpbt">
        <section class="customer-logos slider mar-top--50">

        <?php 
                $experts_section_slider = get_field('experts_section_slider');
                if( $experts_section_slider ) {
                foreach( $experts_section_slider as $row ) {
        ?>
        <div class="slide">
          <img src="<?php echo $row['slider_list'] ;?>" alt="slider images">
        </div>
        <?php
            }
          }
        ?>

        </section>
    </div>
    <!--slider sec: end-->

  </section>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>

  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>../assets/js/slider.js?v=4.76" defer></script>