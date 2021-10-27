<?php
/**
 * Relictrio Digital Inception Page
 *
 * @package Relictrio Digital
 */
?>

<?php get_header(); ?>


<section class="relictrio--inception--container">









  <!--Inception banner section first:start-->
  <div class="container container--fluid  bg--white pad-tp--120 digitalmb-pad-tpbt">



    <div class="container--fluid dis--flx pad-bt--50">
      <div class="col--4 dis--flx flex--column flx-alnitm--cent justify-content--center">
        <div class="dis--flx align-items--end">

          <?php 
                $hero_section_number = get_field('hero_section_number');
                if( $hero_section_number ) {
            ?>
          <p class="txt--cetacean_blue heading--variation19 opacity--20 service__sectionNumbers">
            <?php echo $hero_section_number; ?>
          </p>
          <?php 
                }
            ?>


          <?php 
            $hero_section_image_block = get_field('hero_section_image_block');
            if( $hero_section_image_block ) {
            foreach( $hero_section_image_block as $row ) {
            ?>
          <picture>
            <source media="(max-width: 600px)" srcset="<?php echo $row['icon_mobile'] ;?>">
            <img class="inceptio_img" src="<?php echo $row['icon'] ;?>" alt="inception group icon">
          </picture>
          <?php
                }
              }
            ?>

        </div>

        <?php 
                $hero_section_heading = get_field('hero_section_heading');
                if( $hero_section_heading ) {
            ?>
        <div
          class="heading--variation18 heading--variation19 mar-top--90 dis--flx justify-content--center inception__sectionHeading">
          <?php echo $hero_section_heading; ?>
        </div>
        <?php 
                }
            ?>


      </div>
      <div class="col--1"></div>
      <div class="col--7">
        <div class="serviceImage_container dis--flx">

        <?php 
            $hero_section_right_image = get_field('hero_section_right_image');
            if( $hero_section_right_image ) {
            foreach( $hero_section_right_image as $row ) {
            ?>
             <picture>
            <source media="(max-width: 600px)" srcset="<?php echo $row['right_mobile_image'] ;?>">
            <img class="res-img" src="<?php echo $row['rightimage'] ;?>" alt="inception image">
          </picture>
          <?php
                }
              }
            ?>

        </div>
      </div>
    </div>
    <!--Inception banner section first:end-->

    <!-- Digital Consulting & Transformation Services  sec:start-->
    <div class="relictrio--row jus-cnt--cent">
      <div class="col--11 mar-bot--25">

        <?php 
                $digital_section_heading = get_field('digital_section_heading');
                if( $digital_section_heading ) {
            ?>
        <h2 class="heading heading--variation17 text--center">
          <?php echo $digital_section_heading; ?>
        </h2>
        <?php 
                }
            ?>

        <?php 
                $digital_section_para = get_field('digital_section_para');
                if( $digital_section_para ) {
            ?>
        <p class="designdevelop__service--para">
          <?php echo $digital_section_para; ?>
        </p>
        <?php 
                }
            ?>

      </div>
    </div>
    <!-- Digital Consulting & Transformation Services  sec:end-->

    <!-- Digital Maturity Assessments  third:start-->
    <div class="container container--fluid  bg--white pad-tpbt--25 digitalmb-pad-tpbt">
      <div class="container--content container--fxdwdh">
        <div class="relictrio--row ">
          <div class="col--1">

            <?php 
                $digital_maturity_icon = get_field('digital_maturity_icon');
                if( $digital_maturity_icon ) {
            ?>
            <img class="maturity__img " src="<?php echo $digital_maturity_icon; ?>" alt="card one icon" />
            <?php 
                }
            ?>

          </div>
          <div class="col--6">

            <?php 
                $digital_maturity_heading = get_field('digital_maturity_heading');
                if( $digital_maturity_heading ) {
            ?>
            <h3 class="heading--variation21 maturity__head "><?php echo $digital_maturity_heading; ?>
            </h3>
            <?php 
                }
            ?>

          </div>
          <div class="col--1 "></div>
          <div class="col--4">

            <?php 
                $digital_maturity_right_icon = get_field('digital_maturity_right_icon');
                if( $digital_maturity_right_icon ) {
            ?>
            <img class="triangle__img pad-tp--40" src="<?php echo $digital_maturity_right_icon; ?>"
              alt="triangle icon" />
            <?php 
                }
            ?>

          </div>
        </div>

        <div class="">
          <div class="relictrio--row digital__mature--sec">
            <div class="col--7">

              <?php 
                $digital_maturity_content = get_field('digital_maturity_content');
                if( $digital_maturity_content ) {
            ?>
              <p class="para para--variation21">
                <?php echo $digital_maturity_content; ?>
              </p>
              <?php 
                }
            ?>

              <div class="">
                <div class="maturity__text  mar-top--30">

                  <?php 
            $digital_maturity_list_1 = get_field('digital_maturity_list_1');
            if( $digital_maturity_list_1 ) {
            foreach( $digital_maturity_list_1 as $row ) {
            ?>
                  <h3 class="heading10 heading--variation22 txt__clr--black pad-bt--12">
                    <span><?php echo $row['list_number'] ;?></span>&nbsp;
                    <?php echo $row['list_heading'] ;?>
                  </h3>
                  <?php
                }
              }
            ?>
                </div>

                <div class="dis--flx arrow__text ">
                  <div>

                    <?php 
            $digital_maturity_content_list = get_field('digital_maturity_content_list');
            if( $digital_maturity_content_list ) {
            foreach( $digital_maturity_content_list as $row ) {
            ?>
                    <p class="para maturity__sub--text">
                      <span class="maturity__subtext--variation1"><?php echo $row['list_1'] ;?></span>
                      <br /><?php echo $row['list_2'] ;?>
                    </p>
                    <?php
                }
              }
            ?>

                  </div>
                </div>

                <div class="dis--flx mar-l--1">
                  <div class="maturity__text  ">

                    <?php 
            $digital_maturity_list_2 = get_field('digital_maturity_list_2');
            if( $digital_maturity_list_2 ) {
            foreach( $digital_maturity_list_2 as $row ) {
            ?>
                    <h3 class="heading10 heading--variation22 txt__clr--black pad-bt--12">
                      <span class="dot"> </span>&nbsp;
                      <?php echo $row['list_heading'] ;?>
                    </h3>
                    <?php
                }
              }
            ?>

                  </div>
                </div>

              </div>
              <div class="col--5">

              </div>
            </div>
          </div>

        </div>
      </div>
      <!--Digital Maturity Assessments third:end-->



      <!--Business Analysis   fourth:start-->
      <div class="container container--fluid  bg--white pad-tpbt--25 digitalmb-pad-tpbt">
        <div class="container--content container--fxdwdh">
          <div class="relictrio--row ">
            <div class="col--1">

              <?php 
                $business_icon = get_field('business_icon');
                if( $business_icon ) {
            ?>
              <img class="maturity__img " src="<?php echo $business_icon; ?>" alt="card one icon" />
              <?php 
                }
            ?>

            </div>
            <div class="col--6">

              <?php 
                $business_heading = get_field('business_heading');
                if( $business_heading ) {
            ?>
              <h3 class="heading--variation21 maturity__head1 ">
                <?php echo $business_heading; ?>
              </h3>
              <?php 
                }
            ?>

            </div>
            <div class="col--1"></div>
            <div class="col--4">

              <?php 
                $business_right_icon = get_field('business_right_icon');
                if( $business_right_icon ) {
            ?>
              <img class="triangle__img pad-tp--40" src="<?php echo $business_right_icon; ?>" alt="triangle icon" />
              <?php 
                }
            ?>

            </div>
          </div>

          <div class="">
            <div class="relictrio--row digital__mature--sec">
              <div class="col--7">

                <?php 
                $business_content = get_field('business_content');
                if( $business_content ) {
            ?>
                <p class="para para--variation21">
                  <?php echo $business_content; ?>
                </p>
                <?php 
                }
            ?>


                <div class="dis--flx mar-l--1">
                  <div class="maturity__text  ">

                    <?php 
            $business_list = get_field('business_list');
            if( $business_list ) {
            foreach( $business_list as $row ) {
            ?>
                    <h3 class="heading10 heading--variation22 txt__clr--black pad-bt--12">
                      <span class="dot"> </span>&nbsp;
                      <?php echo $row['list_heading'] ;?>
                    </h3>
                    <?php
                }
              }
            ?>

                  </div>
                </div>

              </div>
              <div class="col--5">

              </div>
            </div>
          </div>

        </div>
      </div>
      <!--Business Analysis fourth:end-->


      <!--Technology Assessments & Procurement Support fourth:start-->
      <div class="container container--fluid  bg--white pad-tpbt--25 digitalmb-pad-tpbt">
        <div class="container--content container--fxdwdh">
          <div class="relictrio--row ">
            <div class="col--1">

              <?php 
                $technology_icon = get_field('technology_icon');
                if( $technology_icon ) {
            ?>
              <img class="maturity__img " src="<?php echo $technology_icon; ?>" alt="card one icon" />
              <?php 
                }
            ?>

            </div>
            <div class="col--6">

              <?php 
                $technology_heading = get_field('technology_heading');
                if( $technology_heading ) {
            ?>
              <h3 class="heading--variation23 maturity__head2">
                <?php echo $technology_heading; ?>
              </h3>
              <?php 
                }
            ?>

            </div>
            <div class="col--1"></div>
            <div class="col--4">

              <?php 
                $technology_right_icon = get_field('technology_right_icon');
                if( $technology_right_icon ) {
            ?>
              <img class="triangle__img pad-tp--40" src=" <?php echo $technology_right_icon; ?>" alt="triangle icon" />
              <?php 
                }
            ?>

            </div>
          </div>

          <div class="">
            <div class="relictrio--row digital__mature--sec">
              <div class="col--7">

                <?php 
            $technology_content_block = get_field('technology_content_block');
            if( $technology_content_block ) {
            foreach( $technology_content_block as $row ) {
            ?>
                <p class="para para--variation21">
                  <?php echo $row['content'] ;?>
                </p>
                <?php
                }
              }
            ?>


                <div class="dis--flx mar-l--1">
                  <div class="maturity__text  ">

                    <?php 
            $technology_list = get_field('technology_list');
            if( $technology_list ) {
            foreach( $technology_list as $row ) {
            ?>
                    <h3 class="heading10 heading--variation22 txt__clr--black pad-bt--12">
                      <span class="dot"> </span>&nbsp;
                      <?php echo $row['list'] ;?>
                    </h3>
                    <?php
                }
              }
            ?>

                <?php 
                $technology_para_1 = get_field('technology_para_1');
                if( $technology_para_1 ) {
                ?>
                    <p class="para para--variation21">
                        <?php echo $technology_para_1; ?>
                    </p>
                    <?php 
                    }
                ?>

                    <div class="dis--flx arrow__text ">
                      <div>
                        <p class="para maturity__sub--text">

                        <?php 
                $technology_para_2 = get_field('technology_para_2');
                if( $technology_para_2 ) {
                ?>
                          <span class="maturity__subtext--variation1">
                          <?php echo $technology_para_2; ?>
                            <?php 
                    }
                ?>

                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="col--5">

              </div>
            </div>
          </div>

        </div>
      </div>
      <!--Technology Assessments & Procurement Support fourth:end-->


      <!--Implementation & Go-Live Management start-->
      <div class="container container--fluid  bg--white pad-tpbt--25 digitalmb-pad-tpbt">
        <div class="container--content container--fxdwdh">
          <div class="relictrio--row ">
            <div class="col--1">

            <?php 
                $implementation_icon = get_field('implementation_icon');
                if( $implementation_icon ) {
                ?>
              <img class="maturity__img "
                src="<?php echo $implementation_icon; ?>" alt="card one icon" />
                <?php 
                    }
                ?>

            </div>
            <div class="col--6">

            <?php 
                $implementation_heading = get_field('implementation_heading');
                if( $implementation_heading ) {
                ?>
              <h3 class="heading--variation23 maturity__head2"><?php echo $implementation_heading; ?></h3>
              <?php 
                    }
                ?>

            </div>
            <div class="col--1"></div>
            <div class="col--4">

            <?php 
                $implementation_right_icon = get_field('implementation_right_icon');
                if( $implementation_right_icon ) {
                ?>
              <img class="triangle__img pad-tp--40"
                src="<?php echo $implementation_right_icon; ?>"
                alt="triangle icon" />
                <?php 
                    }
                ?>

            </div>
          </div>

          <div class="">
            <div class="relictrio--row digital__mature--sec">
              <div class="col--7">

              <?php 
                $implementation_content_1 = get_field('implementation_content_1');
                if( $implementation_content_1 ) {
                ?>
                <p class="para para--variation21">
                <?php echo $implementation_content_1; ?>
                </p>
                <?php 
                    }
                ?>

