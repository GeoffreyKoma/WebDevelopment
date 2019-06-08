<?php

$username = filter_input(INPUT_POST, 'username');
$password_1 = filter_input(INPUT_POST, 'password_1');
$address = filter_input(INPUT_POST, 'address');
if(!empty($username)){

if (!empty($password)) {

if (!empty($address)) {
		$Servername = "localhost";
		$Username = "root";
		$Password = "";
		$dbname = "Reg_db";

		$conn = new mysqli($Servername, $Username, $Password, $dbname);
		if (mysqli _connect_error()) {
			die('connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO users(Username, Password, Address) VALUES('$username', '$password_1', '$address')";
		if ($conn->query($sql)) {
			echo "New record is inserted Successfuly";
		}
		else{
			echo "Error: ".$sql ."<br>". $conn->error;
		}
		$conn->close();
	}
	}
	else{
		echo "Address is required!!!";
		die();
	}
}
else{
	echo "Password is required!!!";
	die();
}
}
else{
	echo "username is required!!!";
	die();
}
?> 