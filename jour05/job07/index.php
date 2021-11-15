
<form method   ="get">

<label for="str">texte :</label>
<input name="str" id="str" type="text" />
<label for="style-select">style de police:</label>
<select name=style id="style_select" >
<option value="gras">gras</option>
<option value="cesar">cesar</option>
<option value="plateforme">plateforme</option>
</select>

<button type="submit">Envoyer</button>

</form>

<?php 
 
 $get_style = $_GET['style'];
 $str = $_GET['str'];
 
 function gras($var){
   
    return '<b>' . $var . '</b>';
 }

 function cesar($var){
     return '<i>' . $var . '</i>';
 }


 if (isset($get_style) && $get_style ==='gras'){
    echo gras($str);
 }
 if(isset($get_style) && $get_style === 'cesar'){
    echo cesar($str);
 }

 


var_dump($_GET);






// function gras($var_style){
//     if ($var_style==='gras'){
//         echo '<b>' . $var_style . '</b>';   
//     }
// }


// foreach ($_GET as $argument => $valeur){
//     if ($argument['style']==='gras'){
//         echo '<b>' . $valeur . '</b>';
//     }
// }
// var_dump($_GET);





