
<?php
	session_start();
	include 'check.php';
	$score = 3;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 2500;
?>


<html>

<head>

	<title>Question 4</title>
   
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
			<th>For $5000.00: <br/>Which discovered the concept of gravity first?</th>
		</tr>
        <tr>
       <td> A. Aryabatta</td> 
       </tr>
       <tr>
       <td> B. Euclid</td>
       </tr>
       <tr>
       <td> C. Isaac Newton </td>
       </tr>
       <tr>
       <td> D. Valmiki</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q5.php" method="post">
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