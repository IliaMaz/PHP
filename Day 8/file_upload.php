<?php

// ? HOW TO UPLOAD A FILE

if (isset($_POST['submitBtn'])) {
    var_dump($_FILES);
}
// !! The error element that can happen help determine what the issue is
// !! This lets you respond with a customised error message

// ? Uploaded files are placed in the temp dir on the server
// ? This temp dir can be configured in php.ini

// ! IN php.ini: Search upload_tmp to find the config for uploaded files.
// ? Restart the server to apply changes

// ? The uplaoded files need to be moved to the desired dir

$destinationDir = './uploads/';
// ! Base name returns the name of the file without full path
var_dump($_FILES);
$filePath = $destinationDir . basename($_FILES['my_file']['name']);
var_dump($filePath);

// * Limit to only images
$fileExtension = array_search($_FILES['my_file']['type'], array(
    'jpg' => 'image/jpeg',
    'png' => 'image/png',
    'gif' => 'image/gif',
));
var_dump($fileExtension);



if ($_FILES['my_file']['name'] != UPLOAD_ERR_OK) {
    echo 'Error during upload';
    die();
}

if (move_uploaded_file($_FILES['my_file']['tmp_name'], $filePath))
    echo 'Success';
else
    echo 'Error during upload';
?>

<form action="" enctype="multipart/form-data" method="post">
    Select the file: <input type="file" name="my_file"> <br>
    <input type="submit" name="submitBtn" value="Upload file">
</form>