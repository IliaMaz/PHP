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
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form action="" method="post" style="padding:1%;">
        <input type="email" name="mail" id="" placeholder="E-mail"> <br>
        <input type="password" name="password" id="" placeholder="Password"> <br>
        <input type="submit" value="Login" name="loginBtn">
    </form>
    <?php
    // * Check if login form has been sent
    if (isset($_POST['loginBtn'])) {
        // * Assign values to vars and setup the query
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $query = 'SELECT * FROM users WHERE email = ' . "'$mail'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($result);
        // * Read the password value and verify it
        $hashedPassword = $row['password'];
        $passValidation = password_verify($password, $hashedPassword);
        if ($passValidation)
            echo 'Login success!';
        else
            echo 'Wrong password or email';
    }

    ?>
</body>

</html>