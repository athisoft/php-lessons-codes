<pre>
<?php
/* 
    PHP Casting
    --------------*
Change Data Type

Casting in PHP is done with these statements:

    (string) - Converts to data type String
    (int) - Converts to data type Integer
    (float) - Converts to data type Float
    (bool) - Converts to data type Boolean
    (array) - Converts to data type Array
    (object) - Converts to data type Object
    (unset) - Converts to data type NULL


 */

/*
    $a = 50; // Integer
    $b = 9.25; // Float
    $c = "athisoft"; // String
    $d = true; // Boolean
    $e = null; // NULL

    $a = (float) $a;
    $b = (float) $b;
    $c = (float) $c;
    $d = (float) $d;
    $e = (float) $e;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    */


    //Boolean

    /*
    If a value is 0, NULL, false, or empty, the (bool) converts it into false,
    otherwise true. Even -1 converts to true.
    */

    /*
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = 0;       // Integer
        $d = -1;      // Integer
        $e = 0.1;     // Float
        $f = "hello"; // String
        $g = "";      // String
        $h = true;    // Boolean
        $i = NULL;    // NULL

        $a = (bool) $a;
        $b = (bool) $b;
        $c = (bool) $c;
        $d = (bool) $d;
        $e = (bool) $e;
        $f = (bool) $f;
        $g = (bool) $g;
        $h = (bool) $h;
        $i = (bool) $i;

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($g);
        var_dump($h);
        var_dump($i);

    */


    //Object Convert. 
    //Just replace (object) to (array) To convert them to array.
   
    /*
    $a = 50; // Integer
    $b = 9.25; // Float
    $c = "athisoft"; // String
    $d = true; // Boolean
    $e = null; // NULL

    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    */


    //Convert them to null

    $a = 50; // Integer
    $b = 9.25; // Float
    $c = "athisoft"; // String

    

    $a = null;
    $b = null;
    unset($c);


    var_dump($a);
    var_dump($b);
    var_dump($c);



?>
</pre>