<?php @session_start(); ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>header | dashboard</title>
	
	<style>
	
	* {
		margin:0;
	}
	.header {
		padding:15px 10px;
		background:rgb(0,150,300);
		font-family:arial;
		position:relative;
	}
	.title {
		font-size:25px;
		color:white;
		font-weight:bold;
		display:inline-block;
	}
	.name {
		font-size:18px;
		color:white;
		font-weight:bold;
		display:inline-block;
		position:absolute;
		left:40%;
	}
	.logout {
		font-size:20px;
		font-weight:bold;
		background:red;
		padding:0;
		border-radius:10px;
		display:block;
		float:right;
	}
	.logout a {
		text-decoration:none;
		color:white;
		padding:10px;
	}
	
	
	
	</style>
	
</head>
<body>

   <div class="container">
   
   <div class="header">
  
     <?php   require 'connect.php';
	       if(isset($_SESSION['admin_id'])) {
			   
			   $admin_id = $_SESSION['admin_id'];
			 
			 $select = "select * from admin where id='$admin_id'";
			 
			 $run = mysqli_query($mycon,$select);
		     $row = mysqli_fetch_array($run);
			 
			 $name = $row['name'];
			   
		   }else {
			   echo '<script type="text/javascript">window.location.href="login.php";</script>';
		   }
	 
	 
	 ?>
   
    <div class="title">Dashboard</div>
	
	<div class="name"><?php echo $name; ?></div>
   
   <div class="logout"><a href="logout.php">Logout</a></div>
   
   
   </div>
   
   
   </div>

  
  

	
</body>
</html>