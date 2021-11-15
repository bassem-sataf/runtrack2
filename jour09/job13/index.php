
<?php

$bdd = mysqli_connect('localhost', 'root', '' ,'jour08');

mysqli_set_charset($bdd,'utf8');

$utilisateurs = mysqli_query( $bdd, "SELECT salles.nom , etage.nom FROM salles inner join etage ON salles.id_etage = etage.id ");

$requete = mysqli_fetch_all($utilisateurs, MYSQLI_ASSOC);

var_dump($requete); 

?>

<html>
    <table border=1>
    <thead>
        <tr>
            <th>salle</th>
            <th>etage</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($utilisateurs as $utilisateur){
           echo '<tr> <td>'. $utilisateur['salle'] . '</td>';
           echo '<td>'. $utilisateur['etage'] . '</td> </tr>';
        }
        ?>
    
    </tbody>
    </table>
</html>