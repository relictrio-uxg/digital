<?php
/*
* Template part for Portfolio PF_mdr_rugby_banner component
*
* @package Relictrio Digital
*/
?>

  <div class="container container--fluid">
    <div class="container--content rugby__banner">

    <?php 
          $hero_section_heading = get_field('hero_section_heading');
          if( $hero_section_heading ) {
      ?>
      <h2 class="heading">
      <?php echo $hero_section_heading; ?>
      </h2>
      <?php 
        }
      ?>

    </div>
  </div>
  <div class="container--fullwdh">

  <?php 
    $hero_section_image_block = get_field('hero_section_image_block');
    if( $hero_section_image_block ) {
    foreach( $hero_section_image_block as $row ) {
  ?>
    <div class="rugby__banner--img">
      <img src="<?php echo $row['hero_image'] ;?>" alt="rugby-banner-img">
      <div class="rugby__banner--overlayimg">
        <img src="<?php echo $row['hero_overlay_image'] ;?>" alt="rugby-banner-overlay-img">
      </div>
      <div class="relictrio--row rugby__banner--position">
        <div class="col--4"></div>
        <div class="col--8">
          <div class="rugby__banner--overlayimg1">
            <img src="<?php echo $row['hero_animated_image'] ;?>" alt="animation-image-1">
          </div>
        </div>
      </div>
    </div>
  <?php
      }
    }
  ?>

  </div>

  <div class="container container--fluid">
    <div class="container--content">

    <?php 
          $hero_section_subheading = get_field('hero_section_subheading');
          if( $hero_section_subheading ) {
      ?>
      <h4 class="heading heading--variation1 rugby__banner--heading">
      <?php echo $hero_section_subheading; ?>
      </h4>
      <?php 
        }
      ?>

      <ul class="rugby__banner--list">

      <?php 
        $hero_section_list_block = get_field('hero_section_list_block');
        if( $hero_section_list_block ) {
        foreach( $hero_section_list_block as $row ) {
      ?>
        <li>
          <p class="para para--variation2 rugby__banner--list-para1">
            <?php echo $row['content_1'] ;?>
          </p>
          <p class="para rugby__banner--list-para2">
            <?php echo $row['content_2'] ;?>
          </p>
        </li>
        <?php
            }
          }
        ?>
      </ul>
    </div>
  </div>
