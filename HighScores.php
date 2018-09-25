<?php
	
	//Connection variables
	$servername = "10.171.204.188";
	$server_username = "elle";
	$server_password = "mobile";
	$dbName = "ELLE_Mobile";
	
	//Make connection
	$connection = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$connection){
		die("Connection Failed. ". mysqli_connect_error());
	}

	$sql = "SELECT username, highScore FROM UserAnalytics ORDER BY highScore DESC";
	$result = mysqli_query($connection, $sql);
	
	if(mysqli_num_rows($result) > 0 ){
		//Display data for each row
		while($row = mysqli_fetch_assoc($result)){
			echo $row['username']."|".$row['highScore'].";";
		}
	}
	
?>