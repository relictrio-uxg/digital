<?php
  /*
  * Template part for About us Why us component
  *
  * @package Relictrio Digital
  */
 ?>

<section class="whyussection container container--fluid">
    <div class="container--content">
      <div class="relictrio--row jus-cnt--cent">

      <?php 
          $why_us_heading = get_field('why_us_heading');
          if( $why_us_heading ) {
      ?>
        <h2 class="heading heading--variation1">
          <?php echo $why_us_heading; ?>
        </h2>
      <?php 
          }
      ?>

      </div>
      <div class="whyussection__cardblock relictrio--row">

      <?php 
            $why_us_block = get_field('why_us_block');
            if( $why_us_block ) {
            foreach( $why_us_block as $row ) {
      ?>
        <div class="col--4">
          <div class="whyussection__card">
            <picture>
              <source media="(max-width: 540px)" srcset="<?php echo $row['block_image_mobile'] ;?>">
              <source media="(max-width: 834px)" srcset="<?php echo $row['block_image_tab'] ;?>">
              <img class="whyussection__card--logo" src="<?php echo $row['block_image'] ;?>" alt="whyus-card-logo">
            </picture>
            <h3 class="heading heading--variation2 whyussection__card--heading">
              <?php echo $row['block_heading'] ;?>
            </h3>
            <p class="para whyussection__card--para">
              <?php echo $row['block_paragraph'] ;?>
            </p>
          </div>
        </div>
        <?php
                }
              }
        ?>

      </div>
    </div>
  </section>