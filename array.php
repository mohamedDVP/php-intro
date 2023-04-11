<?php
// Array : tableau en PHP
$array = [1, 2, 3, 4, 1];
var_dump($array);
array_unshift($array, "Coucou");
//$array [] = "Coucou";
var_dump($array);
$array [10] = "Test";
var_dump($array);

//echo $array[5];

//var_dump($array);
echo "<br/>Hello ?";
$monTableau = [... $array];
var_dump($monTableau);
?>