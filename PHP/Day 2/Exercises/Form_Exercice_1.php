<?php

/*
- Exercise 1 :
	1. Create an HTML form with two textbox (first and last name) and a 'submit' button.
	When the 'submit' button is clicked, display the full name of the person.
	Do not worry about what's in the textbox once the button is clicked.

	2.Now, display the first and last name in the textbox, even after the button is clicked.

	3. Suppose our site has only 5 authorized users.
	These users are contained in a table.
	For example: $users = array ("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");
	Check if the user, who enters his data, is one of the 5 users and display a suitable message.

		> Step 1: Create a PHP script that browses an array and checks whether a string is there (use a loop and a logical condition).
	    
	    > Step 2: Use step 1 to check if an user is allow

- Exercise 2 :
	1. Create an HTML form with one input (date picker) and a 'submit' button.
	When the 'submit' button is clicked, display the difference (in timestamp) between the date of today and the date in the input.
	Do not worry about what's in the input once the button is clicked.
*/

?>
<?php
// var_dump($_POST);
if (isset($_POST['firstname'])) {
	$fName = trim($_POST['firstname']);
}
if (isset($_POST['lastname'])) {
	$lName = trim($_POST['lastname']);
}
$true = false;
$users = array("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");
foreach ($users as $key => $value) {
	if ($value == "$fName $lName") {
		$true = true;
		break;
	} elseif ($value == $fName and $lName == '') {
		$true = true;
		break;
	}
}
if ($true) {
	echo "Welcome! We've been expecting you $fName $lName";
} else {
	echo 'Go away';
}

if (isset($_POST['date'])) {
	$date = $_POST['date'];
}
$inputTimeStamp = strtotime($date);
$compare = $inputTimeStamp - date('now');
echo '<br> The timestamp difference is: ' . $compare;


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form Exercise 1</title>
</head>

<body>
	<form action="" method="post">
		<input type="text" name="firstname" placeholder="First Name" value="<?php echo $fName; ?>">
		<input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lName; ?>">
		<input type="date" name="date" id="">
		<input type="submit" name="submit">
	</form>

</body>

</html>