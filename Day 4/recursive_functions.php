<?php

// ? Recursive functions

function rec($x)
{
    echo $x . '<br>';
    if ($x !== 1) {
        rec($x - 1);
    }
    echo $x * 2 . '//';
}

rec(10);
