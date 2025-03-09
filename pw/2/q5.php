
<?php
	session_start();
	include 'check.php';
    $score = 4;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 5000;
?>

<html>

<head>
	<title>Question 5</title>
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
			<th>For $10000.00: <br/>Which is an even number?</th>
		</tr>
        <tr>
       <td> A. 26</td> 
       </tr>
       <tr>
       <td> B. 31</td>
       </tr>
       <tr>
       <td> C. 49 </td>
       </tr>
       <tr>
       <td> D. 173</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q6.php" method="post">
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