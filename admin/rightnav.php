<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<title>rightnav | dashboard</title>
	
	<style>
	
	* {
		margin:0;
	}
	.nav_div {
		background:rgb(0,150,300);
		font-family:arial;
		height:100vh;
		position:relative;
		width:60px;
		transition:linear 0.6s;
	}
	.nav_div:hover{
		
	}
	.nav_div ul {
		list-style:none;
		padding:20px 0px;
	}
	.nav_div ul li a {
		width:88%;
		margin:auto;
		display:block;
		text-decoration:none;
		padding:15px 10px;
		margin-top:6px;
		margin-bottom:20px;
		margin-right:0;
		margin-left:10px;
		color:white;
		font-weight:bold;
		font-size:17px;
		transition:linear 0.3s;
		border-radius:10px 0px 0px 10px;
	}
	.txt_link {
		visibility:hidden;
		margin-left:10px;
	}
	.nav_div ul li a:hover { 
	    background:white;
		color:black;
		
		.fa {
		color:red;
	}
	}
	.active {
		background:white;
		
		.fa {
		color:black;
	}
	}
	.fa {
		color:white;
		font-size:25px;
	}
	.menu {
		width:85%;
		margin:auto;
		color:white;
		text-align:center;
		font-weight:bold;
		font-size:40px;
		cursor:pointer;
	}
	.menu:hover {
		color:black;
	}
	.active_menu {
		width:250px;
		
		.txt_link {
		visibility:visible;
	}
	}
	
	</style>
	
</head>
<body>

   <div class="container">
   
   <div class="nav_div">
   
   <br><div class="menu">=</div>
   
   <?php  $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);  ?>
   
   <ul>
   
   <li><a href="main.php" class="<?= $page ==  'main.php' ? 'active':'' ?>"><i class="fa fa-home"></i><label class="txt_link">Home</label></a></li>
   <li><a href="post_list.php" class="<?= $page ==  'post_list.php' ? 'active':'' ?>"><i class="fa fa-edit"></i><label class="txt_link">post listt</label></a></li>
   <!--<li><a href="user_settings.php" class="<?= $page ==  'user_settings.php' ? 'active':'' ?>"><i class="fa fa-user-o"></i><label class="txt_link">Game settings</label></a></li>
   <li><a href="winner.php" class="<?= $page ==  'winner.php' ? 'active':'' ?>"><i class="fa fa-user"></i><label class="txt_link">Winner List</label></a></li>
   <li><a href="#"><i class="fa fa-comments"></i><label class="txt_link">Manage comments</label></a></li> -->
   
   </ul>
   
   
   </div>
   
   
   </div>

 
  <script type="text/javascript">
  
  var menu = document.querySelector('.menu');
  var nav = document.querySelector('.nav_div');
  
  menu.addEventListener('click', ()=> {
	  nav.classList.toggle('active_menu');
  });
  
  </script>
	
</body>
</html>