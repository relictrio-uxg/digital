<?php
/*
* Template part for Portfolio PF_property_ladder_discover component
*
* @package Relictrio Digital
*/
?>

<?php 
    $discover_id_link = get_field('discover_id_link');
    if( $discover_id_link ) {
?>
<div id="<?php echo $discover_id_link; ?>"></div>
<?php 
  }
?>

<div class="property__discover">
  <div class="relictrio--row">
  <div class="col--1 col--remove"></div>
  <div class="col--11 col--full">

    <?php 
    $discover_heading = get_field('discover_heading');
    if( $discover_heading ) {
    ?>
      <h3 class="heading heading--variation2 property__challenge--heading">
      <?php echo $discover_heading; ?>
      </h3>
    <?php 
      }
    ?>

      <div class="relictrio--row property--mobile">

      <?php 
            $discover_paragraph_block = get_field('discover_paragraph_block');
            if( $discover_paragraph_block ) {
            foreach( $discover_paragraph_block as $row ) {
          ?>
        <div class="col--6">
          <p class="para property__challenge--para">
          <?php echo $row['paragraph'] ;?>
          </p>
        </div>
        <?php
              }
            }
          ?>

      </div>
    </div>
  </div>

  <?php 
    $discover_image_block = get_field('discover_image_block');
    if( $discover_image_block ) {
    foreach( $discover_image_block as $row ) {
  ?>
    <picture>
      <source media="(max-width: 540px)" srcset="<?php echo $row['discover_image_mobile'] ;?>">
      <img class="property__discover--img" src="<?php echo $row['discover_image'] ;?>" alt="portfolio-property-ladder-discover-img">
    </picture>
    <?php
        }
      }
    ?>

</div>