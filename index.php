<?php

require 'db.php';

// __________________________________________________________________________________________________



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-1</title>

    
    
</head>

<body>

    <h1>MOVIES</h1>

    <ul>
        <?php
        foreach ($movies as $movie) {

            echo "
            <li>
                " . $movie->getFullMovie() . "
            </li>";
        }
        ?>
    </ul>

    

</body>

</html>