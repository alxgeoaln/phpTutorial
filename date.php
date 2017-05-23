<?php
/**
 * Created by PhpStorm.
 * User: Georgian Alin
 * Date: 19.05.2017
 * Time: 16:55
 */

//echo date('d'); //day
//echo date('m');
//echo date('Y');

//echo date('1'); //day of the week
//echo date('Y/m/d');

//echo date('h');
//echo date('i'); //min
//echo date('a'); //am or pm

//set time zome
//date_default_timezone_set('Romania/Bucharest');

//echo date('h:i:sa');

$timestamp = mktime(10,15,45,10, 3,1994);

echo date('m/d/Y', $timestamp);