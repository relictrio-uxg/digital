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

<section class="relictrio--contactus--container pad-tblr--80">
  <div class="relictrio--contact--Box-model b--radius10">
    
   <div class="form_col pad-tpbt--20">
   <?php 
                $contact_heading = get_field('contact_heading');
                if( $contact_heading ) {
            ?>
      <h1 class="relictrio__Contact__heading text--center heading--variation20"><?php echo $contact_heading ; ?></h1>
      <?php 
           }
        ?>
         <?php 
                $contact_para = get_field('contact_para');
                if( $contact_para) {
            ?>
      <p class="relictrio__contact__para para--variation20"><?php echo $contact_para ?></p>
      <?php 
          }
      ?>
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


