<?php
include_once 'database.php';
// * Connect to the database
$dbTest = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
echo 'Connected';

// ! Retrieve fulll table (in our case all of our directors)

$query = 'INSERT INTO directors(name, nationality, date_of_birth) VALUES ("Martin Scorcese", "USA","1942-11-17")';
// * Execute the query
$results = mysqli_query($dbTest, $query);
// * Retrieve the results as an associative array :
// while ($row = mysqli_fetch_assoc($results)) {
//     // var_dump($row);
//     echo 'Name : ' . $row['name'] . '<br>';
//     echo 'Nationality : ' . $row['nationality'] . '<br>';
//     echo 'Date of Birth : ' . $row['date_of_birth'] . '<br>';
//     echo '<hr>';
// }

if ($results)
    echo 'Insert Success';
else
    echo 'Insert Failure';

// ! CLOSE the connection
mysqli_close($dbTest);
