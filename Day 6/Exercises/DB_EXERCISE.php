<?php
include_once '../database.php';

$connectDB = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'moviedb');
$query = "INSERT INTO movies (poster_image) VALUES ('images/...')";

// ? need an array and can insert image path into DB .. only had one image ..
