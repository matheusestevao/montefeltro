<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . : : Alterar Usu&aacute;rio : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';

if(($logado)){

	if($nivel == 3) {

echo '<div style="font-size:50px;text-align:center;color:red"><b>Alterar Usu&aacute;rio</b></div>';
	
$id=$_GET['id'];

$result= mysqli_query($coenxao, "SELECT * FROM lixo WHERE id='$id' ");

echo '<center>';
echo '<form name="teste" id="teste" method="POST" action="formu.php">';

while($row=mysqli_fetch_array($result)){
echo '<br />';
echo '<b>Nome do Usu&aacute;rio:</b> <br />';
echo '<input type="text" name="usuario" class="usuario" value="'.$row['usuario'].'" readonly="readonly">';
echo '<br /><br />';

echo '<b>E-mail:</b> <br />';
echo '<input type="text" name="email" class="email" value="'.$row['email'].'" readonly="readonly">';
echo '<br /><br />';

echo '<b>Login:</b> <br />';
echo '<input type="text" name="login" class="login" value="'.$row['login'].'" readonly="readonly">';
echo '<br /><br />';

echo '<input type="hidden" name="status" class="status" value="'.$row['status'].'">';

echo '<b>Nivel:</b> <br />';
	echo '<select name="nivel" class="nivel">';
		echo '<option value="1">Vendedor</option>';
		echo '<option value="2">Estoque</option>';
		echo '<option value="3">Administrador</option>';
	echo '</select>';
echo '<br /><br />';

echo '<input type="submit" name="alt_usuario" value="Alterar" />';
echo '&nbsp&nbsp&nbsp';
echo '<input type="submit" name="voltar" value="Voltar" />';


echo '</form>';
echo '</center>';
	}}else{
		echo '<div id="cabecalho">Acesso Negado</div>';
		echo '<br /><br />';
		echo '<span style="color:red"><b>Você não tem permissão para acessar essa área!</b></span>';
		echo '<br /><br />';
		echo '<a href="index.php">Voltar</a>';}}


else{
	include("login.php");
}
?>