<?php
  /*
  * Template part for About us Leadership component
  *
  * @package Relictrio Digital
  */
  ?>

<section class="leadershipsection container--fullwdh">
  <div class="container--content">

    <?php 
      $background_section_heading = get_field('background_section_heading');
      if( $background_section_heading ) {
    ?>
    <h2 class="heading heading--variation1 text--center">
    <?php echo $background_section_heading; ?>
    </h2>
    <?php 
        }
    ?>

    <?php 
      $background_section_content = get_field('background_section_content');
      if( $background_section_content ) {
    ?>
    <h3 class="heading heading--variation2 text--center">
    <?php echo $background_section_content; ?>
    </h3>
    <?php 
        }
    ?>

    <div class="relictrio--row col--12">

      <?php 
        $background_section_paragraph = get_field('background_section_paragraph');
        if( $background_section_paragraph ) {
      ?>
      <p class="para para--variation5 text--center">
      <?php echo $background_section_paragraph; ?>
      </p>
      <?php 
          }
      ?>

    </div>

  </div>
</section>