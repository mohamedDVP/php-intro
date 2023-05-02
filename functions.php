<?php
// conversion dollar euro
// fonction qui détermine si , pour un age donné , la personne est majeure

function isAgeLegal(int $age): bool
{
    
    return $age >= 18;

    //return ($age >= 18) ? true : false

    // if ($age >= 18)
    // {
    //     return true; // Je sors immédiatement de la fonction
    // }

    // return false;
}

$userAge = 15;

//$age = 15; // On pourrait nommer la variable $age car elle n'a pas la même portée
// if(isAgeLegal($userAge))
// {
//     echo "l'utilisateur est majeur";
// }
// else
// {
//     echo "l'utilisateur est mineur";
// }

echo isAgeLegal($userAge) ? "Majeur" : "Mineur";

