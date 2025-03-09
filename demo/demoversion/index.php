<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitties Page</title>
</head>
<body>

<?php
// Array of image filenames
$imageFiles = ['kitty1.jpeg', 'kitty2.jpeg', 'kitty3.jpeg', 'kitty4.jpeg', 'kitty5.jpeg'];

// Loop through each image file and display it
foreach ($imageFiles as $imageFile) {
    echo '<img src="' . $imageFile . '" alt="Kitty Image">';
}
?>

</body>
</html>