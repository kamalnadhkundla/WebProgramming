

<?php
	session_start();
	include 'check.php';
    $score = 5;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 10000;
?>

<html>

<head>
	<title>Question 6</title>
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
			<th>For $50000.00: <br/>Who is the director of RRR telugu movie?</th>
		</tr>
        <tr>
       <td> A. SS Rajamouli</td> 
       </tr>
       <tr>
       <td> B. Sanjay Bhansali</td>
       </tr>
       <tr>
       <td> C. Karan Johan </td>
       </tr>
       <tr>
       <td> D. Prashanth Neel</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q7.php" method="post">
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