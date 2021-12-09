<?php
  /*
  * Template part for Services - services_experts component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container--content services__experts">

   <?php 
    $experts_heading = get_field('experts_heading');
    if( $experts_heading ) {
    ?>
  <h2 class="heading heading--variation1 text--center">
    <?php echo $experts_heading; ?>
  </h2>
  <?php 
      }
    ?>

  <div class="services__experts--grid">

    <?php 
      $experts_image_block = get_field('experts_image_block');
      if( $experts_image_block ) {
      foreach( $experts_image_block as $row ) {
    ?>
    <div class="<?php echo $row['experts_grid_class_name'] ;?>">
      <img src="<?php echo $row['experts_icon_image'] ;?>" alt="slider--img">
    </div>
    <?php
        }
      }
    ?>  

  </div>

</div>