<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Includes a file -> reutrns a warning if an error occurs
    include 'code.php'; // ! include_once / require_once to be safe so that changes are done once.
    //Require -> Stop the execution if there is an error
    require 'codee.php';

    echo $myStr;

    ?>
</body>

</html>