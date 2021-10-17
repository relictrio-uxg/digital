<?php
  /*
  * Template Name: Footer
  *
  * @package Relictrio Digital
  */
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php
    wp_head();
  ?>

  <title>Footer Section</title>

</head>
<body>

<?php 
  get_header(); 
?>

<?php 
          $footer_block = get_field('footer_block');
          if( $footer_block ) {
          foreach( $footer_block as $row ) {
        ?>

 <footer>
    <div class="container container--fluid">
      <div class="container--content">
        <div class="relictriofooter relictrio--row justify-content--between">
          <div class="col--1">
            <a href="#">
              <img class="relictriofooter__logo" src="<?php echo $row['footer_main_logo'] ;?>"
                alt="relictrio-logo">
            </a>
          </div>
          <div class="col--1"></div>
          <div class="col--3 relictriofooter__hover--1">
            <h3 class="relictriofooter__heading heading heading--variation4">
            <?php echo $row['footer_heading_1'] ;?>
            </h3>
            <ul class="relictriofooter__link">
              <li class="heading heading--variation4 mar-top--0">
                <span class="relictriofooter__img">
                  <img src="<?php echo $row['footer_icon_1'] ;?>" alt="logo">
                </span>
                <?php echo $row['footer_content_1'] ;?>
              </li>
            </ul>
          </div>
          <div class="col--3 relictriofooter__hover--2">
            <h3 class="relictriofooter__heading heading heading--variation4">
            <?php echo $row['footer_heading_2'] ;?>
            </h3>
            <ul class="relictriofooter__link">
              <li class="heading heading--variation4 mar-top--0">
                <span class="relictriofooter__img">
                  <img src="<?php echo $row['footer_icon_2'] ;?>" alt="logo">
                </span>
                <?php echo $row['footer_content_2'] ;?>
              </li>
            </ul>
          </div>
          <div class="col--4 relictriofooter__hover--3">
            <h3 class="relictriofooter__heading heading heading--variation4">
            <?php echo $row['footer_heading_3'] ;?>
            </h3>
            <ul class="relictriofooter__link">
              <li class="heading heading--variation4 mar-top--0">
                <span class="relictriofooter__img">
                  <img src="<?php echo $row['footer_icon_3'] ;?>" alt="logo">
                </span>
                <?php echo $row['footer_content_3'] ;?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="relictriofooterbottom relictrio--row jus-cnt--cent">
      <div class="col--5"></div>
      <div class="col--4 relictriofooter__order--2">
        <p class="para para--variation2 mar-bot--0">
        <?php echo $row['footer_bottom_content'] ;?>
        </p>
      </div>
      <div class="col--3 relictriofooter__order--1">
        <span class="relictriofooterbottom__icon">
          <img class="relictriofooterbottom__icon--1" src="<?php echo $row['footer_bottom_icon_1'] ;?>" alt="linkedin-logo">
          <img class="relictriofooterbottom__icon--2" src="<?php echo $row['footer_bottom_icon_2'] ;?>" alt="instagram-logo">
          <img class="relictriofooterbottom__icon--3" src="<?php echo $row['footer_bottom_icon_3'] ;?>" alt="facebook-logo">
          <img class="relictriofooterbottom__icon--4" src="<?php echo $row['footer_bottom_icon_4'] ;?>" alt="twitter-logo">
        </span>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".relictriofooter__hover--1").hover(function () {
        $(this).find('img').attr('src', '<?php echo $row['footer_icon_hover_1'] ;?>');
      },
        function () {
          $(this).find('img').attr('src', '<?php echo $row['footer_icon_1'] ;?>');
        });
    });
    $(document).ready(function () {
      $(".relictriofooter__hover--2").hover(function () {
        $(this).find('img').attr('src', '<?php echo $row['footer_icon_hover_2'] ;?>');
      },
        function () {
          $(this).find('img').attr('src', '<?php echo $row['footer_icon_2'] ;?>');
        });
    });
    $(document).ready(function () {
      $(".relictriofooter__hover--3").hover(function () {
        $(this).find('img').attr('src', '<?php echo $row['footer_icon_hover_3'] ;?>');
      },
        function () {
          $(this).find('img').attr('src', '<?php echo $row['footer_icon_3'] ;?>');
        });
    });

    //Footer Bottom Icon
    $(document).ready(function () {
      $(".relictriofooterbottom__icon--1").hover(function () {
        $(this).attr('src', '<?php echo $row['footer_bottom_hover_icon_1'] ;?>');
      },
        function () {
          $(this).attr('src', '<?php echo $row['footer_bottom_icon_1'] ;?>');
        });
    });
    $(document).ready(function () {
      $(".relictriofooterbottom__icon--2").hover(function () {
        $(this).attr('src', '<?php echo $row['footer_bottom_hover_icon_2'] ;?>');
      },
        function () {
          $(this).attr('src', '<?php echo $row['footer_bottom_icon_2'] ;?>');
        });
    });
    $(document).ready(function () {
      $(".relictriofooterbottom__icon--3").hover(function () {
        $(this).attr('src', '<?php echo $row['footer_bottom_hover_icon_3'] ;?>');
      },
        function () {
          $(this).attr('src', '<?php echo $row['footer_bottom_icon_3'] ;?>');
        });
    });
    $(document).ready(function () {
      $(".relictriofooterbottom__icon--4").hover(function () {
        $(this).attr('src', '<?php echo $row['footer_bottom_hover_icon_4'] ;?>');
      },
        function () {
          $(this).attr('src', '<?php echo $row['footer_bottom_icon_4'] ;?>');
        });
    });
  </script>

  </footer>
  
  <?php
              }
            }
          ?>

</body>
</html>