<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty & Beast</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username" id="" placeholder="Username">
        <br><input type="email" name="mail" id="" placeholder="E-Mail">
        <br><input type="tel" name="phone" id="" placeholder="Telephone">
        <br><input type="password" name="password" id="" placeholder="Password">
        <br><input type="submit" value="Sign Up" name="submit">
    </form>

    <?php
    include 'account.php';
    session_start();
    // ? Select file to append to and initialize file_content
    $file_handler = fopen('user.txt', 'a');
    $file_content = '';
    // ? Check if user has sent the form
    if (isset($_POST['submit'])) {
        // ? Run through the input 
        foreach ($_POST as $key => $value) {
            // ? Dump all user input into file
            $file_content .= $key . ':' . $_POST[$key] . "\r\n";
            // ? Validate and echo if valid. Ignore last array item (Submit).
            if (!empty($_POST[$key]) and $_POST[$key] != end($_POST)) {
                echo ucfirst($key) . ' is valid.' . '<br>';
                // ? Check if key contains useful session data, if so, dump into session array
                if ($key == 'username' or $key == 'mail' or $key == 'pref') {
                    $_SESSION[$key] = $_POST[$key];
                }
            }
        }
        // ? Format SESSID and dump into the same file.
        $_POST['PHPSESSID'] = "PHPSESSID:$_COOKIE[PHPSESSID] \r\n";
        fwrite($file_handler, $file_content);
        fwrite($file_handler, $_POST['PHPSESSID']);
    }
    // ? DE-THE-BUG
    var_dump($_SESSION);
    var_dump($_POST);



    ?>
</body>

</html>