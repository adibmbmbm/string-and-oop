<?php

$strings = ["Hello", "World", "PHP", "Programming"];



foreach ($strings as $string){
    $vowelCount = 0;
    $vowelAmount= strlen($string);

    for ($i=0; $i<$vowelAmount; $i++){
        $character = strtolower($string[$i]);
        if($character == 'a'){
            $vowelCount++;
        }
        if($character == 'e'){
            $vowelCount++;
        }
        if($character == 'i'){
            $vowelCount++;
        }
        if($character == 'o'){
            $vowelCount++;
        }
        if($character == 'u'){
            $vowelCount++;
        }
        $revereseString = strrev($string);
    }

        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $revereseString \n\n";

}