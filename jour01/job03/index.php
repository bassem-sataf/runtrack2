<?php

$var1 = true.false;
$var2 = 3;
$var3 = 'salut';
$var4 = 9.2;

echo '
<html>
    
    <body>
        <header>
            <table border=1>
                <tr>
                    <th>type</th>
                    <th>nom</th>
                    <th>valeur</th>
                </tr>
        </header>
        <main>
                <tr>
                    <td>boléen</td>
                    <td>var1</td>
                    <td>'.$var1.'</td>
                </tr>
                <tr>
                    <td>entier</td>
                    <td>var2</td>
                    <td>'.$var2.'</td>
                </tr>
                <tr>
                    <td>chaîne de caractères</td>
                    <td>var3</td>
                    <td>'.$var3.'</td>
                </tr>
                <tr>
                    <td>nombre à virgule flottante</td>
                    <td>var4</td>
                    <td>'.$var4.'</td>
                </tr>
            </table>
        </main>
    </body>
 
</html>';

 