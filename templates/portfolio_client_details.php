<div class="container dis--flx align-items--center mar-top--80 rozgarkart__client">
    <div class="col--1"></div>
    <?php
        $client_logo_images = get_field('client_logo_images');
        if ( $client_logo_images ) {
          foreach($client_logo_images as $client_logo_image)
    ?>
    <div class="col--4">
    <picture>
        <source media="(max-width: 600px)" srcset="<?php echo $client_logo_image['mobile_image']; ?>">
        <source media="(max-width: 1024px)" srcset="<?php echo $client_logo_image['tab_image']; ?>">
        <img src="<?php echo $client_logo_image['desk_image']; ?>" alt="client logo image">
      </picture>  
    </div>
    <?php
        }
    ?>
    <div class="col--1"></div>
    <?php
        $client_info = get_field('client_info');  
        if($client_info){
            foreach($client_info as $client_info){ 
    ?>
    <div
      class="
        col--4
        txt-align--left
        dis--flx
        align-items--center
        heading--variation4
        txt--electric_blue txt--normal
        client_details
      "
    >
      Client: <?php echo $client_info['client_name']; ?><br />
      Domain: <?php echo $client_info['client_domain']; ?><br />
      Platform: <?php echo $client_info['client_platform']; ?><br />
      Service: <?php echo $client_info['client_service']; ?><br />
      Screens: <?php echo $client_info['screens']; ?><br />
      Timeline: <?php echo $client_info['timeline']; ?><br />
      Business Type: <?php echo $client_info['business_type']; ?>
    </div>
    <?php
            }
        }
    ?>
</div>