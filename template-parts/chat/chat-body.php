<?php
/**
 * Template part for chat - chat-body component
 *
 * @package Relictrio Digital
 */
?>


<section class="container--content contact__body">
  <div class="relictrio__contact--box-model">
    <div class="contact__body--content">

      <?php 
        $chat_form_heading = get_field('chat_form_heading');
        if( $chat_form_heading ) {
      ?>
      <h2 class="heading heading--variation1 text--center">
        <?php echo $chat_form_heading ; ?>
      </h2>
      <?php 
        }
      ?>

      <?php 
        $chat_form_paragraph = get_field('chat_form_paragraph');
        if( $chat_form_paragraph) {
      ?>
      <p class="para para--variation5 text--center">
        <?php echo $chat_form_paragraph ?>
      </p>
      <?php 
        }
      ?>

      <div class="relictrio__contact--logoimg">
      <?php 
        $chat_form_image = get_field('chat_form_image');
        if( $chat_form_image) {
      ?>
        <img src="<?php echo $chat_form_image ?>" class="contact-form-logo">
      <?php 
        }
      ?>
      </div>

      <?php 
        $chat_form_subheading = get_field('chat_form_subheading');
        if( $chat_form_subheading) {
      ?>
      <h3 class="para para--variation5">
        <?php echo $chat_form_subheading ?>
      </h3>
      <?php 
        }
      ?>

      <div>
        <?php include('chat_form.php') ?>
      </div>

    </div>
  </div>
  </div>
</section>