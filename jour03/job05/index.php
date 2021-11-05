<?php

$str = "On n est pas le meilleur quand
on le croit mais quand on le sait";
$lettres = [
    'voyelles' => ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'],
    'consonnes' => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 
    'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z' ]
];
$nbvvoyelle = 0;          //nombre de consonne 
$nbconsonne = 0;          // nombre de voyelles

for ($i=0; isset($str[$i]); $i++){            
    
        foreach($lettres['voyelles'] as $voyelles ){
            
            if($str[$i] === $voyelles){                         //si  la lettre de string est === a une des lettres du tableau voyelles
                $nbvvoyelle++;  }                               //nombre de voyelle prend 1
        }
        
        foreach($lettres['consonnes'] as $consonnes ){          

            if($str[$i] ===$consonnes){                         // Pareil pour les consonnes
                $nbconsonne++;  }
        }
        
       

}                                          //affichage du tableau avec le nombre de voyelles et de consonnes dans la str .
echo '
    <html>
        <body>
            <main>
                <thead>
                <table border=1>
                    <tr>
                        <th>Consonnes</th>
                        <th>Voyelles</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th>'.$nbconsonne.'</th>                            
                    <th>'.$nbvvoyelle.'</th>
                </tr>
                </tbody>
            </main>
        </body>
    </html>

';