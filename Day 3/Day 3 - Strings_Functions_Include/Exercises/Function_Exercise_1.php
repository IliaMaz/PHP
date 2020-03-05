<!-- http://localhost/PHP/Day%203/Day%203%20-%20Strings_Functions_Include/Exercises/Function_Exercise_1.php --> index.php screws everything
<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

function calcIt($nb1, $nb2)
{
	return $nb1 * $nb2;
}

/*
-- Exercise 1 :
//                                         !!!!! Ex 1 is located under functions.php in this dir.	
	1.1
	Write a PHP script which multiply two numbers
	Example : 2*4 = 8

	1.2
	Write a function which :
	    - Take 2 numbers in parameters
	    - Returns the result of the multiplication of the two numbers
	    
	1.3
	Create a form that:
	- Allows to enter 2 numbers
	- Get the result of the multiplication of these 2 numbers
		(use the function created in 1.2)
	- Warning, it is necessary to manage the case where the user does not enter the two numbers.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';
// Compares two numbers
function comparison($max, $min)
{
	if ($min > $max) {
		echo $min . ' is bigger than ' . $max;
	} elseif ($min < $max) {
		echo $max . ' is bigger than ' . $min;
	} elseif ($min == $max) {
		echo 'They are equal';
	}
}
echo comparison(4, 9);
/*
- Exercise 2

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    The first number is larger (if the first number is larger than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';
$john = array();
$sum = 0;
for ($i = 0; $i < 10; $i++) {
	$john[] = rand(0, 5);
	$sum += $john[$i];
}
$total = 0;
// Sums the Array
function expenses($array, $total)
{
	for ($i = 0; $i < 10; $i++) {
		$total += $array[$i];
	}
	return $total;
}
echo expenses($john, $total) . ' is the sum.';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses.
	    - Calculates the sum of John's expenses over the year

	3.2
	Write a function that will:
	- Take an expense array as input
	- Calculate the sum of the expenses of the table
	- return this sum

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';
// ! $exPalindrome = 'kayak';
// ! if (strrev($exPalindrome) == $exPalindrome) {
// ! 	echo ucfirst($exPalindrome) . ' is a palindrome';
// ! }

// Uncommented code does the job.
$word = 'xanax';
function palindrome($string)
{
	//	if (strrev($string) == $string) {
	//		echo ucfirst($string) . ' is a palindrome';
	//	} else {
	//		echo ucfirst($string) . ' is not a palindrome';
	//	}
	$temp_char = '';
	for ($i = strlen($string); $i > -1; $i--) {
		$temp = substr($string, $i, 1);
		$temp_char .= $temp;
	}
	return $temp_char;
}

echo palindrome($word);
/*
-- Exercice 4

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';
//Checks if number is prime
function primeCheck($nmb)
{
	$divBy2 = $nmb / 2;
	if ($nmb == 1)
		echo 'Your number is not a prime';
	if ($nmb == 2)
		echo 'Your number is a prime';
	$x = sqrt($nmb);
	$x = floor($x);
	for ($i = 2; $i <= $x; ++$i) {
		if ($nmb % $i == 0) {
			break;
		}
	}

	if ($x == $i - 1) {
		return true;
	} else {
		return false;
	}
}
$testNmb = 1217;

if (primeCheck($testNmb) == 1) {
	echo 'Its a prime';
} else {
	echo 'Not a prime';
}

/*
-- Exercice 5

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';
// Injects image onto page
function htmlImages($src)
{
	echo '<form action="" method="POST"><input type="text" name="imgUrl" id="" placeholder="Image url"><input type="submit" value="Send"></form>';
	if (isset($_POST['imgUrl'])) {
		echo "<img src=" . $_POST['imgUrl'] . " " . "alt= You are seeing this if your URL was invalid>";
	} else {
		echo "<img src=" . $src . " " . "alt= 'You are seeing this if your URL was invalid'>";
	}
}
$src = 'https://images-na.ssl-images-amazon.com/images/S/sgp-catalog-images/region_US/mgm-AZ_87064M-Full-Image_GalleryBackground-en-US-1483993511058._SX1080_.jpg';
htmlImages($src); // * Can take 0 args using the users input
/*

-- Exercice 6
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';
// Has defaults, can take 0 to 2 values
function multiplier($n1 = 5, $n2 = 4)
{
	return $n1 * $n2;
}
echo multiplier(4);
/*
-- Exercice 7

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';
// ! MY OWN F WORK.
$toppings = array("Cheese", "Pepperoni", "Black Olives", "REEET", "Not Stolen", "From", "Ilia");
function reverseArr($array, $size)
{
	for ($i = $size; $i > -1; $i--)
		$array[] = $array[$i];
	for ($i = 0; $i < $size + 1; $i++)
		unset($array[$i]);
	return $array;
}
$size = sizeof($toppings) - 1;

var_dump(array_values(reverseArr($toppings, $size)));
/* 	$size = sizeof($array);
	for ($i = $size - 1; $i >= 0; $i--) {
		echo $array[$i];
		$array[] = $array[$i];
		var_dump($array);
		if ($i == 0) {
			unset($array[range(0, 3)]);
		}
	}
	return $array; // ! kinda working except for the unset part
 */
/*
-- Exercice 8 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9</p>';
$randString = 'Hello world I\'ve been very   bored  a a  ';
function countWords($text)
{
	$boom = explode(' ', $text);
	echo count($boom) . ' is the amount of words.';
	foreach ($boom as $key => $value) {
		trim($value);
		if ($value == '') {
			unset($boom[$key]);
		}
	}
	var_dump($boom);
	$dupe_check = array(); // ! <-- didnt do ex 10, wanted to but started recursive.
}
countWords($randString);

/*	
-- Exercise 9
Ecrire une fonction countWords($text) qui :
    - prend une chaine de caractère en argument ($text)
    - calcule le nombre de mots dans la chaine de caractère $text
    - retourne le résultat
Indice : il faut utiliser une fonction qui permet de découper une phrase en mots (déjà vu en cours)

Write a function 'countWords($text)' that:
    - takes a string of characters in argument ($text)
    - calculate the number of words in the $text string
    - return the result
Hint: use a function that allows you to split a sentence into words (already seen in class)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

/*
-- Exercice 10 :
Repeat the previous exercise and write a countEachWords($test) function that:
    - takes a string of characters in argument ($text)
    - for each word present in $text, calculate how many times this word appears
    - return the result as an associative array

For example : "this is a random sentence, it is totally random".
Expected result :
    array( "this" -> 1, 
            "is" -> 2,
            "a" -> 1,
            "random" -> 2
            ....... );
*/
