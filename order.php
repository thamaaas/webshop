<?php
$i = 0;
session_start();
if (isset($_POST["item"])){
		where($_SESSION["proba"][$i]!=null)
		{
			$i++;
		}
	$_SESSION["proba"][$i+1]=$_POST["item"];
	
}
var_dump($_SESSION["proba"]);

die();
 ?>