<?php
    $discover_section = get_field('discover_section');  
    if($discover_section){
        foreach($discover_section as $discover_section){ 
?>
  <div id="<?php echo $discover_section['section_id']; ?>" class="container dis--flx">
    <div class="mar-top--120">
      <h1 class="heading sec--title txt-align--left txt-decoration--underline"><?php echo $discover_section['section_heading']; ?></h1>
    </div>
  </div>
  <div class="container dis--flx mar-top--30">
        <div class="col--3 spaceHolder"></div>
        <div
          class="
            col--8
            txt-align--left
            heading--variation4
            txt--electric_blue
            sec__desc
          "
        >
          <?php echo $discover_section['section_description']; ?>
        </div>
  </div>
<?php
        }
    }
?>
