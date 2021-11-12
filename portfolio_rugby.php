<?php
  /*
  * Template Name: Portfolio - MDS Rugby
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

  <title>MDR Rugby</title>

</head>
<body>

<?php 
  get_header(); 
?>

<?php include('template-parts/Portfolio-MDR_Rugby/PF_mdrrugby_banner.php') ?>
<?php include('template-parts/Portfolio-MDR_Rugby/PF_mdrrugby_challenge.php') ?>
<?php include('template-parts/Portfolio-MDR_Rugby/PF_mdrrugby_discover.php') ?>
<?php include('template-parts/Portfolio-MDR_Rugby/PF_mdrrugby_design.php') ?>

<?php 
  get_footer();
?>

</body>
</html>