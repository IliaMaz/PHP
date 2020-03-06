<?php
include_once '../database.php';

echo 'Welcome to the freakin movie website, stop pirating, start paying!';

// ! Display 3 movies ordered by date of release
$connectDB = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
$query = 'SELECT * FROM movies ORDER BY date_of_release ASC';

$results = mysqli_query($connectDB, $query);

echo '<br>';
while ($row = mysqli_fetch_assoc($results)) {
    $image = $row['poster_image'];
    echo '<a href="">'$row['title'] . ' released on ' . $row['date_of_release'] . '<br>';
    if (!empty($image))
        echo '<img src="' . $image . '">' . '<br>';
}
