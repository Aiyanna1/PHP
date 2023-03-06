<?php
function getVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;//initializes counter at 0

    for ($i = 0; $i < strlen($string); $i++){
        if(in_array(strtolower($string[$i]), $vowels)){
            $count++;
        }
    }

    return $count;
}

$count = getVowels ('I love food, always!');

echo $count;
?>