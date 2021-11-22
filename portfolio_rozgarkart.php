<?php
  /*
  * Template Name: Portfolio - Rozgarkart
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

  <title>Rozgarkart</title>

</head>
<body>

<?php 
  get_header(); 
?>

<?php include('template-parts/portfolio-rozgarkart/pf_rozgarkart_banner.php') ?>
<?php include('template-parts/portfolio-rozgarkart/pf_rozgarkart_challenge.php') ?>
<?php include('template-parts/portfolio-rozgarkart/pf_rozgarkart_discover.php') ?>
<?php include('template-parts/portfolio-rozgarkart/pf_rozgarkart_define.php') ?>
<?php include('template-parts/portfolio-rozgarkart/pf_rozgarkart_design.php') ?>
    
<?php 
  get_footer();
?>

</body>
</html>