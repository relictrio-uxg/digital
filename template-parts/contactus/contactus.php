<?php
/**
 * Relictrio Digital Contact us
 *
 * @package Relictrio Digital
 */
?>

<?php get_header(); ?>
<?php
  $logoimg = get_header_image();
?>

<section class="relictrio--contactus--container">
  <div class="relictrio--contact--Box-model">
    
   <div class="form_col">
      <h1 class="relictrio__Contact__heading">Let’s talk.</h1>
      <p class="relictrio__contact__para">The journey of 1,000 sales begins with the first click.</p>
      <div class="relictrio__contact__logoimg">
      <img src="<?php echo $logoimg; ?>" class="logo__img">
     </div>
     <h2 class="relictrio__Contact__para1">Now, a bit about you.</h2>
     <div>
    
     <?php include('contact_form.php') ?>

     </div>
    </div>
   </div>
 </div>
</section>

<?php get_footer(); ?>