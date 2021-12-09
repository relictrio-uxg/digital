<?php
/**
 * Relictrio Digital Contact us 
 *
 * @package Relictrio Digital
 */
?>


<section class="container--content contact__body">
  <div class="relictrio__contact--box-model">
    <div class="contact__body--content">

      <?php 
        $contact_form_heading = get_field('contact_form_heading');
        if( $contact_form_heading ) {
      ?>
      <h2 class="heading heading--variation1 text--center">
        <?php echo $contact_form_heading ; ?>
      </h2>
      <?php 
        }
      ?>

      <?php 
        $contact_form_paragraph = get_field('contact_form_paragraph');
        if( $contact_form_paragraph) {
      ?>
      <p class="para para--variation5 text--center">
        <?php echo $contact_form_paragraph ?>
      </p>
      <?php 
        }
      ?>

      <div class="relictrio__contact--logoimg">
      <?php 
        $contact_form_image = get_field('contact_form_image');
        if( $contact_form_image) {
      ?>
        <img src="<?php echo $contact_form_image ?>" class="contact-form-logo">
      <?php 
        }
      ?>
      </div>

      <?php 
        $contact_form_subheading = get_field('contact_form_subheading');
        if( $contact_form_subheading) {
      ?>
      <h3 class="para para--variation5">
        <?php echo $contact_form_subheading ?>
      </h3>
      <?php 
        }
      ?>

      <div>
        <?php include('contact_form.php') ?>
      </div>

    </div>
  </div>
  </div>
</section>