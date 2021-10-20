<?php
  /*
  * Template part for Portfolio PF_banner component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container container--fluid">
  <div class="container--content">

    <?php 
        $hero_section_heading = get_field('hero_section_heading');
        if( $hero_section_heading ) {
    ?>
    <h2 class="heading portfolio__banner--heading">
      <?php echo $hero_section_heading; ?>
    </h2>
    <?php 
        }
    ?>

    <?php 
        $hero_section_paragraph = get_field('hero_section_paragraph');
        if( $hero_section_paragraph ) {
    ?>
    <p class="para portfolio__banner--para">
    <?php echo $hero_section_paragraph; ?>
    </p>
    <?php 
        }
    ?>

  </div>
</div>