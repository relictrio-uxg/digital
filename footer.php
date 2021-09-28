<footer class="uxgfooter">
		<div class="uxgfooter__inner">
			<div class="uxgfooter__blocks">
				<?php 
					$footer_logo_link_path = get_field('footer_logo_link_path');
					$footer_logo_3x_path = get_field('footer_logo_3x_path');
					$footer_logo_2x_path = get_field('footer_logo_2x_path');
					$footer_logo_1x_path = get_field('footer_logo_1x_path');
					$footer_logo_label = get_field('footer_logo_label');
					if( $footer_logo_link_path ) {
				?>
				<h6 class="uxgfooter__logo">
					<a class="uxgfooter__logolink" href="<?php echo $footer_logo_link_path ; ?>" title="<?php echo $footer_logo_label ; ?>">
						<picture>
							<source media="(min-width: 1200px)" srcset="<?php echo $footer_logo_3x_path ; ?>">
							<source media="(min-width: 960px)" srcset="<?php echo $footer_logo_2x_path ; ?>">
							<source media="(min-width: 560px)" srcset="<?php echo $footer_logo_1x_path ; ?>">
							<img class="uxgfooter__logoimg" src="<?php echo $footer_logo_1x_path ; ?>" alt="<?php echo $footer_logo_label ; ?>" />
						</picture>
					</a>
				</h6>
				<?php
					}
				?>
				<?php 
					$footer_address = get_field('footer_address');
					if( $footer_address ) {
				?>
				<p class="uxgfooter__address">
				<?php echo $footer_address ; ?>
				</p>
				<?php
					}
				?>
			</div>
			<div class="uxgfooter__blocks">
				<?php 
					$footer_address = get_field('footer_address');
					if( $footer_address ) {
				?>
				<h6 class="uxgfooter__heading">
					Contact us
				</h6>
				<?php
					}
				?>
				<ul class="uxgfooter__linklistcont">
					<?php 
						$footer_mobile_number = get_field('footer_mobile_number');
						if( $footer_mobile_number ) {
					?>
					<li class="uxgfooter__linklist">
						<a class="uxgfooter__link" href="tel:<?php echo $footer_mobile_number ; ?>" title="<?php echo $footer_mobile_number ; ?>">
							<span class="uxgfooter__icon uxgfooter--callicon"></span>
							<?php echo $footer_mobile_number ; ?>
						</a>
					</li>
					<?php
						}
					?>
					<?php 
						$footer_email_address = get_field('footer_email_address');
						if( $footer_email_address ) {
					?>
					<li class="uxgfooter__linklist">
						<a class="uxgfooter__link" href="mailto:<?php echo $footer_email_address ; ?>" title="<?php echo $footer_email_address ; ?>">
							<span class="uxgfooter__icon uxgfooter--mailicon"></span>
							<?php echo $footer_email_address ; ?>
						</a>
					</li>
					<?php
						}
					?>
				</ul>
			</div>
			<div class="uxgfooter__blocks">
				<h6 class="uxgfooter__heading">
					Follow us
				</h6>
				<ul class="uxgfooter__linklistcont">
					<?php 
						$rows = get_field('footer_social_follow_us');
						if( $rows ) {
							foreach( $rows as $row ) {
					?>
					<li class="uxgfooter__linklist">
						<a class="uxgfooter__link" href="<?php echo $row['link_path'] ; ?>" title="<?php echo $row['social_label'] ; ?>">
							<span class="uxgfooter__icon <?php echo $row['icon_class_name'] ; ?>"></span>
							<?php echo $row['social_label'] ; ?>
						</a>
					</li>
					<?php
							}
						}
					?>
				</ul>
			</div>
			<div class="uxgfooter__blocks">
				<h6 class="uxgfooter__heading">
					Quick Links
				</h6>
				<ul class="uxgfooter__linklistcont uxgfooter--linklistcont">
					<?php 
						$rows = get_field('footer_quick_links');
						$index = 0;
						if( $rows ) {
							foreach( $rows as $row ) {
								if ($index <= 3) {
					?>
					<li class="uxgfooter__linklist">
						<a class="uxgfooter__link" href="<?php echo $row['link_path'] ; ?>" title="<?php echo $row['label'] ; ?>">
							<?php echo $row['label'] ; ?>
						</a>
					</li>
					<?php
								}
								$index++;
							}
						}
					?>
				</ul>
				<ul class="uxgfooter__linklistcont uxgfooter--linklistcont">
					<?php 
						$rows = get_field('footer_quick_links');
						$index = 0;
						if( $rows ) {
							foreach( $rows as $row ) {
								if ($index > 3) {
					?>
					<li class="uxgfooter__linklist">
						<a class="uxgfooter__link" href="<?php echo $row['link_path'] ; ?>" title="<?php echo $row['label'] ; ?>">
							<?php echo $row['label'] ; ?>
						</a>
					</li>
					<?php
								}
								$index++;
							}
						}
					?>
				</ul>
			</div>
		</div>
		<div class="uxgfooter__inner uxgfooter--secondfooter">
			<?php 
				$footer_copyrights_label = get_field('footer_copyrights_label');
				if( $footer_copyrights_label ) {
			?>
			<p class="uxgfooter__secondlink"><?php echo $footer_copyrights_label ; ?></p>
			<?php
				}
			?>
			<?php 
				$rows = get_field('footer_second_list');
				if( $rows ) {
					foreach( $rows as $row ) {
			?>
			<p class="uxgfooter__secondlink mar-lt-25">
				<a class="uxgfooter__link" href="<?php echo $row['link_path'] ; ?>" title="<?php echo $row['label'] ; ?>">
				<?php echo $row['label'] ; ?>
				</a>
			</p>
			<?php
					}
				}
			?>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" defer></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js" defer></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/index.js?v=4.76" defer></script>
	<!-- Google Tag Manager -->
	<script defer>
		(
			function(w,d,s,l,i){
				w[l] = w[l]||[];w[l].push({
					'gtm.start': new Date().getTime(),event:'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;
					j.src = 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			}
		)
		(window,document,'script','dataLayer','GTM-N4C5FH8');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4C5FH8" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php wp_footer(); ?>
</body>
</html>