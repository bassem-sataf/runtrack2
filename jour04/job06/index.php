<form action="./index.php" method="get">
                        <label for="number">Nombre :</label>
                        <input name="number" id="nombre" type="number" />
                        <button type="submit">Valider</button>

                    </form>


        
<?php

if(isset($_GET['number']) && $_GET['number'] %2==0 ){
echo 'pair';}
if(isset($_GET['number']) && $_GET['number'] %2 !==0 ){
    echo 'impair';}
