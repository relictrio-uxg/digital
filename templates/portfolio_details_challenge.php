<?php
    $challenge_section = get_field('challenge_section');  
    if($challenge_section){
        foreach($challenge_section as $challenge_section){ 
?>
      <div id="<?php echo $challenge_section['section_id']; ?>" class="container dis--flx">
        <div class="mar-top--120">
          <h1 class="heading sec--title txt-align--left txt-decoration--underline"><?php echo $challenge_section['section_heading']; ?></h1>
        </div>
      </div>
      <div class="container dis--flx mar-top--30">
        <div class="col--3 spaceHolder"></div>
        <div
            class="
              col--8
              txt-align--left
              heading--variation4
              txt--electric_blue
              sec__desc
            "
          >
            <?php echo $challenge_section['description_1']; ?>
          </div>
        </div>
      <div class="container dis--flx gap--20 mar-top--60 image-section">
          <div class="col--3 spaceHolder"></div>
        <?php 
            $section_images_1 = $challenge_section['section_images_1'];
            if($section_images_1){
                foreach($section_images_1 as $section_image){
        ?>
          <picture>
            <source media="(max-width: 600px)" srcset="<?php echo $section_image['section_image_mobile']; ?>"/>
            <source media="(max-width: 1024px)" srcset="<?php echo $section_image['section_image_tab']; ?>"/>
            <img class="<?php echo $section_image['image_class']; ?>" src="<?php echo $section_image['section_image']; ?>" alt="<?php echo $section_image['img_alt_text']; ?>" />
          </picture>
        <?php
                }
            }
        ?>
      </div>

      <div class="container dis--flx mar-top--80 desc__spacing">
        <div class="col--3 spaceHolder"></div>
        <div
          class="
            col--8
            txt-align--left
            heading--variation4
            txt--electric_blue
            sec__desc
          "
        >
            <?php echo $challenge_section['description_2']; ?>
        </div>
      </div>
      <div class="container dis--flx  mar-top--60 gap--20 image-section">
        <div class="col--3 spaceHolder"></div>
        <?php 
            $section_image_2 = $challenge_section['section_image_2'];
            if($section_image_2){
                foreach($section_image_2 as $section_image){
        ?>
        <picture>
            <source media="(max-width: 600px)" srcset="<?php echo $section_image['section_image_mobile']; ?>"/>
            <source media="(max-width: 1024px)" srcset="<?php echo $section_image['section_image_tab']; ?>"/>
            <img class="<?php echo $section_image['image_class']; ?>" src="<?php echo $section_image['section_image']; ?>" alt="<?php echo $section_image['img_alt_text']; ?>" />
          </picture>
        <?php
                }
            }
        ?>
      </div>
<?php
        }
    }
?>