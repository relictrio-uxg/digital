<?php
/**
 * Template part for chat - chat_form component
 *
 * @package Relictrio Digital
 */
?>


<div class="relictrio--contact--form">

  <div class="chat__body">


    <?php 
      $chat_fixed_icon = get_field('chat_fixed_icon');
      if( $chat_fixed_icon ) {
    ?>
    <img class="chat__fixedimg" src="<?php echo $chat_fixed_icon; ?>" alt="chat-fixed-icon">
    <?php 
        }
      ?> 

    
    <div class="chat__body--block">

      <?php 
        $chat_fixed_heading = get_field('chat_fixed_heading');
        if( $chat_fixed_heading ) {
      ?>
      <p class="chat__body--blockbtn">
        <?php echo $chat_fixed_heading; ?>
      </p>
      <?php 
        }
      ?>    

      <div class="chat__body--hide">

        <?php 
          $chat_fixed_paragraph = get_field('chat_fixed_paragraph');
          if( $chat_fixed_paragraph ) {
        ?>
        <p>
          <?php echo $chat_fixed_paragraph; ?>
        </p>
        <?php 
          }
        ?> 

        <form action="#" autocomplete="off">
          <div class="relictriochatform__field ">
            <input class=" chatmsgform__input" type="text" id="name" name="name" placeholder="Your name">
            <p id="userName" class="msg"></p>
          </div>
          <div class="relictriochatform__field ">
            <input class=" chatmsgform__input" type="email" id="email" name="email" placeholder="Email Address">
            <p id="userEmail" class="msg"></p>
          </div>
          <div class="relictriochatform__field--signin">
            <p>Or Sign in with</p>
            <div class="relictriochatform__field--socialicon">


              <?php 
                $chat_social_icon_1 = get_field('chat_social_icon_1');
                if( $chat_social_icon_1 ) {
              ?>
              <img src="<?php echo $chat_social_icon_1; ?>" alt="chat-icon">
              <?php 
                }
              ?> 

              <?php 
                $chat_social_icon_2 = get_field('chat_social_icon_2');
                if( $chat_social_icon_2 ) {
              ?>
              <img src="<?php echo $chat_social_icon_2; ?>" alt="chat-icon">
              <?php 
                }
              ?> 


            </div>
          </div>
          <div class="relictriochatform__field ">
            <textarea class=" chatmsgform__input" id="text" name="text"
              placeholder="Type your Question or Message"></textarea>
          </div>
          <div class="chat__sec--sendbtn">
            <button class="btn-fill--pri">Send</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <form action="#" method="post" class="contact__form">

    <fieldset class="fiedet__form">

      <?php echo do_shortcode( '[contact-form-7 id="1295" title="Chat Form"]' ); ?>

    </fieldset>

  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $(".chat__body--blockbtn").click(function () {
        $(".chat__body--hide").fadeToggle("fast");
        $(".chat__body--blockbtn").toggleClass("chat__active");
        $(".chat__body--blockbtn").text(function(i, text){
          return text === "Leave a message here" ? "Leave your message" : "Leave a message here";
      })
      });
    });
  </script>

</div>