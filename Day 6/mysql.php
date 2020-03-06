<?php


include_once 'database.php';
// * Connect to the database
$dbTest = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
echo 'Connected' . '<br>';

// ! Retrieve fulll table (in our case all of our directors)

$query = 'SELECT * FROM directors';
// * Execute the query
$results = mysqli_query($dbTest, $query);
// * Retrieve the results as an associative array :
while ($row = mysqli_fetch_assoc($results)) {
    // var_dump($row);
    echo 'Name : ' . $row['name'] . '<br>';
    echo 'Nationality : ' . $row['nationality'] . '<br>';
    echo 'Date of Birth : ' . $row['date_of_birth'] . '<br>';
    echo '<hr>';
}

mysqli_close($dbTest);
