<?php
  /*
  * Template part for Home helping__brands__mb component
  *
  * @package Relictrio Digital
  */
 ?>

<div class="container container--fluid pad-t--30 hide__help--desktop">
  <div class="container--content container--fxdwdh">
    <div class="relictrio--row">
      <?php 
            $card_info_name_mobile = get_field('card_info_name_mobile');
            if ( $card_info_name_mobile ) {
        ?>
      <h2 class="heading heading--variation1 text--center help__brand--mbhead">
        <?php echo $card_info_name_mobile ;?>
      </h2>
      <?php
            }
        ?>
      <?php 
            $card_info_list_mobile = get_field('card_info_list_mobile');
            if( $card_info_list_mobile ) {
            foreach( $card_info_list_mobile as $row ) {
        ?>

      <div class="col--3">
        <div class="brdr__img">
          <img class="card__img " src="<?php echo $row['image_path_mobile'] ;?>" alt="design & development icon" />
        </div>
        <p class="heading heading--variation4 text--center brdr__img--para">
          <?php echo $row['list_item_text']  ;?>
        </p>
      </div>

      <?php
                }
            }
        ?>

    </div>
  </div>
</div>