<div>
        <?php 
            $portfolio_detail_heading = get_field('portfolio_detail_heading');
            if ( $portfolio_detail_heading ) {
        ?>
  <div class="container">
    <h1 class="heading txt-align--cent">
      <?php echo $portfolio_detail_heading; ?>
    </h1>
  </div>
  <?php
    }
  ?>