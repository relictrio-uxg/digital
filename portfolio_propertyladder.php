<?php
  /*
  * Template Name: Portfolio - Property Ladder
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

  <title>Property Ladder</title>

</head>
<body>

<?php 
  get_header(); 
?>

<?php include('template-parts/Portfolio-Property_Ladder/PF_property_ladder_banner.php') ?>
<?php include('template-parts/Portfolio-Property_Ladder/PF_property_ladder_challenge.php') ?>
<?php include('template-parts/Portfolio-Property_Ladder/PF_property_ladder_discover.php') ?>
<?php include('template-parts/Portfolio-Property_Ladder/PF_property_ladder_design.php') ?>
    
<?php 
  get_footer();
?>

</body>
</html>