<?php 
                $implementation_content_list_heading = get_field('implementation_content_list_heading');
                if( $implementation_content_list_heading ) {
                ?>
                <p class="para para--variation21"><?php echo $implementation_content_list_heading; ?>
                </p>
                <?php 
                    }
                ?>

              </div>
            </div>
            <div class="relictrio--row digital__mature--sec">
              <div class="col--3">


              <?php 
            $implementation_list_heading_block = get_field('implementation_list_heading_block');
            if( $implementation_list_heading_block ) {
            foreach( $implementation_list_heading_block as $row ) {
            ?>
                <div class="dis--flx">
                  <div class="maturity__text">
                    <h3 class="heading10 heading--variation22 txt__clr--black">
                      <div>
                    <?php echo $row['heading'] ;?>
            </div>
                    </h3>
                  </div>
                </div>
                <?php
                }
              }
            ?>

              </div>

              <div class="col--8">

                <?php 
            $implementation_list_content_block = get_field('implementation_list_content_block');
            if( $implementation_list_content_block ) {
            foreach( $implementation_list_content_block as $row ) {
            ?>
                <div class="dis--flx">
                  <div class="Implementation__text">
                    <h3 class="heading10 heading--variation22 txt__clr--black">
                      <div>
                    <?php echo $row['content'] ;?>
                     </div>
                </h3>
                  </div>
                </div>
                <?php
                }
              }
            ?>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    <!--digital maturity fifth:end-->

</section>

<?php get_footer(); ?>