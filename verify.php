<?php

	$serverApi = new ServerApi(ServerApi::V1);
	$client = new MongoDB\Client('mongodb+srv://Sami:<JSami@123>@cluster0.irozi.mongodb.net/BKS?retryWrites=true&w=majority', [], ['serverApi' => $serverApi]);
	$db = $client->test;


	$email = $_POST['inputEmail'];
	$pswd = $_POST['inputPasswd'];

	$conn = mysqli_connect("localhost", "root", "", "BKS");
	if(!$conn){
		echo "Cannot connecto to database " . mysqli_connect_error($conn);
		exit;
	}

	$query = "SELECT username, password FROM admin";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty!";
		exit;
	}

	while ($row = mysqli_fetch_assoc($result)){
		if($email == $row['username'] && $pswd == $row['password']){
			echo "Welcome admin! Long time no see";
			break;
		}
	}



?>
