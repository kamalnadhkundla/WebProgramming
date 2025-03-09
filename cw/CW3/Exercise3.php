<html>
<head>
    <title>Exercise 3</title>
</head>
<body>
<h1>Exercise 3: Function (Write a function named triangle that accepts an integer parameter representing a size in characters and prints to the console a right-aligned right triangle figure whose non-hypotenuse sides are that length. For example, the call of triangle(5); should print the following output)</h1>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
            Enter a size  <input type = "text" name="size" enctype="multipart/form-data"> <br><br>
            <input type = "submit" value="Submit">
        </form>
</body>
</html>

<?php
$size = $_POST['size'];
{
    triangle($size);
}

function triangle($size){
    if ($size <= 0){
        echo "Size should be at least 1";

    } else {
        for ($i = 0; $i <= $size; $i++) {
            for ($j = 0; $j < $i; $j++) {
            echo "*";
            }
            echo "<br>";
        }
    }
}

echo '<br><br><a href="index.php">Main Page</a>';
?>