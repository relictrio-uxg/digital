<?php
  /*
  * Template part for Pre Live P_digitalmanaged component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container container--fluid">
  <div class="container--content">
    <div class="relictrio--row jus-cnt--cent prelive__digital">

      <?php 
            $digital_managed_heading = get_field('digital_managed_heading');
            if( $digital_managed_heading ) {
        ?>
      <h2 class="heading heading--variation1">
        <?php echo $digital_managed_heading; ?>
      </h2>
      <?php 
            }
        ?>

      <?php     
            $digital_managed_paragraph = get_field('digital_managed_paragraph');
            if( $digital_managed_paragraph ) {
        ?>
      <p class="heading heading--variation2">
        <?php echo $digital_managed_paragraph; ?>
      </p>
      <?php 
            }
        ?>

        <?php     
          $digital_managed_blue_paragraph = get_field('digital_managed_blue_paragraph');
          if( $digital_managed_blue_paragraph ) {
        ?>
        <p class="heading heading--variation2">
          <?php echo $digital_managed_blue_paragraph; ?>
        </p>
        <?php 
            }
        ?>

        <?php     
          $digital_managed_icon = get_field('digital_managed_icon');
          if( $digital_managed_icon ) {
        ?>
        <div class="prelive__digital--quoteimg">
          <img src="<?php echo $digital_managed_icon; ?>" alt="prelive-digital-quote">
        </div>
        <?php 
            }
        ?>

        <?php     
          $digital_managed_quote = get_field('digital_managed_quote');
          if( $digital_managed_quote ) {
        ?>
        <p class="heading">
        <?php echo $digital_managed_quote; ?>
        </p>
        <?php 
            }
        ?>

    </div>

    <?php 
          $digital_managed_block_list = get_field('digital_managed_block_list');
          if( $digital_managed_block_list ) {
          foreach( $digital_managed_block_list as $row ) {
    ?>

    <div class="prelive__digital--blocklist">
      <div class="relictrio--row">
        <div class="col--1 prelive__flex--remove"></div>
        <div class="col--11 prelive__flex--full">
          <div class="relictrio--row">

            <div class="col--2 prelive__digital--icon">
              <img src="<?php echo $row['block_icon'] ;?>" alt="postlive-digital-list-icon-1">
            </div>

            <div class="col--6 prelive__digital--heading">
              <h2 class="heading heading--variation1">
                <?php echo $row['block_heading'] ;?>
              </h2>
            </div>

            <div class="col--3 prelive__digital--arrow">
              <img src="<?php echo $row['block_arrow_icon'] ;?>" alt="postlive-digital-right-arrow">
            </div>

            <div class="col--12">
              <p class="para para--variation4 prelive__digital--blockpara">
                <?php echo $row['block_paragraph'] ;?>
              </p>
            </div>
          

            <div class="col--12">

              <?php 
              if($row['block_list']){
              foreach( $row['block_list'] as $list ) {
              ?>

              <div class="prelive__digital--list">
                <img src="<?php echo $list['list_icon'] ;?>" alt="postlive-digital-blocklist-icon-1">
                <p class="para">
                  <?php echo $list['list_heading'] ;?>
                </p>
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

    <?php
              }
            }
    ?>


  </div>
</div>