<html>
<head>
    <title>Exercise 5</title>
</head>
<body>
<h1>Exercise 5: Function</h1>
        <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
            Enter a string <input type = "text" name="strings" enctype="multipart/form-data"> <br><br>
            <input type = "submit" value="Submit">
        </form>
</body>
</html>

<?php

        $strings = $_POST['strings'];
        $wordCounts = countWords($strings);

        echo "The occurrences of each word are given below:<br>";
        print_r($wordCounts);

        echo '<br><br><a href="index.php">Back to Main Page</a>';

    function countWords($strings) {
        $strings = strtolower($strings);

        $words = preg_split('/\s+/', $strings, -1, PREG_SPLIT_NO_EMPTY);
        $wordCounts = array();
        foreach ($words as $word) {
            if (array_key_exists($word, $wordCounts)) {
                $wordCounts[$word]++;
            } else {
                $wordCounts[$word] = 1;
            }
        }
        return $wordCounts;
    }
?>