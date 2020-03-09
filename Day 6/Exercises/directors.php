<?php
include_once '../database.php';

$connectDB = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
$query = "SELECT * FROM directors";

$res = mysqli_query($connectDB, $query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directors</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php
    // * Styling
    echo '<h2 style="text-align: center; padding:1%; margin:1%">Welcome to the freakin movie website, stop pirating, start paying!</h2>';
    echo '<div style="display:flex; margin:auto; width: 700px; justify-content: space-between; font-family: montserrat;"> <br>';
    // * run through db data
    while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        // ? Setup second query and loop
        $query2 = 'SELECT * FROM movies INNER JOIN directors ON movies.director_id = directors.id WHERE directors.id = ' . $id;
        $res2 = mysqli_query($connectDB, $query2);
        while ($row2 = mysqli_fetch_assoc($res2)) {
            $dirId = $row2['director_id'];
        }
        $image = $row['image'];
        echo '<div style="width: 220px; height: 378px; text-align: center; margin:1%; font-family: montserrat;">';
        // ? Set image
        if (!empty($image))
            echo '<img style ="width: 220px; height: 328px;" src="' . $image . '">' . '<br>';
        // ? Setup link to director page    
        echo '<a href="director.php?id=' . $dirId . '">' . $row['name'] . '</a> <br>' . $row['date_of_birth'] . '<br>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</body>

</html>