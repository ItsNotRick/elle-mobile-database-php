<?php
	
	//Connection variables
	$servername = "10.171.204.188";
	$server_username = "elle";
	$server_password = "mobile";
	$dbName = "ELLE_Mobile";
	
	$user_ID = $_POST["userIDPost"];
	
	//Make connection
	$connection = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$connection){
		die("Connection Failed. ". mysqli_connect_error());
	}

	$sql = "SELECT highScore, listIncorrectWords, listIncorrectGenres, totalWordsCorrect, totalWordsIncorrect, classID, teacherID, minsPlayedWeek, minsPlayedTotal FROM UserAnalytics WHERE userID = '".$user_ID."' ";
	$result = mysqli_query($connection, $sql);
	
	if(mysqli_num_rows($result) > 0 ){
		//Display data for each row
		while($row = mysqli_fetch_assoc($result)){
			echo "highScore:".$row['highScore']."|listIncorrectWords:".$row['listIncorrectWords']."|listIncorrectGenres:".$row['listIncorrectGenres']."|totalWordsCorrect:".$row['totalWordsCorrect']."|totalWordsIncorrect:".$row['totalWordsIncorrect']."|classID:".$row['classID']."|teacherID:".$row['teacherID']."|minsPlayedWeek:".$row['minsPlayedWeek']."|minsPlayedTotal:".$row['minsPlayedTotal'].";";
		}
	}
	
?>