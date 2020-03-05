<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.

		2. View the contents of the transform_to_table.txt file in an HTML table.
	*/
$file_handler = fopen('message.txt', 'r');
while (!feof($file_handler)) {
	$text = fgets($file_handler) . '<br>';
	echo $text;
}
fclose($file_handler);

$file_handler_table = fopen('transform_to_table.txt', 'r');
echo '<table style= "border: 1px solid black"> <tr>';
while (!feof($file_handler_table)) {
	$text = fgets($file_handler_table);
	// $temp = str_split($text, 7);
	// var_dump($temp);
	$boomArr = explode(': ', $text);
	var_dump($boomArr);
	if ($boomArr[0] == 'SignOut ')
		echo '<th style= "border: 1px solid black"> SignOut </th>';
	elseif ($boomArr[0] == 'Connect ')
		echo '<th style= "border: 1px solid black"> Connect </th>';

	if ($boomArr[0] == 'SignOut ' or $boomArr[0] == 'SignOut')
		echo '<td style= "border: 1px solid black">' . $boomArr[1] . '</td>';
	elseif ($boomArr[0] == 'Connect ' or $boomArr[0] == 'Connexion ')
		echo '<td style= "border: 1px solid black">' . $boomArr[1] . '</td>';
} // ! Total waste of time, way simpler way, make header: Action, time, then write using foreach



echo '</table>';
