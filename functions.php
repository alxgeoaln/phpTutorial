<?php
/**
 * Created by PhpStorm.
 * User: Georgian Alin
 * Date: 19.05.2017
 * Time: 16:21
 */

function simpleFunction(){
    echo 'Hello!';
}

//simpleFunction();

function sayHello($name){
    echo "Hello $name<br>";
}

//sayHello('Joe');

function addNumbers ($num1, $num2) {
    return $num1 + $num2;
}

echo addNumbers(2,3);

#by reference

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num +=10;
}