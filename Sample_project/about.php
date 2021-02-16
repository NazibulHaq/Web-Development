<?php include('include/header.php'); ?>
<html>
<head>
<style>
.error {color: #FF0000;}
body {
  background-image: url('Doctor-Appointment-Software.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
  
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<div style="padding:20px;margin-top:30px;height:1500px;">

	<!-- this is for donor registraton -->
	<div class="main_content" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">About Us</h3>
		<div class="col-md-12">
			<div class="col-md-6">
				<img src="img/aboutimag33.jpg" alt="" class="img-responsive">
        <article>
					<h3 style="color:#0616BC;">We are Beside you</h3>
					<p class="text-justify">Eikhnae kisu motivation inspiration text deya lagbe </p>
				</article>
        
			</div>

			<div class="col-md-6">
				<article>
					<h3 style="color:#0616BC;">We are Beside you</h3>
					<p class="text-justify">Eikhnae kisu motivation inspiration text deya lagbe </p>
				</article>
			</div>
		</div>


		<div class="col-md-12">
			<div class="col-md-6">
				<article>
					<h3 style="color:#0616BC;">24/7 hour service</h3>
					<p class="text-justify">24 hours er summary niye text deya lagbe </p>
				</article>
			</div>
			<div class="col-md-6">
				<img src="img/aboutimag11.jpg" alt="" class="img-responsive"><br>
			</div>
		</div>
          
    </div>	
</body>
</html>