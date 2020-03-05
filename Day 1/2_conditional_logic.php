<?php

// ? IF Syntax

$number1 = '50'; // ! Can be compared with number as a string or as a number, both ways will work, BUT YOU should avoid it

// ? Check if nmb is below 60:

if ($number1 < 60) {
    echo 'The number is less than 60';
} else {
    echo 'The number is not below 60';
}

echo '<hr>';

$number2 = '30';
// * == Check whether equal, triple equal will be checking type, as is in JS: ===
if ($number2 === 30) {
    echo 'Yes, it\'s equal';
} else {
    echo 'No, it\'s not equal';
}

// * Compare Operators
// ? same val
// * if ($var1 == $var2);
// ? same val & type
// * if ($var1 === $var2);
// ? Not equal
// * if ($var1 != $var2);
// ? Different or not the same type
// * if ($var1 !== $var2);
// ? Greater/Lower than or Equal
// * if ($var1 < $var2);
// * if ($var1 <= $var2);
// * if ($var1 >= $var2);
// * if ($var1 > $var2);

// ? Logical Operators
$var1 == $var2 && $var1 == 5;
$var1 == $var2 and $var1 == 5;

$var1 == $var2 || $var1 == 5;
$var1 == $var2 or $var1 == 5;
// ! Like or, yet both will not be true
$var1 == $var2 || $var1 == 5;
$var1 == $var2 xor $var1 == 5;

$var1 = false;
!$var1; // ? Not operator

// ! Switch condition
$movie = 'Jurassic Park';
switch ($movie) {
    case 'Star Wars':
        echo 'You liek siefie moevey';
        break;
    case 'Jurassic Park':
        echo 'You liek animals?';
    default:
        echo 'reee';
        break;
}

// ! Break makes you exit a block of code
