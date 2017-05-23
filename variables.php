<?php

#VARIABLES
/*
  -Prefix $
   - Start with a letter or an underscore
   - Only letters, numbers and underscore
   - Casesensitive
 */

#DATA TYPES
/*
 * string, int,
 */

$num1 = 4;
$num2 = 10;

$string1 = 'Hello';
$string2 = 'World';
$string3 = 'They\'re here';

$greeting = $string1 . ' ' . $string2;
$greeting2 = "$string1 $string2 !";

#Constant
define('GREETING', 'Hello Everyone');


$sum = $num1 + $num2;

$output = 'Hello penis!';
echo GREETING;
