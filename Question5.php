<?php
function stringReverse ($string) {
    $reversed = '';  //empty string called reversed

    for ($i = strlen($string) - 1; $i >= 0; $i --){ //iterates through each character in $string in reversed order
        $reversed .= $string[$i]; //each character is appended to the reversed string (.=)=>concatenation assignment eg. $txt1.=$txt2 appends text2 to text1.
    }

    return $reversed;
}

$string = 'BackEnd';
echo $reversed;

?>