<?php
/*
* Template part for Portfolio PF_rozgarkart_design component
*
* @package Relictrio Digital
*/
?>

<?php 
  $design_id_link = get_field('design_id_link');
  if( $design_id_link ) {
?>
<div id="<?php echo $design_id_link; ?>" class="rozgarkart__design">
  <?php 
    }
  ?>

  <?php 
  $design_heading = get_field('design_heading');
  if( $design_heading ) {
?>
  <h3 class="heading heading--variation2 rozgarkart__challenge--heading">
    <?php echo $design_heading; ?>
  </h3>
  <?php 
    }
  ?>


  <div class="relictrio--row">
    <div class="col--1 rozgarkart__col--remove"></div>
    <div class="col--11 rozgarkart__col--full">

      <?php 
      $design_subheading_1 = get_field('design_subheading_1');
      if( $design_subheading_1 ) {
    ?>
      <h3 class="heading heading--variation1 rozgarkart__design--subheading">
        <?php echo $design_subheading_1; ?>
      </h3>
      <?php 
      }
    ?>


      <div class="relictrio--row">
        <div class="col--1"></div>
        <div class="col--11">

          <?php 
          $design_color_block = get_field('design_color_block');
          if( $design_color_block ) {
          foreach( $design_color_block as $row ) {
        ?>
          <div class="relictrio--row">
            <div class="rozgarkart__design--colorlist">
              <h4 class="heading heading--variation4">
                <?php echo $row['color_block_heading'] ;?>
              </h4>
              <div class="rozgarkart__design--listblock">

                <?php 
                foreach( $row['color_block_list'] as $list ) {
              ?>
                <div class="rozgarkart__color--list">
                  <img src="<?php echo $list['color_image'] ;?>" alt="portfolio-property-ladder-design-color-1">
                  <div class="rozgarkart__color--block">
                    <h4 class="heading heading--variation4">
                      <?php echo $list['color_name'] ;?>
                    </h4>
                    <p class="para para--variation2">
                      <?php echo $list['color_content'] ;?>
                    </p>
                  </div>
                </div>
                <?php
                }
              ?>

              </div>
            </div>
          </div>
          <?php
            }
          }
        ?>

        </div>
      </div>


      <h3 class="heading heading--variation1 rozgarkart__design--subheading">
        Typography
      </h3>


      <div class="relictrio--row">
        <div class="col--1"></div>
        <div class="col--11">
          <div class="relictrio--row">
            <div class="col--12 mobile--row">

              <?php 
              $design_font_block = get_field('design_font_block');
              if( $design_font_block ) {
              foreach( $design_font_block as $row ) {
              ?>
              <span class="font__mobile--col">
                <?php 
                foreach( $row['font_block'] as $list ) {
                ?>
                <div class="rozgarkart__fontblock">
                  <div class="rozgarkart__fontblock--left">
                    <h4 class="heading heading--variation3">
                      <?php echo $list['font_heading'] ;?>
                    </h4>
                    <p class="para para--variation7">
                      <?php echo $list['font_subheading'] ;?>
                    </p>
                  </div>
                  <div class="rozgarkart__fontblock--right">
                    <h4 class="para para--variation7 <?php echo $list['font_custom_class'] ;?>">
                      <?php echo $list['font_content'] ;?>
                    </h4>
                  </div>
                </div>
                <?php
                }
                ?>
              </span>
              <?php
                }
              }
              ?>

            </div>

          </div>
        </div>
      </div>

      <?php 
        $design_subheading_3 = get_field('design_subheading_3');
        if( $design_subheading_3 ) {
      ?>
      <h3 class="heading heading--variation1 rozgarkart__design--subheading">
        <?php echo $design_subheading_3; ?>
      </h3>
      <?php 
        }
      ?>
      
      <div class="relictrio--row">
        <div class="col--1"></div>
        <div class="col--11">
          <div class="rozgarkart__design--logoblock">
            
          <?php 
            $design_rozgarkart_icon = get_field('design_rozgarkart_icon');
            if( $design_rozgarkart_icon ) {
          ?>
            <img src="<?php echo $design_rozgarkart_icon; ?>" alt="rozgarkart-design-logo-img">
          <?php 
            }
          ?>

          </div>
        </div>
      </div>

      <?php 
        $design_subheading_4 = get_field('design_subheading_4');
        if( $design_subheading_4 ) {
      ?>      
      <h3 class="heading heading--variation1 rozgarkart__design--subheading">
        <?php echo $design_subheading_4; ?>
      </h3>
      <?php 
        }
      ?>

      <div class="relictrio--row">
        <div class="col--1"></div>
        <div class="col--11">

          <?php 
            $design_icon_subheading_1 = get_field('design_icon_subheading_1');
            if( $design_icon_subheading_1 ) {
          ?>  
          <h4 class="para para--variation5 rozgarkart__challenge--subheading">
            <?php echo $design_icon_subheading_1; ?>
          </h4>
          <?php 
            }
          ?>    

          <?php 
          $design_ui_icon_block = get_field('design_ui_icon_block');
          if( $design_ui_icon_block ) {
          foreach( $design_ui_icon_block as $row ) {
          ?>
          <div class="rozgarkart__design--uiiconblock">
            <?php 
              foreach( $row['ui_icon_block'] as $list ) {
            ?>
            <img src="<?php echo $list['icon_image'] ;?>" alt="rozgarkart-design-uiicon">
            <?php
              }
            ?>
          </div>
          <?php
              }
            }
          ?>

          <?php 
            $design_icon_subheading_2 = get_field('design_icon_subheading_2');
            if( $design_icon_subheading_2 ) {
          ?>  
          <h4 class="para para--variation5 rozgarkart__challenge--subheading">
            <?php echo $design_icon_subheading_2; ?>
          </h4>
          <?php 
            }
          ?>    

          <div class="rozgarkart__design--workerblock">
          
            <?php 
              $design_worker_block = get_field('design_worker_block');
              if( $design_worker_block ) {
              foreach( $design_worker_block as $row ) {
            ?>
            <div class="<?php echo $row['worker_class_name'] ;?>">
              <img src="<?php echo $row['worker_icon_image'] ;?>" alt="rozgarkart-design-worker">
            </div>
            <?php
                }
              }
            ?>    

          </div>

          <?php 
            $design_icon_subheading_3 = get_field('design_icon_subheading_3');
            if( $design_icon_subheading_3 ) {
          ?>  
          <h4 class="para para--variation5 rozgarkart__challenge--subheading">
            <?php echo $design_icon_subheading_3; ?>
          </h4>
          <?php 
            }
          ?>    

          <div class="rozgarkart__design--workerblock">

          <?php 
              $design_cities_block = get_field('design_cities_block');
              if( $design_cities_block ) {
              foreach( $design_cities_block as $row ) {
            ?>
            <div class="<?php echo $row['cities_class_name'] ;?>">
              <img src="<?php echo $row['cities_icon_image'] ;?>" alt="rozgarkart-design-cities">
            </div>
            <?php
                }
              }
            ?>    

          </div>

          <?php 
            $design_icon_subheading_4 = get_field('design_icon_subheading_4');
            if( $design_icon_subheading_4 ) {
          ?>  
          <h4 class="para para--variation5 rozgarkart__challenge--subheading">
            <?php echo $design_icon_subheading_4; ?>
          </h4>
          <?php 
            }
          ?>    

          <div class="rozgarkart__design--illustrationblock">
            
            <?php 
              $design_illustrations_block = get_field('design_illustrations_block');
              if( $design_illustrations_block ) {
              foreach( $design_illustrations_block as $row ) {
            ?>
            <div class="<?php echo $row['illustrations_class_name'] ;?>">
              <img src="<?php echo $row['illustrations_icon_image'] ;?>" alt="rozgarkart-design-illustration">
            </div>
            <?php
                }
              }
            ?>  

          </div>

        </div>
      </div>

      <?php include('pf_rozgarkart_mainscreen.php') ?>

    </div>
  </div>
</div>

</div>
</div>

