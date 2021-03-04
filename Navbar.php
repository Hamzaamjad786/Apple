<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="black">
  <link rel="stylesheet" href="Apple7.css">
  <link rel="stylesheet" href="Libraries/bootstrap.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


  <script src="Libraries/jquery.min.js"></script>
  <script src="Libraries/popper.min.js"></script>
  <script src="Libraries/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <script src="Libraries/Apple.js"></script>
</head>
<body>
<?php


class Navbar{
	function Create(){
			echo '
				<button id="toggle">
					Close
				</button>
				<div id="navbar">
					<a href="index.php" target="_blank" data-toggle="tooltip" id="logo" title="Apple.Inc">
						<img src="Images/logo1.png" style="width:40px;">
					</a>
					<ul id="nav">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="Categories.php">Categories</a>
						</li>
						<li>
							<a href="Products.php">Products</a>
						</li>
						<li>
							<a href="Contactus.php">Contact Us</a>
						</li>
						<li>
							<a href="Cart.php" title="Check Your Order"><span class="fa fa-shopping-cart"></span></a>
						</li>
						<li>
							<a href="Account.php" title="Account"><span class="fa fa-user"></span></a>
						</li>
					</ul>
				</div>
			';
	}
}
?>

<script>



</script>

</body>
</html>