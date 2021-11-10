<?php
/*
* Template part for Portfolio PF_property_ladder_challenge component
*
* @package Relictrio Digital
*/
?>

<div class="container container--fluid property__menu--overflow">
  <div class="container--content">

    <div class="property__menutabsticky">
      <ul class="property__menutab">

        <?php 
            $property_ladder_menu_bar = get_field('property_ladder_menu_bar');
            if( $property_ladder_menu_bar ) {
            foreach( $property_ladder_menu_bar as $row ) {
          ?>
        <li class="heading heading--variation3 property__menutab--list">
          <a class="<?php echo $row['menu_active_class'] ;?>" href="<?php echo $row['menu_link'] ;?>">
            <?php echo $row['menu_name'] ;?>
          </a>
        </li>
        <?php
              }
            }
          ?>

      </ul>
    </div>

    <?php 
          $challenge_id_link = get_field('challenge_id_link');
          if( $challenge_id_link ) {
      ?>
    <div id="<?php echo $challenge_id_link; ?>">
    </div>
    <?php 
        }
      ?>

    <div class="property__challenge">
      <div class="relictrio--row">
        <div class="col--1 col--remove"></div>
        <div class="col--11 col--full">

          <?php 
              $challenge_heading = get_field('challenge_heading');
              if( $challenge_heading ) {
            ?>
          <h3 class="heading heading--variation2 property__challenge--heading">
            <?php echo $challenge_heading; ?>
          </h3>
          <?php 
              }
            ?>

          <div class="relictrio--row property--mobile">
            <div class="col--6">

              <?php 
              $challenge_left_paragraph = get_field('challenge_left_paragraph');
              if( $challenge_left_paragraph ) {
            ?>
              <p class="para property__challenge--para">
                <?php echo $challenge_left_paragraph; ?>
              </p>
              <?php 
              }
            ?>

            </div>
            <div class="col--6">

              <?php 
              $challenge_right_paragraph = get_field('challenge_right_paragraph');
              if( $challenge_right_paragraph ) {
              foreach( $challenge_right_paragraph as $row ) {
              ?>
              <p class="para property__challenge--para">
                <?php echo $row['right_paragraph'] ;?>
              </p>
              <img class="para property__challenge--icon" src="<?php echo $row['right_icon_1'] ;?>"
                alt="portfolio-property-ladder-challenge-logo-1">
              <img class="para property__challenge--icon" src="<?php echo $row['right_icon_2'] ;?>"
                alt="portfolio-property-ladder-challenge-logo-2">
              <?php
                }
              }
              ?>

            </div>

            <div class="col--6">

              <?php 
              $challenge_image_1 = get_field('challenge_image_1');
              if( $challenge_image_1 ) {
              ?>
              <img class="property__challenge--img" src="<?php echo $challenge_image_1; ?>"
                alt="portfolio-property-ladder-challenge-img">
              <?php 
                }
              ?>

            </div>
            <div class="col--6">

              <?php 
              $challenge_image_2 = get_field('challenge_image_2');
              if( $challenge_image_2 ) {
              ?>
              <img class="property__challenge--img" src="<?php echo $challenge_image_2; ?>"
                alt="portfolio-property-ladder-challenge-img">
              <?php 
                }
              ?>

            </div>

          </div>
        </div>
      </div>
    </div>