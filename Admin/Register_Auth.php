<?php

session_start();

$name = $_POST["Name"];
$designation = $_POST["Designation"];
$email = $_POST["Email"];
$password = $_POST["Password"];

$conn = mysqli_connect("localhost","root","","apple");

$auth_query = "select * from admin where Email = '$email'";
$auth_query_run = mysqli_query($conn,$auth_query);
$find_result = mysqli_num_rows($auth_query_run);

if($find_result>0){
	echo "Already Registered<br>";
	echo "<a href='Login.php'>Login</a>";
} else {
	$insert_query = "insert into admin(Name,Designation,Email,Password) values('$name','$designation','$email','$password')";
	$insert_query_run = mysqli_query($conn,$insert_query);

	if($insert_query_run){
		echo "Data Inserted Successfully<br>";
		echo "<a href='Login.php'>Login</a>";
	} else {
		echo "Data Insertion Failed<br>";
		echo "<a href='Register.php'>Try Again</a>";
	}
}

?>