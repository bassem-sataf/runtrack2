<?php

function leetspeak($str){
    $char = ['a','b','e','g','l','s','t'];
    for($char=0; isset($str[$char])===true; $char++){
    
        if ($str[$char]==='a' || ($str[$char]==='A')){
            echo '4'; 
        }
        elseif ($str[$char]=== 'b' || ($str[$char]=== 'B')){
            echo '8';
        }
        elseif ($str[$char]=== 'e' || ($str[$char]=== 'E')){
            echo '3';
        }
        elseif ($str[$char]=== 'g' || ($str[$char]=== 'G')){
            echo '6';
        }
        elseif ($str[$char]=== 'l' || ($str[$char]=== 'L')){
            echo '1';
        }
        elseif ($str[$char]=== 's' || ($str[$char]=== 'S')){
            echo '5';
        }
        elseif ($str[$char]=== 't' || ($str[$char]=== 'T')){
            echo '7';
        }
        else {
            echo $str[$char];
        }
        
}
}
leetspeak("bassem");