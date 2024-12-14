<?php

    require 'connect.php';

    if(isset($_POST['post_title'])) {
		
		$post_title          = $_POST['post_title'];
		
		$post_title = preg_replace('/[^a-zA-Z0-9-]+/','-',strToLower($post_title));
		
		$post_link            = $_POST['post_link'];
		$post_description       = $_POST['post_description'];
		$thumbnail_name              = $_FILES['thumbnail']['name'];
		$thumbnail_image               = $_FILES['thumbnail']['tmp_name'];
	
		
		$destination = "images/".$thumbnail_name;
		
		date_default_timezone_set("Asia/kolkata");
		$date  = date("Y/m/d h:i:sa");
		
		
		$send_post = "Insert INTO blog_post(`id`,`title`,`link`,`descrp`,`thumbnail`,`date`) VALUES ('NULL','$post_title','$post_link','$post_description','$thumbnail_name','$date')";
		
		mysqli_query($mycon,$send_post);
		
		move_uploaded_file($thumbnail_image,$destination);
		
	} 


   
   function update_posts() {
	   
	   global $mycon;
	   
	   if(isset($_POST['upost_title'])) {
		
		$eid = $_POST['eid'];
		$post_title          = $_POST['upost_title'];
		
		$post_title = preg_replace('/[^a-zA-Z0-9-]+/','-',strToLower($post_title));
		
		$post_link            = $_POST['upost_link'];
		$post_description       = $_POST['upost_description'];
		$old_baner              = $_POST['old_baner'];
		if(!empty($_FILES['uthumbnail']['name'])) {
		$thumbnail_name              = $_FILES['uthumbnail']['name'];
		$thumbnail_image               = $_FILES['uthumbnail']['tmp_name'];
		
		unlink("images/".$old_baner);
		}else{
			$thumbnail_name = $old_baner;
		}
	
        $destination = "images/".$thumbnail_name;
		
		date_default_timezone_set("Asia/kolkata");
		$date  = date("Y/m/d h:i:sa");
		
		$update = "update blog_post set title='$post_title', link='$post_link', descrp='$post_description',thumbnail='$thumbnail_name', date='$date' where id='$eid'";
		
		mysqli_query($mycon,$update);
		move_uploaded_file($thumbnail_image,$destination);
		
	   }
	   
   }
   update_posts();
    
	  
	  
?>