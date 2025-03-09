<html>
<head>
    <title>Exercise 4</title>
</head>
<body>
<h1>Exercise 4: Function (Write a function named word_count that accepts a string as its parameter and returns the number of words in the string. A word is a sequence of one or more non-space characters (any character other than ' ')</h1>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
            Enter a string <input type = "text" name="strings" enctype="multipart/form-data"> <br><br>
            <input type = "submit" value="Submit">
        </form>
</body>
</html>

<?php
{
    $strings = $_POST['strings'];
    word_count($strings);
}

function word_count($strings){
    $count=1;

    $strings = trim($strings);
    
    for($i=0;$i<strlen($strings);$i++){
        
        if($strings[$i] == " "){
            $count++;
        }
    }

    if($count == 0 || $strings == ''){
        echo "Enter a string!";
    } else {
       
        echo "Number of words in the given string is/are ".($count);
    }
    echo "<br>";
}

echo '<a href="index.php">Main Page</a>';
?>