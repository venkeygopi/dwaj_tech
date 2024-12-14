<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	
	<title>home | dashboard</title>
	
	<style>
	
	* {
		margin:0;
	}
	body {
		background:white;
	}
	.section {
		display:flex;
	}
	.main_part {
		width:100%;
		padding:0px;
	}
	.content {
		width:70%;
		margin:auto;
	}
	.user_count_containner h3{
		margin:20px 0px;
		font-size:22px;
	}
	.user_count_containner h2 {
		margin-top:50px;
		margin-bottom:20px;
	}
	.user_count_containner {
		padding:10px;
		width:100%;
		margin-top:50px;
		height:550px;
		overflow-y:scroll;
		font-family:arial;
		box-shadow:0px 0px 5px 0px lightgrey;
	}
	#title,#add_link,#add_desc,#thumbnail {
		padding:20px;
		background:white;
		border:1px solid grey;
		font-size:20px;
		line-height:28px;
	}
	#add_desc {
		height:auto;
	}
	.user_count_containner button {
		padding:15px 20px;
		color:white;
		background:lightgreen;
		border-radius:10px;
		border:none;
		outline:none;
		font-size:20px;
		margin-top:20px;
		cursor:pointer;
		transition:linear 0.5s;
	}
	.user_count_containner button:hover {
		background:green;
	}
	.preview_img {
		width:50%;
		height:200px;
		
	}
	.preview_img img {
		width:100%;
		height:100%;
	}
	
	
	
	
	</style>
	
</head>
<body>

   <div class="container">
  
   <section class="section">
   
   <nav><?php require 'rightnav.php'; ?></nav>
   
   <div class="main_part">
   
   <div class="header"><?php require 'header.php'; ?></div>
   
   
   <div class="content">
   <div class="user_count_containner">
   
   <?php
   
   require 'connect.php';
   
   if(isset($_GET['eid'])) {
	   
	   $edit_id = $_GET['eid'];
   
   $select_posts = "SELECT * from blog_post where id= '$edit_id'";
   
   $fetch_run = mysqli_query($mycon,$select_posts);
			while($fetch_rows = mysqli_fetch_assoc($fetch_run)) { 
	
	            $baner = $fetch_rows['thumbnail'];
				$title = $fetch_rows['title'];
				$link = $fetch_rows['link'];
				$description = $fetch_rows['descrp'];
				
				$title = preg_replace('/[^a-zA-Z0-9]+/',' ',strToLower($title));
			} 
   }
   
   ?>
   
   
   <center><h1>Update Posts</h1></center>
   
   <div> <h2>Thumbnail Image</h2>
   
   <input type="file" id="thumbnail"/><br><br> 

   <div class="preview_img"><img src="images/<?php echo $baner; ?>" alt="" /></div>   
   
   </div>
   
   <div class="title_text_div"> <h3>Add Title</h3>
   
  
   <div id="title" contenteditable="true" ><?php echo $title ?></div>
   
   
   
   
   </div>
   
   
   <div> <h2>Add Link</h2>
   
   <div id="add_link" contenteditable="true"><?php echo $link ?></div>
   
   </div>
   
   <div> <h2>Add Description</h2>
  

   
   <div id="add_desc" contenteditable="true" name="content"><?php echo $description ?></div>
   
   </div>
   
   <button id="send_post">Send Post</button>
   
   
   
   </div>
   
   </div>
   
   </div>
   
   </section>

  <script>
  
     let eid = '<?= $edit_id; ?>';
     let old_baner = '<?= $baner; ?>';	 
     let utitle = document.getElementById("title");
	 let uadd_link = document.getElementById("add_link");
	 let uadd_desc = document.getElementById("add_desc");
	 let uthumbnail = document.getElementById("thumbnail");
	 let usend_post_btn = document.getElementById("send_post");
	 

     usend_post_btn.addEventListener('click', () => {

          const formData = new FormData();
          const ajax = new XMLHttpRequest();
          
		  formData.append("eid",eid);
		  formData.append("upost_title",utitle.innerHTML);
		  formData.append("upost_link",uadd_link.innerHTML);
		  formData.append("upost_description",uadd_desc.innerHTML);
		  formData.append("uthumbnail",uthumbnail.files[0]);
		  formData.append("old_baner",old_baner);
          
          ajax.open('POST','multisend.php');
          ajax.send(formData);     
		  
		  alert("updated successfully"); 
		  window.location.href="post_list.php";

          
      });
	 

  function sure_btn() {
		
		var start = confirm("are you sure save change");
		

		if(start == true) {
			 
			 return true;
			 
		 }else {
			 
			 return false;
		 }
	}



</script>

	
</body>
</html>