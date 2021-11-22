<footer>
  <div class="container container--fluid">
    <div class="container--content">
      <div class="relictriofooter relictrio--row justify-content--between">

        <div class="col--1">
          <?php 
          $footer_image_link = get_field('footer_image_link');
          if( $footer_image_link ) {
        ?>
          <a href="<?php echo $footer_image_link; ?>">
            <?php 
          }
        ?>
            <?php 
          $footer_icon_image = get_field('footer_icon_image');
          if( $footer_icon_image ) {
        ?>
            <img class="relictriofooter__logo" src="<?php echo $footer_icon_image; ?>" alt="relictrio-logo">
            <?php 
          }
        ?>
          </a>

        </div>

        <div class="col--1"></div>

        <div class="col--3 relictriofooter__hover">

          <?php 
          $footer_heading_1 = get_field('footer_heading_1');
          if( $footer_heading_1 ) {
          ?>
          <h3 class="relictriofooter__heading heading heading--variation4">
            <?php echo $footer_heading_1; ?>
          </h3>
          <?php 
          }
          ?>

          <ul class="relictriofooter__link">
            <li class="heading heading--variation4 mar-top--0">

              <span class="relictriofooter__img">

                <?php 
                $footer_icon_block_1 = get_field('footer_icon_block_1');
                if( $footer_icon_block_1 ) {
                foreach( $footer_icon_block_1 as $row ) {
              ?>
                <img class="relictriofooter__img--img" src="<?php echo $row['icon_image'] ;?>" alt="logo">
                <div class="relictriofooter__img--hover">
                  <img src="<?php echo $row['icon_image_hover'] ;?>" alt="logo">
                </div>
                <?php
                  }
                }
              ?>

              </span>

              <?php 
                $footer_content_1 = get_field('footer_content_1');
                if( $footer_content_1 ) {
              ?>
              <?php echo $footer_content_1; ?>
              <?php 
                }
              ?>

            </li>
          </ul>

        </div>

        <div class="col--3 relictriofooter__hover">

          <?php 
          $footer_heading_2 = get_field('footer_heading_2');
          if( $footer_heading_2 ) {
          ?>
          <h3 class="relictriofooter__heading heading heading--variation4">
            <?php echo $footer_heading_2; ?>
          </h3>
          <?php 
          }
          ?>

          <ul class="relictriofooter__link">
            <li class="heading heading--variation4 mar-top--0">

              <span class="relictriofooter__img">

                <?php 
                $footer_icon_block_2 = get_field('footer_icon_block_2');
                if( $footer_icon_block_2 ) {
                foreach( $footer_icon_block_2 as $row ) {
                ?>
                <img class="relictriofooter__img--img" src="<?php echo $row['icon_image'] ;?>" alt="logo">
                <div class="relictriofooter__img--hover">
                  <img src="<?php echo $row['icon_image_hover'] ;?>" alt="logo">
                </div>
                <?php
                  }
                }
              ?>

              </span>

              <?php 
                $footer_content_2 = get_field('footer_content_2');
                if( $footer_content_2 ) {
              ?>
              <?php echo $footer_content_2; ?>
              <?php 
                }
              ?>

            </li>
          </ul>

        </div>
        <div class="col--4 relictriofooter__hover">

          <?php 
          $footer_heading_3 = get_field('footer_heading_3');
          if( $footer_heading_3 ) {
          ?>
          <h3 class="relictriofooter__heading heading heading--variation4">
            <?php echo $footer_heading_3; ?>
          </h3>
          <?php 
          }
          ?>

          <ul class="relictriofooter__link">
            <li class="heading heading--variation4 mar-top--0">

              <span class="relictriofooter__img">

                <?php 
                $footer_icon_block_3 = get_field('footer_icon_block_3');
                if( $footer_icon_block_3 ) {
                foreach( $footer_icon_block_3 as $row ) {
              ?>
                <img class="relictriofooter__img--img" src="<?php echo $row['icon_image'] ;?>" alt="logo">
                <div class="relictriofooter__img--hover">
                  <img src="<?php echo $row['icon_image_hover'] ;?>" alt="logo">
                </div>
                <?php
                  }
                }
              ?>

              </span>

              <?php 
                $footer_content_3 = get_field('footer_content_3');
                if( $footer_content_3 ) {
              ?>
              <?php echo $footer_content_3; ?>
              <?php 
                }
              ?>

            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <div class="relictriofooterbottom relictrio--row jus-cnt--cent">
    <div class="col--5"></div>
    <div class="col--4 relictriofooter__order--2">

    <?php 
      $footer_copyright = get_field('footer_copyright');
      if( $footer_copyright ) {
    ?>
      <p class="para para--variation2 mar-bot--0">
        <?php echo $footer_copyright; ?>
      </p>
    <?php 
      }
    ?>
    
    </div>

    <div class="col--3 relictriofooter__order--1">

    <?php 
      $footer_social_icon_block = get_field('footer_social_icon_block');
      if( $footer_social_icon_block ) {
      foreach( $footer_social_icon_block as $row ) {
    ?>
      <span class="relictriofooterbottom__icon">
        <a href="<?php echo $row['social_link'] ;?>">
          <img class="relictriofooterbottom__icon--img" src="<?php echo $row['scoial_icon'] ;?>"
            alt="linkedin-logo">
          <div class="relictriofooterbottom__icon--hoverblock">
            <img class="relictriofooterbottom__icon--hover" src="<?php echo $row['scoial_icon_hover'] ;?>"
              alt="linkedin-logo">
          </div>
        </a>
      </span>
    <?php
        }
      }
    ?>
      
    </div>
  </div>
</footer>