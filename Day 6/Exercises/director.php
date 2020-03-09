<?php
include_once '../database.php';
// ? Setup sql connection and query
$connectDB = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = 'SELECT * FROM movies INNER JOIN directors ON movies.director_id = directors.id WHERE directors.id = ' . $id;
// ! result limit to 3
$query2 = 'SELECT * FROM movies INNER JOIN directors ON movies.director_id = directors.id WHERE directors.id = ' . $id . 'LIMIT 3'; // ! needs order by views desc if using limit 3
$res = mysqli_query($connectDB, $query);
$res2 = mysqli_query($connectDB, $query2);

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
    // ? Style
    echo '<h2 style="text-align: center; padding:1%; margin:1%">Welcome to the freakin movie website, stop pirating, start paying!</h2>';
    $sum = 0;
    $top3 = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $sum += $row['views'];
        $image = $row['image'];
        $imageDir = $row['poster_image'];
        echo '<div style="width: 270px; height: 278px; text-align: center; margin:2%; font-family: montserrat;">';
        // ? Inject image
        if (!empty($image))
            echo '<img style="width: 270px; height: 278px; text-align: center; margin:2%; font-family: montserrat;" src="' . $image . '">' . '<br>';
        // ? Echo info
        echo $row['name'] . '</a> <br>' . $row['date_of_birth'] . '<br>' . $row['nationality'] . '<br>';
        echo '</div>';
        echo '<div style="width: 220px; height: 378px; text-align: center; margin:5%; font-family: montserrat;">';
        // ? Inject image
        if (!empty($imageDir))
            echo '<br><img style="width: 220px; height: 378px; margin:5%;" src="' . $imageDir . '">' . '<br>';
        // ? Echo info
        echo $row['title'] . '<br>' . ' Released on: ' . $row['date_of_release'] . '<br>';
        echo '</div>';
        $top3[$row['id']] = $row['views'];
    }
    echo 'The total views for all of his movies: ' . $sum;
    asort($top3);
    echo '<br>';
    echo 'Top movies: ';
    echo '<br>';
    // ! Fetch full assoc array
    $row2 = mysqli_fetch_all($res2, MYSQLI_ASSOC);

    // * jump through the two arrays to the data
    foreach ($row2 as $key => $val) {
        foreach ($val as $key => $value) {
            // * Save id value if key is the id.
            if ($key == 'id')
                $id = $val[$key];
            // * Echo the poster and the link around it
            if ($key == 'poster_image')
                echo '<a href="movie.php?id=' . $id . '"><img style="width: 270px; height: 278px; text-align: center; margin:2%; font-family: montserrat;" src="' . $value . '"><br> </a>';
        }
    }


    ?>
</body>

</html>