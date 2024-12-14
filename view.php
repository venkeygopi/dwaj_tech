<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>view</title>
	
	<style type="text/css">
	
	* {
		
		margin:0;
	
	}
	body {
		min-height:100vh;
	}
	.head_title {
		
		background:black;
		padding:30px 0px;
	}
	.head_title h1 {
		color:white;
		font-family:arial;
		font-size:40px;
		text-align:center;
	}
	.head_title ul {
		list-style:none;
	}
	.head_title ul li a {
		
		text-decoration:none;
		color:white;
		font-family:arial;
		line-height:30px;
	}
	.head_title ul li a:hover {
		color:grey;
	}
	.view_post {
	width:80%;
	margin:auto;
	padding:10px;
	margin-top:30px;
	margin-bottom:30px;
	box-shadow:0px 0px 10px lightgrey;
	font-family:arial;
	}
	.blog_content a {
	   color:grey;;
	   text-decoration:none;
	}
	.blog_content i {
		font-size:19px;
		margin:20px 0px;
	}
	.blog_content {
		line-height:40px;
		font-size:18px;
		text-align:justify;
	}
	.blog_content div {
		line-height:40px;
		font-size:18px;
		text-align:justify;
	}
	.blog_content img {
		width:100%;
		height:100%;
		box-shadow:0px 0px 2px lightgrey;
	}
	footer {
		background:black;
		padding:40px 20px;
	}
	footer ul {
		list-style:none;
	}
	footer ul li a {
		
		text-decoration:none;
		color:white;
		font-family:arial;
		line-height:30px;
	}
	footer ul li a:hover {
		color:grey;
	}
	.header_fixed {
		position:fixed;
		width:100%;
		top:0;
	}
	
	
	</style>
	
	
</head>
<body>
	
	<div class="container">
	
	<header class="head_title">
	
	<ul>
	
	<li><a href="home.php">Home</a></li>
	
	</ul>
	 
	 <h1>DWAJ TECH BLOG</h1>
	 
	 </header>
	
	<div class="view_post">
	
	<?php
	      require 'connect.php';
	
	        if(isset($_GET['ud'])) {
				
				$pid =  $_GET['ud'];
				$start =  strpos($pid,'/');
			    $pid = substr($pid,0,$start);

	
	        $select_post_query = "SELECT * FROM `blog_post` where id='$pid'";
 
            $fetch_run = mysqli_query($mycon,$select_post_query);
			while($fetch_rows = mysqli_fetch_assoc($fetch_run)) { 
	
	            $obaner = $fetch_rows['thumbnail'];
				$title = $fetch_rows['title'];
				$link = $fetch_rows['link'];
				$description = $fetch_rows['descrp'];
				
				$title = preg_replace('/[^a-zA-Z0-9]+/',' ',strToLower($title));
				
				$baner = 'admin/images/'.$obaner;
				?>
				
				<div class="blog_content">
				
				<?php if(!empty($obaner)) { ?>
				
				<div class="baner"><img src="<?php echo $baner; ?>" alt="image" /></div><br>
				
				<?php }?>
				
	            <h1><?php echo $title; ?></h1><br>
	            <i><a href="<?php echo $link; ?>"><?php echo $link; ?></a></i><br><br>
	            <p><?php echo $description; ?></p>
				
				
				</div>
				
				
				
				<?php
	
	
			}
			
			
			} 

	
	?>
	
	
	</div>
	
	
	
	</div>
	
	<footer style="position:sticky;top:100%;">
	
	<ul>
	
	<li><a href="home.php">Home</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="blog.php">Blog</a></li>
	
	</ul>
	
	</footer>
	
	<script type="text/javascript">
	
	var header = document.querySelector('.head_title');
	
	window.onscroll = function abc() {
	
	   if(window.scrollY > 100) {      // header bar fixe and remove coe
          header.classList.add('header_fixed');
		   
	   }else {
		  header.classList.remove('header_fixed');
	   }
	   
	    } 
	
	
	</script>
	
</body>
</html>