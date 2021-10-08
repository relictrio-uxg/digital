<?php
/**
 	* Template Name: Home
 	*
 	* @package WordPress
	* @subpackage Relictrio Digital
 	* @since 1.0.0
*/
get_header();
?>
	
    <div class="parent"> </div>
    <!--hero section:start-->
    <?php include('templates/hero__banner.php') ?>
    <!--hero section:end-->

    <!--helping brands: start-->
    <?php include('templates/helping__brands.php') ?>
    <!--helping brand mobile sec: start-->

    <!-- <div class="container container--fluid pad-t--30 hide__help--desktop">
        <div class="container--content container--fxdwdh">
            <div class="relictrio--row ">
            <h2 class="heading heading--variation1 text--center help__brand--mbhead">
                    Helping brands to evolve in every phase of their digital commerce journey</h2>
            <div class="col--1 brdr__img">
            <img class="card__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/card_icon1.png"
                                alt="design & develoment icon" />
            </div>
            <div class="col--1 brdr__img">
            <img class="card__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/card_icon2.png"
                                alt="design & develoment icon" />
                
            </div>
            <div class="col--1 brdr__img">
            <img class="card__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/card__icon3.png"
                                alt="design & develoment icon" />   
            </div>
            <div class="col--1 brdr__img">
            <img class="card__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/card__icon4.png"
                                alt="design & develoment icon" />   
            </div>
            </div>
        </div>
    </div> -->
    <!--helping brand mobile sec: end-->

    <!--helping brands: end-->
    <!--digital maturity sec:start-->
    <?php include('templates/digital__maturity.php') ?>
    <!--digital maturity sec:end-->
    <!--technology evaluation sec: start-->

    <!--technology evaluation sec: end-->
      <!--slider sec: start-->
      <?php include('templates/slider.php') ?>
    <!--slider sec: end-->
    <!--magento sec: start-->
    <?php include('templates/magento__sec.php') ?>
    <!--magento sec: end-->
    <!--website accessibility sec:start-->
    <div class="container container--fluid  bg--white pad-tpbt--120 webmb-pad-tpbt">
        <div class="container--content container--fxdwdh">
        <div class="relictrio--row digital__mature">
                <div class="col--1">
                    <img class="maturity__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/maturity_img.png"
                        alt="card one icon" />
                </div>
                <div class="col--8">
                    <h3 class=" heading maturity__head">Website Accessibility Assessments</h3>
                </div>
                <div class="col--3">
                    <img class="triangle__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/triangle_icons.png"
                        alt="triangle icon" />
                </div>
        </div>           
            <div class="mar-top--50">
                    <div class="relictrio--row web__access--sec">
                    <div class="col--7">
                        <p class="para maturity__para">A web accessibility audit is the first step on the journey
                             to web accessibility compliance. A web accessibility audit involves a 
                             rigorous testing process of a website to evaluate its degree/ 
                            level of compliance with Web Content Accessibility Guidelines (WCAG)</p>
                            <div class="dis--flx">
                            <div>
                                <img class="access__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/access1.png"
                                alt="Platform icon" />
                            </div>
                            <div class="manual__text">
                                <h3 class="heading heading--variation3 txt__clr--black">Manual/Automated technical evaluation of the website</h3></div>
                            </div>
                            <div class="dis--flx">
                                <div>
                                    <img class="access__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/access2.png"
                                    alt="implement icon" />
                                </div>
                                <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">Recommendations on accessibilty
                                </h3></div>
                            </div>
                            <div class="dis--flx">
                                <div>
                                    <img class="access__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/access3.png"
                                    alt="digital maturity icon" />
                                </div>
                                <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">Accessibilty fixes</h3></div>
                            </div>
                            <div class="dis--flx mar-top--20">
                                <div>
                                    <img class="arrow__right--icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/arrow__right.png"
                                    alt="arrow__right" />
                                </div>
                                <div><p class="para maturity__sub--text">Take our free accessibilty assessment today.</p></div>
                            </div>
                    </div>
                    <div class="col--5">
                    <img class="back__slash--img" src="<?php echo get_template_directory_uri();?>../assets/resources/images/back_slash.png" alt="back slash image">
                    <picture>
                            <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/accessibilty.png">
                            <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/accessibilty.png">
                            <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/web__assess-3x.png">
                            <img class="digital__mature--img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/accessibilty.png"
                            alt="digital mature image" />
                    </picture>
                    </div>
                    </div>
            </div>
            
        </div>
    </div>
    <!--website accessibility sec:end-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script> 
    <!-- <script src="../assets/js/slider.js" defer></script> -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>../assets/js/slider.js?v=4.76" defer></script>
</body>

</html>