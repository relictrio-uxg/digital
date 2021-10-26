<div class="container container--fluid magento__sec pos--rel">
    <div class="container--content container--fxdwdh">
        <picture>
            <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__left.png">
            <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__left.png">
            <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__left-mb.png">
            <?php 
                $magento_left_arc = get_field('magento_left_arc');
                if ( $magento_left_arc ) {
            ?>
            <img class="magento__arc--left " src="<?php echo $magento_left_arc ;?>"  alt="digital mature image" />
            <?php
                }
            ?>
        </picture>
        <div class="relictrio--row pad-bt--40 "> 
            <div class="magento__icon">     
            <picture>
            <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento1.png">
            <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento1.png">
            <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento1-mb.png">
            <?php 
                $magento_logo = get_field('magento_logo');
                if ( $magento_logo ) {
            ?>
            <img class="magento__img " src="<?php echo $magento_logo ;?>" alt="magento image" />
            <?php
                }
            ?>
            </picture>
            </div> 
        <div class="col--12 text--center">
            <?php 
                $magento_heading = get_field('magento_heading');
                if ( $magento_heading ) {
            ?>
                <h3 class="heading heading--variation2 magento__head"><?php echo $magento_heading ;?></h3>
            <?php
            }
            ?>
            <?php 
                $magento_description = get_field('magento_description');
                if( $magento_description ) {
                foreach( $magento_description as $row ) {
            ?>
                <p class="para magento__para"><?php echo $row['magento_description_text'] ;?> </p>
            <?php
            }
            }
            ?>  
            <div class="dis--flx magento__subtext">
                <div>
                    <?php 
                       $magento_subtext_image = get_field('magento_subtext_image');
                       if ( $magento_subtext_image ) {
                    ?>
                        <img class="arrow__right--icon" src="<?php echo $magento_subtext_image; ?>"
                        alt="arrow__right" />
                    <?php
                       }
                    ?>
                </div>
                <div>
                    <?php 
                      $magento_subtext_heading = get_field('magento_subtext_heading');
                      if ( $magento_subtext_heading ) {
                     ?>
                        <p class="para maturity__sub--text"><?php echo $magento_subtext_heading ;?></p>
                    <?php
                     }
                    ?>
                </div>
            </div>  
        </div>
        <picture>
            <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__right.png">
            <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__right.png">
            <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__right-mb.png">
            <?php 
                $magento_right_arc = get_field('magento_right_arc');
                if ( $magento_right_arc ) {
            ?>
            <img class="magento__arc--right" src="<?php echo $magento_right_arc; ?>"
             alt="digital mature image" />
             <?php
            }
            ?>
        </picture>
        </div>  
    </div>
</div>