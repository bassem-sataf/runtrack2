
<?php

$bdd = mysqli_connect('localhost', 'root', '' ,'jour08');

mysqli_set_charset($bdd,'utf8');

$utilisateurs = mysqli_query( $bdd, "SELECT SUM(superficie) FROM `etage`");

$requete = mysqli_fetch_all($utilisateurs, MYSQLI_ASSOC);

var_dump($requete); 

?>

<html>
    <table border=1>
    <thead>
        <tr>
            <th>superficie_totale</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($utilisateurs as $utilisateur){
           echo '<tr> <td>'. $utilisateur['SUM(superficie)']. '</td> </tr>';
        }
        ?>
    
    </tbody>
    </table>
</html>