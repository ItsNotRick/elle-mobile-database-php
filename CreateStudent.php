<?php
	
	//Connection variables
	$servername = "10.171.204.188";
	$server_username = "elle";
	$server_password = "mobile";
	$dbName = "ELLE_Mobile";
	
	$user_username = $_POST["usernamePost"];
	$user_password = $_POST["passwordPost"];
  $user_type = "student";
	
	//Make connection
	$connection = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$connection){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$test = "SELECT username FROM Users WHERE username = '".$user_username."' ";
	$tresult = mysqli_query($connection, $test);
	
	if(mysqli_num_rows($tresult) > 0 ){
		echo "User already exists";
	}
	else {	
	
	$sql = "INSERT INTO Users (username, password, type) VALUES ('".$user_username."','".$user_password."','".$user_type."')";
	$result = mysqli_query($connection, $sql);
	
	if(!$result)
		echo "There was an error";
	else
		echo "User added";
	
	}
?>
