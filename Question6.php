<?php
function multiply($num1, $num2) {
    $result = 0;                   //initializes variable called result to 0, for loop iterates from 1 to $num2
                                    //each iteration adds $num1 to result variable, and then returns result of multiplication(adds first input num to itself until second number is reached)

    for ($i = i; $i <= $num2; $i++) { 
        $result = $result + $num1 // can also be $result+=$num1
        
    }

    return $result
}

$result= multiply(2, 5);
echo $result;

?>

<!-- result = 0 + 2 = 2
     2nd    = 2 + 2 = 4
     3rd    = 4 + 2 = 6
     4th    = 6 + 2 = 8
     5th    = 8 + 2 = 10 -->