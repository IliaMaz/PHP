<?php
session_start();
var_dump($_SESSION);
var_dump($_COOKIE);

if (isset($_SESSION['visited']))
    echo 'You have visited the create session page';
else
    echo 'You have not visited the page';
