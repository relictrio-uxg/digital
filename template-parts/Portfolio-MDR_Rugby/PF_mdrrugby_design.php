<?php
/*
* Template part for Portfolio PF_mdr_rugby_design component
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

<div class="rugby__design">
  <div class="relictrio--row">
    <div class="col--1 col--remove"></div>
    <div class="col--10 col--full">

      <?php 
            $design_heading = get_field('design_heading');
            if( $design_heading ) {
            ?>
      <h3 class="heading heading--variation2 rugby__challenge--heading">
        <?php echo $design_heading; ?>
      </h3>
      <?php 
            }
            ?>

      <div class="relictrio--row rugby__container">

        <?php 
                $design_paragraph_block = get_field('design_paragraph_block');
                if( $design_paragraph_block ) {
                foreach( $design_paragraph_block as $row ) {
              ?>
        <div class="col--6">
          <p class="para rugby__challenge--para">
            <?php echo $row['paragraph'] ;?>
          </p>
        </div>
        <?php
                    }
                  }
                ?>

        <div class="col--12">

          <?php 
              $design_subheading_1 = get_field('design_subheading_1');
              if( $design_subheading_1 ) {
              ?>
          <h3 class="heading heading--variation2 ruby__design--subheading">
            <?php echo $design_subheading_1; ?>
          </h3>
          <?php 
                }
                ?>

          <div class="ruby__design--img">

            <?php 
                $design_image_1 = get_field('design_image_1');
                if( $design_image_1 ) {
                ?>
            <img class="rugby__design--screenimg" src="<?php echo $design_image_1; ?>" alt="rugby-design-color-img">
            <?php 
                  }
                  ?>

          </div>
        </div>
        <div class="col--12">

          <?php 
              $design_subheading_2 = get_field('design_subheading_2');
              if( $design_subheading_2 ) {
              ?>
          <h3 class="heading heading--variation2 ruby__design--subheading">
            <?php echo $design_subheading_2; ?>
          </h3>
          <?php 
                }
                ?>

          <div class="ruby__design--img">

            <?php 
                $design_image_2 = get_field('design_image_2');
                if( $design_image_2 ) {
                ?>
            <img class="rugby__design--screenimg" src="<?php echo $design_image_2; ?>" alt="rugby-design-font-img">
            <?php 
                }
                ?>

          </div>
        </div>
      </div>
    </div>
    <div class="col--1 col--remove"></div>
  </div>
  <div class="relictrio--row">
    <div class="col--1 col--remove"></div>
    <div class="col--11 col--full">


      <?php 
        $design_subheading_3 = get_field('design_subheading_3');
        if( $design_subheading_3 ) {
        ?>
      <h3 class="heading heading--variation2 ruby__design--subheading">
        <?php echo $design_subheading_3; ?>
      </h3>
      <?php 
        }
        ?>


      <div class="relictrio--row">

      <?php 
        $design_icon_block_1 = get_field('design_icon_block_1');
        if( $design_icon_block_1 ) {
        foreach( $design_icon_block_1 as $row ) {
      ?>
        <div class="col--4">
          <img class="rugby__design--iconimg" src="<?php echo $row['icon_image'] ;?>"
            alt="rugby-design-icon-img">
        </div>
      <?php
          }
        }
      ?>
        <div class="col--4"></div>
      </div>
      <div class="relictrio--row">

      <?php 
        $design_icon_block_2 = get_field('design_icon_block_2');
        if( $design_icon_block_2 ) {
        foreach( $design_icon_block_2 as $row ) {
      ?>
        <div class="col--4">
          <img class="rugby__design--iconimg" src="<?php echo $row['icon_image'] ;?>"
            alt="rugby-design-icon-img">
        </div>
        <div class="col--8">
          <img class="rugby__design--iconimg" src="<?php echo $row['icon_image_2'] ;?>"
            alt="rugby-design-icon-img">
        </div>
        <?php
          }
        }
      ?>

      </div>
      <div class="relictrio--row">

      <?php 
        $design_icon_block_3 = get_field('design_icon_block_3');
        if( $design_icon_block_3 ) {
        foreach( $design_icon_block_3 as $row ) {
      ?>
        <div class="col--4">
          <img class="rugby__design--iconimg" src="<?php echo $row['icon_image'] ;?>"
            alt="rugby-design-icon-img">
        </div>
        <?php
          }
        }
      ?>

      </div>
      <div class="relictrio--row">
        <div class="col--12">
          <h3 class="heading heading--variation2 ruby__design--subheading mar-top--0">
            Scrollable Intractions
          </h3>
          <div class="rugby__design--scrollable">

          <?php 
            $design_scrollable_block_1 = get_field('design_scrollable_block_1');
            if( $design_scrollable_block_1 ) {
            foreach( $design_scrollable_block_1 as $row ) {
          ?>
            <div>
              <img src="<?php echo $row['icon_image'] ;?>" alt="animation-image">
            </div>
          <?php
              }
            }
          ?>

          </div>
          <div class="rugby__design--scrollable mar-top--50">
            
          <?php 
            $design_scrollable_block_2 = get_field('design_scrollable_block_2');
            if( $design_scrollable_block_2 ) {
            foreach( $design_scrollable_block_2 as $row ) {
          ?>
            <div>
              <img src="<?php echo $row['icon_image'] ;?>" alt="animation-image">
            </div>
          <?php
              }
            }
          ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="relictrio--row">
    <div class="col--1 col--remove"></div>
    <div class="col--10 col--full">
      <div class="rugby__design--screenblock">
        <div class="grid--1">
          <h3 class="heading heading--variation2 ruby__design--subheading">
            Main screens
          </h3>
        </div>
        <div class="grid--2">
          <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-1.png"
            alt="rugby-design-screen-img">
        </div>
        <div class="grid--3">
          <h3 class="heading heading--variation2 ruby__design--subheading2">
            Home page
          </h3>
          <p class="para rugby__challenge--para">Lorem ipsum dolor sit amet, consectetur adipisci ng elit.
            Laoreet et, ultricies a amet, venenatis arcu odio pellentesque. Mol estie tri stique libero quam
            vel posuere feugiat lectus lacus.</p>
        </div>
        <div class="grid--4">
          <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-2.png"
            alt="rugby-design-screen-img">
        </div>
        <div class="grid--5">
          <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-3.png"
            alt="rugby-design-screen-img">
        </div>
      </div>
    </div>
    <div class="col--1 col--remove"></div>
  </div>

  <div class="rugby__design--screenblock2">
    <div class="grid__1">
      <h3 class="heading heading--variation2 ruby__design--subheading2">
        Physical fitness
      </h3>
      <p class="para rugby__challenge--para">Lorem ipsum dolor sit amet, consectetur adipisci ng elit.
        Laoreet et, ultricies a amet, venenatis arcu odio pellentesque. Mol estie tri stique libero quam
        vel posuere feugiat lectus lacus.
      </p>
    </div>
    <div class="grid__2">
      <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-4.png"
        alt="rugby-design-screen-img">
    </div>
    <div class="grid__3">
      <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-5.png"
        alt="rugby-design-screen-img">
    </div>
    <div class="grid__4">
      <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-6.png"
        alt="rugby-design-screen-img">
    </div>
    <div class="grid__5">
      <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-7.png"
        alt="rugby-design-screen-img">
    </div>
    <div class="grid__5a">
      <h3 class="heading heading--variation2 ruby__design--subheading2">
        Rugby career
      </h3>
      <p class="para rugby__challenge--para">Lorem ipsum dolor sit amet, consectetur adipisci ng elit. Laoreet et,
        ultricies a amet, venenatis arcu odio pellentesque. Mol estie tri stique libero quam vel posuere feugiat
        lectus lacus.
      </p>
    </div>
    <div class="grid__6">
      <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-8.png"
        alt="rugby-design-screen-img">
    </div>
    <div class="grid__6a">
      <h3 class="heading heading--variation2 ruby__design--subheading2 text--right">
        Wellness program
      </h3>
      <p class="para rugby__challenge--para text--right">Lorem ipsum dolor sit amet, consectetur adipisci ng elit.
        Laoreet et, ultricies a amet, venenatis arcu odio pellentesque. Mol estie tri stique libero quam vel
        posuere feugiat lectus lacus.
      </p>
    </div>
    <div class="grid__7">
      <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-9.png"
        alt="rugby-design-screen-img">
    </div>
    <div class="grid__8">
      <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-10.png"
        alt="rugby-design-screen-img">
    </div>
    <div class="grid__9">
      <img class="rugby__design--screenimg" src="./resources/images/rugby-design-screen-img-11.png"
        alt="rugby-design-screen-img">
    </div>
    <div class="grid__9a">
      <h3 class="heading heading--variation2 ruby__design--subheading2">
        Diet
      </h3>
      <p class="para rugby__challenge--para">Lorem ipsum dolor sit amet, consectetur adipisci ng elit. Laoreet et,
        ultricies a amet, venenatis arcu odio pellentesque. Mol estie tri stique libero quam vel posuere feugiat
        lectus lacus.
      </p>
    </div>
  </div>
</div>
<h3 class="heading heading--variation2 ruby__design--subheading">
  Other screens
</h3>
</div>
</div>

<div class="container--fullwdh">
  <img class="rugby__design--otherimg" src="./resources/images/rugby-design-other-img.png" alt="rugby-design-other-img">
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
  $(".rugby__menutab li a").click(function() {
    $("li a").removeClass("active");
    $(this).addClass("active");
  });
});
</script>