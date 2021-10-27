<div class="container dis--flx flex--column">
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
          <div class="col--1"></div>
          <div class="txt-align--left heading heading--variation1">
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
            <div class="col--2"></div>
            <div class="col--10">
              <h4 class="heading heading--variation4 txt-align--left"><?php echo $color_palette_section['section_heading'] ?></h4>
              <div class="mar-top--30 dis--flx">
                  <?php
                    $color_info = $color_palette_section['color_info'];
                    if($color_info){
                        foreach($color_info as $color_info){
                  ?>
                <div class="col--4 dis--flx pad--0">
                  <img class="<?php echo $color_info['image_class']; ?>" src="<?php echo $color_info['color_image']; ?>" alt="<?php echo $color_info['image_alt_text']; ?>">
                  <div class="mar-lft--20 dis--flx flex--column">
                    <h4 class="heading heading--variation4 mar-lftrht--0 txt-align--left"><?php echo $color_info['color_name']; ?></h4>
                    <div class="para para--variation2 mar-lftrht--0"><?php echo $color_info['color_description']; ?></div>
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
        <div class="mar-top--90 dis--flx">
          <div class="col--1"></div>
          <div class="txt-align--left heading heading--variation1">
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
            <div class="col--2"></div>
            <div class="col--10 dis--flx">
              <div class="dis--flx flex--column col--3">
                <h4 class="<?php echo $typography_info['property_heading_class']; ?>"><?php echo $typography_info['property_heading']?></h4>
                <div class="<?php echo $typography_info['property_description_class']; ?>"><?php echo $typography_info['property_description']; ?></div>
              </div>
              <div class="">
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
        <div class="mar-top--90 dis--flx">
          <div class="col--1"></div>
          <div class="txt-align--left heading heading--variation1">
            <?php echo $logo_section['section_heading']; ?>
          </div>
        </div>

        <div class="mar-top--60 dis--flx">
          <div class="col--2"></div>
          <div class="pos--rel">
              <?php
                $section_image = $logo_section['section_image'];
                if($section_image){
                    foreach($section_image as $section_image){
              ?>
            <img class="<?php echo $section_image['section_image_placeholder_class']; ?>" src="<?php echo $section_image['section_image_placeholder']; ?>" alt="<?php echo $section_image['section_image_placeholder_alt_text']; ?>">
            <img class="<?php echo $section_image['section_image_class']; ?>" src="<?php echo $section_image['section_image']; ?>" alt="<?php echo $section_image['section_image_alt_text']; ?>">
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

        <div class="mar-top--90 dis--flx">
          <div class="col--1"></div>
          <div class="txt-align--left heading heading--variation1">
            Icon, Illustration
          </div>
        </div>

        <div class="dis--flx">
          <div class="col--2"></div>
          <div class="dis--flx flex--column">
            <div class="mar-top--50 dis--flx">
              <h4 class="heading--variation3 txt--electric_blue txt-align--left">UI Icons</h4>
            </div>
            <div class="mar-top--50 dis--flx flex--column">
              <div class="dis--flx gap--60">
                <img src="../assets/images/ui-icons/icon-calculator.png" alt="calculator icon"/>
                <img src="../assets/images/ui-icons/icon-contact.png" alt="contact icon"/>
                <img src="../assets/images/ui-icons/icon-chat.png" alt="chat icon"/>
                <img src="../assets/images/ui-icons/icon-camera.png" alt="camera icon"/>
                <img src="../assets/images/ui-icons/icon-imageGallery.png" alt="image gallery icon"/>
                <img src="../assets/images/ui-icons/icon-maleUser.png" alt="male user icon"/>
                <img src="../assets/images/ui-icons/icon-femaleUser.png" alt="female user icon"/>
                <img src="../assets/images/ui-icons/icon-cancel.png" alt="cancel icon"/>
              </div>
              <div class="dis--flx gap--60 mar-top--75">
                <img src="../assets/images/ui-icons/icon-userSetting.png" alt="user Setting icon"/>
                <img src="../assets/images/ui-icons/icon-addUser.png" alt="add user icon"/>
                <img src="../assets/images/ui-icons/icon-education.png" alt="education icon"/> 
                <img src="../assets/images/ui-icons/icon-profile.png" alt="profile icon"/>
                <img src="../assets/images/ui-icons/icon-bag.png" alt="bag icon"/>
                <img src="../assets/images/ui-icons/icon-filesVerified.png" alt="verified files icon"/>
                <img src="../assets/images/ui-icons/icon-handshake.png" alt="user handshake icon"/>
                <img src="../assets/images/ui-icons/icon-meetSchedule.png" alt="meeting schedule icon"/>
                <img src="../assets/images/ui-icons/icon-meeting.png" alt="meeting icon"/>
              </div>
              <div class="dis--flx gap--60 mar-top--75">
                <img src="../assets/images/ui-icons/icon-search.png" alt="search icon"/>
                <img src="../assets/images/ui-icons/icon-searchJob.png" alt="job search icon"/>
                <img src="../assets/images/ui-icons/icon-location.png" alt="location icon"/>
                <img src="../assets/images/ui-icons/icon-star.png" alt="star icon"/>
                <img src="../assets/images/ui-icons/icon-phone.png" alt="phone icon"/>
                <img src="../assets/images/ui-icons/icon-help.png" alt="help icon"/>
                <img src="../assets/images/ui-icons/icon-filter.png" alt="filter icon"/>
                <img src="../assets/images/ui-icons/icon-leftArrow-back.png" alt="left arrow icon"/>
              </div>
            </div>
          </div>
        </div>

        <div class="dis--flx">
          <div class="col--2"></div>
          <div class="dis--flx flex--column">
            <div class="mar-top--50 dis--flx">
              <h4 class="heading--variation3 txt--electric_blue txt-align--left">Workers</h4>
            </div>
            <div class="mar-top--50 dis--flx flex--column">
              <div class="dis--flx justify-content--between"> 
                <img src="../assets/images/workers/worker-1.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-2.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-3.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-4.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-5.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-6.png" alt="worker icon"/>
              </div>
              <div class="dis--flx justify-content--between mar-top--60"> 
                <img src="../assets/images/workers/worker-7.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-8.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-9.png" alt="worker icon"/> 
                <img src="../assets/images/workers/worker-10.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-11.png" alt="worker icon"/>
                <img src="../assets/images/workers/worker-12.png" alt="worker icon"/>
              </div>
            </div>
          </div>
        </div>

        <div class="dis--flx">
          <div class="col--2"></div>
          <div class="dis--flx flex--column">
            <div class="mar-top--50 dis--flx">
              <h4 class="heading--variation3 txt--electric_blue txt-align--left">Cities</h4>
            </div>
            <div class="mar-top--50 dis--flx flex--column">
              <div class="dis--flx justify-content--between"> 
                <img src="../assets/images/city-icon/city1.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city2.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city3.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city4.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city5.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city6.png" alt="city icon"/>
              </div>
              <div class="dis--flx justify-content--between mar-top--60"> 
                <img src="../assets/images/city-icon/city7.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city8.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city9.png" alt="city icon"/> 
                <img src="../assets/images/city-icon/city10.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city11.png" alt="city icon"/>
                <img src="../assets/images/city-icon/city12.png" alt="city icon"/>
              </div>
            </div>
          </div>
        </div>

        <div class="dis--flx">
          <div class="col--2"></div>
          <div class="dis--flx flex--column">
            <div class="mar-top--50 dis--flx">
              <h4 class="heading--variation3 txt--electric_blue txt-align--left">Illustrations</h4>
            </div>
            <div class="mar-top--50 dis--flx flex--column">
              <div class="dis--flx justify-content--between"> 
                <img src="../assets/images/Illustrations/illustration-1.png" alt="illustration icon"/>
                <img src="../assets/images/Illustrations/illustration-2.png" alt="illustration icon"/>
                <img src="../assets/images/Illustrations/illustration-3.png" alt="illustration icon"/>
              </div>
              <div class="dis--flx justify-content--between mar-top--60">
                <img src="../assets/images/Illustrations/illustration-4.png" alt="illustration icon"/>
                <img src="../assets/images/Illustrations/illustration-5.png" alt="illustration icon"/>
                <img src="../assets/images/Illustrations/illustration-6.png" alt="illustration icon"/>
              </div>
            </div>
          </div>
        </div>
      </div>

</div>