<?php

  /**
  * Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.
  * Return your answer as a number.
  */

  // tip and trick cia yra tai, kad nereikia cia pasalinti string.
  // Returns the sum of values as an integer or float; 0 if the array is empty.
  $a = [9, 3, '7', '3'];
  function balancedNum($num) {
    return array_sum($a);      
  }
?>