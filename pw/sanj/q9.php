

<?php
	session_start();
	include 'check.php';
    $score = 8;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 250000;
?>

<html>

<head>
	<title>Question 9</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
<nav class="navbar">
        <a href="logout.php" class="button">Log Out</a>
    </nav>
<div class="background-image">

        <div class="login-container">
        <div class="login-box">
	<table>
		<tr style="height:100px">
			<th>For $50,000.00: <br/> Who is the greatest dancer of all time(GOAT)?</th>
		</tr>
        <tr>
       <td> A. Michael Jackson</td> 
       </tr>
       <tr>
       <td> B. BTS</td>
       </tr>
       <tr>
       <td> C. Beyonce </td>
       </tr>
       <tr>
       <td> D. Lady Gaga</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q10.php" method="post">
            <p class="answer">Select any one option:
                <select name="answer" size="1">
                    <option value="true">A</option>
                    <option value="false">B</option>
                    <option value="false">C</option>
                    <option value="false">D</option>
                </select>
            </p> 
            <input type="submit" value="Lock Answer" class = "submit" >
        </form>
       
    </span>
    </div>
</body>


</html>