

<?php
	session_start();
	include 'check.php';
    $score = 7;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 100000;
?>

<html>

<head>
	<title>Question 8</title>
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
			<th>For $25,000.00: <br/>Which among the movies doesn't have a sequel?</th>
		</tr>
        <tr>
       <td> A. Avenger</td> 
       </tr>
       <tr>
       <td> B. Home Alone</td>
       </tr>
       <tr>
       <td> C. Twilight </td>
       </tr>
       <tr>
       <td> D. The Vow</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q9.php" method="post">
            <p class="answer">Select any one option:
                <select name="answer" size="1">
                    <option value="false">A</option>
                    <option value="false">B</option>
                    <option value="false">C</option>
                    <option value="true">D</option>
                </select>
            </p> 
            <input type="submit" value="Lock Answer" class = "submit" >
        </form>
       
    </span>
    </div>
</body>


</html>