<?php

/*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

	*/
function pyramid($n)
{
	for ($i = 0; $i < $n; $i++) {
		for ($j = 0; $j < $i; $j++) {
			echo '* ';
		}
		if ($i == 5) {
			echo '<br>';
			for ($i = 0; $i <= 5; $i++) {
				for ($j = 4 - $i; $j >= 0; $j--) {
					echo "* ";
				}
				echo "<br>";
			}
		}
		echo '<br>';
	}
}
$n = 6;
pyramid($n);

/*
	- Exercise 2 : 
		Write a PHP script which displays this pattern : 
		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

	*/

/*
	- Exercise 3 : 

		We already have two arrays :
	    $artists = array(
	        0 => array("Eminem", "IAM"), 
	        1 => array("Madonna", "Katy Perry"), 
	        2 => array("Pink Floyd", "AC/DC")
	    );
    
    
    
	    $style = array(
	        0 => "Rap",
	        1 => "Pop", 
	        2 => "Rock"
	    );   
    
 
 		Write a PHP script which merge the two arrays to have a single array looking like this :

		    $array3 =  array (      
		        "Rap" => Array (          
		            [0] => "Eminem",              
		            [1] => "IAM"    
		        ),  
		        "Pop" => Array (          
		            [0] => "Madonna",              
		            [1] => "Katy Perry"    
		        ),
		        "Rock" => Array (          
		            [0] => "Pink Floyd",              
		            [1] => "AC/DC"    
		        )            
		    )
	*/

$artists = array(
	0 => array("Eminem", "IAM"),
	1 => array("Madonna", "Katy Perry"),
	2 => array("Pink Floyd", "AC/DC")
);



$style = array(
	0 => "Rap",
	1 => "Pop",
	2 => "Rock"
);
// ! cheating
$arr = array_combine($style, $artists);
print_r($arr);
// ! no cheating
$myArr = array();
foreach ($style as $key => $value) {
	$myArr[$value] = $artists[$key];
}
var_dump($myArr);
/*
	-Exercise 4 :
	
		We have an array of bank transactions, which indicates the credit and debit amounts of each person.
		For each person, calculate the real amount of their account and it as a key/value in the array.

		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14
		    )
		);

		// Expected results : 
		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9,
		        "amount"=>3
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19,
		        "amount"=>-2
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14,
		        "amount"=>-1
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14,
		        "amount"=>4
		    )
		);
	*/
$transactions = array(
	"Marie" => array(
		"debit" => 6,
		"credit" => 9
	),
	"Julien" => array(
		"debit" => 21,
		"credit" => 19
	),
	"Sophie" => array(
		"debit" => 15,
		"credit" => 14
	),
	"John" => array(
		"debit" => 10,
		"credit" => 14
	)
);
echo '<br>';
foreach ($transactions as $keyz => $value) {
	$temp = array_values($value);
	foreach ($value as $key => $values) {
		$value['total'] = $temp[1] - $temp[0];
	}
	echo '<br>';
	var_dump($value);
}
var_dump($transactions);

/*
	- Final exercise - ONLY FOR THE BEASTS

		We have an array of integers, unsorted, with all numbers from 1 to 50 BUT one element is missing (the array is therefore 49).
		
		The goal is to find the missing item (the missing number).
		However, you have 3 constraints:
		- You have the right to LOOP the array only once!
		- You have the right to use only one variable!
		- You can not use functions (sorting etc ...)

		An example with an array with 9 elements :

			$array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	        // Le nombre manquant est 7

	        $var = ...

	        for (int i = 0; i < count($array); ++i)
	        {
	            ...
	        }

	        echo "Missing number is: " . $var;

	*/
// Making the array
$nmbArr = array();
for ($i = 0; $i < 51; $i++) {
	if ($i != 0) {
		$nmbArr[] = $i;
	}
}
unset($nmbArr[23]);
echo '<br>';
var_dump($nmbArr);

//finding the missing nmb
echo '<br>';
foreach ($nmbArr as $key => $value) {
	$mNmb =  $nmbArr[$key - 1];
	if ($key != $mNmb) {
		$mNmb = $key - 1;
		echo 'Missing number is: ' . $key . '<br> Missing number position is: ' . $mNmb;
	}
}
// * -----------------------------------------------------------------
$array = array(5, 1, 3, 2, 9, 6, 8, 4, 10);
// ? $sum = 0;
// ? $idx = -1;
// ? for ($i = 0; $i < count($array); $i++) {
// ? 	if ($array[$i] == 0) {
// ? 		$idx = $i;
// ? 	} else {
// ? 		$sum += $array[$i];
// ? 	}
// ? }
// ? 
// ? $totalz = (count($array) + 1) * count($array);  

// ! https://stackoverflow.com/questions/2113795/quickest-way-to-find-missing-number-in-an-array-of-numbers ? works

// * ------------------------------------------------------------------



foreach ($array as $key => $value) {
	$total += $value;
	echo $total;
}
$expected = 55;
if ($total != $expected) {
	$expected = $expected - $total;
	echo '<br>' . $expected;
}
