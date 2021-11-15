
<form method="post">
    <label for="prenom">Prénom :</label>
    <input name="prenom" id="prenom" type="text" />
    <input type="submit" value="send" name="send">
    <input type="submit" value="reset" name="reset">
</form>


<?php

session_start();

if(isset($_POST['prenom'])){
$_SESSION['prenom'][] = $_POST['prenom'];
}

$prenoms = $_SESSION['prenom'];


foreach($prenoms as $prenom){
    if(isset($prenom)){
    echo $prenom . '<br>';
    }
}

if(isset($_POST["reset"])){
    Header('Location: ./index.php');
    session_destroy();
}




var_dump($_SESSION);
?>

