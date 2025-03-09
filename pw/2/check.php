

<?php
$answer = $_POST['answer'];
$check = strcmp($answer,"true");
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$score = $_SESSION["score"];
$amount = $_SESSION["amount"];

if ($check != 0) {
    $file = 'user_data.txt';

    // Read the entire file into an array
    $lines = file($file);

    // Loop through each line
    foreach ($lines as $index => $line) {
        // Split the line into username, password, and score
        $userData = explode(',', $line);

        // Check if the username matches
        if ($userData[0] === $username) {
            // Update the score
            $userData[2] = $score;

            // Update the line
            $lines[$index] = implode(',', $userData) . PHP_EOL; // Add newline character
        }
    }

    // Write the updated lines back to the file
    file_put_contents($file, implode('', $lines));

    // Redirect the user after all processing is done
    header("Location: loser.php");
    exit;
}
?>