<?php
    $discover_section = get_field('discover_section');  
    if($discover_section){
        foreach($discover_section as $discover_section){ 
?>
<div class="container dis--flx">
    <div class="col--3 mar-top--120">
      <h1 class="heading sec--title txt-align--left txt-decoration--underline"><?php echo $discover_section['section_heading']; ?></h1>
    </div>
    <div
      class="
        col--8
        mar-top--210
        txt-align--left
        heading--variation4
        txt--electric_blue
      "
    >
      <?php echo $discover_section['section_description']; ?>
    </div>
</div>
<?php
        }
    }
?>
</div>