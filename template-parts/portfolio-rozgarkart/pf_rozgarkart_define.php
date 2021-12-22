<?php
/*
* Template part for Portfolio PF_rozgarkart_define component
*
* @package Relictrio Digital
*/
?>

<?php 
    $define_id_link = get_field('define_id_link');
    if( $define_id_link ) {
?>
<div id="<?php echo $define_id_link; ?>" class="rozgarkart__define">
<?php 
  }
?>

<?php 
    $define_heading = get_field('define_heading');
    if( $define_heading ) {
?>
  <h3 class="heading heading--variation2 rozgarkart__challenge--heading">
  <?php echo $define_heading; ?>
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
          $define_paragraph_1 = get_field('define_paragraph_1');
          if( $define_paragraph_1 ) {
        ?>
          <p class="para rozgarkart__challenge--para">
            <?php echo $define_paragraph_1; ?>
          </p>
        <?php 
          }
        ?>

          <?php 
            $define_subheading = get_field('define_subheading');
            if( $define_subheading ) {
          ?>
          <h4 class="para para--variation5 rozgarkart__challenge--subheading rozgarkart__custom--space">
            <?php echo $define_subheading; ?>
          </h4>
          <?php 
            }
          ?>

          <?php 
            $define_paragraph_2 = get_field('define_paragraph_2');
            if( $define_paragraph_2 ) {
          ?>
          <p class="para rozgarkart__challenge--para rozgarkart__custom--space">
            <?php echo $define_paragraph_2; ?>
          </p>
          <?php 
            }
          ?>

          <div class="rozgarkart__define--wireframeblock rozgarkart__custom--space">

            <?php 
              $define_wireframe_block = get_field('define_wireframe_block');
              if( $define_wireframe_block ) {
              foreach( $define_wireframe_block as $row ) {
            ?>
            <div class="<?php echo $row['wireframe_class_name'] ;?>">
              <img src="<?php echo $row['wireframe_image'] ;?>" alt="rozgarkart-define-img">
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