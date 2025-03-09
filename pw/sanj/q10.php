

<?php
	session_start();
	include 'check.php';
    $score = 9;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 500000;
?>

<html>

<head>
	<title>Question 10</title>
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
			<th>Final Question : $10M: <br/>What is the full form of GSU??</th>
		</tr>
        <tr>
       <td> A. Georgia State University</td> 
       </tr>
       <tr>
       <td> B. Greatest State University</td>
       </tr>
       <tr>
       <td> C. Gittle State University </td>
       </tr>
       <tr>
       <td> D. Georgia Stunt University</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="winner.php" method="post">
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