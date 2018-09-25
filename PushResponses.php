<?php
	
	//Connection variables
	$servername = "10.171.204.188";
	$server_username = "elle";
	$server_password = "mobile";
	$dbName = "ELLE_Mobile";
	
	$user_ID = $_POST["userIDPost"];
	
	$selection1 = $_POST["selection1"];
	$correct1 = $_POST["correct1"];
	$incorrect1 = $_POST["incorrect1"];
	$date = $_POST["date"];
	$selection2 = $_POST["selection2"];
	$correct2 = $_POST["correct2"];
	$incorrect2 = $_POST["incorrect2"];
	$selection3 = $_POST["selection3"];
	$correct3 = $_POST["correct3"];
	$incorrect3 = $_POST["incorrect3"];
	$selection4 = $_POST["selection4"];
	$correct4 = $_POST["correct4"];
	$incorrect4 = $_POST["incorrect4"];
	$selection5 = $_POST["selection5"];
	$correct5 = $_POST["correct5"];
	$incorrect5 = $_POST["incorrect5"];
	$selection6 = $_POST["selection6"];
	$correct6 = $_POST["correct6"];
	$incorrect6 = $_POST["incorrect6"];
	$selection7 = $_POST["selection7"];
	$correct7 = $_POST["correct7"];
	$incorrect7 = $_POST["incorrect7"];
	$selection8 = $_POST["selection8"];
	$correct8 = $_POST["correct8"];
	$incorrect8 = $_POST["incorrect8"];
	$selection9 = $_POST["selection9"];
	$correct9 = $_POST["correct9"];
	$incorrect9 = $_POST["incorrect9"];
	$selection10 = $_POST["selection10"];
	$correct10 = $_POST["correct10"];
	$incorrect10 = $_POST["incorrect10"];
	
	//Make connection
	$connection = new mysqli($servername, $server_username, $server_password, $dbName);
	
	//Check connection
	if(!$connection){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO Responses (userID, selection1, correct1, incorrect1, date, selection2, correct2, incorrect2, selection3, correct3, incorrect3, selection4, correct4, incorrect4, selection5, correct5, incorrect5, selection6, correct6, incorrect6, selection7, correct7, incorrect7, selection8, correct8, incorrect8, selection9, correct9, incorrect9, selection10, correct10, incorrect10,) VALUES ('".$userID."','".$selection1."','".$correct1."','".$incorrect1."','".$date."','".$selection2."','".$correct2."','".$incorrect2."','".$selection3."','".$correct3."','".$incorrect3."','".$selection4."','".$correct4."','".$incorrect4."','".$selection5."','".$correct5."','".$incorrect5."','".$selection6."','".$correct6."','".$incorrect6."','".$selection7."','".$correct7."','".$incorrect7."','".$selection8."','".$correct8."','".$incorrect8."','".$selection9."','".$correct9."','".$incorrect9."','".$selection10."','".$correct10."','".$incorrect10."')";
	$result = mysqli_query($connection, $sql);
	
	if(!result)
		echo "There was an error";
	else
		echo "Analytics added";
	
?>