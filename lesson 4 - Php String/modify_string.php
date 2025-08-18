<?php

/* 
    PHP Modify Strings
    --------------*

    PHP has a set of built-in functions that you can use to modify strings.

 */

//Upper Case
$india = "Jai Hind!";
echo strtoupper($india);

//Lower Case
$india = "JAI HIND!";
echo "<br>" . strtolower($india);

// Replace String
$india = "Jai Hind!";
echo "<br>" . str_replace("Hind!", "Sri Ram", $india);

//Reverse String
$india = "Jai Hind!";
echo "<br>" . strrev($india);

//Remove Whitespace
$india = "   Jai Hind!         ";
echo "<br>" . trim($india);

//Convert String into Array
$tags = "cat, dog, birds";
$result = explode(",",$tags);

print_r($result);
