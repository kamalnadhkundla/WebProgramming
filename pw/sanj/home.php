<?php
    
    session_start();

    
    if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
        
    }
    else {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Who Wants to be a Millionaire?</title>
	<link href="home.css" type="text/css" rel="stylesheet" />
</head>
<body>

	
	
<div class="background-image">
    <nav class="navbar">
        <a href="logout.php" class="button">Log Out</a>
    </nav>

    <div class="login-container">
        <div class="login-box"> 
            <h1>WELCOME, <?php print_r($_SESSION["username"]);?></h1>
            
	
            <p>RULES: Answer incorrectly, and the game is over.<br/>
            Answer correctly, and move on to the next question.<br/>
            10 correct answers makes you a millionaire!</p>
            <a href="q1.php" class="button">Start the game!!</a> <br>
            <a href="leaderboard.php" class="button">See Leaderboard</a>
        
		
    </div>
    </div>
</div>
</body>
</html>