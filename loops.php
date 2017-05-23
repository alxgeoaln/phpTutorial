<?php
/**
 * Created by PhpStorm.
 * User: Georgian Alin
 * Date: 19.05.2017
 * Time: 16:10
 */

#For loop
# @params - init, condition, inc
/*
for($i = 0; $i <= 10; $i++){
    echo 'Number'.$i;
    echo '<br>';
}
*/
#While Loop
# @params - condition

$i = 0;
/*

while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
}
 */

#Do...While
# @params - condition

$i = 0;

/*
do{
    echo $i;
    echo '<br>';
    $i++;
}
while($i < 10);
*/

#foreach
//$people = array('Brad', 'Jose', 'William');
//
//foreach ($people as $person){
//    echo $person;
//    echo '<br>';
//}

$people = array('Brad' => 'brad@x.ro', 'Jose' => 'jose@x.ro', 'William' => 'will@x.ro');

foreach ($people as $person => $email){
    echo $person. ': '. $email;
    echo '<br>';
}