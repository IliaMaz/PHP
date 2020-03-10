<?php
session_start();
include 'database.php';
$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, 'user_system');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>

<body>
    <h2>Account Settings</h2>
    <form action="" method="post" enctype="multipart/form-data" style="padding:1%;">
        <p>Change your username</p>
        <input type="text" name="username" id="" placeholder="Username"> <br>
        <p>Change your email</p>
        <input type="email" name="mail" id="" placeholder="E-mail"> <br>
        <p>Change your password</p>
        <input type="password" name="password" id="" placeholder="Password"> <br>
        <input type="password" name="confPassword" id="" placeholder="Confirm your password"> <br>
        <p>Upload your profile picture!</p>
        <input type="file" name="profile_picture"> <br>
        <input type="submit" value="Update" name="settingsBtn"> Max 2MB
    </form>
    <?php
    // ! ALl vardumps are here for visualisation of the process.
    // var_dump($_COOKIE);
    $id = $_COOKIE['id'];
    if (isset($_POST['settingsBtn'])) {
        if (!empty($_POST['username'])) {
            $username = $_POST['username'];
            $query = "UPDATE users SET username = '$username' WHERE id = " . "'$id'";
            var_dump($query);
            $userInsert = mysqli_query($connect, $query);
        }
        if (!empty($_POST['mail'])) {
            $mail = $_POST['mail'];
            $query = "UPDATE users SET email = '$mail' WHERE id = " . "'$id'";
            var_dump($query);
            $userInsert = mysqli_query($connect, $query);
        }
        if (!empty($_POST['password']))
            $password = $_POST['password'];
        if (!empty($_POST['confPassword']))
            $confPassword = $_POST['confPassword'];

        if (!empty($password) and $password == $confPassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "UPDATE users SET password = '$password' WHERE id = " . "'$id'";
            $passInsert = mysqli_query($connect, $query);
            // var_dump($query);
        }

        $destinationDir = './uploads/';
        $filePath = $destinationDir . basename($_FILES['profile_picture']['name']);
        // var_dump($_FILES);
        // var_dump($filePath);
        if ($_FILES['profile_picture']['name'] != UPLOAD_ERR_OK) {
            echo 'Error during upload';
            die();
        }

        if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $filePath)) {
            echo 'Success: <br>';
            $query = "UPDATE users SET profile_picture = '$filePath' WHERE id = '$id';";
            $insertPicture = mysqli_query($connect, $query);
            // var_dump($insertPicture);
            // var_dump($query);
            echo '<img style="width:500px;" src="' . $filePath . '">';
        } else
            echo 'Error during upload';
    }
    ?>
</body>

</html>