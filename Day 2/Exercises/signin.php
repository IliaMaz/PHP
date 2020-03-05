<?php

/*
    - Exercise : 
	
		-- Part 1 :
	   		Create two pages:
	        - signin.php: User registration page, with the following fields:
	            - Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"

	        - recap-signin.php: Page showing the summary of the information entered.

		-- Part 2 :
			1. Using the first part, merge both the signin.php and recap-signin.php files into one.
			If we arrive on the page without the form being submitted, we will post the form, otherwise we will display the summary.

			2. Add validators on the different fields of the form:
				- The name and the first name are mandatory.
				- The e-mail must be between 8 and 50 characters long and should contains @
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters

			3. Add a box "I accept the conditions of use of the product", which must be checked.

			Bonus: Make the form values ​​reappear with each submission, in case of error.
    */



$form = '<form action="" method="POST">
<input type="text" name="name" id="" placeholder="name">
<input type="text" name="firstname" id="" placeholder="firstname">
<input type="email" name="email" id="" placeholder="email">
<input type="text" name="password" id="" placeholder="password">
<input type="text" name="passwordConf" placeholder="password">
<span style= "display:flex">
<input type="checkbox" name="checkboxboi" id="">
<p>I agree to the terms and conditions</p>
</span
<input type="submit" value="Send" name="submit">
<input type="submit" value="Send" name="submit">
</form>';


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	$true = false;
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConf = $_POST['passwordConf'];
		$checkBoxBoi = $_POST['checkboxboi'];
		$true = true;
		//$form = $formRetry;
	}
	if (empty($name)) {
		echo "You're name needs at least 1 character.";
		$true = false;
	} elseif (empty($firstname)) {
		echo "You're firstname needs at least 1 character.";
		$true = false;
	} elseif (strlen($email) < 8 and strlen($email) > 50 and strpos($email, '@') == false) {
		echo "You're email needs 8 to 50 characters as well as the @ symbol.";
		$true = false;
	} elseif ($password !== $passwordConf) {
		echo "You're passwords are different";
		$true = false;
	} elseif ($password === $passwordConf and strlen($password) !== 8) {
		echo "You're password length must be 8";
		$true = false;
	} elseif ($checkBoxBoi != 'on') {
		echo "You must agree to the terms and conditions";
		$true = false;
	} elseif ($true) {
		echo "name: $name <br> firstname: $firstname <br> email: $email <br> password: $password <br> password confirm: $passwordConf";
	}


	if ($true == false) {
		echo $form;
	}

	$formRetry = '<form action="" method="POST">
	<input type="text" name="name" id="" placeholder="name" value=";
	echo $name;
	">
	<input type="text" name="firstname" id="" placeholder="firstname">
	<input type="email" name="email" id="" placeholder="email">
	<input type="text" name="password" id="" placeholder="password">
	<input type="text" name="passwordConf" placeholder="password">
	<span style= "display:flex">
	<input type="checkbox" name="checkboxboi" id="">
	<p>I agree to the terms and conditions</p>
	</span
	<input type="submit" value="Send" name="submit">
	<input type="submit" value="Send" name="submit">
	</form>';
	?>

</body>

</html>