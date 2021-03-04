<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="Apple7.css">
	<link rel="shortcut icon" href="Images/logo1.png">
</head>
<?php
include("Connection.php");
include("Navbar.php");
$navbar = new Navbar();
$navbar->Create();
?>

<body>

<div id="background" class="container-fluid m-0 p-0">
	<div class="row m-0 p-0">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center pt-5">
			<img id="bckimage" src="Images/Iphone_main.webp" class="mt-5">
		</div>	
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 text-center">
			<div id="bck-pb" class="pb-5 pt-5">
				<h1 class="ml9" style="text-align: center;">
  					<span class="text-wrapper">
   					 <span class="letters">iPhone 12 Pro Max</span><br>
  					</span>
				</h1>
				<button>Buy Now</button>
			</div>
		</div>
	</div>
</div>


<div data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" id="spec">

	SPECIFICATIONS
</div>

<div id="spec-box" class="container-fluid mt-5">
     <div class="row">
     		<div data-aos="fade-up" data-aos-duration="1000" class="text-center col-xl-6 col-lg-6 col-md-6 col-sm-12" id="spec-price">
     			<h1 style="font-size: 5vw">Starting Price</h1>
				<h2 style="font-size: 10vw;">$999+</h2>
				<p>Buy directly from Apple</p>
     		</div>
     		<div data-aos="fade-down" data-aos-duration="1000" class="text-center col-xl-6 col-lg-6 col-md-6 col-sm-12">
     			<img src="Images/Spec-Image.png" id="spec-image">
     		</div>
     </div>
</div>

<div style="height: 100vh">
</div>

<script src="Libraries/anime.min.js"></script>
<script src="Libraries/Apple.js"></script>




</body>
</html>