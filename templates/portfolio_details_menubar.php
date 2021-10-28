<div class="container--fluid property__menutabsticky mar-top--80">
    <div class="container">
      <ul class="property__menutab dis--flx gap--60">
          <?php
            $menubar = get_field('menubar');
            if($menubar){
                foreach($menubar as $menu){
          ?>
        <li class="heading heading--variation3 property__menutab--list">
          <a class="<?php echo $menu['link_class']; ?>" href="<?php echo $menu['link_address']; ?>"><?php echo $menu['link_name']; ?></a>
        </li>
        <?php
                }
            }
        ?>
      </ul>
    </div>
</div>