<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . : : Excluir Usu&aacute;rio : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';

if($logado){

	if($nivel == 3) {

echo '<div id="cabecalho"><span style="font-size:50px;text-align:center;color:red"><b>Excluir Usu&aacute;rio</b></span></div>';
echo '<br /><br />';
echo '<span id="nome5">Essa ação NÃO pode ser ALTERADA!<br />';
echo 'Você tem certeza disso?</span>';
	
$id=$_GET['id'];

$result= mysqli_query($conexao, "SELECT * FROM lixo WHERE id='$id' ");
while($row=mysqli_fetch_array($result)){

echo '<center>';	
echo '<form name="teste" id="teste" method="POST" action="formu.php">';

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

echo '<b>Nivel:</b><br />';
echo '<input type="text" name="nivel" class="nivel" value="'.$row['nivel'].'" readonly="readonly">';
echo '<br /><br />';

echo '<input type="hidden" name="status" class="status" value="'.$row['status'].'">';

echo '<input type="submit" name="excluir" value="Excluir" />';
echo '&nbsp&nbsp&nbsp&nbsp';
echo '<input type="submit" name="voltar" value="Voltar" />';

echo '</form>';
echo '</center>';
}	}else{
		echo '<div id="cabecalho">Acesso Negado</div>';
		echo '<br /><br />';
		echo '<span style="color:red"><b>Você não tem permissão para acessar essa área!</b></span>';
		echo '<br /><br />';
		echo '<a href="index.php">Voltar</a>';}}


else{
	include("login.php");
}
?>