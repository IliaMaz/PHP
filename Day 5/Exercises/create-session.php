<?php
session_start();
$_SESSION['visited'] = true;
var_dump($_SESSION);
var_dump($_COOKIE);
function redirect($url)
{
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();
}
redirect('get-viewed.php');
