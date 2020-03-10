<?php
// * include db vars 
include_once 'database.php';
$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'user_system');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h2>Register</h2>
    <form action="" method="post" style="padding:1%;">
        <input type="text" name="username" id="" placeholder="Username"> <br>
        <input type="email" name="mail" id="" placeholder="E-mail"> <br>
        <input type="password" name="password" id="" placeholder="Password"> <br>
        <input type="password" name="confPassword" id="" placeholder="Confirm your password"> <br>
        <input type="submit" value="Register" name="registerBtn">
    </form>
    <?php
    // * Check if register form has been sent
    if (isset($_POST['registerBtn'])) {
        // * Assign entered form values to variables
        $username = $_POST['username'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $confPassword = $_POST['confPassword'];
        // * Setup E-mail check
        $checkQuery = 'SELECT * FROM users WHERE email = ' . "'$mail'";
        $ins = mysqli_query($connect, $checkQuery);
        // * Check if email is unique
        if (mysqli_num_rows($ins) == 0) {
            if (strlen($username) > 1) { // * Check if username is at least 1 char
                // * Check if passwords are same, check if @ exists, check if mail is longer than 9 chars
                if ($password === $confPassword and (strpos($mail, '@') !== false) and strlen($mail) > 9) {
                    $password = password_hash($confPassword, PASSWORD_DEFAULT); // * Encrypt password
                    // * Setup the query and insert into the DB
                    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$mail' , '$password')";
                    $insert = mysqli_query($connect, $query);
                    // ! Query debug
                    // var_dump($query); 
                    // if (mysqli_fetch_assoc($insert))
                    //     echo 'success';
                    // else
                    //     echo 'failure <br>' . var_dump($insert);
                    echo 'Registration succesfull';
                } else
                    echo 'Something went wrong with your email or password. Please make sure your passwords are the same.';
            } elseif (strlen($username) < 1)
                echo 'A username is required';
        } else
            echo 'Please enter a different E-mail, this one is already in use.';
    }

    ?>
</body>

</html>