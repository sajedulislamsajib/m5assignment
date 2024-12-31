<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $value){
    echo "Original String: $value,";
    echo "Vowel Count:".vowelCount($value);
    echo " Reversed String:".reversedString($value)."<br>";
}


function vowelCount($value){
    $noOfVowel = 0;
   for($i=0; $i<strlen($value); $i++){
    $value = strtolower($value);
    if($value[$i]=="a" || $value[$i]=="e" || $value[$i]=="i" || $value[$i]=="o" || $value[$i]=="u" ){
        $noOfVowel++;
    }
   }
   return $noOfVowel;
}


function reversedString($value){
    $reverse = strrev($value);
    return $reverse;
}