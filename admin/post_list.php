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
	.user_count_containner {
		padding:10px;
		width:100%;
		margin-top:50px;
		height:550px;
		overflow-y:scroll;
		font-family:arial;
		box-shadow:0px 0px 5px 0px lightgrey;
	}
	.post_list table {
		
		width:100%;
		margin-top:10px;
		border:1px solid grey;
	}
	.post_list table th {
		
		border:1px solid white;
		color:white;
		padding:15px;
		background:black;
	}
	.post_list table td {
		
		border:1px solid grey;
		color:black;
		padding:15px;
		background:rgba(0,0,0,0.01);
	}
	.post_list table td .edit_btn  {
		background:lightgreen;
		padding:0;
		border:none;
		border-radius:8px;
	}
	.post_list table .edit_btn a {
		color:white;
		padding:15px;
		display:block;
		text-decoration:none;
	}
	.post_list table td .del_btn  {
		background:lightgreen;
		padding:0;
		border:none;
		border-radius:8px;
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
     
   <center><h1>Update Posts</h1></center>
   
   
   <div class="post_list"> 
   
   <?php
   
   require 'connect.php';
   
    $select_posts = "SELECT * from blog_post order by id desc";
   
   $fetch_run = mysqli_query($mycon,$select_posts);
			  
   
   ?>
   
   <table>
   
   <tr>
   
   <th>Id</th>
   <th>Title</th>
   <th>Update</th>
   <th>Delete</th>
   
   </tr>
   
   
   <?php
   
      while($fetch_rows = mysqli_fetch_assoc($fetch_run)) { 
	
	             $id = $fetch_rows['id'];
				 $title = $fetch_rows['title'];
				
				?>
				
				<tr>
				
				
				<td><?php echo $id; ?></td>
				<td><?php echo $title; ?></td>
				<td><button class="edit_btn"><a href="edit.php?eid=<?php echo $id; ?>">Edit Post</a></button></td>
				<td><button class=""del_btn style="background:red;border:none;outline:none;border-radius:8px;"><a href="post_list.php?did=<?php echo $id; ?>" style="color:white;padding:15px;text-decoration:none;display:block;">Delete Post</a></button></td>
				
				</tr>
				
				<?php
				
			}
   
   
   ?>
   
   </table>
 
   
   </div>
   
   
   
   
  
   
 
   
   
   </div>
   
   </div>
   
   </div>
   
   <?php
   
        // delete posts code here
		
		require 'connect.php';
		
		if(isset($_GET['did'])) {
			
			$delete_id = $_GET['did'];

            // delete old image as per the post

            $select_del_post = "SELECT thumbnail from blog_post where id='$delete_id' ";
   
            $del_run = mysqli_query($mycon,$select_del_post);

            $del_row = mysqli_fetch_array($del_run);
            $del_img = $del_row['thumbnail'];
            unlink("images/".$del_img); 
            

            // end delete image code
			
			$delete_query= "delete from blog_post where id='$delete_id'";
			
			if(mysqli_query($mycon,$delete_query)) {
				
				echo '<script>
		    
			window.location.replace("post_list.php");
		 
		 </script>';
			}
		}
   
   
   ?>
   
   </section>

  


</script>

	
</body>
</html>