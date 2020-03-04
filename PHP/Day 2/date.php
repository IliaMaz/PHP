<?php

// Most common way to deal with date in php:
// Function: date($format, $timestamp);
// Anything to do with time is always based on timestamp(Amount of seconds since 1970 1st Jan);
// Date format as string
// can retrieve current timestamp using time();

echo date('Year');
echo '<br>';
// mk_time returns a timestamp based on information
// info life: hrs, minutes, nb of days
$timestampEx = mktime(21, 20, 1, 11, 30, 29180);
echo $timestampEx;
echo '<br>';
echo date('Y-m-d', $timestampEx);

// strtotime is a function that transform a date or a text to a timestamp
$nowTimeStamp = strtotime('-1 day');
$nowTimeStamp1 = strtotime('-10 day');
$nowTimeStamp2 = strtotime('next Friday');
echo $nowTimeStamp . $nowTimeStamp1 . $nowTimeStamp2;
