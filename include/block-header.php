<?php
	defined('myeshop') or die('Access denied!');
?>

<div id="block-header">

<div id="header-top-block">

<ul id="header-top-menu">
<li>Your city - <span>Tallinn</span></li>
<li><a href="">About us</a></li>
<li><a href="">Stores</a></li>
<li><a href="feedback.php">Contacts</a></li>
</ul>

<?php

if ($_SESSION['auth'] == 'yes_auth')
{
 
 echo '<p id="auth-user-info" align="right"><img src="/images/user.png" />Hello, '.$_SESSION['auth_name'].'!</p>';   
    
}else{
 
  echo '<p id="reg-auth-title" align="right"><a class="top-auth">Enter</a><a href="registration.php">Registration</a></p>';   
    
}
	
?>


<div id="block-top-auth">

<div class="corner"></div>

<form method="post">


<ul id="input-email-pass">

<h3>Enter</h3>

<p id="message-auth">Invalid Username and (or) Password</p>

<li><center><input type="text" id="auth_login" placeholder="Login or E-mail" /></center></li>
<li><center><input type="password" id="auth_pass" placeholder="Password" /><span id="button-pass-show-hide" class="pass-show"></span></center></li>

<ul id="list-auth">
<li><input type="checkbox" name="rememberme" id="rememberme" /><label for="rememberme">Remember me</label></li>
<li><a id="remindpass" href="#">Forgot your password?</a></li>
</ul>


<p align="right" id="button-auth" ><a>Enter</a></p>

<p align="right" class="auth-loading"><img src="/images/loading.gif" /></p>

</ul>
</form>


<div id="block-remind">
<h3>Recover password</h3>
<p id="message-remind" class="message-remind-success" ></p>
<center><input type="text" id="remind-email" placeholder="Your E-mail" /></center>
<p align="right" id="button-remind" ><a>Done</a></p>
<p align="right" class="auth-loading" ><img src="/images/loading.gif" /></p>
<p id="prev-auth">Back</p>
</div>



</div>

</div>
<!-- Линия -->
<div id="top-line"></div>

<div id="block-user" >
<div class="corner2"></div>
<ul>
<li><img src="/images/user_info.png" /><a href="profile.php">Profile</a></li>
<li><img src="/images/logout.png" /><a id="logout" >Log out</a></li>
</ul>
</div>



<img id="img-logo" src="/images/logo.png" />

<div id="personal-info">
<p align="right">Free call</p>
<h3 align="right">8 (800) 100-12-34</h3>
 <img src="/images/phone-icon.png" />
<p align="right">Mode of operation:</p>
<p align="right">Weekdays: 9:00 - 18:00</p>
<p align="right">Saturday, Sunday - closed</p>
 <img src="/images/time-icon.png" />
</div>

<div id="block-search">
<form method="GET" action="search.php?q=" >
<span></span>
<input type="text" id="input-search" name="q" placeholder="Search over 100,000 items" value="<?php echo $search; ?>" />
<input type="submit" id="button-search" value="Search" />
</form>

<ul id="result-search">


</ul>

</div>
</div>

<div id="top-menu">
<ul>
<li><img src="/images/shop.png" /><a href="index.php">Home</a></li>
<li><img src="/images/new-32.png" /><a href="view_aystopper.php?go=news">New</a></li>
<li><img src="/images/bestprice-32.png" /><a href="view_aystopper.php?go=leaders">Best prices</a></li>
<li><img src="/images/sale-32.png" /><a href="view_aystopper.php?go=sale">Sales</a></li>
</ul>
<p align="right" id="block-basket"><img src="/images/cart-icon.png" /><a href="cart.php?action=oneclick" >Cart is empty</a></p>
<div id="nav-line"></div>
</div>