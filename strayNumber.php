<?php 
    /**
     * You are given odd-length array of integers, in which all of them are the same, except for one sigle number. 
     * Complete the method whcih accepts such an array, and returns that single different nubmer. 
     * 
     * The input aray will always be valid! (odd-lenght >=3)
     * Examples 
     * [1, 1, 2] ==> 2
     * [17, 17, 3, 17, 17, 17, 17] ==> 3
     */
    // Tai veikia tik kai ieskome vieno skaiciaus, jei tarkim array butu dar skaicius 6 jis jo nerastu.
     $array = array(17, 17, 3, 17, 17, 17);

     function strayNumber ($array){       
         $stayNumber = array(array_search(1, array_count_values($array)));
         return $stayNumber;
    }

?>