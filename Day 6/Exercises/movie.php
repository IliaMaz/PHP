<?php
include_once '../database.php';

// ! Display movies ordered by date of release
$connectDB = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
// ! LIMIT 3 in query for only 3 movies
$query = 'SELECT * FROM movies INNER JOIN directors ON movies.director_id = directors.id WHERE movies.id = ' . $id;


$res = mysqli_query($connectDB, $query);
$row = mysqli_fetch_assoc($res);
$image = $row['poster_image'];
if (!empty($image))
    echo '<img src="' . $image . '">' . '<br>';
echo $row['title'] . ' released on ' . $row['date_of_release'] . '<br>' . 'Directed by: ' . $row['name'];
