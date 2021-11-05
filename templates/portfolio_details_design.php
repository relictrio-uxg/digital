<?php
  $section_id = get_field('section_id');
  if($section_id){
?>
<div id="<?php echo $section_id; ?>" class="container dis--flx flex--column">
  <?php
    }
  ?>
        <?php
            $section_main_heading = get_field('section_main_heading');
            if($section_main_heading){
        ?>
            <div class="mar-top--120">
              <h1 class="heading sec--title txt-align--left txt-decoration--underline"><?php echo $section_main_heading; ?></h1>
            </div>
        <?php
            }
        ?>
        <div class="mar-top--60 dis--flx">
          <div class="col--1 design__spaceCreator"></div>
          <div class="txt-align--left heading heading--variation1 sec__heading">
            Color palette
          </div>
        </div>
        <div class="dis--flx flex--column">
            <?php
                $color_palette_section = get_field('color_palette_section');
                if($color_palette_section){
                    foreach($color_palette_section as $color_palette_section){
            ?>
          <div class="dis--flx mar-top--50">
            <div class="col--2 spaceHolder"></div>
            <div class="col--10">
              <h4 class="heading heading--variation4 txt-align--left"><?php echo $color_palette_section['section_heading'] ?></h4>
              <div class="mar-top--30 dis--flx flex--wrap gap--60">
                  <?php
                    $color_info = $color_palette_section['color_info'];
                    if($color_info){
                        foreach($color_info as $color_info){
                  ?>
                <div class="col--4 dis--flx pad--0">
                  <div class="dis-flx align-items--center">
                    <img class="<?php echo $color_info['image_class']; ?>" src="<?php echo $color_info['color_image']; ?>" alt="<?php echo $color_info['image_alt_text']; ?>">
                  </div>
                  <div class="mar-lft--20 dis--flx flex--column">
                    <h4 class="heading heading--variation4 mar-lftrht--0 txt-align--left color__title"><?php echo $color_info['color_name']; ?></h4>
                    <div class="para para--variation2 txt-align--left mar-lftrht--0 color__desc"><?php echo $color_info['color_description']; ?></div>
                  </div>
                </div>
                <?php
                        }
                    }
                ?>
              </div>
            </div>
          </div>
            <?php
                        }
                    }
            ?>
        </div>
        
        <?php
            $typography_section = get_field('typography_section');
            if($typography_section){
                foreach($typography_section as $typography_section){
        ?>
        <div class="mar-top--90 dis--flx typography__section">
          <div class="col--1 spaceHolder"></div>
          <div class="txt-align--left heading heading--variation1 sec__heading ">
            <?php echo $typography_section['section_heading']; ?>
          </div>
        </div>

        <div class="dis--flx flex--column">
            <?php
                $typography_info = $typography_section['typography_info'];
                if($typography_info){
                    foreach($typography_info as $typography_info){
            ?>
          <div class="dis--flx mar-top--50">
            <div class="col--2 spaceHolder"></div>
            <div class="col--10 dis--flx">
              <div class="dis--flx flex--column">
                <h4 class="<?php echo $typography_info['property_heading_class']; ?>"><?php echo $typography_info['property_heading']?></h4>
                <div class="<?php echo $typography_info['property_description_class']; ?>"><?php echo $typography_info['property_description']; ?></div>
              </div>
              <div class="example__visibility">
                <h4 class="<?php echo $typography_info['property_example_class'] ?>"><?php echo $typography_info['property_example'] ?></h4>
              </div>
            </div>
          </div>
            <?php 
                    }
                }
            ?>
        </div>
        <?php
                }
            }
        ?>

        <?php 
            $logo_section = get_field('logo_section');
            if($logo_section){
                foreach($logo_section as $logo_section){
        ?>
        <div class="mar-top--90 dis--flx logo__section">
          <div class="col--1"></div>
          <div class="txt-align--left heading heading--variation1 sec__heading">
            <?php echo $logo_section['section_heading']; ?>
          </div>
        </div>

        <div class="mar-top--60 dis--flx">
          <div class="col--2 spaceHolder"></div>
          <div class="pos--rel">
              <?php
                $section_image = $logo_section['section_image'];
                if($section_image){
                    foreach($section_image as $section_image){
              ?>
                <picture>
                  <source media="(max-width: 600px)" srcset="<?php echo $section_image['section_image_placeholder_mobile']; ?>"/>
                  <source media="(max-width: 1024px)" srcset="<?php echo $section_image['section_image_placeholder_tab']; ?>"/>
                  <img class="<?php echo $section_image['section_image_placeholder_class']; ?>" src="<?php echo $section_image['section_image_placeholder']; ?>" alt="<?php echo $section_image['section_image_placeholder_alt_text']; ?>" />
                </picture>
            
                <picture>
                  <source media="(max-width: 600px)" srcset="<?php echo $section_image['section_image_mobile']; ?>"/>
                  <source media="(max-width: 1024px)" srcset="<?php echo $section_image['section_image_tab']; ?>"/>
                  <img class="<?php echo $section_image['section_image_class']; ?>" src="<?php echo $section_image['section_image']; ?>" alt="<?php echo $section_image['section_image_alt_text']; ?>" />
                </picture> 
            <?php
                    }
                }
            ?>
        </div>
        </div>
        <?php
                }
            }
        ?>
        <?php
          $icon_section = get_field('icon_section');
          if($icon_section){
              foreach($icon_section as $icon_section){
        ?>
        <div class="mar-top--90 dis--flx">
          <div class="col--1"></div>
          <div class="txt-align--left heading heading--variation1 sec__heading">
            <?php
              echo $icon_section['section_heading'];
            ?>
          </div>
        </div>

        <div class="dis--flx">
          <div class="col--2 spaceHolder"></div>
          <?php
            $ui_icon_section = $icon_section['ui_icon_section'];
            if($ui_icon_section){
              foreach($ui_icon_section as $ui_icon){
          ?>
          <div class="dis--flx flex--column">
            <div class="mar-top--50 dis--flx">
              <h4 class="heading--variation3 txt--electric_blue txt-align--left sec__subHeading"><?php echo $ui_icon['section_heading']; ?></h4>
            </div>
            <div class="mar-top--50 dis--flx flex--column">
              <div class="dis--flx gap--60 flex--wrap">
                <?php
                  $row_1_icons = $ui_icon['row_1_icons'];
                  if($row_1_icons){
                    foreach($row_1_icons as $row_icon){
                ?>
                  <img class="<?php echo $row_icon['row_1_icon_class']; ?>" src="<?php echo $row_icon['row_1_icon']; ?>" alt="<?php echo $row_icon['row_1_icon_alt_text']; ?>"/>
                <?php
                    }
                  }
                ?>
              </div>
              <div class="dis--flx gap--60 mar-top--75">
              <?php
                  $row_2_icons = $ui_icon['row_2_icons'];
                  if($row_2_icons){
                    foreach($row_2_icons as $row_icon){
                ?>
                  <img class="<?php echo $row_icon['row_2_icon_class']; ?>" src="<?php echo $row_icon['row_2_icon']; ?>" alt="<?php echo $row_icon['row_2_icon_alt_text']; ?>"/>
                <?php
                    }
                  }
                ?>
              </div>
              <div class="dis--flx gap--60 mar-top--75">

              <?php
                  $row_3_icons = $ui_icon['row_3_icons'];
                  if($row_3_icons){
                    foreach($row_3_icons as $row_icon){
                ?>
                  <img class="<?php echo $row_icon['row_3_icon_class']; ?>" src="<?php echo $row_icon['row_3_icon']; ?>" alt="<?php echo $row_icon['row_3_icon_alt_text']; ?>"/>
                <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <?php
              }
            }
          ?>
        </div>

        <div class="dis--flx">
          <div class="col--2 spaceHolder"></div>
          <?php 
            $workers_section = $icon_section['workers_section'];
            if($workers_section){
              foreach($workers_section as $workers_section){
          ?>
          <div class="dis--flx flex--column">
            <div class="mar-top--50 dis--flx">
              <h4 class="heading--variation3 txt--electric_blue txt-align--left sec__subHeading"><?php echo $workers_section['section_heading']; ?></h4>
            </div>
            <div class="mar-top--50 dis--flx flex--column">
              <div class="dis--flx justify-content--between"> 
                <?php
                  $workers_images_row_1 = $workers_section['workers_images_row_1'];
                  if($workers_images_row_1){
                    foreach($workers_images_row_1 as $workers_image){
                ?>
                  <img class="<?php echo $workers_image['worker_image_class']; ?>" src="<?php echo $workers_image['worker_image']; ?>" alt="<?php echo $workers_image['worker_image_alt_text']; ?>"/>
                <?php 
                    }
                  }
                ?>
              </div>
              <div class="dis--flx justify-content--between mar-top--60"> 
              <?php
                  $workers_images_row_2 = $workers_section['workers_images_row_2'];
                  if($workers_images_row_2){
                    foreach($workers_images_row_2 as $workers_image){
                ?>
                  <img class="<?php echo $workers_image['worker_image_class']; ?>" src="<?php echo $workers_image['worker_image']; ?>" alt="<?php echo $workers_image['worker_image_alt_text']; ?>"/>
                <?php 
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <?php
              }
            }
          ?>
        </div>

        <div class="dis--flx">
          <div class="col--2 spaceHolder"></div>
          <?php
            $cities_section = $icon_section['cities_section'];
            if($cities_section){
              foreach($cities_section as $cities_section){
          ?>
          <div class="dis--flx flex--column">
            <div class="mar-top--50 dis--flx">
              <h4 class="heading--variation3 txt--electric_blue txt-align--left sec__subHeading"><?php echo $cities_section['section_heading']; ?></h4>
            </div>
            <div class="mar-top--50 dis--flx flex--column">
              <div class="dis--flx justify-content--between">
                <?php
                  $city_images_row_1 = $cities_section['city_images_row_1'];
                  if($city_images_row_1){
                    foreach($city_images_row_1 as $city_image){
                ?> 
                  <img class="<?php echo $city_image['city_image_class']; ?>" src="<?php echo $city_image['city_image']; ?>" alt="<?php echo $city_image['city_image_alt_text']; ?>"/>
                <?php
                    }
                  }
                ?>
              </div>
              <div class="dis--flx justify-content--between mar-top--60">
              <?php
                  $city_images_row_2 = $cities_section['city_images_row_2'];
                  if($city_images_row_2){
                    foreach($city_images_row_2 as $city_image){
                ?> 
                  <img class="<?php echo $city_image['city_image_class']; ?>" src="<?php echo $city_image['city_image']; ?>" alt="<?php echo $city_image['city_image_alt_text']; ?>"/>
                <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <?php
              }
            }
          ?>
        </div>

        <div class="dis--flx">
          <div class="col--2 spaceHolder"></div>
          <?php
            $illustrations_section = $icon_section['illustrations_section'];
            if($illustrations_section){
              foreach($illustrations_section as $illustrations_section){
          ?>
          <div class="dis--flx flex--column">
            <div class="mar-top--50 dis--flx">
              <h4 class="heading--variation3 txt--electric_blue txt-align--left sec__subHeading"><?php echo $illustrations_section['section_heading'] ?></h4>
            </div>
            <div class="mar-top--50 dis--flx flex--column">
              <div class="dis--flx justify-content--between">
              <?php
                  $illustrations_images_row_1 = $illustrations_section['illustrations_images_row_1'];
                  if($illustrations_images_row_1){
                    foreach($illustrations_images_row_1 as $illustrations_image){
                ?> 
                  <img class="<?php echo $illustrations_image['illustration_image_class']; ?>" src="<?php echo $illustrations_image['illustration_image']; ?>" alt="<?php echo $illustrations_image['illustration_image_alt_text']; ?>"/>
                <?php
                    }
                  }
                ?>
              </div>
              <div class="dis--flx justify-content--between mar-top--60">
              <?php
                  $illustrations_images_row_2 = $illustrations_section['illustrations_images_row_2'];
                  if($illustrations_images_row_2){
                    foreach($illustrations_images_row_2 as $illustrations_image){
                ?> 
                  <img class="<?php echo $illustrations_image['illustration_image_class']; ?>" src="<?php echo $illustrations_image['illustration_image']; ?>" alt="<?php echo $illustrations_image['illustration_image_alt_text']; ?>"/>
                <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <?php
              }
            }
          ?>
        </div>
        <?php
              }
            }
        ?>
      </div>

</div>