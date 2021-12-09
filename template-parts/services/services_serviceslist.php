<?php
  /*
  * Template part for Services - services_serviceslist component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container--content">
  <div class="services__slist">

    <?php 
        $services_block_heading = get_field('services_block_heading');
        if( $services_block_heading ) {
      ?>
    <h2 class="heading heading--variation1">
      <?php echo $services_block_heading; ?>
    </h2>
    <?php 
          }
        ?>

  </div>
</div>


<div class="container--content">



  <?php 
    $services_block_list = get_field('services_block_list');
    if( $services_block_list ) {
    foreach( $services_block_list as $row ) {
  ?>
  <div class="services__slistblock--block">
    <div class="relictrio--row">

      <div class="services__slistblock col--5">
        <h3 class="text--center mar-bot--25">
          <span class="heading heading--variation5 services__slistblock--logo">
          <?php echo $row['services_number'] ;?>
          </span>
          <picture>
            <source media="(max-width: 540px)" srcset="<?php echo $row['services_icon_mobile_image'] ;?>">
            <img src="<?php echo $row['services_icon_image'] ;?>" alt="services-digital-icon">
          </picture>
        </h3>
        <h3 class="heading heading--variation5 services__slistblock--heading text--center">
        <?php echo $row['services_heading'] ;?>
        </h3>
      </div>

      <div class="col--7 services__slistblock--img">

        <img src="<?php echo $row['services_overlay_image'] ;?>" alt="services-digital-image">
        <div class="services__slistblock--overlayimg">
          <img src="<?php echo $row['services_image'] ;?>" alt="services-digital-image">
        </div>
      </div>

    </div>
    <div class="relictrio--row">
      <div class="col--1 services__col--remove"></div>
      <div class="col--11 services__col--full">

        <div class="services__slistblock--content">
          <h2 class="heading heading--variation1">
          <?php echo $row['services_list_heading'] ;?>
          </h2>
          <img src="<?php echo $row['services_list_right_arrow'] ;?>" alt="arrow-img">
        </div>

        <p class="para para--variation4 services__slistblock--para">
        <?php echo $row['services_list_paragraph'] ;?>
        </p>


        <?php 
          foreach( $row['services_list_block'] as $list ) {
        ?>
        <div class="services__slistblock--list">
          <img src="<?php echo $list['list_icon_image'] ;?>" alt="postlive-digital-blocklist-icon">
          <p class="para">
          <?php echo $list['list_heading'] ;?>
          </p>
        </div>
        <?php
          }
        ?>


        <div class="services__slistblock--listlink">
          <a href="<?php echo $row['services_list_arrow_link'] ;?>">
            <img src="<?php echo $row['services_list_arrow_icon'] ;?>" alt="postlive-digital-blocklist-icon-1">
            <p class="para">
            <?php echo $row['services_list_arrow_heading'] ;?>
            </p>
          </a>
        </div>

      </div>
    </div>
  </div>
  <?php
      }
    }
  ?>  


</div>