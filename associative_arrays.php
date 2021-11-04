<?php
echo "hello world <br>";

// normal arrays
$arr = array('pavan', 'bomale', 'cse');
echo $arr[0] ."<br>";
echo $arr[1] ."<br>"; 
echo $arr[2] ."<br>";

// associative arrays
$favcolor = array(
            'pavan' => 'red',
            'riddhu' => 'green',
            'atharva' => 'pink',
            8 => 'eight'
             );

// echo $favcolor['pavan'] . "<br>";
// echo $favcolor['riddhu'] . "<br>";
// echo $favcolor['atharva'] . "<br>";
// echo $favcolor[8] . "<br>";

foreach ($favcolor as $key => $value) {
     echo "<br>fav color of $key is $value";
}

?>
