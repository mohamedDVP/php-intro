<?php
// Array : tableau en PHP
$array = [1, 2, 3, 4, 1];
//var_dump($array);
//echo "<br/>";
// Insérer un élément au début du tableau
array_unshift($array, "Coucou");
//$array [] = "Coucou";
//var_dump($array);
//echo "<br/>";
$array [10] = "Test";
//var_dump($array);
//echo "<br/>";
//echo $array[5];
$tableau = $array;
//var_dump($array);
//echo "<br/>";
//echo "<br/>Hello ?";
//Opérateur spread : je propage les éléments se trouvant dans $array
//au sein de $monTableau
$monTableau = [... $array];
//var_dump($monTableau);
//echo "<br/>";
//Opérateur spread : comme le précédent mais je le fais à partir de la deuxième position
$array = ["Autre valeur", ... $array];
//var_dump($array);
//echo "<br/>";

$array[15] = $array[3];
unset($array[3]);
var_dump($array);
echo "<br/>";

// Boucles
// For (instruction d'initialisation ; condition de maintien ; instruction de pas)
for($d = 1; $d < 11 ; $d++) {
    echo $d . " - ";
}
echo "<br/>";
echo "<br/>";

// Foreach
foreach ($array as $element) {
    echo $element. " - ";
}
echo "<br/>";

// While
$d = 1; // Instruction d'initialisation
while ($d < 11) { // Condition de maintien
    echo $d . " - ";
    $d++; // Instruction de pas
}
echo "<br/>";
echo "<br/>";

// Do ... While
// Différence avec while : on executera toujours la première itératopn
$d = 1; // Instruction d'initialisation
do {
    echo $d . " - ";
    $d++; // Instruction de pas
} while ($d < 11) // Condition de maintien

echo "<br/>";
echo "<br/>";
// For sur un tableau
// eut être compliqué si on a des clés personnalisées
for($d = 0; $d < count($array) ; $d++) {
    if(array_key_exists($d, $array)){
        // Execution si condition est vraie (true)
        echo $array[$d]. " - ";
    }else 
    {
        // Execution si condition est fausse (false)
        echo ";) - ";
    }
    
}
echo "<br/>";
echo "<br/>";


?>
