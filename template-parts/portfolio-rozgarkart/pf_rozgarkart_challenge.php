<?php
/*
* Template part for Portfolio PF_rozgarkart_challenge component
*
* @package Relictrio Digital
*/
?>

  <div class="container container--fluid rozgarkart__menu--overflow">
    <div class="container--content">

      <div class="rozgarkart__menutabsticky">
        <ul class="rozgarkart__menutab">

        <?php 
            $rozgarkart_menu_bar = get_field('rozgarkart_menu_bar');
            if( $rozgarkart_menu_bar ) {
            foreach( $rozgarkart_menu_bar as $row ) {
        ?>
          <li class="heading heading--variation3 rozgarkart__menutab--list">
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
      <div id="<?php echo $challenge_id_link; ?>" class="rozgarkart__challenge">
      <?php 
        }
      ?>

      <?php 
          $challenge_heading = get_field('challenge_heading');
          if( $challenge_heading ) {
      ?>
        <h3 class="heading heading--variation2 rozgarkart__challenge--heading">
        <?php echo $challenge_heading; ?>
        </h3>
      <?php 
        }
      ?>


        <div class="relictrio--row">
          <div class="col--3 rozgarkart__reduce--width"></div>
          <div class="col--9 rozgarkart__increase--width">
            <div class="relictrio--row">
              <div class="col--12">
                
              <?php 
                $challenge_paragraph_1 = get_field('challenge_paragraph_1');
                if( $challenge_paragraph_1 ) {
              ?>
              <p class="para rozgarkart__challenge--para">
                <?php echo $challenge_paragraph_1; ?>
              </p>
                <?php 
                }
              ?>

              </div>

              <div class="col--4 rozgarkart__challenge--imgblock">

              <?php 
                $challenge_image_1 = get_field('challenge_image_1');
                if( $challenge_image_1 ) {
              ?>
                <img class="rozgarkart__challenge--img" src="<?php echo $challenge_image_1; ?>"
                  alt="rozgarkart-challenge-img">
              <?php 
                }
              ?>

              </div>
              <div class="col--4 rozgarkart__challenge--imgblock">
                
              <?php 
                $challenge_image_2 = get_field('challenge_image_2');
                if( $challenge_image_2 ) {
              ?>
                <img class="rozgarkart__challenge--img" src="<?php echo $challenge_image_2; ?>"
                  alt="rozgarkart-challenge-img">
              <?php 
                }
              ?>

              </div>
              <div class="col--4 rozgarkart__col--remove">
              </div>

              <div class="col--12">
                
              <?php 
                $challenge_paragraph_2 = get_field('challenge_paragraph_2');
                if( $challenge_paragraph_2 ) {
              ?>
              <p class="para rozgarkart__challenge--para">
                <?php echo $challenge_paragraph_2; ?>
              </p>
                <?php 
                }
              ?>

              </div>

              <div class="col--4 rozgarkart__challenge--imgblock">

              <?php 
                $challenge_image_3 = get_field('challenge_image_3');
                if( $challenge_image_3 ) {
              ?>
                <img class="rozgarkart__challenge--img" src="<?php echo $challenge_image_3; ?>"
                  alt="rozgarkart-challenge-img">
              <?php 
                }
              ?>

              </div>
              <div class="col--4 rozgarkart__challenge--imgblock">
                
              <?php 
                $challenge_image_4 = get_field('challenge_image_4');
                if( $challenge_image_4 ) {
              ?>
                <img class="rozgarkart__challenge--img" src="<?php echo $challenge_image_4; ?>"
                  alt="rozgarkart-challenge-img">
              <?php 
                }
              ?>

              </div>
              <div class="col--4 rozgarkart__col--full dis--flx jus-cnt--cent">
                
              <?php 
                $challenge_image_5 = get_field('challenge_image_5');
                if( $challenge_image_5 ) {
              ?>
                <img class="rozgarkart__challenge--img" src="<?php echo $challenge_image_5; ?>"
                  alt="rozgarkart-challenge-img">
              <?php 
                }
              ?>

              </div>

            </div>
          </div>
        </div>
      </div>

      

      

      