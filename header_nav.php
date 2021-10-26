

<?php
/**
 * Relictrio Digital Nav Bar
 *
 * @package Relictrio Digital
 */
?>
 <?php
        wp_head();
    ?>
<?php
  $logoimg = get_header_image();
?>



<div class="bac-nav">
<nav class="relictrio_header_nav">
	<input id="nav-toggle" type="checkbox">
	<div class="logo relictrio__logo">
  <a href="<php echo site_url() ?>">
        <img src="<?php echo get_template_directory_uri();?>../assets/images/relictrio_logo.png">
      </a>
  </div>
	<ul class="links">
    <div class="links_nav">
      <ul class="ul_res_link">
		<li><a href="#" class="active">Work</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Contact Us</a></li>
     </ul>
    <div class="res_links">
      <ul>
        <li><a href="#">Call to hear our soothing voice</a></li>
        <li> <img src="<?php echo get_template_directory_uri();?>../assets/images/shape.png" class="ul_img" style="font-size:30px"> <a href="#" class="a_img">+91-6363049704</a></li>
     </ul>
     <ul>
        <li><a href="#">We quickly reply to mails</a></li>
        <li><img src="<?php echo get_template_directory_uri();?>../assets/images/vector.png" class="ul_img"><a href="#" class="a_img">contact@relictrio.com</a></li>
     </ul>
     <ul>
        <li><a href="#">Contact</a></li>
        <li><img src="<?php echo get_template_directory_uri();?>../assets/images/location.png" class="ul_img"><a href="#" class="a_img">Horamavu Main Road, Bengaluru, Karnataka, India - 560043</a></li>
     </ul>
   </div>
   <img src="<?php echo get_template_directory_uri();?>../assets/images/SocialGroup.png" class="social_group">

</div>
	</ul>
  <!-- Mobile Responsive Menu -->
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>
</div>


















<!-- 
<div id="bac-nav" class="res-nav" style="
    
">
<div class="relictrio_header_nav_container">
 <div class="relictrio_header_nav">
  <div class="relictrio__logo">
      <a href="<php echo site_url() ?>">
        <img src="<?php echo get_template_directory_uri();?>../assets/images/relictrio_logo.png"">
      </a>
  </div>
  <a href="#" onclick="openNav()"">
  <lable for="relictrio__nav_trigger" class="relictrio__nav_icon">
    <span></span>
    <span></span>
    <span></span>
   </lable>
   </a> -->

   <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> -->

<!-- 
 </div >
 
 
 <div id="mySidenav" class="sidenav">
 <a href="#" class="closebtn" onclick="closeNav()">
  <lable for="relictrio__nav_trigger" class="relictrio__nav_icon_menu">
    <span></span>
    <span></span>
    <span></span>
   </lable>
   </a>
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>
  <div class="nav_list">
  <a href="#" class="nav_link">Work</a>
  <a href="#" class="nav_link">Services</a>
  <a href="#" class="nav_link">About</a>
  <a href="#" class="nav_link">Blog</a>
  <a href="#" class="nav_link">Contact Us</a>
</div>
</div>
</div>

</div> -->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "548px";
  document.getElementById("bac-nav").style.width = "100%";
   document.getElementById("bac-nav").style.height = "100vh";
   document.getElementById("bac-nav").style.position = "fixed";
   document.getElementById("bac-nav").style.background = "rgba(0, 0, 0, 0.8)";
   document.getElementById("bac-nav").style.left = "0";
   document.getElementById("bac-nav").style.top = "0";
    document.getElementById("bac-nav").style.zIndex ="9999";
    // document.getElementById("bac-nav").style.marginTop ="100px";

 



  // position: fixed;
  //   width: 100%;
  //   height: 100%;  
  //   background: rgba(0, 0, 0, 0.8);
  //   left: 0;
  //   top: 0;
  // document.body.style.backgroundColor = "rgba(0, 0, 0, 0.9)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("bac-nav").style.width = "0%";
  document.getElementById("bac-nav").style.height = "0%";
  document.getElementById("bac-nav").style.position = "";
  document.getElementById("bac-nav").style.background = "";
  document.getElementById("bac-nav").style.left = "0";
  document.getElementById("bac-nav").style.top = "0";
   document.getElementById("bac-nav").style.zIndex ="9999";
   document.getElementById("bac-nav").style.marginTop ="0px";
  // document.body.style.backgroundColor = "white";
}
</script>



