<?php

// How to create a function
function hello_world()
{
    echo 'Hello world!';
}

hello_world();

//Return a value
function hello_world_2()
{
    return 'Hello world!'; // return is result, result can be echoed or savedd
}
echo hello_world_2();
$result = hello_world_2();

// Scope
$dogs = 'dawg';

function print_message($res, $res2)
{
    echo $res . ' ' . $res2;
}

print_message($result, $dogs); // ! sends contents of var $result to print_message($res), injected into $res which is then used in the function

// Reference the original value: function myFunction(&$VAR)
