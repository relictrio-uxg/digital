<div class="container dis--flx mar-top--80">
    <div class="col--1"></div>
    <?php
        $client_logo_image = get_field('client_logo_image');
        if ( $client_logo_image ) {
    ?>
    <div class="col--4">
      <img
        class="res-img"
        src="<?php echo $client_logo_image; ?>"
        alt="rozgarkart details desk"
      />
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