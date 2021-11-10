<?php
/*
* Template part for Portfolio PF_property_ladder_design component
*
* @package Relictrio Digital
*/
?>

<?php 
    $design_id_link = get_field('design_id_link');
    if( $design_id_link ) {
?>
<div id="<?php echo $design_id_link; ?>"></div>
<?php 
  }
?>

<div class="property__design">
  <div class="relictrio--row">
  <div class="col--1 col--remove"></div>
  <div class="col--11 col--full">

      <?php 
    $design_heading = get_field('design_heading');
    if( $design_heading ) {
    ?>
      <h3 class="heading heading--variation2 property__challenge--heading">
        <?php echo $design_heading; ?>
      </h3>
      <?php 
      }
    ?>

      <div class="relictrio--row property--mobile">

        <?php 
            $design_paragraph_block = get_field('design_paragraph_block');
            if( $design_paragraph_block ) {
            foreach( $design_paragraph_block as $row ) {
          ?>
        <div class="col--6">
          <p class="para property__challenge--para">
            <?php echo $row['paragraph'] ;?>
          </p>
        </div>
        <?php
              }
            }
          ?>

      </div>

      <?php 
      $design_subheading_1 = get_field('design_subheading_1');
      if( $design_subheading_1 ) {
      ?>
      <h3 class="heading heading--variation2 property__design--subheading">
        <?php echo $design_subheading_1; ?>
      </h3>
      <?php 
        }
      ?>



      <?php 
          $design_color_block = get_field('design_color_block');
          if( $design_color_block ) {
          foreach( $design_color_block as $row ) {
        ?>
      <div class="relictrio--row">
        <div class="property__design--colorlist">
          <h4 class="heading heading--variation4">
            <?php echo $row['color_block_heading'] ;?>
          </h4>
          <div class="property__design--listblock">

          <?php 
          foreach( $row['color_block_list'] as $list ) {
          ?>
            <div class="color--list">
              <img src="<?php echo $list['color_image'] ;?>" alt="portfolio-property-ladder-design-color">
              <div class="color--block">
                <h4 class="heading heading--variation4">
                  <?php echo $list['color_name'] ;?>
                </h4>
                <p class="para para--variation2">
                  <?php echo $list['color_content'] ;?>
                </p>
              </div>
            </div>
          <?php
          }
          ?>

          </div>
        </div>
      </div>
      <?php
              }
            }
          ?>

    <?php 
        $design_subheading_2 = get_field('design_subheading_2');
        if( $design_subheading_2 ) {
    ?>
      <h3 class="heading heading--variation2 property__design--subheading">
      <?php echo $design_subheading_2; ?>
      </h3>
    <?php 
        }
    ?>

      <?php 
        $design_font_block = get_field('design_font_block');
        if( $design_font_block ) {
        foreach( $design_font_block as $row ) {
      ?>
      <h3 class="heading property__design--subheading2">
      <?php echo $row['font_heading'] ;?>
      </h3>
      <div class="relictrio--row property--mobile">
        <div class="col--5">
          <div class="property__design--fontlist dis--flx">
            <h5 class="heading heading--variation4">
            <?php echo $row['font_sub_heading_1'] ;?>
            </h5>
            <h5 class="heading heading--variation4">
            <?php echo $row['font_sub_heading_2'] ;?>
            </h5>
          </div>

          <?php 
          foreach( $row['font_type_list'] as $list ) {
          ?>
          <div class="property__design--fontlist dis--flx">
            <h4 class="heading heading--variation2">
            <?php echo $list['font_weight'] ;?>
            </h4>
            <h4 class="heading heading--variation2">
            <?php echo $list['font_size'] ;?>
            </h4>
          </div>
          <?php
          }
          ?>

        </div>

        <div class="col--7">
          <img class="property__design--fontimg" src="<?php echo $row['font_image'] ;?>"
            alt="portfolio-property-ladder-design-font-img">
          <p class="para--variation6">
          <?php echo $row['font_content'] ;?>
          </p>
        </div>

      </div>
      <?php
          }
        }
      ?>

    <?php 
        $design_subheading_3 = get_field('design_subheading_3');
        if( $design_subheading_3 ) {
    ?>
      <h3 class="heading heading--variation2 property__design--subheading">
      <?php echo $design_subheading_3; ?>
      </h3>
    <?php 
        }
    ?>


      <?php 
        $design_icon_block = get_field('design_icon_block');
        if( $design_icon_block ) {
        foreach( $design_icon_block as $row ) {
      ?>
      <div class="relictrio--row property__design--iconlist">

        <?php 
        foreach( $row['icon_list'] as $list ) {
        ?>
        <div class="text--center">
          <img src="<?php echo $list['icon_image'] ;?>" alt="property-ladder-design-icon">
          <h5 class="heading heading--variation4">
            <?php echo $list['icon_heading'] ;?>
          </h5>
        </div>
        <?php
          }
        ?>  

      </div>
      <?php
          }
        }
      ?>    

    <?php 
        $design_subheading_4 = get_field('design_subheading_4');
        if( $design_subheading_4 ) {
    ?>
      <h3 class="heading heading--variation2 property__design--subheading">
      <?php echo $design_subheading_4; ?>
      </h3>
    <?php 
        }
    ?>

    </div>
  </div>
</div>

</div>
</div>

<div class="container--fullwdh">

  <?php 
      $design_screen_image = get_field('design_screen_image');
      if( $design_screen_image ) {
  ?>
  <img class="property__screen--img" src="<?php echo $design_screen_image; ?>"
    alt="portfolio-property-ladder-screen-img">
    <?php 
        }
    ?>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
  $("ul li a").click(function() {
    $("li a").removeClass("active");
    $(this).addClass("active");
  });
});
</script>