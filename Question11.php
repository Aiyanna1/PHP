<?php

function fibonacci($number) {
    if ($number <= 1) {
      return $number;
    } else {
      return fibonacci($number - 1) + fibonacci($number - 2);
    }
  }
  
  $number = 10;
  $fibonacci = fibonacci($number);
  echo "$fibonacci is the $number th number in the fibonacci sequence.";
  
?>