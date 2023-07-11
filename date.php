<?php
echo date('d'); //day
echo date('m'); //Month
echo date('Y'); //year
echo date('l'); //day of the week

echo date('Y/m/d');
echo date('m/d/Y');
echo date('m-d-Y');

echo date('h'); //hour
echo date('i'); //min
echo date('s');  //seconds
echo date('a');  //AM o PM

//set time zone

date_default_timezone_set("Asia/Kathmandu");

echo date('h:i:sa');

/*
Unix timestamp is a long integer containing the number of seconds 
between the Unix Epoch (January 1 1970 00:00:00 GMT) adn the time 
specified.

*/

$timeStamp =mktime(10, 14, 54, 9, 10, 1981);
echo $timeStamp;
echo date('m/d/Y h:i:sa', $timeStamp);

$timestamp2=strtotime('7:00pm March 22 2016');
$timestamp3=strtotime('tomorrow');
$timestamp4=strtotime('next Sunday');
$timeStamp5=strtotime('+2 Months');
$timeStamp6=strtotime('+2 Days');

echo $timestamp2;

echo date('m/d/Y h:i:sa', $timestamp2)

?>