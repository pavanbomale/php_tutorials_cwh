<?php

$a = 10;

function printvalue() {
    echo "the value of a is $a <br>";
    //this will throw error because $a is out of scope 
}


function printvalue2() {
    global $a; 
    $a = 100;
    // by using key word global we can access the global variables inside a function
    echo "<br>the value of a is $a";
}

printvalue();
printvalue2();
echo "<br>the value global variable a is changed from 10 to: $a";

//printing all the global variables in this program
echo "<br>";
echo var_dump($GLOBALS);
?>