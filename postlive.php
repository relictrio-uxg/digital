<?php
  /*
  * Template Name: Post Live
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

  <title>Post Live</title>

</head>
<body>

<?php 
  get_header(); 
?>

<?php include('template-parts/Post_Live/P_banner.php') ?>
<?php include('template-parts/Post_Live/P_digitalmanaged.php') ?>

<?php 
  get_footer();
?>

</body>
</html>