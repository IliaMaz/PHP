<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method='get' action="">
        <input type="text" placeholder="your naem" name="firstName">
        <!--// !!!!!!! NAME IT, name will be the key in the array -->
        <input type="submit" value="Send">
    </form>
    <?php
    var_dump($_GET);

    // Check if it exists
    if (isset($_GET['firstName'])) {
        if ($_GET['firstName'] == 'Ilia') {
            echo 'Hello, ' . $_GET['firstName'];
        } else {
            echo 'You are not welcome here';
        }
    } else {
        echo 'waiting for the form to get a click';
    }

    ?>

</body>

</html>