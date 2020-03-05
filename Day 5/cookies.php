<?php
// ? Cookies are data 
// ? A file that is saved client-side
// ? Upon creation data is shared throughout all the pages within one domain
// ? Third party cookies are way less client-minded


/*
* COOKIES ! *
* A cookie is a small file (max 4kb) that is stored on the client side (on the browser)
* Once a cookie has been created, all the pages will share this cookie
? Create a cookie: 
*/
setcookie('username', 'simon', time() + 60); // ! Look at this as an associative array, time in timestamp
echo $_COOKIE['username'];
var_dump($_COOKIE);
