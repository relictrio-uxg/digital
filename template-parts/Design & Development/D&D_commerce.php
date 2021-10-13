<?php
  /*
  * Template part for Design & Development D&D_commerce commponent
  *
  * @package Relictrio Digital
  */
 ?>

  <div class="container container--fluid">
    <div class="container--content">
      <div class="relictrio--row mar-tpbt--30 designdevelop__commerce">
        
            <?php 
                $commerce_section_icon = get_field('commerce_section_icon');
                if( $commerce_section_icon ) {
            ?>
            <h3 class="heading heading--variation1">
            <img src="<?php echo $commerce_section_icon; ?>" alt="d&d-commerce-icon">
            <?php 
                }
            ?>
            <?php 
                $commerce_section_heading = get_field('commerce_section_heading');
                if( $commerce_section_heading ) {
            ?>
          <?php echo $commerce_section_heading; ?></h3>
          <?php 
                }
            ?>
      </div>
      <div class="designdevelop__commerce--para">

            <?php 
                $commerce_section_paragraph = get_field('commerce_section_paragraph');
                if( $commerce_section_paragraph ) {
            ?>
            <p class="heading heading--variation3">
            <?php echo $commerce_section_paragraph; ?>
            </p>
            <?php 
                }
            ?>
        
      </div>
      <div class="relictrio--row mar-bot--50 designdevelop__commerce--block">
        <div class="col--7">

            <?php 
                $commerce_section_bottom_paragraph = get_field('commerce_section_bottom_paragraph');
                if( $commerce_section_bottom_paragraph ) {
            ?>
            <h4 class="heading heading--variation2">
            <?php echo $commerce_section_bottom_paragraph; ?>
            </h4>
            <?php 
                }
            ?>

        </div>

        <div class="col--3 designdevelop__commerce--logo">

            <?php 
                $commerce_section_bottom_paragraph_icon_1 = get_field('commerce_section_bottom_paragraph_icon_1');
                if( $commerce_section_bottom_paragraph_icon_1 ) {
            ?>
            <img src="<?php echo $commerce_section_bottom_paragraph_icon_1; ?>" alt="d&d-commerce-logo-1">
            <?php 
                }
            ?>

          
        </div>
        <div class="col--2 designdevelop__commerce--logo">
          
            <?php 
                $commerce_section_bottom_paragraph_icon_2 = get_field('commerce_section_bottom_paragraph_icon_2');
                if( $commerce_section_bottom_paragraph_icon_2 ) {
            ?>
            <img src="<?php echo $commerce_section_bottom_paragraph_icon_2; ?>" alt="d&d-commerce-logo-2">
            <?php 
                }
            ?>

        </div>
      </div>
    </div>
  </div>
