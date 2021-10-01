<div class="container container--fluid pos--rel ">
    <div class="container--content container--fullwdh">
        <div class="relictrio--row ">
        <div class=" hero__banner">
            <?php 
                $hero_banner_image_path = get_field('hero_banner_image_path');
                if ( $hero_banner_image_path ) {
            ?>
            <img class="hero__image " src="<?php echo $hero_banner_image_path ;?>"
                    alt="Relictrio digital hero image" />
            <?php
                }
            ?>

        </div>
        </div>
        <div class="hero__text">
        <?php 
                $hero_banner_heading = get_field('hero_banner_heading');
                if ( $hero_banner_heading ) {
            ?>
            <h1 class="hero__text--head"><?php echo $hero_banner_heading ;?></h1>
            <?php
                }
            ?>
             <?php 
                $hero_banner_description = get_field('hero_banner_description');
                if ( $hero_banner_description ) {
            ?>
            <p class="hero__text--subhead pad-tp--40"><?php echo $hero_banner_description ;?></p>
            <?php
                }
            ?>
        </div>
    </div>
</div>