<?php

/* 
    PHP Slicing Strings
    --------------*
    The PHP substr() function is used to extract a part of a string (slice a string).
    Specify the start index and the number of characters you want to return.

    String is like index based char. So it starts like 0,1,2,3,4....etc
 */

    $name = "I am Kira";
    // echo substr($name, 5,4 );
    echo substr($name, 2,2 ) . "<br>";

    // Slice String to the End
    $madara = "Wake up to reality.";
    echo substr($madara,5) . "<br>";

    // Slice String From the End
    $madara = "Wake up to reality.";
    echo substr($madara,-8, 7);