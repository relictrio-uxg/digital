<?php
  /*
  * Template Name: Home
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

  <title>Home</title>

</head>

<body>

  <?php 
  get_header(); 
  ?>

  <!--hero section:start-->
  <?php include('template-parts/home/hero__banner.php') ?>
  <!--hero section:end-->
  <!--helping brands: start-->
  <?php include('template-parts/home/helping__brands.php') ?>
  <!--helping brand mobile sec: start-->
  <?php include('template-parts/home/helping__brands__mb.php') ?>
  <!--helping brand mobile sec: end-->
  <!--helping brands: end-->
  <!--digital maturity sec:start-->
  <?php include('template-parts/home/digital__maturity.php') ?>
  <!--digital maturity sec:end-->
  <!--slider sec: start-->
  <?php include('template-parts/home/slider.php') ?>
  <!--slider sec: end-->
  <!--magento sec: start-->
  <?php include('template-parts/home/magento__sec.php') ?>
  <!--magento sec: end-->
  <!--website accessibility sec:start-->
  <?php include('template-parts/home/digital__maturity__next.php') ?>
  <!--website accessibility sec:end-->

  <?php 
  get_footer();
  ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
  <!-- <script src="../assets/js/slider.js" defer></script> -->
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>../assets/js/slider.js?v=4.76" defer></script>
</body>

</html>