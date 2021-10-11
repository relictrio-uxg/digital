<?php
  /*
  * Template Name: Design & Development
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

  <title>Design & Development</title>

</head>
<body>

<?php 
  get_header(); 
?>

<?php include('template-parts/Design & Development/D&D_banner.php') ?>
<?php include('template-parts/Design & Development/D&D_digitalservices.php') ?>
<?php include('template-parts/Design & Development/D&D_commerce.php') ?>
<?php include('template-parts/Design & Development/D&D_digitaldesign.php') ?>

<?php 
  get_footer();
?>

</body>
</html>