<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>quizapp</title>
</head>
<body>

  <?php
  
  
  ob_start();
  
  
   unset($_SESSION['admin_id']);
	  header('location:main.php');
	  die();
  
  ob_end_flush(); 
  
  ?>
	
</body>
</html>