 <?php
    $userList = file("user_data.txt");
    $userRow = array();
    $userNScore = array();
    $leaderBoardCount = 0;
    $lengthOfLeaderboard = 5;

    foreach($userList as $row){
        $userRow[] = explode(",", $row);
        foreach($userRow as $user){
            $userNScore[$user[0]] = $user[2];
        }
    }
    arsort($userNScore, SORT_NATURAL);
?>

<!DOCTYPE html>
<html>
<head>
    <title >Leaderboard</title>
    <link href="leaderboard.css" type="text/css" rel="stylesheet" />
   
</head>
<body>
<div class="background-image">
<h1>Leaderboard</h1>

<table id="table-container">
<tbody>
<tr class="head">
    <th>Rank</th>
    <th>Participants</th>
    <th>Scores</th>
</tr>
<?php
foreach($userNScore as $key => $value){
    $leaderBoardCount++;
    echo"
    <tr class=row>
        <td class=name>$leaderBoardCount</td>
        <td class=rank>$key</td>
        <td class=score>$value</td>
    </tr>";
    
    if($leaderBoardCount == $lengthOfLeaderboard){
        break;
    }
}
?>
</tbody>
</table>

<div class="extraButtons">
    <a href="home.php" class="button">Go to Home Page</a> <br>
    <a href="logout.php" class="button">Log Out</a> <br>
   
</div>
</div>
</body>
</html>