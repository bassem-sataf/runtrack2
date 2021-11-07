
                    <form  method="post">
                        <label for="Prénom">Prénom :</label>
                        <input name="Prénom" id="fname" type="text" />
                        <label for="Nom">Nom :</label>
                        <input type="text" id="name" name="Nom">
                        <label for="Age">Age :</label>
                        <input name="Age" id="age" type="number" />
                        <label for="Numero">Numéro :</label>
                        <input name="Numero" id="num" type="number" />
                        <label for="Email">Email :</label>
                        <input name="Email" id="mail" type="email" />
                        <button type="submit">Envoyer</button>

                    </form>
                
    


<?php
$str = "";

foreach($_POST as $argument => $valeur ){
    $str = $str. "<tr>
            <td> $argument </td>
            <td> $valeur </td>
        <tr>";
}
?>

<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>

    <tbody>
        
            <?php 
            echo $str;  ?>
        
        
    </tbody>

</table>

<?php 

