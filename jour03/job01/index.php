<?php
$num = [200, 204, 173, 98, 171, 404, 459];

for( $i=0; $i<7; $i++ ) {
    
    if($num[$i] % 2==0)
    {
    echo "$num[$i] est pair". '<br>';}

    else {
        echo "$num[$i] est impair" . '<br>';
    }
}