<?php

function sumNumbers($num) {
    $result = 0;

    for ($i = 0; $i < count($num); $i++) {  //count($numbers) function call that takes in the input array in $num and will see how many numbers are contained in the array, which will then let the loop know after how many iterations it will stop.
        $result = $result + $num[$i];
    }

    return $result;
}

$num = array(1, 3, 5, 7, 9);
$result = sumNumbers($num);
echo $result;
?>

