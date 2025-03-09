<?php 
    session_start();
	$score = 0;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 0;
    ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Question 1</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
	
</head>
<body>
    <nav class="navbar">
    <a href="logout.php" class="button">Quit</a>
</nav>

<div class="background-image">
<!-- <nav class="navbar" >
        <a href="logout.php" class="button">Log Out</a>
    </nav> -->

        <div class="login-container">
        <div class="login-box">
	<table>
		<tr style="height:100px">
			<th>For $500.00: <br/>Which among the following is an odd number?</th>
		</tr>
        <tr>
       <td> A. 26</td> 
       </tr>
       <tr>
       <td> B. 24</td>
       </tr>
       <tr>
       <td> C. 86 </td>
       </tr>
       <tr>
       <td> D. 15</td>
       </tr>		
		</tr>
	</table>
    </div>
    </div>
    <span class="lock-answer">
        <form action="q2.php" method="post">
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
        <button> </button>
        
    </span>
    </div>
</body>
</html>