<?php
  /*
  * Template part for About us Want to know commponent
  *
  * @package Relictrio Digital
  */
  ?>
  
  <section class="wanttoknowsection container--fullwdh">
    <div class="relictrio--row">
      <div class="col--1"></div>
      <div class="col--7 mar-rht--20">

      <?php 
          $know_section_content = get_field('know_section_content');
          if( $know_section_content ) {
      ?>
        <h3 class="heading heading--variation1 mar-top--0 mar-bot--0">
        <?php echo $know_section_content; ?>
        </h3>
      <?php 
          }
      ?>

      </div>
      <div class="col--3 flx-alnsf--ctr">

      <?php 
          $know_section_button = get_field('know_section_button');
          if( $know_section_button ) {
      ?>
        <button class="wanttoknowsection__btn btn-fill--pri">
        <?php echo $know_section_button; ?>
        </button>
      <?php 
         }
      ?>

      </div>
      <div class="col--1"></div>
    </div>
  </section>
