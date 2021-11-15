
<?php

$bdd = mysqli_connect('localhost', 'root', '' ,'jour08');

mysqli_set_charset($bdd,'utf8');

$utilisateurs = mysqli_query( $bdd, "SELECT `nom`, `capacite` FROM `salles`");

$requete = mysqli_fetch_all($utilisateurs, MYSQLI_ASSOC);

var_dump($requete); 

?>

<html>
    <table border=1>
    <thead>
        <tr>
            <th>nom</th>
            <th>capacité</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($utilisateurs as $utilisateur){
           echo '<tr> <td>'. $utilisateur['nom'] . '</td>';
           echo '<td>'. $utilisateur['capacite'] . '</td> </tr>';
        }
        ?>
    
    </tbody>
    </table>
</html>