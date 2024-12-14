<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>dwaj tech</title>
	
	<style type="text/css">
	
	* {
		
		margin:0;
	}
	html {
		scroll-behavior:smooth;
	}
	.header {
		background:white;
		position:linear;
		font-family:arial;
		overflow:hidden;
		padding:10px;
		box-shadow:0px 0px 10px 0px grey;
		top:0px;
		z-index:10;
	}
	.header nav ul {
		list-style:none;
		position:absolute;
		right:5%;
		top:40px;
	}
	.header nav ul li {
		display:inline-block;
		font-size:22px;
		margin-left:15px;
	}
	.header nav ul li a {
		color:aqua;
		text-decoration:none;
	}
	.header nav ul li a:hover {
		color:lightgrey;
	}
	.logo {
		margin-top:20px;
		color:aqua;
		margin-left:20px;
	}
	.div_1,.div_2,.div_3,.div_4 {
		display:grid;
		grid-template-columns:40% 60%;
	}
	.div_1 div:nth-child(1) {
		width:100%;
		height:700px;
		background:lime;
		border-radius:0 50% 50% 0;
		position:relative;
		left:-200px;
	}
	.div_1 div:nth-child(1) .label1 {
		position:absolute;
		right:5%;
		top:100px;
		width:50%;
		line-height:35px;
		font-family:arial;
	}
	.div_1 div:nth-child(1) .label2 {
		position:absolute;
		font-family:arial;
		font-size:17px;
		right:5%;
		top:300px;
		width:60%;
		line-height:30px;
		text-align:center;
	}
	.div_1 div:nth-child(2) img {
		width:400px;
		height:400px;
		margin:auto;
		margin-top:20px;
	}
	.div_1 div:nth-child(2) p {
		font-size:22px;
		font-family:arial;
		line-height:30px;
		width:80%;
		margin-top:50px;

	}
	.div_2 div:nth-child(1) {
		width:100%;
		height:700px;
		background:rgba(0,300,200,0.5);
		border-radius:0 50% 50% 0;
		position:relative;
		left:-100px;
	}
	.div_2 div:nth-child(1) label img {
		width:60%;
		height:60%;
		border-radius:30%;
		margin-top:150px;
		margin-left:150px;
	}
	.div_2 div:nth-child(2) .cards {
		width:90%;
		border:1px slid grey;
		padding:10px;
		margin-top:20px;
	}
	.div_3 div:nth-child(1) {
		width:100%;
		height:700px;
		background:lime;
		border-radius:0 50% 50% 0;
		position:relative;
		left:-200px;
		box-shadow:0px 20px 0px grey;
	}
	.div_3 div:nth-child(2) label {
		
		line-height:30px;
		font-size:22px;
		font-family;arial;
		position:relative;
		top:150px;
	}
	.div_3 div:nth-child(2) label p {
		margin-top:30px;
		width:90%;
	}
	.div_3 div:nth-child(1) h2,.div_4 div:nth-child(1) h2 {
		color:black;
		font-weight:bold;
		font-family:arial;
		font-size:40px;
		position:absolute;
		top:320px;
		right:10%;
	}
	.div_4 div:nth-child(1) {
		width:100%;
		height:700px;
		background:lime;
		border-radius:0 50% 50% 0;
		position:relative;
		left:-200px;
	}
	.div_4 div:nth-child(2) form{
		width:90%;
		margin:auto;
		margin-top:100px;
	}
	.div_4 div:nth-child(2) form input[type="text"],[type="email"],[type="number"]{

		width:95%;
        padding:20px 20px 20px 0px; 
		border:none;
		border-bottom:solid black 1px;
		font-size:20px;
		font-family:arial;
		outline:none;
	}
	.div_4 div:nth-child(2) form textarea {
		width:95%;
		padding:20px 20px 5px 0px;
		border:none;
		outline:none;
		box-shadow:0px 1px 3px grey;
		font-size:20px;
		font-family:arial;
	}
	.div_4 div:nth-child(2) form input[type="submit"] {
		padding:15px 25px;
		background:black;
		font-family:arial;
		color:white;
		border:none;
		border-radius:5px;
		cursor:pointer;
	}
	.div_4 div:nth-child(2) form input[type="submit"]:hover {
		background:grey;
	}
	.empty_div {
		background:rgba(0,0,0,0.02);
		height:200px;
	}
	.footer {
		background:lightgrey;
		height:300px;
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
	
	   <div class="header">
	   
	   <div class="logo">
	   
	   <h2>DWAJ TECH</h2>
	   <h3>IOT SOLUTIONS</h3>
	   
	   </div>
	   
	   <nav>
	   
	   <ul>
	   
	   <li><a href="#home">Home</a></li>
	   <li><a href="blog.php">Blog</a></li>
	   <li><a href="#products">Products</a></li>
	   <li><a href="#contact">Contact us</a></li>
	   
	   </ul>
	   
	   </nav>
	   
	   
	   </div>
	   
	   <div class="div_1" id="home">
	   
	   <div>
	   
	   <label class="label1">
	   <h2 style="color:blue;"><p>BHARADWAJ</p> <p>KOLLEPARA</p></h2>
	   <P>Founder & Techinical Architect</P></label>
	   
	   <label class="label2">
	   
	   <p>National Hackthon Champion, 2019 i won money of Rs. 1,75,000 cash prize</p>
	   <p>Project Expo 2nd Prize, 2017</p>
	   <p>Designed an artificial organ for the blind so that they can sense the physical world through their touch sense.</p>
	   </label>
	   
	   </div>
	   
	   <div>
	    
	   <img src="iott4.jpg" alt="dgg" />
	   <p>Dwaj Tech LLP, founded by Bharadaj Kollepara in 2022, specilizes in end-to-end embedded hardware solutions and iot deployments. Our mission is to revolutionize everyday life withsmart techonology that enhances convenience, efficiency, connectivity</p>
	   
	   </div>
	   
	   </div>

       <div class="empty_div"></div>	   
	   
	   <div class="div_2" id="blog">
	   
	   <div>
	   
	   <label><img src="sanjana.jpg" alt="sanjana" /></label>
	   
	   </div>
	   <div>
	   
	   <p class="cards">
	   
	   <p class="title"><h2>Billboard</h2></p>
	   <p class="links"><a href="https://www.billboard.com/">Billboard</a></p>
	   <p class="description">Best known for the Hot 100 and billboard 200, which list the most popular songs and albums each week in the industry. Offer industry news, events, products, and music streaming</p>
	   
	   </p>
	   
	   <p class="cards">
	   
	   <p class="title"><h2>Billboard</h2></p>
	   <p class="links"><a href="https://www.billboard.com/">Billboard</a></p>
	   <p class="description">Best known for the Hot 100 and billboard 200, which list the most popular songs and albums each week in the industry. Offer industry news, events, products, and music streaming</p>
	   
	   </p>
	   
	   <p class="cards">
	   
	   <p class="title"><h2>Billboard</h2></p>
	   <p class="links"><a href="https://www.billboard.com/">Billboard</a></p>
	   <p class="description">Best known for the Hot 100 and billboard 200, which list the most popular songs and albums each week in the industry. Offer industry news, events, products, and music streaming</p>
	   
	   </p>
	   
	   </div>
	   
	   </div>
	   
	   <div class="empty_div"></div>
	   
	   <div class="div_3" id="products">
	   
	   <div><h2>OUR PRODUCTS</h2></div>
	   <div>
	   
	   <label>
	   <p>IoT Stack Development: Expertise in Zig Bee 3.0,Bluetooth & BLE, wIFi,Thread, Matter, and
	   custom RF wireless stacks.</p>
	   
	   <p>Embedded services: Offering design, development, and deployment service, including Free RTOS based code development for micro controllers and embedded Linux.</p>
	   
	   <p>PCB Design & 3D Prototyping: we provide comprehensive PCB design service and rapid 3D prototyping, delivering functional prototypes that meet client specification.</p>
	   </label>
	   
	   </div>
	   
	   </div>
	   
	   <div class="empty_div"></div>
	   
	   <div class="div_4" id="contact">
	   
	   <div><h2>CONTACT US</h2></div>
	   
	   <div>
	   
	   
	   <form method="post">
	   
	   <input type="text" placeholder="Full Name"/><br><br>
	   <input type="email" placeholder="Email"/><br><br>
	   <input type="number" placeholder="Phone"/><br><br><br><br>
	   <textarea placeholder="Message"></textarea><br><br>
	   <input type="submit" value="Send"/>
	   
	   </form>
	   
	   
	   </div>
	   
	   </div>
	
	
	   <footer class="footer"></footer>
	
	</div>
	
	
	<script type="text/javascript">
	
	
	var header = document.querySelector('.header');
	
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