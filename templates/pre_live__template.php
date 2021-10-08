
<div class="container--fluid">
    <div class="container">
        <?php 
            $page_builder = get_field('page_builder');
            if($page_builder){
                foreach($page_builder as $page_builder){
            
        ?>
        <div class="container--fluid dis--flx mar-top--120">
            <div class="col--4 dis--flx flex--column flx-alnitm--cent justify-content--center">
                <div class="dis--flx align-items--end">
                    <p class="txt--cetacean_blue heading--variation6 opacity--20 service__sectionNumbers"><?php echo $page_builder['page_service_number'] ?></p>
                    <picture>
                        <source media="(max-width: 600px)" srcset="<?php echo $page_builder['page_icon_mobile'] ?>">
                        <source media="(max-width: 1024px)" srcset="<?php echo $page_builder['page_icon_tab'] ?>">
                        <img src="<?php echo $page_builder['page_icon'] ?>" alt="pre live group icon">
                    </picture>
                </div>
                <div class="heading heading--variation6 mar-top--90 dis--flx justify-content--center inception__sectionHeading">
                    <?php echo $page_builder['page_title'] ?>
                </div>
            </div>
            <div class="col--1"></div>
            <div class="col--7">
                <div class="serviceImage_container pos--rel dis--flx">
                    <img class="res-img" src="<?php echo $page_builder['page_main_image'] ?>" alt="inception image">
                    <img class="res-img pos--abs serviceInception__backdrop" src="<?php echo $page_builder['page_image_backdrop'] ?>" alt="backdrop light">
                </div>
            </div>
        </div>
        <div class="mar-top--120 dis--flx flex--column justify-content--center align-items--center">
            <div class="heading heading--variation1">
                <?php echo $page_builder['page_main_heading'] ?>
            </div>
            <div class="mar-top--50 para para--variation5 txt--davy_grey txt-spacing--2">
                <?php echo $page_builder['main_description'] ?>
            </div>

            <div class="mar-top--50 para para--variation5">
                <?php echo $page_builder['description_quote'] ?>
            </div>
            <div class="mar-top--75 col--4">
                <img class="res-img" src="<?php echo $page_builder['special_image'] ?>" alt="pre-live trained group icon">
            </div>
            <div class="mar-top--60">
                <div class="heading">
                    <?php echo $page_builder['special_quote'] ?>
                </div>
            </div>
        </div>
        <?php 
            $page_services = get_field("page_services");
            if( $page_services) {
                foreach( $page_services as $page_service ) {            
        ?>

        <div class="preLive__desSection mar-top--120">
            <div class="dis--flx align-items--center">
                <div class="col--1"></div>
                <div class="col--2">
                    <picture>
                        <source media="(max-width: 600px)" srcset="<?php echo $page_service['service_icon_mobile'] ?>">
                        <source media="(max-width: 1024px)" srcset="<?php echo $page_service['service_icon_tab'] ?>">
                        <img src="<?php echo $page_service['service_icon'] ?>" alt="E-Commerce platform training icon"/>
                    </picture>
                </div>
                <div class="col--5 heading heading--variation1 txt-align--left section--heading">
                    <?php echo $page_service['service_title'] ?>
                </div>
                <div class="col--3 right__arrow">
                    <img src="<?php echo $page_service['placeholder_icon'] ?>" alt="group of right arrows"/>
                </div>
            </div>
            <div class="dis--flx">
                <div class="col--1"></div>
                <div class="col--11">
                    <div class="mar-top--50 para para--variation4 txt-align--left">
                        <?php echo $page_service['service_description'] ?>
                    </div>

                    <div class="mar-top--40">
                        <?php
                            if($page_service['service_features']){
                            foreach( $page_service['service_features'] as $service_feature ) { 
                        ?>
                        <div class="dis--flx align-items--center mar-top--20">
                            <div>
                                <picture>
                                    <source media="(max-width: 600px)" srcset="<?php echo $service_feature['feature_icon_mobile'] ?>">
                                    <source media="(max-width: 1024px)" srcset="<?php echo $service_feature['feature_icon_tab'] ?>">
                                    <img src="<?php echo $service_feature['feature_icon'] ?>" alt="catalog merchandise icon" />
                                </picture>
                            </div>
                            <div class="heading--variation3 mar-lft--31 txt--black">
                                <?php echo $service_feature['feature_heading'] ?>
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
        <?php
                }
            }
        ?>
        <?php
                }
            }
        ?>
    </div>
</div>

