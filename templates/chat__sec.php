<div class="container container--fluid  bg--white ">
    <div class="container--content container--fxdwdh">
        <div class=" chat__sec mar-top--10 pad-tp--50 ">
            <h2 class="heading heading--variation1 ">Let’s talk.</h2>
            <h3 class="heading heading--variation2 pad-bt--40 pad-tp--30">
                The journey of 1,000 sales begins with the first click. 
            </h3>
            <img class="" src="<?php echo get_template_directory_uri();?>/assets/resources/images/relictrio__logo.png" alt=" relictrio logo">
            <p class="para text--center chat__sec--para">Now, a bit about you.</p>
        </div>
        <div class="relictriochatform relictrio--row"> 
            <div class="col--8">
                <?php echo do_shortcode('[contact-form-7 id="235" title="contact-form"]'); ?>
                    <form action="#" autocomplete="off"  >
                        <div class="relictriochatform__field ">
                            <label class="label mar-bot--30 " for="want">I want to*</label>
                            <input class="textinput relictriochatform__input" type="text" placeholder="Select one"
                            id="want" name="want">
                            <p id="userName" class="msg"></p>
                        </div>
                        <div class="relictriochatform__field ">
                            <label class="label mar-bot--30 " for="name">Full Name*</label>
                            <input class="textinput relictriochatform__input" type="text"
                            id="name" name="name">
                            <p id="userName" class="msg"></p>
                        </div>
                        <div class="relictriochatform__field ">
                            <label class="label mar-bot--30 " for="company">Company*</label>
                            <input class="textinput relictriochatform__input" type="text"
                            id="company" name="company">
                            <p id="userName" class="msg"></p>
                        </div>
                        <div class="relictriochatform__field ">
                            <label class="label mar-bot--30 " for="mobile">Mobile Number*</label>
                            <input class="textinput relictriochatform__input" type="number"
                            id="mobile" name="mobile">
                            <p id="userName" class="msg"></p>
                        </div>
                        
                    </form>
            </div>
            <div class="col--1"> </div>
            <div class="col--1">
                <img class="chat__sec__img" src="<?php echo get_template_directory_uri();?>/assets/resources/images/chat__icon.png" alt=" chat icon" onclick="myFunction()">
            </div>

            <div><span class="para para--variation4">Leave a message</span></div>
            <div class="chatmsg__expand--sec" id="chat__expand" >
                <div class="chatmsg__expand--head" >
                    <span class="para--variation4">Leave your message here</span>
                </div>
                <div class="chatmsg__expand--content">
                    <p>There are no agents availaible right now to take your call.
                         Please leave a message and we will eply by email.</p>
                         <form action="#" autocomplete="off"  >
                         <div class="relictriochatform__field ">
                            <input class=" chatmsgform__input" type="text"
                            id="name" name="name" placeholder="Your name">
                            <p id="userName" class="msg"></p>
                        </div>
                        <div class="relictriochatform__field ">
                            <input class=" chatmsgform__input" type="email"
                            id="email" name="email" placeholder="Email Address">
                            <p id="userEmail" class="msg"></p>
                        </div>
                        <div class="chat__sec--text">
                            <span>Or Sign in with</span>
                            <img src="../assets/resources/images/socialmedia__icon.png" alt="">

                        </div>
                        <div class="relictriochatform__field ">
                            <textarea class=" chatmsgform__input" 
                            id="text" name="text" placeholder="Type your Question or Message"></textarea>
                            <p id="userMsg" class="msg"></p>
                        </div>
                        <div class="chat__sec--sendbtn">
                            <button class="btn-fill--pri">Send</button>
                        </div>
                        </form>
                </div>
            </div>
                
        </div>
    </div>
</div>