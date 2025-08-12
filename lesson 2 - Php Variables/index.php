<?php

  /* 
    PHP Variables
    ---------------
    1. int (Integer)
        Whole numbers: positive, negative, or zero
        Example: 10, -42, 0
    
    2. float (Floating point number or double)
        Decimal numbers
        Example: 3.14, -0.5, 2.0

    3. string
        A sequence of characters (text)
        Example: "Hello world", 'PHP'

    4. bool (Boolean)
        Only two values: true or false
    
    5. null (special type)
        A variable with no value assigned
        Example: $x = NULL; 
 */

       $integerVariable = 100;
        echo"Integer: $integerVariable";

       $stringVariable = "Total: ";
       echo"<br> String: $stringVariable";
        // combained both variables (string and integer variable)
       echo"<br> $stringVariable $integerVariable";

        $floatVariable = 5.5;
        echo "<br> Decimal: $floatVariable";

        $booleanVariable = true;
        // true = 1   false = 0
        echo"<br> $booleanVariable";

        $nullVariable = null;
        $nullVariable = true;
        echo "<br> $nullVariable";
?>