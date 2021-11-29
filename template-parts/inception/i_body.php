<?php
  /*
  * Template part for Inception I_body component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container container--fluid">
  <div class="container--content">
    <div class="relictrio--row jus-cnt--cent inception__body">

      <?php 
          $digital_heading = get_field('digital_heading');
          if( $digital_heading ) {
        ?>
      <h2 class="heading heading--variation1 text--center">
        <?php echo $digital_heading; ?>
      </h2>
      <?php 
          }
        ?>

      <?php 
          $digital_para = get_field('digital_para');
          if( $digital_para ) {
        ?>
      <p class="heading heading--variation2">
        <?php echo $digital_para; ?>
      </p>
      <?php 
          }
        ?>

    </div>


    <div class="inception__body--blocklist1">
      <div class="relictrio--row">
        <div class="col--1 inception__flex--remove"></div>
        <div class="col--11 inception__flex--full">
          <div class="relictrio--row">

            <div class="col--2 inception__body--icon">
              <picture>

                <?php 
                    $digital_maturity_mobile_icon = get_field('digital_maturity_mobile_icon');
                    if( $digital_maturity_mobile_icon ) {
                  ?>
                <source media="(max-width: 540px)" srcset="<?php echo $digital_maturity_mobile_icon; ?>">
                <?php 
                    }
                  ?>

                <?php 
                    $digital_maturity_icon = get_field('digital_maturity_icon');
                    if( $digital_maturity_icon ) {
                  ?>
                <img src="<?php echo $digital_maturity_icon; ?>" alt="inception-body-list-icon">
                <?php 
                    }
                  ?>

              </picture>
            </div>

            <div class="col--6 inception__body--heading">

              <?php 
                $digital_maturity_heading = get_field('digital_maturity_heading');
                if( $digital_maturity_heading ) {
              ?>
              <h2 class="heading heading--variation1">
                <?php echo $digital_maturity_heading; ?>
              </h2>
              <?php 
                }
              ?>

            </div>

            <div class="col--3 inception__body--arrow">

              <?php 
                $digital_maturity_arrow_image = get_field('digital_maturity_arrow_image');
                if( $digital_maturity_arrow_image ) {
              ?>
              <img src="<?php echo $digital_maturity_arrow_image; ?>" alt="inception-body-right-arrow">
              <?php 
                }
              ?>

            </div>

            <div class="col--12">

              <?php 
                $digital_maturity_paragraph = get_field('digital_maturity_paragraph');
                if( $digital_maturity_paragraph ) {
              ?>
              <p class="para para--variation4 inception__body--blockpara">
                <?php echo $digital_maturity_paragraph; ?>
              </p>
              <?php 
                }
              ?>

            </div>

            <div class="col--12">
              <ul class="blocklist1--content">

                <?php 
                  $digital_maturity_block_list_1 = get_field('digital_maturity_block_list_1');
                  if( $digital_maturity_block_list_1 ) {
                  foreach( $digital_maturity_block_list_1 as $row ) {
                ?>
                <li class="para para--variation4">
                  <?php echo $row['list_content'] ;?>
                </li>
                <?php
                    }
                  }
                ?>

              </ul>
            </div>


            <div class="col--12">

              <?php 
                $digital_maturity_content_1 = get_field('digital_maturity_content_1');
                if( $digital_maturity_content_1 ) {
              ?>
              <p class="para para--variation4 blocklist1--content">
                <?php echo $digital_maturity_content_1; ?>
                <?php 
                }
              ?>

                <?php 
                  $digital_maturity_content_2 = get_field('digital_maturity_content_2');
                  if( $digital_maturity_content_2 ) {
                ?>
                <span><?php echo $digital_maturity_content_2; ?></span>
                <?php 
                  }
                ?>

              </p>
            </div>


            <div class="col--12">
              <ul class="blocklist1--content blocklist1--disc">

                <?php 
                  $digital_maturity_block_list_2 = get_field('digital_maturity_block_list_2');
                  if( $digital_maturity_block_list_2 ) {
                  foreach( $digital_maturity_block_list_2 as $row ) {
                ?>
                <li class="para para--variation4">
                  <?php echo $row['list_content'] ;?>
                </li>
                <?php
                    }
                  }
                ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="inception__body--blocklist1">
      <div class="relictrio--row">
        <div class="col--1 inception__flex--remove"></div>
        <div class="col--11 inception__flex--full">
          <div class="relictrio--row">

            <div class="col--2 inception__body--icon">

              <picture>

                <?php 
                $business_mobile_icon = get_field('business_mobile_icon');
                if( $business_mobile_icon ) {
                ?>
                <source media="(max-width: 540px)" srcset="<?php echo $business_mobile_icon; ?>">
                <?php 
                  }
                ?>

                <?php 
                $business_icon = get_field('business_icon');
                if( $business_icon ) {
                ?>
                <img src="<?php echo $business_icon; ?>" alt="inception-body-list-icon">
                <?php 
                  }
                ?>

              </picture>

            </div>

            <div class="col--6 inception__body--heading">

              <?php 
                $business_heading = get_field('business_heading');
                if( $business_heading ) {
              ?>
              <h2 class="heading heading--variation1">
                <?php echo $business_heading; ?>
              </h2>
              <?php 
                }
              ?>

            </div>

            <div class="col--3 inception__body--arrow">

              <?php 
                $business_arrow_image = get_field('business_arrow_image');
                if( $business_arrow_image ) {
              ?>
              <img src="<?php echo $business_arrow_image; ?>" alt="inception-body-right-arrow">
              <?php 
                }
              ?>

            </div>

            <div class="col--12">

              <?php 
                $business_paragraph = get_field('business_paragraph');
                if( $business_paragraph ) {
              ?>
              <p class="para para--variation4 inception__body--blockpara">
                <?php echo $business_paragraph; ?>
              </p>
              <?php 
                }
              ?>

            </div>

            <div class="col--12">
              <ul class="blocklist1--content blocklist1--disc">

                <?php 
                  $business_block_list = get_field('business_block_list');
                  if( $business_block_list ) {
                  foreach( $business_block_list as $row ) {
                ?>
                <li class="para para--variation4">
                  <?php echo $row['content_list'] ;?>
                </li>
                <?php
                    }
                  }
                ?>

              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="inception__body--blocklist1">
      <div class="relictrio--row">
        <div class="col--1 inception__flex--remove"></div>
        <div class="col--11 inception__flex--full">
          <div class="relictrio--row">

            <div class="col--2 inception__body--icon">
              
            <picture>

              <?php 
              $technology_mobile_icon = get_field('technology_mobile_icon');
              if( $technology_mobile_icon ) {
              ?>
              <source media="(max-width: 540px)" srcset="<?php echo $technology_mobile_icon; ?>">
              <?php 
                }
              ?>

              <?php 
              $technology_icon = get_field('technology_icon');
              if( $technology_icon ) {
              ?>
              <img src="<?php echo $technology_icon; ?>" alt="inception-body-list-icon">
              <?php 
                }
              ?>

            </picture>

            </div>

            <div class="col--6 inception__body--heading">
              
              <?php 
                $technology_heading = get_field('technology_heading');
                if( $technology_heading ) {
              ?>
              <h2 class="heading heading--variation1">
                <?php echo $technology_heading; ?>
              </h2>
              <?php 
                }
              ?>

            </div>

            <div class="col--3 inception__body--arrow">
              
              <?php 
                $technology_arrow_image = get_field('technology_arrow_image');
                if( $technology_arrow_image ) {
              ?>
              <img src="<?php echo $technology_arrow_image; ?>" alt="inception-body-right-arrow">
              <?php 
                }
              ?>

            </div>

            <div class="col--12">

              <?php 
                $technology_paragraph_block = get_field('technology_paragraph_block');
                if( $technology_paragraph_block ) {
                foreach( $technology_paragraph_block as $row ) {
              ?>
              <p class="para para--variation4 inception__body--blockpara">
              <?php echo $row['paragraph_content'] ;?>
              </p>
              <?php
                    }
                  }
                ?>    

            </div>

            <div class="col--12">
              <ul class="blocklist1--content blocklist1--disc">
                
                <?php 
                  $technology_block_list = get_field('technology_block_list');
                  if( $technology_block_list ) {
                  foreach( $technology_block_list as $row ) {
                ?>
                <li class="para para--variation4">
                  <?php echo $row['list_content'] ;?>
                </li>
                <?php
                    }
                  }
                ?>

              </ul>
            </div>

            <div class="col--12">

              <?php 
                $technology_content_1 = get_field('technology_content_1');
                if( $technology_content_1 ) {
              ?>    
              <p class="para para--variation4 inception__body--blockpara">
              <?php echo $technology_content_1; ?>
              </p>
              <?php 
                }
              ?> 
              
              <?php 
                $technology_content_2 = get_field('technology_content_2');
                if( $technology_content_2 ) {
              ?>     
              <p class="para para--variation4 blocklist1--content">
              <?php echo $technology_content_2; ?>
              </p>
              <?php 
                }
              ?>      

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="inception__body--blocklist1">
      <div class="relictrio--row">
        <div class="col--1 inception__flex--remove"></div>
        <div class="col--11 inception__flex--full">
          <div class="relictrio--row">

            <div class="col--2 inception__body--icon">
              
            <picture>

              <?php 
              $implementation_mobile_icon = get_field('implementation_mobile_icon');
              if( $implementation_mobile_icon ) {
              ?>
              <source media="(max-width: 540px)" srcset="<?php echo $implementation_mobile_icon; ?>">
              <?php 
                }
              ?>

              <?php 
              $implementation_icon = get_field('implementation_icon');
              if( $implementation_icon ) {
              ?>
              <img src="<?php echo $implementation_icon; ?>" alt="inception-body-list-icon">
              <?php 
                }
              ?>

            </picture>

            </div>

            <div class="col--6 inception__body--heading">
              
              <?php 
                $implementation_heading = get_field('implementation_heading');
                if( $implementation_heading ) {
              ?>
              <h2 class="heading heading--variation1">
                <?php echo $implementation_heading; ?>
              </h2>
              <?php 
                }
              ?>

            </div>

            <div class="col--3 inception__body--arrow">

              <?php 
                $implementation_arrow_image = get_field('implementation_arrow_image');
                if( $implementation_arrow_image ) {
              ?>
              <img src="<?php echo $implementation_arrow_image; ?>" alt="inception-body-right-arrow">
              <?php 
                }
              ?>

            </div>

            <div class="col--12">
              
              <?php 
                $implementation_paragraph = get_field('implementation_paragraph');
                if( $implementation_paragraph ) {
              ?>
              <p class="para para--variation4 inception__body--blockpara">
                <?php echo $implementation_paragraph; ?>
              </p>
              <?php 
                }
              ?>

            </div>

            <div class="col--12">

              <?php 
                $implementation_content_1 = get_field('implementation_content_1');
                if( $implementation_content_1 ) {
              ?>
              <p class="para para--variation4 inception__body--blockpara">
                <?php echo $implementation_content_1; ?>
              </p>
              <?php 
                }
              ?>

              <?php 
                $implementation_content_2 = get_field('implementation_content_2');
                if( $implementation_content_2 ) {
                foreach( $implementation_content_2 as $row ) {
              ?>
              <div class="blocklist4--content">
                <div class="blocklist4--left">
                  <p class="para para--variation4">
                    <?php echo $row['list_name'] ;?>
                  </p>
                </div>
                <div class="blocklist4--right">
                  <p class="para para--variation4">
                  <?php echo $row['list_content'] ;?>
                  </p>
                </div>
              </div>
              <?php
                    }
                  }
                ?>    

            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>