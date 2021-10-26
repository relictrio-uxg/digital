<div class="container container--fluid mar-top--60">
    <div class="container--fluid container--fxdwdh dis--flx flex--wrap">
      <?php
        $services_tech_images = get_field('services_tech_images');
        if( $services_tech_images) {
            foreach( $services_tech_images as $services_tech_image ) {
      ?>

            <div class="col--2 pad-tp--15 pad-bt--15">
                <img class="res-img" src="<?php echo $services_tech_image['tech_image']?>" >
             </div>  

      <?php 
            }
        }
      ?>
    </div>
</div>