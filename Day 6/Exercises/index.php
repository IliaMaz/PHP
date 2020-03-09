<?php
include_once '../database.php';
// ? Setup sql, query and var
$connectDB = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
$query = 'SELECT * FROM movies ORDER BY date_of_release ASC';

$results = mysqli_query($connectDB, $query);
$results2 = mysqli_query($connectDB, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStepBro</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="search" id="">
        <input type="submit" value="Search" name="searchSubmit">
    </form>
    <?php

    // ! Display 3 movies ordered by date of release
    echo '<h2 style="text-align: center; padding:1%; margin:1%">Welcome to the freakin movie website, stop pirating, start paying!</h2>';
    echo '<div style="display:flex; margin:auto; width: 700px; justify-content: space-between; font-family: montserrat;"> <br>';
    // ? Run through data


    // ! Should be using the following code as a fucntion
    while ($row = mysqli_fetch_assoc($results)) {
        $image = $row['poster_image'];
        echo '<div style="width: 220px; height: 378px; text-align: center; margin:1%; font-family: montserrat;">';
        // ? Make link and echo info
        echo '<a href="movie.php?id=' . $row['id'] . '">' . $row['title'] . '</a> <br>' . $row['date_of_release'] . '<br>';
        // ? Show image
        if (!empty($image))
            echo '<img style ="width: 220px; height: 328px;" src="' . $image . '">' . '<br>';
        echo '</div>';
    }

    echo '</div>';
    echo '<div style="display:flex; margin:auto; width: 700px; justify-content: space-between; font-family: montserrat;"> <br>';

    if (isset($_POST['searchSubmit'])) {
        // * Assign search value to a variable 
        $userSearch = $_POST['search'];
        // * Run through data
        while ($row2 = mysqli_fetch_assoc($results2)) {
            // * if strpos exists then echo the data & image
            if (strpos(strtolower($row2['title']), strtolower($userSearch)) !== false) {
                $image = $row2['poster_image'];
                echo '<div style="width: 220px; height: 378px; text-align: center; margin:1%; font-family: montserrat;">';
                // ? Make link and echo info
                echo '<a href="movie.php?id=' . $row2['id'] . '">' . $row2['title'] . '</a> <br>' . $row2['date_of_release'] . '<br>';
                // ? Show image
                if (!empty($image))
                    echo '<img style ="width: 220px; height: 328px;" src="' . $image . '">' . '<br>';
                echo '</div>';
            }
        }
    }
    echo '</div>';

    ?>

</body>

</html>