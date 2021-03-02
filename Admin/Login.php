<!DOCTYPE html>
<html>
<head>
	<title>Admin-Panel</title>
</head>
<body>

	<form action="Login_Auth.php" method="post">
		<h1>
			Login
		</h1>
		<div>
			<p>
				Email
			</p>
			<input type="text" placeholder="Enter your Email" name="Email">
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
		<a href="Register.php">Not Registered? Signup</a>
	</form>

</body>
</html>