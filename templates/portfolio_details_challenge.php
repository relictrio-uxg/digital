<?php
    $challenge_section = get_field('challenge_section');  
    if($challenge_section){
        foreach($challenge_section as $challenge_section){ 
?>
<div id="<?php echo $challenge_section['section_id']; ?>" class="container dis--flx">
        <div class="col--3 mar-top--120">
          <h1 class="heading sec--title txt-align--left txt-decoration--underline"><?php echo $challenge_section['section_heading']; ?></h1>
        </div>
        <div
          class="
            col--8
            mar-top--210
            txt-align--left
            heading--variation4
            txt--electric_blue
          "
        >
          <?php echo $challenge_section['description_1']; ?>
        </div>
      </div>
      <div class="container dis--flx mar-top--60">
          <div class="col--3"></div>
        <?php 
            $section_images_1 = $challenge_section['section_images_1'];
            if($section_images_1){
                foreach($section_images_1 as $section_image){
        ?>
        <div class="col--3">
          <img
            class="<?php echo $section_image['image_class']; ?>"
            src="<?php echo $section_image['section_image']; ?>"
            alt="<?php echo $section_image['img_alt_text']; ?>"
          />
        </div>
        <?php
                }
            }
        ?>
      </div>

      <div class="container dis--flx">
        <div class="col--3"></div>
        <div
          class="
            col--8
            mar-top--80
            txt-align--left
            heading--variation4
            txt--electric_blue
          "
        >
            <?php echo $challenge_section['description_2']; ?>
        </div>
      </div>
      <div class="container dis--flx mar-top--60">
        <div class="col--3"></div>
        <?php 
            $section_image_2 = $challenge_section['section_image_2'];
            if($section_image_2){
                foreach($section_image_2 as $section_image){
        ?>
        <div class="col--3">
          <img
            class="<?php echo $section_image['image_class']; ?>"
            src="<?php echo $section_image['section_image']; ?>"
            alt="<?php echo $section_image['img_alt_text']; ?>"
          />
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