<?php
/*
* Template part for Portfolio PF_mdr_rugby_discover component
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

      <div class="rugby__discover">
        <div class="relictrio--row">
          <div class="col--1 col--remove"></div>
          <div class="col--10 col--full">

            <?php 
            $discover_heading = get_field('discover_heading');
            if( $discover_heading ) {
            ?>
              <h3 class="heading heading--variation2 rugby__challenge--heading">
              <?php echo $discover_heading; ?>
              </h3>
            <?php 
              }
            ?>

            <div class="relictrio--row rugby__container">

              <?php 
                $discover_paragraph_block = get_field('discover_paragraph_block');
                if( $discover_paragraph_block ) {
                foreach( $discover_paragraph_block as $row ) {
              ?>
              <div class="col--6">
                <p class="para rugby__challenge--para">
                <?php echo $row['paragraph'] ;?>
                </p>
              </div>
              <?php
                    }
                  }
                ?>

            </div>
          </div>
          <div class="col--1 col--remove"></div>
        </div>
      </div>