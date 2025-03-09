<?php
	session_start();
	include 'check.php';
	$score = 1;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 500;
?>
<html>

<head>
	<title>Question 2</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
<nav class="navbar">
        <a href="logout.php" class="button">Quit</a>
    </nav>
<div class="background-image">

        <div class="login-container">
        <div class="login-box">
	<table>
		<tr style="height:100px">
			<th>For $1000.00: <br/>Which among the follwing is not among 7 wonders?</th>
		</tr>
        <tr>
       <td> A. Eiffle Tower</td> 
       </tr>
       <tr>
       <td> B. Taj Mahal</td>
       </tr>
       <tr>
       <td> C. Red Fort</td>
       </tr>
       <tr>
       <td> D. Colosseum</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q3.php" method="post">
            <p class="answer">Select any one option:
                <select name="answer" size="1">
                    <option value="false">A</option>
                    <option value="false">B</option>
                    <option value="true">C</option>
                    <option value="false">D</option>
                </select>
            </p> 
            <input type="submit" value="Lock Answer" class = "submit" >
        </form>
     
    </span>
    </div>
</body>


</html>