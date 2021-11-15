
<?php

$bdd = mysqli_connect('localhost', 'root', '' ,'jour08');

mysqli_set_charset($bdd,'utf8');

$utilisateurs = mysqli_query( $bdd, "SELECT `id`, `prenom`, `nom`, `naissance`, `sexe`, `email` FROM `etudiants` WHERE prenom LIKE 'T%'");

$requete = mysqli_fetch_all($utilisateurs, MYSQLI_ASSOC);

var_dump($requete); 

?>

<html>
    <table border=1>
    <thead>
        <tr>
            <th>id</th>
            <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
            <th>sexe</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($utilisateurs as $utilisateur){
           echo '<tr> <td>'. $utilisateur['id'] . '</td>';
           echo '<td>'. $utilisateur['prenom'] . '</td>';
           echo '<td>'. $utilisateur['nom'] . '</td>';
           echo '<td>'. $utilisateur['naissance'] . '</td>';
           echo '<td>'. $utilisateur['sexe'] . '</td>';
           echo '<td>'. $utilisateur['email'] . '</td> </tr>';
        }
        ?>
    
    </tbody>
    </table>
</html>