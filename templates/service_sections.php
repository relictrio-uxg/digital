<?php 
                    $digital_services = get_field('digital_services');
                    if( $digital_services) {
                        foreach( $digital_services as $digital_service ) {
    ?>
<div class="container--fluid dis--flx mar-top--120">
            <div class="col--4 dis--flx flex--column flx-alnitm--cent justify-content--center">
                <div class="dis--flx align-items--end">
                    <p class="txt--cetacean_blue heading--variation6 opacity--20 service__sectionNumbers"><?php echo $digital_service['service_number'] ?></p>
                    <picture>
                        <source media="(max-width: 600px)" srcset="<?php echo $digital_service['service_icon_image_mobile']?>">
                        <source media="(max-width: 1024px)" srcset="<?php echo $digital_service['service_icon_image_tab']?>">
                        <img src="<?php echo $digital_service['service_icon_image']?>" alt="inception group icon">
                    </picture>
                </div>
                <div class="heading heading--variation6 mar-top--90 dis--flx justify-content--center inception__sectionHeading">
                    <?php echo $digital_service['service_title']?>
                </div>
            </div>
            <div class="col--1"></div>
            <div class="col--7">
                <div class="serviceImage_container pos--rel dis--flx">
                    <img class="res-img" src="<?php echo $digital_service['service_image']?>" alt="inception image">
                    <img class="res-img pos--abs serviceInception__backdrop" src="<?php echo get_template_directory_uri()?>/assets/images/backdrop0.2@1x.png" alt="backdrop light">
                </div>
            </div>
        </div>

        <div class="container--fluid mar-top--80 dis--flx align-items--center section__subHeading">
            <div class="col--1"></div>
            <div class="col--9">
                <div class="heading heading--variation1 inception__sectionSubHeading">
                    <?php echo $digital_service['service_heading']?>
                </div>
            </div>
            <div class="col--2 right__arrow">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/right-arrow-group.png" alt="right arrow group icon">
            </div>
        </div>

        <div class="para para--variation4 dis--flx container--fullwdh mar-top--50 section__description">
            <div class="col--1"></div>
            <div class="col--11 inception__sectionDescription">
                <?php echo $digital_service['service_description']?>
            </div>
        </div>
        <div class="para para--variation4 dis--flx container--fullwdh mar-top--40 service__sectionList"> 
            <div class="col--1"></div>
            <div class="col--11 dis--flx flex--column gap--25">
            <?php 
                foreach( $digital_service['service_features'] as $service_feature ) {
            ?>
                <div class="dis--flx align-items--center">
                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="<?php echo $service_feature['service_feature_icon_mobile']?>">
                            <source media="(max-width: 1024px)" srcset="<?php echo $service_feature['service_feature_icon_tab']?>">
                            <img src="<?php echo $service_feature['service_feature_icon']?>" alt="digital maturity icon" />
                        </picture>
                    </div>
                    <div class="heading--variation3 mar-lft--31 txt--black">
                        <?php echo $service_feature['service_feature_title']?>
                    </div>
                </div>
            <?php
                }
            ?>
                <div class="dis--flx mar-top--15 align-items--center">
                    <div>
                        <picture>
                            <source media="(max-width: 600px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/rightArrow_icon-mobile@1x.png">
                            <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri()?>/assets/images/rightArrow_icon-tab@1x.png">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/rightArrow_icon@1x.png" alt="digital maturity icon" />
                        </picture>
                    </div>
                    <div class="heading--variation4 mar-lft--28 txt--electric_blue ltr-spacing--pt14 view__fullDetails">
                        View Full Details
                    </div>
                </div>
            </div>
        </div>
<?php
       }
    }
?>