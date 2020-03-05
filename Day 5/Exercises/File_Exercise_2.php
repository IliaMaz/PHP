<?php

/*
		Create a script that saves in the last_access.log file the timestamp of this time (now).

		We will replace the old timestamp.

		Choose the right setting to open the file
	 */
$f_handle = fopen('last_access.log', 'w');
$f_read = fopen('last_access.log', 'r');
$time = time();
fwrite($f_handle, $time);
$text = fgets($f_read) . '<br>';
echo $text;
