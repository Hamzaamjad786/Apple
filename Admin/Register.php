<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<form action="Register_Auth.php" method="post">
		<h1>Register</h1>
		<div>
			<p>
				Name
			</p>
			<input type="text" placeholder="Enter your Name" name="Name">
		</div>
		<div>
			<p>
				Designation
			</p>
			<input type="text" placeholder="Enter your Designation" name="Designation">
		</div>
		<div>
			<p>
				Email
			</p>
			<input type="email" placeholder="Enter your Email" name="Email">
		</div>
		<div>
			<p>
				Password
			</p>
			<input type="Password" placeholder="Enter your Password" name="Password">
		</div>
		<div>
			<button type="submit">Login</button>
		</div>
		<a href="Login.php">Already Registered? Signin</a>
	</form>

</body>
</html>