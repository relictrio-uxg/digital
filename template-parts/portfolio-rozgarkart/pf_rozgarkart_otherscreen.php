<?php
/*
* Template part for Portfolio PF_rozgarkart_otherscreen component
*
* @package Relictrio Digital
*/
?>


<div class="container--fullwdh">
  <div class="rozgarkart__design--otherscreen">
    <div class="otherscreen--left">

      <?php 
        $other_screen_heading = get_field('other_screen_heading');
        if( $other_screen_heading ) {
      ?>  
      <h2 class="heading heading--variation1">
      <?php echo $other_screen_heading; ?>
      </h2>
      <?php 
        }
      ?>     

      <?php 
        $other_screen_paragraph = get_field('other_screen_paragraph');
        if( $other_screen_paragraph ) {
      ?>  
      <p class="para para--variation1">
      <?php echo $other_screen_paragraph; ?>
      </p>
      <?php 
        }
      ?>     

    </div>

    <div class="otherscreen--right">

      <div class="otherscreen--slider">

        <?php 
          $other_screen_carousel_block = get_field('other_screen_carousel_block');
          if( $other_screen_carousel_block ) {
          foreach( $other_screen_carousel_block as $row ) {
        ?>
        <div class="otherscreen--block">
          <div class="otherscreen--img">
            <img src="<?php echo $row['carousel_image'] ;?>"
              alt="rozgarkart-design-otherscreen-img">
          </div>
          <div class="otherscreen--content">
            <h2><?php echo $row['carousel_heading'] ;?></h2>
            <p><?php echo $row['carousel_paragraph'] ;?></p>
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



<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$('.otherscreen--slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,

  <?php 
    $other_screen_left_arrow_image = get_field('other_screen_left_arrow_image');
    if( $other_screen_left_arrow_image ) {
  ?> 
  prevArrow: "<img class='slick-prev' src='<?php echo $other_screen_left_arrow_image; ?>'>",
  <?php 
    }
  ?>

  <?php 
    $other_screen_right_arrow_image = get_field('other_screen_right_arrow_image');
    if( $other_screen_right_arrow_image ) {
  ?> 
  nextArrow: "<img class='slick-next' src='<?php echo $other_screen_right_arrow_image; ?>'>",
  <?php 
    }
  ?>
  
  responsive: [{
      breakpoint: 1300,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 835,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 2.5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 540,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 430,
      settings: {
        slidesToShow: 1.5,
        slidesToScroll: 1
      }
    }
  ]
});
</script>