<?php
function Even($num): boolean {
    if ($num % 2 === 0) {
        return true 
    } else {
        return false;
    }
}

$result = Even(7);
echo $result;

?>