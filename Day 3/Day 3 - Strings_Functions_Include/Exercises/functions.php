<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="nb1" id="">
        <input type="number" name="nb2" id="">
        <input type="submit" value="SEND" name="nbSubmit">
    </form>

    <?php
    if (isset($_POST['nbSubmit'])) {
        $nb1 = $_POST['nb1'];
        $nb2 = $_POST['nb2'];
        include 'Function_Exercise_1.php';
        calcIt($nb1, $nb2);
        $res = calcIt($nb1, $nb2);
        echo $res . ' <-- Exercise 1';
        var_dump($_POST);
        if ($_POST['nb1'] == '' or $_POST['nb2'] == '')
            echo 'Please enter valid numbers';
    }
    ?>

</body>

</html>