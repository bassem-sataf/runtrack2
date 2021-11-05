<?php

$voyelle = ['a','e','i','o','u', 'y', 'A','E','I','O','U','Y'];  //tableau des voyelles et des voyelles maj
$str = "I'm sorry Dave I'm afraid I can't do that";     //string

for ($i=0; isset($str[$i]); $i++ )                     //création d'un tableau a partir de la variable str
        { 
            $ver=0;                                         //variable vérification
            foreach($voyelle as $une_voyelle){              //variable qui représente chacune des valeur dans le tableau $voyelle
            if ($str[$i] === $une_voyelle){                 //Si la lettre du tableau str est une voyelle
                $ver++;}                                     //    ALORS ver prend 1
        }
    if ($ver > 0)                                                 
    {   
        echo $str[$i];                       //On affiche uniquement si ver est supérieur a 0
    }
}



?>