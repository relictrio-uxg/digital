<?php
/*
* Template part for Portfolio PF_mdr_rugby_challenge component
*
* @package Relictrio Digital
*/
?>

<div class="container container--fluid rugby__menu--overflow">
    <div class="container--content">

      <div class="rugby__menutabsticky">
        <ul class="rugby__menutab">

        <?php 
            $rugby_menu_bar = get_field('rugby_menu_bar');
            if( $rugby_menu_bar ) {
            foreach( $rugby_menu_bar as $row ) {
          ?>
          <li class="heading heading--variation3 rugby__menutab--list">
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
      <div id="<?php echo $challenge_id_link; ?>"></div>
      <?php 
          }
        ?>

      <div class="rugby__challenge">
        <div class="relictrio--row">
          <div class="col--1 col--remove"></div>
          <div class="col--10 col--full">

            <?php 
              $challenge_heading = get_field('challenge_heading');
              if( $challenge_heading ) {
            ?>
            <h3 class="heading heading--variation2 rugby__challenge--heading">
              <?php echo $challenge_heading; ?>
            </h3>
            <?php 
                }
              ?>

            <div class="relictrio--row rugby__container">
              

              <?php 
              $challenge_paragraph_block = get_field('challenge_paragraph_block');
              if( $challenge_paragraph_block ) {
              foreach( $challenge_paragraph_block as $row ) {
              ?>
              <div class="col--6">
                <p class="para rugby__challenge--para">
                <?php echo $row['challenge_paragraph'] ;?>
                </p>
              </div>
                <?php
                }
              }
              ?>
              
              <div class="col--12">
                <div class="rugby__challenge--img">

                <?php 
                  $challenge_image = get_field('challenge_image');
                  if( $challenge_image ) {
                ?>
                  <img class="rugby__design--screenimg" src="<?php echo $challenge_image; ?>" alt="rugby-challenge-img">
                <?php 
                  }
                ?>
                
                </div>
              </div>
            </div>
          </div>
          <div class="col--1 col--remove"></div>
        </div>
      </div>

      

      