<?php
/**
 * Created by PhpStorm.
 * User: Georgian Alin
 * Date: 20.05.2017
 * Time: 16:07
 */

$people[] = "Georgian";
$people[] = "Andreea";
$people[] = "Boschet";
$people[] = "Pipi";
$people[] = "Jega";
$people[] = "George";
$people[] = "Feli";
$people[] = "Guess Who";
$people[] = "Cabral";

$q = $_REQUEST['q'];

$suggestion = "";

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);

    foreach ($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Sugestion" : $suggestion;