<?php
  /*
  * Template Name: About us
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

  <title>About Us</title>

</head>
<body>

<?php 
  get_header(); 
?>

<?php include('template-parts/About_Us/A_banner.php') ?>
<?php include('template-parts/About_Us/A_leadership.php') ?>
<?php include('template-parts/About_Us/A_weareexperts.php') ?>
<?php include('template-parts/About_Us/A_whyus.php') ?>
<?php include('template-parts/About_Us/A_wanttoknow.php') ?>

    
<?php 
  get_footer();
?>

</body>
</html>