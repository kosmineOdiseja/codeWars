<?php
/*
Task
    Given a string str, reverse it omitting all non-alphabetic characters.
example 
    For str = "krishan", the output should be "nahsirk".

    For str = "ultr53o?n", the output should be "nortlu".

 */

    $str = "ultr53o?n";
    $_str = strrev(preg_replace('/[^a-z]/', '', $str));
    echo $_str;
    
// /[^\p{L}]/u or /[^a-zA-Z]/ or /[^a-z]/i
// unicode character properties: https://www.php.net/manual/en/regexp.reference.unicode.php
// preg_replace: https://www.php.net/manual/en/function.preg-replace.php
?>