<?php
include("includes/header.php");

if(isset($logado)){
     include ("menu.php");
}else{
	include("login.php");
}
?>
