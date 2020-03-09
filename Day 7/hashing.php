<?php

// ? HASHING PASSWORDS
if (isset($_POST['submitBtn'])) {
    $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    var_dump($hashPassword);
}
if (isset($_POST['csubmitBtn'])) {
    $hashedPass = '$2y$10$GBhhqODp3ejs9r/cSnm4Euqcx5CoLwqZE8bqEovJQXYrQRTJoLWyO';
}
if (password_verify($_POST['cpassword'], $hashedPass))
    echo 'Correct password';
else
    echo 'Incorrect password';
?>
<h2>Hash Password</h2>
<form method="post">
    <input type="text" name="password" id="">
    <input type="submit" value="SEND" name="submitBtn">
</form>
<h2>Confirm Password</h2>
<form method="post">
    <input type="text" name="cpassword" id="">
    <input type="submit" value="SEND" name="csubmitBtn">
</form>