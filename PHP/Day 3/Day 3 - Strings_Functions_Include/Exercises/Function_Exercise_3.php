<?php
/* 
-- Exercise 1 : 
	Write a function 'isOrder' that :
		- Take one array of integer as argument
		- Checks if the elements of the arrays are ordered in ascending order.
*/

echo '<p style="font-weight: 900"> EXERCISE 1 </p>';
$intArr = array(1, 2, 3, 3, 5, 6, 7, 8, 9, 10, 12);
function isOrder($arr)
{
	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i] + 1 == next($arr))
			echo '<br> All good';
		else
			echo '<br>' . 'Not good on pos ' . $i . ' number: ' . $arr[$i];
	}
}

echo isOrder($intArr);

/*
-- Exercise 2 :

	Write a function 'orderArray' that :
		- Take one array of integer as argument
		- Return an array which was ordered
*/
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';
$randArr = array();
for ($i = 0; $i < 20; $i++) {
	$randArr[] = rand(1, 25);
}
// ! Bubble sort for the win!
function orderArray($array)
{
	$y = sizeof($array);
	for ($i = 0; $i < $y; $i++) {
		for ($k = 0; $k < $y - $i - 1; $k++) {
			if ($array[$k] > $array[$k + 1]) {
				$t = $array[$k];
				$array[$k] = $array[$k + 1];
				$array[$k + 1] = $t;
			}
		}
	}
	return $array;
}
var_dump(orderArray($randArr));
/*
-- Exercise 3 :

	Write a function that : 
		- Take one float $x as argument
		- Get the integer part of a positive number ($x)
		- Return this integer part

	Example :
		integerPart(5.26) // return 5
		integerPart(10.76) // return 10
*/
 /*
-- Exercise 4 :

	We have an array of integers, positive, between 1 and $nbElements (nbElements is the number of elements, you can use this variable).

	Write a function call 'FizzBuzz'.
	For each number 'n' of the list, we want the following operations:
		. if the number is divisible by 3 : display 'Fizz'
		. if the number is divisible by 5 : display 'Buzz'
		. if the number is divisible by 3 AND by 5 : display 'FizzBuzz'
		. else : display the number 'n'
		*/
