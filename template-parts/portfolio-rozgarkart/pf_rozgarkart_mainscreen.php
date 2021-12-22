<?php
/*
* Template part for Portfolio PF_rozgarkart_mainscreen component
*
* @package Relictrio Digital
*/
?>


  <?php 
        $design_subheading_5 = get_field('design_subheading_5');
        if( $design_subheading_5 ) {
      ?>
  <h3 class="heading heading--variation1 rozgarkart__design--subheading">
    <?php echo $design_subheading_5; ?>
  </h3>
  <?php 
        }
      ?>
  

      <div class="rozgarkart__design--mainscreentext">


        <?php 
              $design_main_screen_text = get_field('design_main_screen_text');
              if( $design_main_screen_text ) {
              foreach( $design_main_screen_text as $row ) {
            ?>
        <div>
          <p class="para para--variation5 mainscreentext--heading">
            <?php echo $row['main_screen_heading'] ;?>
          </p>
          <p class="heading heading--variation3 mainscreentext--subheading">
            <?php echo $row['main_screen_subheading'] ;?>
          </p>
        </div>
        <?php
                }
              }
            ?>


      </div>

      <div class="rozgarkart__design--mainscreenimage">

        <?php 
              $design_main_screen_image = get_field('design_main_screen_image');
              if( $design_main_screen_image ) {
              foreach( $design_main_screen_image as $row ) {
            ?>

        <div>
          <img src="<?php echo $row['main_screen_image'] ;?>" alt="rozgarkart-design-mainscreen-img">
        </div>

        <?php
                }
              }
            ?>


      </div>
    </div>
  


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$('.rozgarkart__design--mainscreentext').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.rozgarkart__design--mainscreenimage'
});

$('.rozgarkart__design--mainscreenimage').slick({
  infinite: true,
  dots: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,

<?php 
    $design_main_screen_left_arrow_image = get_field('design_main_screen_left_arrow_image');
    if( $design_main_screen_left_arrow_image ) {
  ?> 
  prevArrow: "<img class='slick-prev' src='<?php echo $design_main_screen_left_arrow_image; ?>'>",
  <?php 
    }
  ?>

  <?php 
    $design_main_screen_right_arrow_image = get_field('design_main_screen_right_arrow_image');
    if( $design_main_screen_right_arrow_image ) {
  ?> 
  nextArrow: "<img class='slick-next' src='<?php echo $design_main_screen_right_arrow_image; ?>'>",
  <?php 
    }
  ?>

  asNavFor: '.rozgarkart__design--mainscreentext',
  autoplay: true,
  autoplaySpeed: 1000,


  responsive: [{
      breakpoint: 1500,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 675,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>