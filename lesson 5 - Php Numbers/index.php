<?php
/* 
    PHP Numbers
    --------------*
    There are three main numeric types in PHP:

        Integer
        Float
        Number Strings

    In addition, PHP has two more data types used for numbers:

        Infinity
        NaN

 */     
        // PHP Checking Number Datatype.

        //Integer
        $wholeNumber = 5;
        //Float
        $decimalNumber = 2.11;
        //Number String
        $numberString = "1000";

        var_dump($wholeNumber);
        echo "<br>";
        var_dump($decimalNumber);
        echo "<br>";
        var_dump($numberString);
        echo "<br>";

        var_dump(is_int($wholeNumber));
        echo "<br>";
        var_dump(is_float($wholeNumber));

        //PHP Infinity
        $staticNumber = 10000;
        $infiniteNumber = 1.9e411;
        echo "<br>";
        var_dump(is_finite($staticNumber));
        echo "<br>";
        var_dump(is_infinite($infiniteNumber));
        echo "<br>";

        //PHP Numerical Strings
  
        //Integer
        $wholeNumber = 5;
        //Float
        $decimalNumber = 2.11;
        //Number String
        $numberString = "1000";
        //Invalid String
        $invalidNumber = "Naan avan illai 107";

        var_dump(is_numeric($invalidNumber));
        echo "<br>";

        //PHP NaN
        $nanSpecialType = acos(8);
        var_dump($nanSpecialType);
        echo "<br>";
        
        var_dump(is_nan($nanSpecialType));
        echo "<br>";
        
        //PHP Casting Strings and Floats to Integers
        $floatValue = 6.25000;
        $intConvert = (int)$floatValue;
        echo $intConvert;
        echo "<br>";
        
        $StringNumber = "600.25000";
        $floatConvert = (float)$StringNumber;
        echo $floatConvert;
?>