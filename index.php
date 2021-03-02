<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="Apple5.css">
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
				<p class="text-white">iPhone 12 Pro Max</p>
				<button>Buy Now</button>
			</div>
		</div>
	</div>
</div>



</body>
</html>