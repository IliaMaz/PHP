<?php

/* -- Exercise 1 :
	
	1.1 : 
	Create a basic connection form with email and password input.

	1.2 :
	Check if a string contains the '@' symbol thanks to the 'strpos' function.
	If yes, display 'valid email';
	If no, display 'invalid email';

	1.3 :
	When the user validates the form: display a message in red if invalid, show in green if valid.

*/

/* -- Exercise 2 : 
	2.1 :
	Write a PHP script that gives the multiplication table of 2
	Multiplication table from 1 to 10 (Already done in previous exercise)

	2.2 :
	Modify this script to give the multiplication table of any number ($x for example) in a table

	2.3 :
	Create a form with one input.
	When you validate this form, it should display the multiplication table of the number you entered.
	You have to check if the value is correct (no float and no string, ONLY integer).

	2.4 :
	Display the multiplication table in a nice HTML format table style.
*/


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		<?php
		if (isset($_POST['submitnmb'])) {
			echo '		
			table,
			th,
			td {
				border: 1px solid black;
			}';
		}
		?>
	</style>
</head>

<body>
	<?php

	$form = '<form action="" method="post">
	<input type="email" name="email" id="" placeholder="E-mail">
	<input type="text" name="password" id="" placeholder="Password">
	<input type="submit" value="SEND" name="submit">
	</form>';
	$formTrue = '<form action="" method="post">
	<input type="email" name="email" id="" placeholder="E-mail" style = "border: green 1px solid;">
	<input type="text" name="password" id="" placeholder="Password" style = "border: green 1px solid;">
	<input type="submit" value="SEND" name="submit">
	</form>';
	$formFalse = '<form action="" method="post">
	<input type="email" name="email" id="" placeholder="E-mail" style = "border: red 1px solid;">
	<input type="text" name="password" id="" placeholder="Password" style = "border: red 1px solid;">
	<input type="submit" value="SEND" name="submit">
	</form>';
	$true = false;
	if (isset($_POST['submit'])) {
		$submitVal = $_POST['submit'];
		$emailVal = $_POST['email'];
		$passwordVal = $_POST['password'];
		$true = true;

		if (strpos($emailVal, '@') > 1) {
			$form = $formTrue;
			echo 'Valid email & password.';
			echo $form;
		} else {
			$form = $formFalse;
			echo 'Invalid email & password.';
			echo $form;
		}
	}
	if ($true == false) {
		echo $form;
	}

	?>
	<form action="" method="post">
		<input type="number" name="calculator" id="">
		<input type="submit" value="SEND" name="submitnmb">
	</form>
	<?php


	?>
	<table>
		<thead>
			<tr>
				<th><?php if (isset($_POST['submitnmb'])) echo 'Number'; ?></th>
				<th><?php if (isset($_POST['submitnmb'])) echo 'Multiplier'; ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
			if (isset($_POST['submitnmb'])) {
				$number = $_POST['calculator'];
				$sum = array();
				for ($i = 0; $i < 11; $i++) {
					$sum[] = $i * $number;
				}
				unset($sum[0]);
				foreach ($sum as $key => $value) {
					echo "<tr> <td>$key</td><td>$value</td> </tr>";
				}
			}
			?>
		</tbody>
	</table>
</body>

</html>