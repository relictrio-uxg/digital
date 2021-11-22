<?php
/*
* Template part for Portfolio PF_rozgarkart_discover component
*
* @package Relictrio Digital
*/
?>

<?php 
    $discover_id_link = get_field('discover_id_link');
    if( $discover_id_link ) {
?>
<div id="<?php echo $discover_id_link; ?>" class="rozgarkart__discover">
<?php 
  }
?>

<?php 
    $discover_heading = get_field('discover_heading');
    if( $discover_heading ) {
?>
  <h3 class="heading heading--variation2 rozgarkart__challenge--heading">
    <?php echo $discover_heading; ?>
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
          $discover_paragraph = get_field('discover_paragraph');
          if( $discover_paragraph ) {
        ?>
          <p class="para rozgarkart__challenge--para">
            <?php echo $discover_paragraph; ?>
          </p>
        <?php 
          }
        ?>

        </div>
      </div>
    </div>
  </div>
</div>