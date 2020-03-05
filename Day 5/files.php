<?php

/* 

FILE MANIPULATION

Read a file:
*/

// $filecontent = readfile('movies.txt'); // ! PATH
// echo $filecontent;

// Check if file exists:
// ! Kind of working the same way, same output at this point
// if (file_exists('movies.txt')) {
//     $filecontent = file_get_contents('movies.txt');
//     echo $filecontent;
// }
// * Check if file exists
if (file_exists('movies.txt')) {
    // * Open a file and save its location
    $file_handler = fopen('movies.txt', 'r'); // ? Read up on various arguments for this function

    // * Loop through the whole file line by line
    while (!feof($file_handler)) { // ! Tests for end of file
        // * Retrieve content
        $line_of_text = fgets($file_handler) . '<br>';
        echo $line_of_text; // ! Can tell function to stop if encounters a selected char
    }
    // ! Close the file, otherwise the process will live on and use resources
    fclose($file_handler); // * IF you dont close it here, at the end of the function/script/condition it will be closed.
}

// ! Open a file in writing mode, IF it doesn't exist it will be created

$file_handle = fopen('test_file.txt', 'a'); // ! WIll overwrite, if you want to append you need to use 'a' instead of 'w'
$file_content = "HELLLOOOOO, DOGS BE WALKIN HERE\r\n";

fwrite($file_handle, $file_content);
fclose($file_handle);

// * Copy a file
// * copy('movies.txt', 'copyfile.txt');

// ! Delete a file
// ! unlink('movies.txt');

// ! You can manipulate a variety of file, i.e: JSON, CSV, HTML, TXT... ETC
