

<?php
	session_start();
	include 'check.php';
    $score = 6;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 50000;
?>

<html>

<head>
	<title>Question 7</title>
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
			<th>For $10000.00: <br/>Which movies has a sequel?</th>
		</tr>
        <tr>
       <td> A. RRR</td> 
       </tr>
       <tr>
       <td> B. Mirchi</td>
       </tr>
       <tr>
       <td> C. Avatar </td>
       </tr>
       <tr>
       <td> D. King Kong</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q8.php" method="post">
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