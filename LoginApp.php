<?php
	
	//Connection variables
	$servername = "10.171.204.188";
	$server_username = "elle";
	$server_password = "mobile";
	$dbName = "ELLE_Mobile";
	
	$user_username = $_POST["usernamePost"];
	$user_password = $_POST["passwordPost"];
	
	//Make connection
	$connection = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$connection){
		die("Connection Failed. ". mysqli_connect_error());
	}

	$sql = "SELECT password, type, userID FROM Users WHERE username = '".$user_username."' ";
	$result = mysqli_query($connection, $sql);
	
	if(mysqli_num_rows($result) > 0 ){
		//Display data for each row
		while($row = mysqli_fetch_assoc($result)){
			
			if($row['password'] == $user_password && $row['type'] == "student"){
				
				echo "Success|".$row['userID'].";";	
				
			} else if ($row['password'] == $user_password){
				
				echo "Wrong user type for ELLE Mobile. Only student accounts may login to the ELLE Mobile game.";
			
			} else {			
				
				echo "Password Incorrect";
			}
		}
	}	else {
			
			echo "User not found";
	}
	
?>
