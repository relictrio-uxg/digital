<?php
  /*
  * Template part for Portfolio PF_card component
  *
  * @package Relictrio Digital
  */
 ?>

<!-- portfolio_card_menu_block -->

<div class="container container--fluid">
  <div class="container--content">
    <div class="portfolio__card">
      <ul class="portfolio__card--navbar">

        <?php 
            $portfolio_card_menu_block = get_field('portfolio_card_menu_block');
            if( $portfolio_card_menu_block ) {
            foreach( $portfolio_card_menu_block as $row ) {
          ?>
        <li class="heading heading--variation4">
          <?php echo $row['menu_heading'] ;?>
        </li>
        <?php
              }
            }
          ?>

      </ul>
    </div>

    <!-- portfolio__card--cardlist -->

    <div class="portfolio__card--cardlist">
      <div class="relictrio--row">

        <?php 
          $portfolio_card_block = get_field('portfolio_card_block');
          if( $portfolio_card_block ) {
          foreach( $portfolio_card_block as $row ) {
        ?>

        <div class="col--6 portfolio__card--col--6">
          <div class="portfolio__card--card">
            <?php 
              foreach( $row['card_image_block'] as $list ) {
              ?>
              <a href="<?php echo $row['card_link'] ;?>">
            <div class="portfolio__card--imgblock">
              <img class="portfolio__card--img" src="<?php echo $list['card_image'] ;?>" alt="portfolio-card-image">
              <div class="portfolio__card--imghover">
                <img class="portfolio__card--img" src="<?php echo $list['card_image_hover'] ;?>"
                  alt="portfolio-card-image">
              </div>
            </div>
            <?php
                }
              ?>

            <div class="portfolio__card--content">
              <h3 class="heading heading--variation4 portfolio__card--cardheading">
                <?php echo $row['card_heading'] ;?>
              </h3>
              <ul class="portfolio__card--contentlist">

                <?php 
                    foreach( $row['card_list_block'] as $list ) {
                  ?>
                <li>
                  <p class="para para--variation2 portfolio__card--para1">
                    <?php echo $list['card_list_heading'] ;?>
                  </p>
                  <p class="para portfolio__card--para2">
                    <?php echo $list['card_list_sub_heading'] ;?>
                  </p>
                </li>
                <?php
                    }
                  ?>

              </ul>
            </div>
            </a>
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