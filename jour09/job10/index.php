
<?php

$bdd = mysqli_connect('localhost', 'root', '' ,'jour08');

mysqli_set_charset($bdd,'utf8');

$utilisateurs = mysqli_query( $bdd, "SELECT * FROM `salles` ORDER BY `salles`.`capacite` ASC");

$requete = mysqli_fetch_all($utilisateurs, MYSQLI_ASSOC);

var_dump($requete); 

?>

<html>
    <table border=1>
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>id_etage</th>
            <th>capacite</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($utilisateurs as $utilisateur){
           echo '<tr> <td>'. $utilisateur['id'] . '</td>';
           echo '<td>'. $utilisateur['nom'] . '</td>';
           echo '<td>'. $utilisateur['id_etage'] . '</td>';
           echo '<td>'. $utilisateur['capacite'] . '</td> </tr>';
        }
        ?>
    
    </tbody>
    </table>
</html>