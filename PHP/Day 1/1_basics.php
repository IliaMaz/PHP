<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo 'so cool'; ?>
    </title>
</head>

<body>

    <?php

    // !! TYPE EVERYTHING YOU WANT, IT DOESN'T REALLY MATTER
    /* TYPE FOREVER */

    echo 'broh mohmehnts';

    //?? Create a var and assign val

    $firstName = ' Ilia';
    echo $firstName;

    // !! SOME RULES for Vars
    // ?? Start with a dollar
    // !! DONT start with a number
    // !! DONT use symbols (except underscore)
    // ** Case sesitive $firstName != $firstname

    $simpleNumber = 559;
    $simplecalc =  $simpleNumber * 2.5;
    echo $simplecalc;

    // ** Assign boolean

    $isTrue = false;

    // ?? Create an array

    $fruits = array('apple', 'orange', 'memes');

    // ?? For readability
    $fruits = array(
        0 => 'apple', // ?? Done automatically
        'orange',
        'memes'
    );

    // ?? Different variant of making an array

    $fruits[0] = 'apple';
    $fruits[1] = 'orange';
    $fruits[2] = 'memes';

    // ** Add an element to the array
    $fruits[3] = 'mango';
    // !! to place an element at the end of the array on auto
    $fruits[] = 'tango';

    // ?? Access a specific val in an array is always the same
    echo $fruits[1];

    // !! Print contents of VAR
    // !! NOT possible to echo an array
    var_dump($fruits);

    // !! Associative array
    $movies = array(
        'Star Wars' => 'SciFi Movie',
        'NightCrawler' => 'Thriller'
    );

    $movies['Bright'] = 'Fantasy';

    //!! echoing a false value will show an error message saying index is undefined
    echo $movies['Bright'];

    var_dump($movies);

    //!! You can make ArrayCeption(Multi-Dimensional array), it is totally ok to divide by 0.
    $movieType = array(
        'Thriller' => array('NightCrawler', 'Seven'),
        'SciFi' => array('Star Wars', 'Star Trek')
    );

    // ?? Add new element
    $movieType['Thriller'][] = 'New Movie';

    echo '<hr>';

    var_dump($movieType);

    var_dump($movieType['Thriller'][0]);
    echo $movieType['Thriller'][0];

    echo '<hr>';

    // ** Do math
    $result = 2; // !! + - / *
    // ?? Same thing > as in JS
    $result = $result + 10;
    $result += 10;;
    // !! Can do this for every operator

    // ** In the case of incrementing/decrementing 
    $result = $result + 1;
    $result += 1;
    $result++;
    // ** decrement
    $result--;
    echo $result;

    echo '<hr>';

    // ?? Know the type of VARS/Data

    $firstName = 'Bor';
    $lastName = 'Yop';
    $heigh = 1.90;

    // ! Dot concatenates:

    echo 'hello, ' . $firstName;
    // ! Difference between using single and double quotes: Single only interpret the string and Double interprets string as well as Vars THE FOLLOWING IS NOT RECOMMENED, USE DOT FOR CONCATENATION
    echo "<br>hello,  $firstName";

    // ? Get the type of a VAR
    echo '<br>$firstName is of type: ' . gettype($firstName);

    // ! function not suggest to use: kills the script/stops execution, everything after is inconsequential
    // ? Can give arguments to the die function.
    // ! die('<br>This will not twerk');

    // * Escape chars

    echo '<br>It\'s easy';

    ?>

</body>

</html>