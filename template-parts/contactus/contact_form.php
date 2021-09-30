<?php
/**
 * Relictrio Digital Contact us form
 *
 * @package Relictrio Digital
 */
?>


<div class="relictrio--contact--form">
      <form action="#" method="post" class="contact__form">
        <fieldset class="fiedet__form">

          <label for="wnat" class="form_label">I want to*</label>
          <div class="dropdown">
            <div class="dropdown-select">
             <span class="select">Select One</span>
             <i class="fa-solid fa-angle-down"></i>
            </div>
            <div class="dropdown-list">
             <div class="dropdown-list__item"></div>
           </div>  
          </div>

          <label for="" class="form_label">Full Name*</label>
          <input type="text" id="name" name="">

          <label for="" class="form_label">Company*</label>
          <input type="text" id="company" name="">

          <label for="" class="form_label">Mobile number*</label>
          <input type="number" id="number" name="">

          <label for="email" class="form_label">Email*</label>
          <input type="email" id="mail" name="email">
        
          <label for="" class="form_label">Website address</label>
          <input type="text" id="website-address" name="">

          <label for="project_lable" class="form_label">Tell Us about your project*</label>
          <textarea id="project_InputText" name="user_bio"></textarea>
        
          <label for="job" class="form_label">How did you hear about us?*</label>
          <div class="dropdown">
            <div class="dropdown-select">
             <span class="select">Select One</span>
             <i class="fa-solid fa-angle-down"></i>
            </div>
            <div class="dropdown-list">
             <div class="dropdown-list__item"></div>
           </div>  
          </div>

          <label for="" class="form_label">Upload file</label>
          <div id="upoads"></div>
          <div class="dropZone">Drag and drop or browse file
          <div class="dropfile">Pdf, Docx, Txt</div>
          </div>
          
        </fieldset>
        <fieldset>  
        
         </fieldset>
       <div class="relictrio_send__btn">
        <button type="submit" class="send_btn">Send</button>
       </div>
       </form>
      </div>
      

    