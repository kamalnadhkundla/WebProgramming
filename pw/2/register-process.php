<?php
	session_save_path("session");
	session_start();

	$username = $_POST["username"];
	$password = $_POST["password"];
	$passwordc = $_POST["passwordc"];
	$score = 0;

	if ($password != $passwordc ){
		$_SESSION["error"] = "Username or Password does not match";
		header('Location: error.php');
		exit();
	}

	$user_data = fopen("user_data.txt", "a");
	$data = $username . "," . $password . "," . $score;
	fwrite($user_data, $data.PHP_EOL);


	header('Location: login.php');
	exit();

?>