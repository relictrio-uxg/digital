<?php
  /*
  * Template part for Home slider component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container container--fluid  bg--white pad-tpbt--120 slider__pad-tpbt">
  <div class="container--content container--fxdwdh">
    <div class="relictrio--row ">
      <div class="col--12">
        <?php 
            $slider_heading = get_field('slider_heading');
            if ( $slider_heading ) {
        ?>
        <h2 class="heading heading--variation1 text--center slider__head">
          <?php echo $slider_heading ;?></h2>
        <?php
            }
        ?>
      </div>
    </div>
    <section class="customer-logos slider">
      <?php 
            $slider_logos = get_field('slider_logos');
            if( $slider_logos ) {
            foreach( $slider_logos as $row ) {
        ?>
      <div class="slide">
        <img src="<?php echo $row['logo_images'] ;?>" alt="slider images">
      </div>
      <?php
                }
            }
        ?>
    </section>
  </div>
</div>