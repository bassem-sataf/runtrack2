<?php
session_start();

if(!isset($_SESSION["nbvisits"])){
	$_SESSION["nbvisits"]=0;
}
    
else{
	$_SESSION["nbvisits"]++;
}
echo $_SESSION["nbvisits"];


if(isset($_POST["reset"])){
    Header('Location: ./index.php');
    session_destroy();
}

?>
<html>
<body>
	<form action="./index.php" method="post">
		<input type="submit" value="reset" name="reset">
	</form>