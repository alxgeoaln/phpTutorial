<?php

/*
 * Indexed, Associative, Multi-dimensional
 */

#Indexed
$people = array('Kevin', 'Jeremy', 'Sara');
$ids = array(1, 2, 4, 5);
$cars = ['Honda', 'Toyota'];
$cars[2] = 'Chevy';
$cars[] = 'BMW';

//echo count($cars);
//print_r($cars);
//var_dump($cars); #look at the data type;


//echo $people[0];
//echo $ids[3];
//echo $cars[3];

// Associative arrays
$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'Wiliam'];
$people['Jill'] = 42;
//echo $people['Jill'];
//print_r($people);
//var_dump($people);

//Multi-Dimenisonal
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12)
);

echo $cars[1][0];