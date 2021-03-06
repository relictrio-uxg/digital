    <?php 
                    $digital_maturity_list = get_field('digital_maturity_list');
                    if( $digital_maturity_list ) {
                        $index = 0;
                        foreach( $digital_maturity_list as $digital_maturity ) {
                            if( $index < 2 )
                            {

                            
    ?>
<div class="container container--fluid  bg--white  <?php echo $digital_maturity['modifier_padtpbtm_mobile'] ; ?> <?php echo $digital_maturity['modifier_class'] ; ?>">
<div class="container--content container--fxdwdh ">
    <div class="relictrio--row digital__mature ">  
        <div class="col--1">
            <img class="maturity__img " src="<?php echo $digital_maturity['head_icon_one'] ;?>" alt="card one icon" />
        </div>
        <div class="col--6">
            <h3 class=" heading maturity__head"><?php echo $digital_maturity['heading_text'] ;?></h3>
        </div>
        <div class="col--2"></div>
        <div class="col--3">
            <img class="triangle__img " src="<?php echo $digital_maturity['head_icon_two'] ;?>" alt="triangle icon" />
        </div>
    </div>
    <div class="relictrio--row digital__mature--sec mar-top--50 <?php echo $digital_maturity['digital_maturity_modifier_class_name'] ;?>">
        <div class="col--7">
            <p class="para maturity__para"><?php echo $digital_maturity['description_text'] ;?></p>
            <?php 
                foreach( $digital_maturity['digital_list_items'] as $row ) {
            ?>
            <div class="dis--flx">
            <div>
                <img class="maturity__icon" src="<?php echo $row['list_icon'] ; ?>" alt="Platform icon" />
            </div>
            <div class="maturity__text">
                <h3 class="heading heading--variation3 txt__clr--black"><?php echo $row['list_heading'] ; ?></h3>
            </div>
            </div>
            <?php
                }
                
            ?>
            <?php 
                foreach( $digital_maturity['digital_sub_list_items'] as $row ) {
            ?>
            <div class="dis--flx mar-top--20">
                <div>
                    <img class="arrow__right--icon" src="<?php echo $row['subitem_icon'] ; ?>" alt="arrow__right" />
                </div>
                <div>
                    <p class="para maturity__sub--text"><?php echo $row['subitem_heading'] ; ?></p>
                </div>
                </div>
            <?php
                }
                
            ?>
        </div>
                    <div class="col--5" class="digital__img">
                    <picture>
                            <source media="(min-width: 1200px)" srcset="<?php echo $digital_maturity['digital_maturity_image'] ;?>" />
                            <source media="(min-width: 768px)" srcset="<?php echo $digital_maturity['digital_maturity_img_tab'] ;?>" />
                            <source media="(max-width: 767px)" srcset="<?php echo $digital_maturity['digital_maturity_img_mobile'] ;?>"  />
                            <img class="digital__mature--img " src="<?php echo $digital_maturity['digital_maturity_image'] ;?>"
                            alt="digital mature image" />
                    </picture>
                    
                    <img class="back__slash--img" src="<?php echo $digital_maturity['digital_maturity_subimage'] ;?>" />
                    
                    </div>
                    </div>
        </div>
    </div>
    
</div>
</div>
<?php
                    }
                $index++;
                }
            }
            ?>