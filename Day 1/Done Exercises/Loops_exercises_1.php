<?php

/*
	- Exercise 1 :
		
		Based on the character exercise, display all his caracteristics using a loop.

	*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RolePlayALLDay</title>
</head>

<body>
	<?php
	echo '<br>';
	$avatarImg = "<img src='https://www.quartertothree.com/fp/wp-content/uploads/2012/10/too_drunk_to_zerg1.jpg?x94091'> ";
	echo $avatarImg;
	$firstname =  '<br>John ';
	echo $firstname;
	$lastname = 'Cena';
	echo $lastname;
	$stats = array(
		'Drinking Ability' => 'Over 9000',
		'Attack' => '1',
		'Strength' => '1',
		'Defence' => '-10',
		'Drunk Warrior' => '2 STRONK 4 U',
		'Special Attack' => 'Troll'
	);
	foreach ($stats as $key => $value) {
		echo '<br>' . $key . ' is ' . $value;
	}

	if ($stats['Attack'] > 9 or $stats['Defence'] > 9) {
		echo '<div class="alert">
			<strong>Congratulations !</strong> Your character is ready to fight.</strong>
			</div>';
	} elseif ($stats['Attack'] > 5 or $stats['Defence'] > 5) {
		echo '<div class="alert">
			<strong>Wait!</strong> Your charachter is too weeeakk!
			</div>';
	}

	?>
</body>

</html>
<?php
//? MultiSort EX 2:

$array = array("Salad" => "1.03", "Tomato" => "2.3", "Oignon" => "1.85", "Red cabbage" => "0.85");

array_multisort($array, SORT_NUMERIC);
var_dump($array);
// ! Above is sort by nmb. Below is by key and DESC order
krsort($array);
var_dump($array);

$total = 0;
foreach ($array as $key => $value) {
	$total += $value;
}
echo $total;
/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/

/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 2 etc.

		Do it by using a for AND a while loop
	*/
$numberArray = array();
for ($i = 0; $i < 21; $i++) {
	$numberArray[] = $i;
}
var_dump($numberArray);




/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/
$sum = array();
for ($i = 0; $i < 11; $i++) {
	$sum[] = $i * 2;
}
unset($sum[0]);
var_dump($sum);
/*
	-Exercise 5 :
		Create a random numerical array.
		Find the smallest value.
		Find the greatest value.
	*/
$numbers = array(3, 19, 21, 33, 64, 21, 11, 16, 77, 323, 65849, 432000000000000, 277, -120);
// ? sort($numbers);
// ? $smallestNmb = $numbers[0];
// ? rsort($numbers);
// ? $largestNmb = $numbers[0];
// ? var_dump($smallestNmb, $largestNmb)
$min = $numbers[0];
$max = $numbers[0];
//! Instead of using min max you can use arrayname[$pos] initialise pos as 0 and use the arrname[] in the condition. 
//! Get val by name[pos] and pos is contained in the var.
foreach ($numbers as $key => $value) {

	if ($min > $value) {
		$min = $value . ' located at position: ' . $key;
	} else if ($max < $value) {
		$max = $value . ' located at position: ' . $key;
	}
}
echo '<br> smallest number is: ' . $min;
echo '<br> biggest number is: ' . $max;

?>