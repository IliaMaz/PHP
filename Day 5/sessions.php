<?php

/*

* Session is a file stored on the server.

* When a session is created, a cookie containing the id of the session is stored on the client.

* Session can store a lot of data.

* The values of a session are automatically destroyed when you close the browser.

*/

// ! START the session before anything else i.e HTML TAGS

session_start();

// ! create or update a session value.

// $_SESSION['page_view'] = 1;
var_dump($_SESSION);
var_dump($_COOKIE);

if (isset($_SESSION['page_view'])) {
    $_SESSION['page_view'] += 1;
} else {
    $_SESSION['page_view'] = 1;
}
session_destroy();
//delete the session from the script
//session_unset();

// delete from the file system
//session_destroy();

// ! Regenerate the session id
session_regenerate_id(); // ? 1 ID 1 SESSION
