<html>

    <head>
        <title>Exercise 2</title>

    </head>
    <body>
        <h1>Exercise 2: Loops (Write nested for-loops to produce the following console output)
        </h1>
        <h2>Print pattern with PHP </h2>
        <?php
            for ($i = 0; $i <= 5; $i++) {
                for ($j = 0; $j < $i; $j++) {
                echo "*";
                }
                echo "<br>";
            }
        ?>
        <br><a href="index.php">Main Page</a>
    </body>
</html>