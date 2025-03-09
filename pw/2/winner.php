
<?php
session_start();
include 'check.php';
$score = 10;
$amount = 1000000;
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$_SESSION["score"] = $score;
$_SESSION["amount"] = 1000000;
$lines = file('user_data.txt');
$result = '';

foreach($lines as $line) {
    $data = explode(',', $line);
    if($data[0] == $username) {
        $result .= $username . "," . $password . "," . $score . "," . $amount . "\n";
    } else {
        $result .= $line;
    }
}

file_put_contents('user_data.txt', $result);

   
?>
<html>
<head>
	<title>WINNER</title>
	<link href="winner.css" type="text/css" rel="stylesheet" />
</head>
<body >
    <div class ="gif">
        <img src="winner.gif" alt="winner">
</div>
    
<div class="loser-message">
<h2 >YOU WON $1,000,000!</h2>
<h2 >YOU'RE A MILLIONAIRE!</h2>
        <div class="button-container">
            <a href="leaderboard.php">View Leaderboard</a>
            <a href="home.php">Go to Homepage</a>
        </div>
    </div>
</body>
</html>