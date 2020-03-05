<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 1 :

Write a recursive function that will:
- Take an integer (for xple $x) and display it.
- If $x is less than 50, display all numbers from $x to 50
*/

function showMe($x)
{
    echo $x . '<br>';
    if ($x < 50)
        showMe($x + 1);
}
showMe(10);
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
-- Exercise 2 :

Write a recursive function that will calculate the multiplication of two numbers using only the addition.

*/
function multiStupid($n1 = 2, $n2 = 10)
{
    if ($n2 == 0) {
        return 0;
    } else {
        return $n1 + multiStupid($n1, $n2 - 1); // ! Didnt know you can do this, found out thanks to Ilyes & Aurelien
    }
}
echo multiStupid(2, 10);
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3 : 

Ecrire une fonction récursive qui va calculer le factorielle d'un nombre.
La factorielle de 5 se note 5! et équivaut à 5! = 5 * 4 * 3 * 2 * 1.
La factorielle de 5 est donc égal à 120 (5! = 120). 
Voici l'équation d'une factorielle : n! = n * (n – 1) * … * 3 * 2 * 1

Write a recursive function that will calculate the factorial of a number.
The factorial of 5 is 5! and equals to    5! = 5 * 4 * 3 * 2 * 1.
The factorial of 5 is therefore equal to 120 (5! = 120).
Here is the equation of a factorial: n! = n * (n - 1) * ... * 3 * 2 * 1
*/
function reverseFuck($n)
{
    if ($n == 1)
        return $n;
    else {
        $result = $n * reverseFuck($n - 1);
    }
    return $result;
}
echo reverseFuck(5);
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE IDIOTS </p>';
// ! The idiots thought of this one, I had a very fun time leading brain through the steps.
function reverseMultiFuck($m)
{
    if ($m == 1)
        $result = $m;
    else {
        $result = multiStupid($m, reverseMultiFuck($m - 1));
    }
    return $result;
}
echo reverseMultiFuck(6);
