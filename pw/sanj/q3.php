
<?php
	session_start();
	include 'check.php';
	$score = 2;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 1000;
?>
<head>
	<title>Question 3</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
<nav class="navbar">
        <a href="logout.php" class="button">Log out</a>
    </nav>
<div class="background-image">

        <div class="login-container">
        <div class="login-box">
	<table>
		<tr style="height:100px">
			<th>For $2500.00: <br/>What is full form of GRE?</th>
		</tr>
        <tr>
       <td> A. Graduate Record Examination</td> 
       </tr>
       <tr>
       <td> B. Grad Rank Exam</td>
       </tr>
       <tr>
       <td> C. Grim Right Exam </td>
       </tr>
       <tr>
       <td> D. Georgia Race Examination</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q4.php" method="post">
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