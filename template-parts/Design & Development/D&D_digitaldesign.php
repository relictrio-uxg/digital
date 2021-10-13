<?php
  /*
  * Template part for Design & Development D&D_digitaldesign commponent
  *
  * @package Relictrio Digital
  */
 ?>

  <div class="container container--fluid">
    <div class="container--content">
      <div class="relictrio--row">
        <div class="col--12 designdevelop__digital">

          <?php 
              $digital_design_section_heading = get_field('digital_design_section_heading');
              if( $digital_design_section_heading ) {
          ?>
          <h2 class="heading heading--variation1">
          <?php echo $digital_design_section_heading; ?>
          </h2>
          <?php 
                }
            ?>

          <?php 
            $digital_design_section_paragraph_block = get_field('digital_design_section_paragraph_block');
            if( $digital_design_section_paragraph_block ) {
            foreach( $digital_design_section_paragraph_block as $row ) {
          ?>
          <p class="heading heading--variation3 designdevelop__digital--para">
          <?php echo $row['digital_design_paragraph'] ;?>
          </p>
          <?php
              }
            }
          ?>

            <?php 
                $digital_design_section_paragraph_blue = get_field('digital_design_section_paragraph_blue');
                if( $digital_design_section_paragraph_blue ) {
            ?>
          <p class="heading heading--variation3">
          <?php echo $digital_design_section_paragraph_blue; ?>
          </p>
          <?php 
                }
            ?>

            <?php 
                $digital_design_section_result_paragraph = get_field('digital_design_section_result_paragraph');
                if( $digital_design_section_result_paragraph ) {
            ?>
          <p class="heading heading--variation3 designdevelop__digital--para">
          <?php echo $digital_design_section_result_paragraph; ?>
          </p>
          <?php 
                }
            ?>

        </div>
      </div>
      <div class="relictrio--row designdevelop__digital--blocklist">

        <?php 
          $digital_design_section_result_block = get_field('digital_design_section_result_block');
          if( $digital_design_section_result_block ) {
          foreach( $digital_design_section_result_block as $row ) {
        ?>
        <div class="col--6">
          <div class="designdevelop__digital--blocks">
            <img class="designdevelop__digital--icons" src="<?php echo $row['block_image'] ;?>"
              alt="d&d-digitaldesign-icon-1">
            <h3 class="heading heading--variation3 text--center">
            <?php echo $row['block_heading'] ;?>
            </h3>
            <p class="para">
            <?php echo $row['block_paragraph'] ;?>
            </p>
          </div>
        </div>
        <?php
              }
            }
          ?>

      </div>
      <div class="designdevelop__digital--includeblock">

        <?php 
            $digital_design_section_creative_heading = get_field('digital_design_section_creative_heading');
            if( $digital_design_section_creative_heading ) {
        ?>
        <h3 class="heading heading--variation2">
        <?php echo $digital_design_section_creative_heading; ?>
        </h3>
        <?php 
            }
        ?>

        <div class="relictrio--row jus-cnt--spbtw mar-top--40 mar-bot--30">

        <?php 
          $digital_design_section_creative_block = get_field('digital_design_section_creative_block');
          if( $digital_design_section_creative_block ) {
          foreach( $digital_design_section_creative_block as $row ) {
        ?>
          <div class="text--center">
            <img src="<?php echo $row['creative_icon'] ;?>">
            <h4 class="heading heading--variation4">
            <?php echo $row['creative_heading'] ;?>
            </h4>
          </div>
          <?php
              }
            }
          ?>
          
        </div>
      </div>
    </div>
  </div>

