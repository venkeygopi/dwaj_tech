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
   
   <div> <h2>Thumbnail Image</h2>
   
   <input type="file" id="thumbnail"/><br><br>  
   
   </div>
   
   <div class="title_text_div"> <h3>Add Title</h3>
   
  
   <div id="title" contenteditable="true" ></div>
   
   </form>
   
   
   </div>
   
   
   <div> <h2>Add Link</h2>
   
   <div id="add_link" contenteditable="true"></div>
   
   </div>
   
   <div> <h2>Add Description</h2>
  

   
   <div id="add_desc" contenteditable="true" name="content"></div>
   
   </div>
   
   <button id="send_post">Send Post</button>
   
   
   </div>
   
   </div>
   
   </div>
   
   </section>

  
<script type="text/javascript">     

 

     let title = document.getElementById("title");
	 let add_link = document.getElementById("add_link");
	 let add_desc = document.getElementById("add_desc");
	 let thumbnail = document.getElementById("thumbnail");
	 let send_post_btn = document.getElementById("send_post");
	 

     send_post_btn.addEventListener('click', () => {

          const formData = new FormData();
          const ajax = new XMLHttpRequest();
          
		  formData.append("post_title",title.innerHTML);
		  formData.append("post_link",add_link.innerHTML);
		  formData.append("post_description",add_desc.innerHTML);
		  formData.append("thumbnail",thumbnail.files[0]);
          
          ajax.open('POST','multisend.php');
          ajax.send(formData);     
		  
		  alert("Post added successfully"); 
		  
		  title.innerHTML = '';
		  add_link.innerHTML = '';
		  add_desc.innerHTML = '';
		  thumbnail.value = '';
          
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