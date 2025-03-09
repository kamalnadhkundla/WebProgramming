<?php
	session_save_path("session");
	session_start();

	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		header('Location: home.php');
		exit();
	}
	else{
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="login.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="background-image">
        
        <div class="login-container">
            <div class="login-box"> 
                <form action="login-process.php" method="post">
                    <h2>Log in</h2>
                    
                    <input type="text" name="username" required="" placeholder="Username">
                    
                   
                    
                    <input type="password" name="password" required="" placeholder="Password">
                   
                    <button>Submit</button> <br>
                  
                    <a href="register.php">New User? Register here</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>