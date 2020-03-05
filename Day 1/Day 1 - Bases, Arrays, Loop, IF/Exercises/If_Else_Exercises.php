<?php

/*- Exercice : 

-- Part 1 :
	Based on the 'character' exercise, make sure that, if its characteristic "Attak" or "Defense" are greater than 9, an additional message is displayed:

	<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.</strong>
	</div>

-- Part 2 : 

		Add a conddition, if it is below 5, display message :

        <div class="alert">
            <strong>Wait !</strong> Your charachter is too weeeakk!
        </div>
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