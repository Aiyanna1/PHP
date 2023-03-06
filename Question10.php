<?php
function factorial($number) {
    if ($number < 0) {
        return null;
    }   else if ($number == 0) {
            return 1;
        }   else {
                $result = 1;
                for ($i = 1; $i <= $number; $i++) {
                     $result = $result * $i;
                 } 
                return $result;
            }
}

$number = 5;
$factorial = factorial($number);

echo "The factorial of $number is $factorial."
?>
