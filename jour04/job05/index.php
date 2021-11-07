

<form action="./index.php" method="post">
                        <label for="username">Identifiant :</label>
                        <input name="username" id="uname" type="text" />
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password">
                        <button type="submit">Valider</button>

                    </form>


                    
                    
<?php

if (isset($_POST['username']) && $_POST['username'] == 'John' && isset($_POST['password']) && $_POST['password'] == 'Rambo'){
    echo "c'est pas ma guerre";}

if (isset($_POST['username']) && $_POST['username'] !== 'John' || isset($_POST['password']) && $_POST['password'] !== 'Rambo'){
 echo "votre pire cauchemar";}
