<?php
    $define_section_info = get_field('define_section_info');  
    if($define_section_info){
        foreach($define_section_info as $define_section_info){ 
?>
  <div id="<?php echo $define_section_info['section_id']; ?>" class="container dis--flx">
    <div class="mar-top--120">
      <h1 class="heading sec--title txt-align--left txt-decoration--underline"><?php echo $define_section_info['section_heading']; ?></h1>
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
            <?php echo $define_section_info['description_1']; ?></br></br>

            <span class="heading--variation3 txt--electric_blue"><?php echo $define_section_info['section_subheading']; ?></span></br></br>

            <?php echo $define_section_info['description_2']; ?>
        </div>
    </div>

<?php
        }
    }
?>

<div class="container dis--flx mar-top--60">
    <div class="col--3 spaceHolder"></div>
    <div class="col--9">
        <?php
            $define_section_images = get_field('define_section_images');  
            if($define_section_images){
                foreach($define_section_images as $define_section_images){ 
        ?>
          <picture>
            <source media="(max-width: 600px)" srcset="<?php echo $define_section_images['background_image_mobile']; ?>"/>
            <source media="(max-width: 1024px)" srcset="<?php echo $define_section_images['background_image_tab']; ?>"/>
            <img class="<?php echo $define_section_images['background_image_class']; ?>" src="<?php echo $define_section_images['background_image']; ?>" alt="<?php echo $define_section_images['background_alt_text']; ?>" />
          </picture>
        <?php
                }
            }
        ?>    
      <div class="pos--abs wireframes-images dis--flx flex--wrap gap--20 mar-lft--10">
        <?php
            $front_images = get_field('front_images');  
            if($front_images){
                foreach($front_images as $front_image){ 
        ?>
        <picture>
            <source media="(max-width: 600px)" srcset="<?php echo $front_image['front_image_mobile']; ?>"/>
            <source media="(max-width: 1024px)" srcset="<?php echo $front_image['front_image_tab']; ?>"/>
            <img class="<?php echo $front_image['front_image_class']; ?>" src="<?php echo $front_image['front_image']; ?>" alt="<?php echo $front_image['front_alt_text']; ?>" />
        </picture>
        <?php
                }
            }
        ?>
      </div>
    </div>
</div>

