<?php

function validation()
{
    if (isset($_POST['submit'])) {
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
    }
    $file_read = fopen('users.txt', 'r');
    while (!feof($file_read)) {
        $text = fgets($file_read);
        $textArray = explode(';', $text);
        $textArray[0] = substr($textArray[0], 5);
        $textArray[1] = substr($textArray[1], 9);
        // var_dump($textArray); // ! Arr Search
        // var_dump(array_search($mail, $textArray));
        if (array_search($mail, $textArray) == false or array_search($pass, $textArray) == false) {
            $temp = false;
        }
    }
    if ($temp == false) {
        return $temp;
    } else {
        return true;
    }
}
validation();
if (validation())
    echo 'Your credentials are correct';
else
    echo 'One or both of your credentials were incorrect';

// ! THOUGH it works, there are way simpler ways to validate. 
// ! i.e: dont edit data, format the input data to then check if equal
$buildData = 'mail=' . $_POST['mail'] . ';' . 'password=' . $_POST['pass'];

if (file_exists('users.txt')) {
    $file = fopen('users.txt', 'r');
    $userFound = false;
    while (!feof($file)) {
        $line_of_text = trim(fgets($file));
        if ($line_of_text == $buildData) {
            $userFound = true;
            echo 'You are logged in';
            break;
        }
    }
}

if ($userFound == false)
    echo 'Wrong email or password';
