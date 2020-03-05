<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>

<body>
    <?php
    session_start();
    var_dump($_SESSION);
    // ! date(d, M, Y);
    function visited()
    {
        if (isset($_SESSION['visited']))
            $_SESSION['visited'] += 1;
        else
            $_SESSION['visited'] = 1;
    }
    visited();
    if (isset($_POST['submit'])) {
        $_SESSION['visited'] = 0;
        unset($_POST['submit']);
        var_dump($_POST);
        visited();
    }
    ?>
    <form action="" method="post">
        <input type="submit" value="RESET" name="submit">
    </form>
</body>

</html>