<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	
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
	.blog_container {
		width:60%;
		margin:auto;
		margin-top:50px;
		margin-bottom:30px;
	}
	.blog_content {
		margin-bottom:35px;
		box-shadow:0px 0px 15px lightgrey;
		padding:30px 10px;
		border-radius:8px;
	}
	.blog_content a {
		text-decoration:none;
		color:black;
	}
	.blog_content img {
		height:300px;
		width:100%;
		box-shadow:0px 0px 1px grey;
	}
	.blog_content h1 {
		font-family:arial;
		font-size:30px;
	}
	.blog_content i {
		font-size:20px;
	}
	.blog_content {
		line-height:35px;
		font-family:arial;
		font-size:18px;
		text-align:justify;
		margin-top:20px;
	}
	.blog_content div {
		line-height:35px;
		font-size:18px;
		text-align:justify;
	}
	.blog_content button {
		background:lightblue;
		color:white;
		padding:0;
		border:none;
		font-size:18px;
	}
	.blog_content button a {
		padding:5px;
		color:white;
		display:block;
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
	
	
	 <section>
	 
	 <header class="head_title">
	 
	 <ul>
	
	<li><a href="home.php">Home</a></li>
	
	</ul>
	 
	 <h1>DWAJ TECH BLOG</h1>
	 
	 </header>
	 
	 
	 <div class="blog_container">
	 
	 <?php   // connect database and fetch blog post data into thei page
	 
	 require 'connect.php';
	 
	        $select_query = "SELECT * FROM `blog_post` ORDER BY id DESC";
 
            $fetch_run = mysqli_query($mycon,$select_query);
			while($fetch_rows = mysqli_fetch_assoc($fetch_run)) {
				
				$id = $fetch_rows['id'];
				$obaner = $fetch_rows['thumbnail'];
				$title = $fetch_rows['title'];
				$link = $fetch_rows['link'];
				$description = $fetch_rows['descrp'];
				
				$description = substr($description,0,20);
				
				$title_original = preg_replace('/[^a-zA-Z0-9]+/',' ',strToLower($title));
				
				$baner = 'admin/images/'.$obaner;
	
				
				?>
				
				<div class="blog_content">
				
				
				<?php if(!empty($obaner)) { ?>
				
				<div class="baner"><a href="view.php?ud=<?php echo $id.'/'.$title ?>"><img src="<?php echo $baner; ?>" alt="image" /></a></div>
				
				<?php }?>
				
	            <h1><a href="view.php?ud=<?php echo $id.'/'.$title ?>"><?php echo $title_original; ?></a></h1><br>
	            <i><a href="<?php echo $link; ?>"><?php echo $link; ?></a></i>
	            <p><?php echo $description; ?></p>
				
				<center><button><a href="view.php?ud=<?php echo $id.'/'.$title ?>">Read more</a></button></center> 
				
				</div>
				
				<?php
			}
	 
	 
	 ?>
	 
	 
	 
	 </div>
	 
	 </section>
	
	
	<footer style="position:sticky;top:100%;">
	
	<ul>
	
	<li><a href="home.php">Home</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="blog.php">Blog</a></li>
	
	</ul>
	
	</footer>
	
	</div>
	
	
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