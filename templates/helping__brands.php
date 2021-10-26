
<div class="container container--fluid  help__brand hide__help--mb">
        <div class="container--content container--fxdwdh">
            <div class="relictrio--row ">
            <div class="col--5 help__brand--sec">
            <?php 
                $card_info_name = get_field('card_info_name');
                if ( $card_info_name ) {
            ?>
                <h2 class="heading heading--variation1 text--center help__brand--head">
                <?php echo $card_info_name ;?>
                  </h2>
            <?php
            }
            ?>
            <?php 
                $card_info_description = get_field('card_info_description');
                if ( $card_info_description ) {
            ?>
                <p class="para text--center ">
                <?php echo $card_info_description ;?></p>
            <?php
            }
            ?>
            </div>
            <div class="col--7 help__brandlist">
                <?php 
                    $rows = get_field('card_info_list');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                ?>
                <div class="help__brand--card card__one <?php echo $row['modifier_class_name'] ; ?>">
                    <div class="card__head">
                    <img class="card__img " src="<?php echo $row['image_path'] ; ?>"
                            alt="card one icon" />
                    </div>
                    <div>
                    <h4 class=" heading heading--variation4 text--center card__txt">
                    <?php echo $row['heading'] ; ?></h4>
                    <p class="para para--variation2 text--center card__para">
                    <?php echo $row['description'] ; ?></p>
                    </div>
                </div>
                <?php
                }
                }
                ?>
            </div>
            </div>
        </div>
    </div>