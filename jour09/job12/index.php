
<?php

$bdd = mysqli_connect('localhost', 'root', '' ,'jour08');

mysqli_set_charset($bdd,'utf8');

$utilisateurs = mysqli_query( $bdd, "SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");

$requete = mysqli_fetch_all($utilisateurs, MYSQLI_ASSOC);

var_dump($requete); 

?>

<html>
    <table border=1>
    <thead>
        <tr>
            <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($utilisateurs as $utilisateur){
           echo '<tr> <td>'. $utilisateur['prenom'] . '</td>';
           echo '<td>'. $utilisateur['nom'].'</td>';
           echo '<td>'. $utilisateur['naissance'] . '</td> </tr>';
        }
        ?>
    
    </tbody>
    </table>
</html>