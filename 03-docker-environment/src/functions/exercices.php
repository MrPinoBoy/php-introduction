<?php
$name = "émile";

function capitalize($name){
    $cap = mb_strtoupper(substr($name,0,2), "UTF-8") . substr($name,2);
    echo $cap . "<br>";
}

capitalize($name);

$year = date("y");
echo $year . "<br>";

$date = date("l H:i:s");
echo $date . "<br>";

function sum($number1, $number2) {
    if (is_int($number1) and is_int($number2)){
    echo $number1 + $number2 . "<br>";
    } else {
        echo "Error: Argument is not a number";
    }
}

sum(4,8);

function acronymMaker($string) {
    echo $string . "<br>";
    $stringArray = explode(" ", $string);
    $acrArray = [];
    foreach($stringArray as $string) {
        $acrArray[] = strtoupper($string[0]);
    }
    echo implode("", $acrArray) . "<br>";
}

acronymMaker("Du feu comprimé pour qu'ils gobent la pillule, bien sur j'suis killu philly flingue Lucky Luke");

$aerray = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];

function replaceae($horribleWords) {
    foreach($horribleWords as $horribleWord) {
        echo str_replace("ae","æ",$horribleWord) . "<br>";
    }

}

replaceae($aerray);

$earray = ["cæcotrophie", "chænichthys","microsphæra", "sphærotheca"];

function aereplace($horribleWords) {
    foreach($horribleWords as $horribleWord) {
    echo str_replace("æ","ae",$horribleWord) . "<br>";
    }
}

aereplace($earray);

function feedback($msg, $status = "info") { //if $status isn't defined, it will take the value "info"
    echo "<div class='$status'>$status: $msg.</div>";
}

feedback("test");

echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

function coneVolume($height, $ray){
    
    $volume = $ray ** 2 * 3.14 * $height * (1/3);
    echo "The volume of a cone which ray is $ray and height is $height is: $volume";
}

coneVolume(2,5);
