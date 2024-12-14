<?php session_start(); ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	
	<style type="text/css">
	 * {
		 margin:0;
	 }
	 body {
		min-height:100vh;
	}
	 .loginform form {
		 width:30%;
		 margin:20px auto;
		 box-shadow:0px 0px 15px lightgrey;
		 border-radius:10px;
		 padding:40px 20px;
		 background:white;
		 
	 }
	 .loginform input[type="text"],[type="password"] {
		 width:90%;
		 padding:10px;
		 font-size:18px;
		 border-radius:5px;
		 border:none;
		 border-bottom:1px solid black;
		 transition:linear 0.3s;
		 outline:none;
	 }
	 .loginform input[type="text"]:hover {
		 
		 font-size:20px;
		 border-bottom:1px solid blue;
		 
	 }
	 .loginform [type="password"]:hover {
		  font-size:20px;
		  border-bottom:1px solid blue;
	 }
	 .loginform input[type="submit"] {
		 
		 padding:10px 20px;
		 font-size:18px;
		 background:blue;
		 color:white;
		 border-radius:10px;
		 border:none;
		 cursor:pointer;
	 }
	 .loginform input[type="submit"]:hover {
		 background:rgb(0,50,200)
	 }
	 #register_txt {
		 font-size:18px;
		 font-family:arial;
		 margin-left:20px;
	 }
	 #register_txt a {
		 font-size:22px;
		 font-family:arial;
		 text-decoration:none;
		 color:blue;
		 font-weight:bold;
	 }
	 .forget_password {
		 text-align:right;
		 margin-top:20px;
	 }
	 .forget_password a {
		 color:red;
		 font-family:arial;
		 text-decoration:none;
	 }
	 .alert_msg {
		 width:30%;
		 margin:10px auto;
		 padding:20px;
		 background:pink;
		 color:white;
	 }
	 
	 
	 
	 
	 @media (max-width:768px) {
		 
		 .loginform form {
		      width:80%;
			  
		 }
		 .loginform input[type="submit"] {
		 
		    padding:5px 10px;
			font-size:17px;
		 }
		 #register_txt {
		 font-size:12px;
		 font-family:arial;
		 margin-left:5px;
	 }
	 #register_txt a {
		 font-size:14px;
		 font-family:arial;
		 text-decoration:none;
	 }
	 .alert_msg {
		 width:80%;
		 
	 }
	
	
	</style>
	
	
</head>


<body>

<div class="container">


  <div class="loginform">
  
  <center style="font-family:arial;margin-top:80px;"><h2>Login</h2></center>
  
  <form method="POST">
  
  <input type="text" placeholder="Email or phone number" name="user_email" /><br><br>
  <input type="password" placeholder="Password" name="user_password" /><br/><br/>
  <input type="submit" value="login" name="submit"/>
 
  </form>
  
  
  </div>


   <?php

   require 'connect.php';
   
   
    if(isset($_POST['submit'])) {
	   
	   $user_email = mysqli_real_escape_string($mycon,$_POST['user_email']);
	   $user_password = mysqli_real_escape_string($mycon,$_POST['user_password']);
	   
	   $query = "SELECT * FROM `admin` WHERE `email`='$user_email' and `password`='$user_password'";
	  
	   
	   
	   if($run = mysqli_query($mycon,$query)) {
		   $row = mysqli_fetch_array($run);
		   
		   @$admin_id = $row['id'];
		   @$email = $row['email'];
		   
		   
		   
		   if(!empty($user_email) && !empty($user_password)) {
			   
			 			   

               echo '<script type="text/javascript">window.location.href="main.php";</script>';
			  
			   $_SESSION['admin_id'] = $admin_id; // setting session as user identity in login status use id
			  
			    mysqli_query($mycon,$insert_login_activity);

			   }			  
			   
		   }
			   
		   }
		   
	
	

?>

 

</div>

	
</body>
</html>