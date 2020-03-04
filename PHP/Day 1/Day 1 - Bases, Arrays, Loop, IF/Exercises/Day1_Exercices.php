<?php

/* - Exercise 1 :

-- Create your first fruit array containing: "Apple, Strawberry, Pineapple, Lemon".
-- Display the value of the 2nd element.

*/
$fruit = array('Apple', 'Strawberry', 'Pineapple', 'Lemon');
echo $fruit[1];


/*
- Exercise 2
-- Create an associative array that contains the number in stock for each item: 20 T-Shirts, 10 Caps and 5 Shoes.
-- Display the stock of caps.
*/

$stock = array(
    'T-shirts' => '20',
    'Caps' => '10',
    'Shoes' => '5'
);

echo '<br> The stock of caps is ' . $stock['Caps'];

/*
- Exercise 3

The clothing store has just received a new stock of shoes and caps.
-- Add 5 caps.
-- Add 20 shoes.
-- Display the shoe stock.
*/
$stock['Caps'] += 5;
$stock['Shoes'] += 20;
echo '<br> The stock of shoes is ' . $stock['Shoes'];


/*
- Exercise 4
You have a list of contacts.
Each contact has a name, an email and a phone number.
Here is the list of these contacts:
> Name: Ricardo, Tel: 0677777777, Email: ricardo@gmail.com
> Name: Michael, Tel: 0606060606, Email: mj@gmail.com
> Name: Emmanuel, Tel: 0610101010, Email: manu@gmail.com

-- The goal of the exercise is to create an array that will contain all the information for ALL my contacts. I need to be able to access a contact's information easily and quickly.
*/
$contacts = array(
    'Ricardo' => array('Telephone' => '0677777777', 'Email' => 'ricardo@gmail.com'),
    'Michael' => array('Telephone' => '0606060606', 'Email' => 'mj@gmail.com'),
    'Emmanuel' => array('Telephone' => '0610101010', 'Email' => 'manu@gmail.com')
);

echo '<br> Ricardo can be reached using his number: ' . $contacts['Ricardo']['Telephone'] . ' or by using his email: ' . $contacts['Ricardo']['Email'];
?>
<!--

- Exercise 5
You need to create a web page with basics HTML tags.
In this page, you'll display all the characteristics of an imaginary character,
    from a role-play game.

    The character information will be saved in variables.
There is four (4) informations :
-- An avatar image
-- The last name
-- The first name
-- An array of characteristics (like attak point, defense point... put everything you want)
Use an associative array.

*/
-->
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
        'Drunk Warrior' => '2 STRONK 4 U',
        'Special Attack' => 'Troll'
    );
    foreach ($stats as $key => $value) {
        echo '<br>' . $key . ' is ' . $value;
    }
    ?>
</body>

</html>