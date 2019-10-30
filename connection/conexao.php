<?php
$hostname_conexao = "localhost";
$database_conexao = "skinn673_demo2";
$username_conexao = "root";
$password_conexao = '';


$conexao = mysqli_connect($hostname_conexao, $username_conexao, $password_conexao);
if(!$conexao){
	sleep(2);
	$conexao = mysqli_connect($hostname_conexao, $username_conexao, $password_conexao);
	if(!$conexao){
		echo "<center>Muitas conexões simultâneas, favor tentar novamente mais tarde!</center>";
		exit();
	}
}
?>