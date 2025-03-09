<html>
<head>
    <title>Exercise 6</title>
</head>
<body>
<h1>Exercise 6: Function (Write a function countWords($str) that takes any string of characters and finds the number of times each word occurs. You should ignore the distinction between capital and lowercase letters, and do not have to worry about dealing with characters that are not letters)</h1>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
            Enter a string <input type = "text" name="strings"> <br><br>
            Enter a character to remove <input type = "text" name="chara"> <br><br>
            <input type = "submit" value="Submit">
        </form>
</body>
</html>

<?php
        $strings = $_POST['strings'];
        $chara = $_POST['chara'];
        remove_all($strings,$chara);


        echo '<br><br><a href="index.php">Back to Main Page</a>';

    function remove_all($strings,$chara) {
        $temp="";
        $strings = strtolower($strings);
        $chara = strtolower($chara);


        for($i = 0; $i<strlen($strings);$i++){
            if($strings[$i] != $chara){
                $temp = $temp.$strings[$i];
            }
        }
        echo "String after removing the given character is:<br>";
        print_r($temp);
    }
?>