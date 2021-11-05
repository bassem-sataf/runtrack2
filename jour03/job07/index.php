<?php

$str = "Certaines choses changent, et d'autres
ne changeront jamais.";
$newstr = ""; 
var_dump($str);
for($i=0; isset($str[$i]); $i++)
{
    // $newstr = $newstr.$str[$i+1];
    
    if($i===0){
        $i++;
    }
    // $newstr = $newstr.$str[0];

    echo $str[$i];
}
