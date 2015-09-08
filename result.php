<?php 

if( isset($_POST["username"]) && isset($_POST["pwd"]) ){
	echo "POST方式 ".$_POST["username"]." ".$_POST["pwd"];
}
if( isset($_GET["username"]) && isset($_GET["pwd"]) ){
	echo "GET方式 ".$_GET["username"]." ".$_GET["pwd"];
}
 ?>