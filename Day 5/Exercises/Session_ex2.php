<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>

<body>
    <?php // ! Bug out with the reset because of: Confirm Resubmission
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
        session_unset();
        if (!isset($_SESSION['first_visit'])) {
            $_SESSION['first_visit'] = date('d/M/Y');
        }
        visited();
    }
    session_destroy(); // ! clearing session array for other ex, comment out for code functionality
    ?>

    <form action="" method="post">
        <input type="submit" value="RESET" name="submit">
    </form>
</body>

</html>