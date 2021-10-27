<?php
    $portfolio_banner = get_field('portfolio_banner');  
    if($portfolio_banner){
        foreach($portfolio_banner as $portfolio_banner){ 
?>
<div class="container--fluid dis--flx">
    <div class="col--11 pad--0 mar-top--100 pos--rel">
      <img
        class="res-img"
        src="<?php echo $portfolio_banner['background']; ?>"
        alt="linear grad"
      />/
      <img
        class="pos--abs welcome--img"
        src="<?php echo $portfolio_banner['banner_image']; ?>"
        alt="welcome"
      />
      <div class="pos--abs linear-grad--desc dis--flx">
        <div class="col--1"></div>
        <div
          class="
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