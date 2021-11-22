<header>
  <nav class="relictrio_header_nav">
    <input id="nav-toggle" type="checkbox">
    <div class="relictrio__logo">

      <?php 
          $header_section_icon_link = get_field('header_section_icon_link');
          if( $header_section_icon_link ) {
      ?>
      <a href="<?php echo $header_section_icon_link; ?>">
        <?php 
          }
        ?>
        <?php 
          $header_section_icon = get_field('header_section_icon');
          if( $header_section_icon ) {
      ?>
        <img src="<?php echo $header_section_icon; ?>" alt="relictrio-logo">
      </a>
      <?php 
          }
        ?>

    </div>

    <ul class="links">
      <div class="links_nav">
        <ul class="ul_res_link">

        <?php 
          $header_section_menu_list = get_field('header_section_menu_list');
          if( $header_section_menu_list ) {
          foreach( $header_section_menu_list as $row ) {
        ?>
          <li><a href="<?php echo $row['menu_link'] ;?>">
            <?php echo $row['menu_name'] ;?>
            </a>
          </li>
          <?php
            }
          }
        ?>

        </ul>

        <div class="header__bottom--content">
          <ul>

          <?php 
          $header_section_bottom_block = get_field('header_section_bottom_block');
          if( $header_section_bottom_block ) {
          foreach( $header_section_bottom_block as $row ) {
          ?>
            <li>
              <h4 class="heading heading--variation4">
                <?php echo $row['bottom_heading'] ;?>
              </h4>
              <div class="dis--flx header__bottom--list">
                <span>
                  <img src="<?php echo $row['bottom_icon'] ;?>" alt="header icon">
                </span>
                <h5 class="heading heading--variation4">
                  <?php echo $row['bottom_content'] ;?>
                </h5>
              </div>
            </li>
          <?php
              }
            }
          ?>

          </ul>
          <div class="header__bottom--sociallist">

          <?php 
          $header_section_bottom_social_list = get_field('header_section_bottom_social_list');
          if( $header_section_bottom_social_list ) {
          foreach( $header_section_bottom_social_list as $row ) {
          ?>
            <a href="<?php echo $row['social_icon_link'] ;?>">
              <img src="<?php echo $row['social_icon'] ;?>" alt="social icon">
            </a>
            <?php
              }
            }
          ?>
            
          </div>
        </div>
      </div>
    </ul>
    <!-- Mobile Responsive Menu -->
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>
</header>