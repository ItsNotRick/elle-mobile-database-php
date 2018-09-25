<?php
	
	//Connection variables
	$servername = "localhost";
	$server_username = "student";
	$server_password = "ellemobile";
	$dbName = "ELLE_Mobile";
	
	//Make connection
	$connection = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$connection){
		die("Connection Failed. ". mysqli_connect_error());
	}
	else echo("Connection success");

?>