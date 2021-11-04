<?php
echo "hello multi-dimensional arrays <br>";

$mda = array(
             array(2,4,6,8),
             array(1,3,5,7),
             array(1,2,3,4)
);

// echo var_dump($mda);
echo $mda[0][0];
echo $mda[0][1];
echo $mda[0][2];
echo $mda[0][3];

echo "<br>";

echo $mda[1][0];
echo $mda[1][1];
echo $mda[1][2];
echo $mda[1][3];

echo "<br>";

echo $mda[2][0];
echo $mda[2][1];
echo $mda[2][2];
echo $mda[2][3];

echo "<br>";

for ($i=0  ; $i < count($mda) ; $i++ ) { 
    echo var_dump($mda[$i]);
    echo "<br>";
}

for ($i=0; $i < count($mda) ; $i++) { 
    for ($j=0; $j < count($mda[$i]); $j++) { 
      echo  $mda[$i][$j];   
      echo " ";
    }
    echo "<br>";
}
?>