<div class="container--fluid pos--rel">
        <!-- <picture>
            <source media="(min-width: 1420px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/banner@2x.png"/>
            <source media="(min-width: 650px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/banner@1x.png"/>
            <source media="(min-width: 376px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/banner@pt75x.png"/>
            <source media="(max-width: 375px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/banner@pt5x.png"/>
            <img class="res-img" src="<?php echo get_template_directory_uri()?>/assets/images/banner@1x.png" alt="banner bg img" />
        </picture> -->
        <?php 
            $relictrio_digital_banner_image = get_field('relictrio_digital_banner_image');
            if ( $relictrio_digital_banner_image ) {
        ?>
            <img class="res-img" src="<?php echo $relictrio_digital_banner_image ?>" alt="banner bg img">
        <?php
                }
        ?>
        <?php 
            $relictrio_digital_banner_backdrop = get_field('relictrio_digital_banner_backdrop');
            if ( $relictrio_digital_banner_backdrop ) {
        ?>
            <img class="res-img pos--abs z-index--2 service__bannerBackdrop" src="<?php echo $relictrio_digital_banner_backdrop ?>" alt="banner bg">
        <?php
            }
        ?>
        <div class="container pos--abs service--bannerHeading">
            <div class="container--fluid dis--flx jus-cnt--cent">
                <div class="col--3 bannerHeading__placeholders"></div>
                <?php 
                    $relictrio_digital_banner_heading = get_field('relictrio_digital_banner_heading');
                    if ( $relictrio_digital_banner_heading ) {
                ?>
                <div class="heading--variation5 txt--white col--6 service__bannerHeading">
                    <!-- Our <span class="txt--eucalyptus">services</span> -->
                    <?php
                        echo $relictrio_digital_banner_heading
                    ?>
                </div>
                <?php
                    }
                ?>
                <div class="col--3 bannerHeading__placeholders"></div>
            </div>
            <div class="container--fluid dis--flx jus-cnt--cent">
                <div class="col--1"></div>
                <?php 
                    $relictrio_digital_banner_description = get_field('relictrio_digital_banner_description');
                    if ( $relictrio_digital_banner_description ) {
                ?>
                <div class="heading--variation1 txt--white txt-align--cent col--10 mar-t--50">
                    <?php echo $relictrio_digital_banner_description ?>
                </div>
                <?php
                    }
                ?>
                <div class="col--1"></div>
            </div>
        </div>
    </div>