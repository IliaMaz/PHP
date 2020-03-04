<?php

/* 
    STRING FUNCTIONS   
*/

// To change the case of a string:

$myString = 'Br0h, time to walk the dog.';
// all upper
echo strtoupper($myString) . '<br>';
// all lower
echo strtolower($myString) . '<br>';
// first letter uppercase, only first
echo ucfirst($myString) . '<br>';
// first letter for every words
echo ucwords($myString) . '<br>';
//Find position of the character(s) in a string
echo strpos($myString, ',') . '<br>'; // find comma and returns the position
//use example
if (strpos($myString, ',')) {
    echo 'found <br>';
} else {
    echo 'not found <br>';
}
//Retrieve only part of the string
echo substr($myString, 14, 4) . '<br>';
echo substr($myString, 18, 4) . '<br>';
echo substr($myString, 14, 12) . '<br>'; // ! values can be negative
//Replace all occurences of selected string
echo str_replace('walk', 'replace', $myString) . '<br>';
//Remove all spaces from left and right
echo trim($myString) . '<br>';
echo trim($myString, '-'); // can use trim to remove selected char
//Convert a string into an array using a delimiter
$myString2 = 'Hello, Dog, is that you?';
$myArr = explode(' ', $myString2); // Can use any delimited i.e: comma, space, dash etc
var_dump($myArr);
//Convert array to string
$myString3 = implode('%20', $myArr);
echo $myString3;
