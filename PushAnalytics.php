<?php
	
	//Connection variables
	$servername = "10.171.204.188";
	$server_username = "elle";
	$server_password = "mobile";
	$dbName = "ELLE_Mobile";
	
	$user_ID = $_POST["userIDPost"];
	
	$iWords = $_POST["iWordsPost"];
	$iGenres = $_POST["iGenresPost"];
	$totalCorrect = $_POST["totalCorrectPost"];
	$totalIncorrect = $_POST["totalIncorrectPost"];
	$minsPlayed = $_POST["minsPlayedPost"];	
	
	//Make connection
	$connection = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$connection){
		die("Connection Failed. ". mysqli_connect_error());
	}
		
	$sql = "UPDATE UserAnalytics SET listIncorrectWords = concat(listIncorrectWords,'".$iWords."'), listIncorrectGenres = concat(listIncorrectGenres,'".$iGenres."'), totalWordsCorrect = totalWordsCorrect + '".$totalCorrect."', totalWordsIncorrect = totalWordsIncorrect + '".$totalIncorrect."', minsPlayedWeek = minsPlayedWeek + '".$minsPlayed."', minsPlayedTotal = minsPlayedTotal + '".$minsPlayed."' WHERE userID = '".$user_ID."' ";
	$result = mysqli_query($connection, $sql);
	
	if(!result)
		echo "There was an error";
	else
		echo "Analytics added";
	
?>