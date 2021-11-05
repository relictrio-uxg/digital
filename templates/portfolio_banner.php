<?php
    $portfolio_banner = get_field('portfolio_banner');  
    if($portfolio_banner){
        foreach($portfolio_banner as $portfolio_banner){ 
?>
<div class="container--fluid dis--flx">
    <div class="col--11 pad--0 mar-top--100 pos--rel dis--flx justify-content--center rozgarkart__banner">
      <picture>
        <source media="(max-width: 600px)" srcset="<?php echo $portfolio_banner['background_mobile']; ?>"/>
        <source media="(max-width: 1024px)" srcset="<?php echo $portfolio_banner['background_tab']; ?>"/>
        <img src="<?php echo $portfolio_banner['background']; ?>" alt="linear grad" />
      </picture>  
      <picture>
        <source media="(max-width: 600px)" srcset="<?php echo $portfolio_banner['banner_image_mobile']; ?>"/>
        <source media="(max-width: 1024px)" srcset="<?php echo $portfolio_banner['banner_image_tab']; ?>"/>
        <img class="pos--abs welcome--img" src="<?php echo $portfolio_banner['banner_image']; ?>" alt="welcome" />
      </picture>  
      <div class="pos--abs linear-grad--desc dis--flx">
        <div class="col--1"></div>
        <div
          class="
            banner__text
            col--8
            heading--variation1
            txt--white
            txt-align--cent
            txt-spacing--7per
            txt--semi_bold
          "
        >
          <?php echo $portfolio_banner['banner_text']; ?>
        </div>
      </div>
    </div>
</div>
<?php
        }
    }
?>