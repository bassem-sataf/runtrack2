<form method="post">
    <select name="style" id="style_select">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
        <option value="style3">style3</option>
    </select>
    <button type="submit">Envoyer</button>
</form>


<?php

if(isset($_POST['style']) && $_POST['style']=='style1'){
?> <link rel="stylesheet" href="./style1.css">

<?php
};
if(isset($_POST['style']) && $_POST['style']=='style2'){
    ?> <link rel="stylesheet" href="./style2.css">
    
<?php
};
if(isset($_POST['style']) && $_POST['style']=='style3'){
    ?> <link rel="stylesheet" href="./style3.css">
<?php
};