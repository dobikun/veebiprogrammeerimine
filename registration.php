<?php
   define('myeshop', true);	
   include("include/db_connect.php"); 
   include("functions/functions.php");
   session_start();
   include("include/auth_cookie.php");   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="trackbar/trackbar.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script> 
    <script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script> 
    <script type="text/javascript" src="/js/shop-script.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="/trackbar/jquery.trackbar.js"></script>
    
    <script type="text/javascript" src="/js/jquery.form.js"></script>
    <script type="text/javascript" src="/js/jquery.validate.js"></script>  
    <script type="text/javascript" src="/js/TextChange.js"></script>  
	
    <script type="text/javascript">
$(document).ready(function() {	
      $('#form_reg').validate(
				{	
					// правила для проверки
					rules:{
						"reg_login":{
							required:true,
							minlength:5,
                            maxlength:15,
                            remote: {
                            type: "post",    
		                    url: "/reg/check_login.php"
		                            }
						},
						"reg_pass":{
							required:true,
							minlength:7,
                            maxlength:15
						},
						"reg_surname":{
							required:true,
                            minlength:3,
                            maxlength:15
						},
						"reg_name":{
							required:true,
                            minlength:3,
                            maxlength:15
						},
						"reg_patronymic":{
							required:true,
                            minlength:3,
                            maxlength:25
						},
						"reg_email":{
						    required:true,
							email:true
						},
						"reg_phone":{
							required:true
						},
						"reg_address":{
							required:true
						},
						"reg_captcha":{
							required:true,
                            remote: {
                            type: "post",    
		                    url: "/reg/check_captcha.php"
		                    
		                            }
                            
						}
					},

					// выводимые сообщения при нарушении соответствующих правил
					messages:{
						"reg_login":{
							required:"Enter your login!",
                            minlength:"5 to 15 characters!",
                            maxlength:"5 to 15 characters!",
                            remote: "Username busy!"
						},
						"reg_pass":{
							required:"Enter your password!",
                            minlength:"7 to 15 characters!",
                            maxlength:"7 to 15 characters!"
						},
						"reg_surname":{
							required:"Enter your surname!",
                            minlength:"3 to 20 characters!",
                            maxlength:"3 to 20 characters!"                            
						},
						"reg_name":{
							required:"Enter your name!",
                            minlength:"3 to 15 characters!",
                            maxlength:"3 to 15 characters!"                               
						},
						"reg_patronymic":{
							required:"Enter your patronymic!",
                            minlength:"3 to 25 characters!",
                            maxlength:"3 to 25 characters!"  
						},
						"reg_email":{
						    required:"Enter your E-mail",
							email:"Not valid E-mail"
						},
						"reg_phone":{
							required:"Enter your name!"
						},
						"reg_address":{
							required:"You must specify a delivery address!"
						},
						"reg_captcha":{
							required:"Enter the code from the image!",
                            remote: "Not true verification code!"
						}
					},
					
	submitHandler: function(form){
	$(form).ajaxSubmit({
	success: function(data) { 
								 
        if (data == 'true')
    {
       $("#block-form-registration").fadeOut(300,function() {
        
        $("#reg_message").addClass("reg_message_good").fadeIn(400).html("You have successfully registered!");
        $("#form_submit").hide();
        
       });
         
    }
    else
    {
       $("#reg_message").addClass("reg_message_error").fadeIn(400).html(data); 
    }
		} 
			}); 
			}
			});
    	});
     
</script>
    <title>Registration</title>
</head>
<body>

<div id="block-body">
<?php	
    include("include/block-header.php");    
?>
<div id="block-right">
<?php	
    include("include/block-category.php");  
    include("include/block-parameter.php");  
    include("include/block-news.php"); 
?>
</div>
<div id="block-content">

<h2 class="h2-title">Registration</h2>
<form method="post" id="form_reg" action="/reg/handler_reg.php">
<p id="reg_message"></p>
<div id="block-form-registration">
<ul id="form-registration">

<li>
<label>Login</label>
<span class="star" >*</span>
<input type="text" name="reg_login" id="reg_login" />
</li>

<li>
<label>Password</label>
<span class="star" >*</span>
<input type="text" name="reg_pass" id="reg_pass" />
<span id="genpass">Generate</span>
</li>

<li>
<label>Surname</label>
<span class="star" >*</span>
<input type="text" name="reg_surname" id="reg_surname" />
</li>

<li>
<label>Name</label>
<span class="star" >*</span>
<input type="text" name="reg_name" id="reg_name" />
</li>

<li>
<label>Patronymic</label>
<span class="star" >*</span>
<input type="text" name="reg_patronymic" id="reg_patronymic" />
</li>

<li>
<label>E-mail</label>
<span class="star" >*</span>
<input type="text" name="reg_email" id="reg_email" />
</li>

<li>
<label>Cellphone</label>
<span class="star" >*</span>
<input type="text" name="reg_phone" id="reg_phone" />
</li>

<li>
<label>Delivery Address</label>
<span class="star" >*</span> 
<input type="text" name="reg_address" id="reg_address" />
</li>

<li>
<div id="block-captcha">

<img src="/reg/reg_captcha.php" />
<input type="text" name="reg_captcha" id="reg_captcha" />

<p id="reloadcaptcha">Refresh</p>
</div>
</li>

</ul>
</div>

<p align="right"><input type="submit" name="reg_submit" id="form_submit" value="Registration" /></p>
<?php echo $_SESSION['img_captcha']; ?>
</form>
</div>

<?php	
    include("include/block-footer.php");    
?>
</div>

</body>
</html>