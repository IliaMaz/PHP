<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];
}

echo "name: $name <br> firstname: $firstname <br> email: $email <br> password: $password <br> password confirm: $passwordConf";
