<?php

/* 
    PHP Escape Character
    --------------*
   To insert characters that are illegal 
   in a string, use an escape character.

   An escape character is a backslash \ followed 
   by the character you want to insert.

   Special characters has action but with \ we can tell the interperator
   to Treat it as string \" like that.

   Usages: 
   \' = Single Quote
   \" = Double Quote
   \$ = Php Variables
   \n = New Line
   \r = Carriage Return
   \t = Tab
   \f = Form Feed
   \ooo = Octal Value
   \xhh = Hex Value
 */

   $name = "Hello I am from \"Earth\" \$Doller ";
   echo $name;

   echo "<pre>I am from \nMars! </pre>";

   echo"Mars \rAlien" . "<br>";

   echo "<pre> I am here \t Hello! </pre>";

   echo "\110\145\154\154\157";

   echo "\x48\x65\x6c\x6c\x6f";