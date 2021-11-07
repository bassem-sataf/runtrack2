<form action="./index.php" method="post">
<label for="fname">Prénom :</label>
<input name="first_name" id="fname" type="text" />
<label for="name">Nom :</label>
<input type="text" id="name" name="name">
<label for="age">Age :</label>
<input name="age" id="age" type="text" />
<label for="birth_date">Date de naissance :</label>
<input name="birth_date" id="birth_d" type="date" />
<button type="submit">Envoyer</button>

</form>

<?php


$i=0;
foreach($_POST as $valeur){
    if($valeur !=null){
        $i++;
    }
}
echo "nombre de valeurs : $i";
?> 