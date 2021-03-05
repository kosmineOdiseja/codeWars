<?php
/**
 * Your car is old, it breaks easily. The shock absorbers are gone and you think it can
 * handle about 15 more bumps before it dies totally.
 * Unfortunately for you, your drive is very bumpy! Given a string showing either 
 * flat road ("_") or bumps ("n"), work out if you make it home safely. 15 bumps or under, 
 * return "Woohoo!", over 15 bumps return "Car Dead".
 * 
 */

 $x = "_nnnnnnn_n__n______nn__nn_nnn"; // should return " Car Deat "
 $x1 = "______n___n_"; // should return "woohooo!" 
 $x2 = "nnnnnnnnnnnnnnnnnnnnnnn"; // should return: " Car Deat"

function bump($x) {
    return (substr_count($x, 'n') > 15 ) ? " Car Deat" : "woohoo!";

  }
?>