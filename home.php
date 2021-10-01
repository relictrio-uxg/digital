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
    <div class="container container--fluid  help__brand hide__help--mb">
        <div class="container--content container--fxdwdh">
            <div class="relictrio--row ">
            <div class="col--5 help__brand--sec">
                <h2 class="heading heading--variation1 text--center help__brand--head">
                    Helping brands to evolve in every phase of their digital commerce journey</h2>
                <p class="para text--center ">We transform businesses <br>successfully through our services</p>
            </div>
            <div class="col--4">
            <div class="help__brand--card card__one">
                <div class="card__head">
                <img class="card__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/card_icon1.png"
                        alt="card one icon" />
                </div>
                <div>
                <h4 class=" heading heading--variation4 text--center card__txt">Inception</h4>
                <p class="para para--variation2 text--center card__para">Every stage in an e-commerce implementation journey comes with unique challenges and risks. 
                    Our “Digital Consulting & Transformation” outlook is a 360 degree digital advisory service which ranges from initial planning stage all the way 
                    to the final roll-out of the e-commerce store and the ongoing business enablement.</p>
                </div>
            </div>
            <div class="help__brand--card card__two">
                    <div class="card__head">
                    <img class="card__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/card__icon3.png"
                            alt="An iconic devlopment by the Singapore River" />
                    </div>
                    <div>
                    <h4 class=" heading heading--variation4 text--center card__txt">Pre Live</h4>
                    <p class="para para--variation2 text--center card__para">You might be undergoing 
                        a new Ecommerce site implementation and you might be approaching launch date…and 
                        you need to ensure your team is technically and functionally equipped to manage the site
                         on a day-to-day basis after going live...</p>
                    </div> 
            </div>
            </div>
            <div class="col--3 mar-top--50">
                <div class="help__brand--card">
                    <div class="card__head">
                        <img class="card__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/card_icon2.png"
                                alt="An iconic devlopment by the Singapore River" />
                        </div>
                        <div>
                        <h4 class=" heading heading--variation4 text--center card__txt">Design & Development</h4>
                        <p class="para para--variation2 text--center card__para">Technology sits at the core of your business, especially when it comes to Ecommerce. You know how important it is, but you still have a love-hate relationship with technology. Sometimes, you just wish someone would 
                            step in and help you not just shoulder the burden, but actually leverage technology to...</p>
                        </div> 
                </div>
                <div class="help__brand--card">
                    <div class="card__head">
                        <img class="card__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/card__icon4.png"
                                alt="An iconic devlopment by the Singapore River" />
                    </div>
                    <div>
                        <h4 class=" heading heading--variation4 text--center card__txt">Post Live</h4>
                        <p class="para para--variation2 text--center card__para">Creating an Ecommerce site is not a 
                            “set it and forget it” effort. Today you have a brand new site… but what happens tomorrow? 
                            You’ll need to constantly assess, enhance, optimize, and maintain to keep-up with changing 
                            customer shopping trends and provide best in class user experience...</p>
                    </div> 
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--helping brand mobile sec: start-->
    <div class="container container--fluid pad-t--30 hide__help--desktop">
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
    </div>
    <!--helping brand mobile sec: end-->
    <!--helping brands: end-->
    <!--digital maturity sec:start-->
    <div class="container container--fluid  bg--white pad-tpbt--120 digitalmb-pad-tpbt">
        <div class="container--content container--fxdwdh">
            <div class="relictrio--row digital__mature">               
                <div class="col--1">
                    <img class="maturity__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/maturity_img.png"
                        alt="card one icon" />
                </div>
                <div class="col--6">
                    <h3 class=" heading maturity__head">Digital Maturity Assessments</h3>
                </div>
                <div class="col--2"></div>
                <div class="col--3">
                    <img class="triangle__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/triangle_icons.png"
                        alt="triangle icon" />
                </div>
            </div>
            
            <div class="mar-top--50">
                    <div class="relictrio--row digital__mature--sec">
                    <div class="col--7">
                        <p class="para maturity__para">A web accessibility audit is the first step on the journey
                             to web accessibility compliance. A web accessibility audit involves a 
                             rigorous testing process of a website to evaluate its degree/ 
                            level of compliance with Web Content Accessibility Guidelines (WCAG)</p>
                            <div class="dis--flx">
                            <div>
                                <img class="maturity__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/platform__icon.png"
                                alt="Platform icon" />
                            </div>
                            <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">Platform Procurement Support</h3></div>
                            </div>
                            <div class="dis--flx">
                                <div>
                                    <img class="maturity__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/implement__icon.png"
                                    alt="implement icon" />
                                </div>
                                <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">Implementation Management</h3></div>
                            </div>
                            <div class="dis--flx">
                                <div>
                                    <img class="maturity__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/maturity_img.png"
                                    alt="digital maturity icon" />
                                </div>
                                <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">Digital Maturity Assessments</h3></div>
                            </div>
                            <div class="dis--flx">
                                <div>
                                    <img class="maturity__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/business__icon.png"
                                    alt="business icon" />
                                </div>
                                <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">Business Analysis</h3></div>
                            </div>
                            <div class="dis--flx mar-top--20">
                                <div>
                                    <img class="arrow__right--icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/arrow__right.png"
                                    alt="arrow__right" />
                                </div>
                                <div><p class="para maturity__sub--text">Learn more on Digital Maturity...</p></div>
                            </div>
                            <div class="dis--flx arrow__text ">
                                <div>
                                    <img class="arrow__right--icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/arrow__right.png"
                                    alt="arrow__right" />
                                </div>
                                <div><p class="para maturity__sub--text">Assess Your Digital maturity Now</p></div>
                            </div>
                    </div>
                    <div class="col--5">
                    <picture>
                            <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/digital_mature-img.png">
                            <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/digital_mature-img.png">
                            <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/maturity__asses-3x.png">
                            <img class="digital__mature--img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/digital_mature-img.png"
                            alt="digital mature image" />
                    </picture>
                    <img class="back__slash--img" src="<?php echo get_template_directory_uri();?>../assets/resources/images/back_slash.png" alt="back slash image">
                    </div>
                    </div>
            </div>
            
        </div>
    </div>
    <!--digital maturity sec:end-->
    <!--technology evaluation sec: start-->
    <div class="container container--fluid  bg--white ">
        <div class="container--content container--fxdwdh">
            <div class="relictrio--row ">               
                <div class="col--1">
                    <img class="maturity__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/maturity_img.png"
                        alt="card one icon" />
                </div>
                <div class="col--6">
                    <h3 class=" heading techevalue__head">Technology Evaluations & Procurement Support</h3>
                </div>
               <div class="col--2"></div>
                <div class="col--3">
                    <img class="triangle__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/triangle_icons.png"
                        alt="triangle icon" />
                </div>
            </div>
            <div class="mar-top--50">
                <div class="relictrio--row tech__evaluate--sec">
                    <div class="col--5">
                    <img class="front__slash--img" src="<?php echo get_template_directory_uri();?>../assets/resources/images/front_slash.png" alt="front slash image">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/techevaluate__img.png">
                        <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/techevaluate__img.png">
                        <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/tech__evaluate-3x.png">
                        <img class="digital__mature--img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/techevaluate__img.png"
                            alt="digital mature image" />
                    </picture>
                    </div>
                <div class="col--7">
                    <p class="para maturity__para">Taking your business to the next level requires assessing your current state and determining the way forward. With our Digital Maturity Assessments, we help
                        businesses to identify and capitalize on the digital transformations.</p>
                        <div class="dis--flx">
                        <div>
                            <img class="tech__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/b2c__icon.png"
                            alt="Platform icon" />
                        </div>
                        <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">B2C ECommerce Implementation
                        </h3></div>
                        </div>
                        <div class="dis--flx">
                            <div>
                                <img class="tech__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/b2b__icon.png"
                                alt="implement icon" />
                            </div>
                            <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">B2B Ecommerce Implementation
                            </h3></div>
                        </div>
                        <div class="dis--flx">
                            <div>
                                <img class="tech__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/enterprise__icon.png"
                                alt="digital maturity icon" />
                            </div>
                            <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">Enterprise Integrations</h3></div>
                        </div>
                        <div class="dis--flx">
                            <div>
                                <img class="tech__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/accelet__icon.png"
                                alt="digital maturity icon" />
                            </div>
                            <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">B2C & B2B Accelerator Frameworks</h3></div>
                        </div>
                        <div class="dis--flx">
                            <div>
                                <img class="tech__icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/data__icon.png"
                                alt="digital maturity icon" />
                            </div>
                            <div class="maturity__text"><h3 class="heading heading--variation3 txt__clr--black">Data Driven User Experience</h3></div>
                        </div>
                        <div class="dis--flx mar-top--20">
                            <div>
                                <img class="arrow__right--icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/arrow__right.png"
                                alt="arrow__right" />
                            </div>
                            <div><p class="para maturity__sub--text">Assess Your Digital maturity Now</p></div>
                        </div>
                </div>
                
                </div>
        </div>
        </div>
    </div>
    <!--technology evaluation sec: end-->
      <!--slider sec: start-->
      <div class="container container--fluid  bg--white pad-tpbt--120 slider__pad-tpbt">
        <div class="container--content container--fxdwdh">
            <div class="relictrio--row ">
                <div class="col--12">
                    <h2 class="heading heading--variation1 text--center slider__head">
                        Delivering right solution using latest platform</h2> 
                </div>
            </div>
            <section class="customer-logos slider mar-top--50">
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/magento.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/woocommerce.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/oracle.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/kibo.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/sap-hybris.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/sales-force.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/aptos.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/angular.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/alfresco.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/drupal.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/ember.png" alt=""></div>       
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/node.png" alt=""></div>              
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/oro.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/react.png" alt=""></div>                
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/shopify.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/vuejs.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/pentaho.png" alt=""></div>
                <div class="slide"><img src="<?php echo get_template_directory_uri();?>../assets/resources/images/wordpress.png" alt=""></div>                
            </section>
        </div>
    </div>
    <!--slider sec: end-->
    <!--magento sec: start-->
    <div class="container container--fluid magento__sec">
        <div class="container--content container--fxdwdh">
        <!-- <img class="magento__arc--left" src="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__left.png" alt=""> -->
        <picture>
            <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__left.png">
            <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__left.png">
            <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__left-mb.png">
            <img class="magento__arc--left " src="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__left.png"
             alt="digital mature image" />
        </picture>
        <!-- <div class="left__box">
        <img  src="<?php echo get_template_directory_uri();?>../assets/resources/images/left__box--icon.png" alt="">
        </div> -->
       
            <div class="relictrio--row pad-bt--40 "> 
                <img class="magento__img " src="<?php echo get_template_directory_uri();?>../assets/resources/images/magento1.png"
                alt="magento image" /> 
            <div class="col--12 text--center">
                <h3 class="heading heading--variation2 magento__head">Give your eCommerce the next-generation upgrade with Magento 2.0</h3>
                <p class="para magento__para"> M2 – RUP Approach. </p>
                <p class="para magento__para"> M1 to M2 migration made easy for SMBs.</p>
                <p class="para magento__para">Zero downtime during the upgrade.</p>  
                <div class="dis--flx magento__subtext">
                    <div>
                        <img class="arrow__right--icon" src="<?php echo get_template_directory_uri();?>../assets/resources/images/arrow__right.png"
                        alt="arrow__right" />
                    </div>
                    <div><p class="para maturity__sub--text">know more about Magento 2 migration.</p></div>
                </div>  
            </div>
            <!-- <img class="" src="<?php echo get_template_directory_uri();?>../assets/resources/images/right__box--icon.png" alt=""> -->
            <!-- <img class="magento__arc--right" src="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__right.png" alt=""> -->
            <picture>
            <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__right.png">
            <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__right.png">
            <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__right-mb.png">
            <img class="magento__arc--right" src="<?php echo get_template_directory_uri();?>../assets/resources/images/magento__right.png"
             alt="digital mature image" />
        </picture>
            </div>  
        </div>
    </div>
    <!--magento sec: end-->
    <!--website accessibility sec:start-->
    <div class="container container--fluid  bg--white pad-tpbt--120 webmb-pad-tpbt">
        <div class="container--content container--fxdwdh">
        <div class="relictrio--row">
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