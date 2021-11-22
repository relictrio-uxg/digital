<?php
/*
* Template part for Portfolio PF_rozgarkart_banner component
*
* @package Relictrio Digital
*/
?>


  <div class="container container--fluid">
    <div class="container--content rozgarkart__banner">

      <?php 
          $banner_heading = get_field('banner_heading');
          if( $banner_heading ) {
      ?>
        <h2 class="heading">
        <?php echo $banner_heading; ?>
        </h2>
      <?php 
        }
      ?>

    </div>
  </div>

  <div class="container container--fluid">
    <div class="container--content">
      <div class="relictrio--row">
        <div class="col--6 rozgarkart__banner--icon">
          
        <?php 
          $banner_icon = get_field('banner_icon');
          if( $banner_icon ) {
        ?>
          <img src="<?php echo $banner_icon; ?>" alt="rozgarkart-banner-icon">
        <?php 
          }
        ?>
        
        </div>
        <div class="col--6 rozgarkart__banner--list">
          <ul class="rozgarkart__banner--projectinfo">

          <?php 
            $banner_project_info = get_field('banner_project_info');
            if( $banner_project_info ) {
            foreach( $banner_project_info as $row ) {
          ?>
            <li class="para"><?php echo $row['content'] ;?></li>
          <?php
              }
            }
          ?>

          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container--fullwdh rozgarkart__banner--content">
    <div class="relictrio--row">
      <div class="col--10 rozgarkart__col--full">
        <div class="rozgarkart__banner--imgblock">

        <?php 
          $banner_image_heading = get_field('banner_image_heading');
          if( $banner_image_heading ) {
        ?>
          <h3 class="heading heading--variation1">
          <?php echo $banner_image_heading; ?>
          </h3>
        <?php 
          }
        ?>

          <?php 
          $banner_image = get_field('banner_image');
          if( $banner_image ) {
          ?>
            <img src="<?php echo $banner_image; ?>" alt="rozgarkart-banner-img">
          <?php 
            }
          ?>
        
          </div>
      </div>
      <div class="col--2 rozgarkart__col--remove">
      </div>
    </div>
  </div>

