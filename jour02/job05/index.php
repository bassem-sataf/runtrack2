<?php
for( $i=2; $i<=1000; $i++ ){    //mise en place de la variable i nombrs entier entre 2 et 1000
    $div = 0;                  // mise en place de la variable div qui sera le nombre de diviseur 
    for($j=1; $j<=$i; $j++){      //mise en place de j (diviseur de i) 
                                       
        if( $i%$j==0){           // si i % j = c'est a dire que que j est un diviseur de i 
            $div++;            //   pour chaque diviseur trouvé div prend 1
        }    
    }
    if($div==2){              // si i a uniquement 2 diviseurs c'est un nombre premier
        echo $i .'<br>';        // alors on affiche ce nombre (donc on affiche uniquement les nombres premiers)
         
    }


}
