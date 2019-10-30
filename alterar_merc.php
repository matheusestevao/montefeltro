<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<title>. . : : Alterar : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';

if (($logado)){
      
      if ($nivel == 2){

echo '<div id="cabecalho"><span style="font-size:50px;text-align:center;color:red"><b>Alteração de Mercadoria</b></span></div>';
echo '<br /><br />';
echo '<span id="nome5">Só altere o(s) campo(s) que for(em) necessário(s)!<br /></span>';

$id=$_GET['id'];

$result= mysqli_query($coenxao, "SELECT * FROM mercadorias WHERE id='$id' ");

echo '<center>';	
echo '<form name="teste" id="teste" method="POST" action="formu.php">';

while($row=mysqli_fetch_array($result)){
echo '<br />';
echo '<b>Cliente:</b> <br />';
echo '<input type="text" name="cliente" class="cliente" value="'.$row['cliente'].'" >';
echo '<br />';

echo '<b>O.S.:</b> <br />';
echo '<input type="text" name="os" class="os" value="'.$row['os'].'" >';
echo '<br />';

echo '<b>Item:</b> <br />';
echo '<input type="text" name="item" class="item" value="'.$row['item'].'" >';
echo '<br />';

echo '<b>Modelo:</b><br />';
echo '<input type="text" name="modelo" class="modelo" value="'.$row['modelo'].'" >';
echo '<br />';

echo '<b>Quantidade:</b> <br />';
echo '<input type="text" name="qnt" class="qnt" value="'.$row['qnt'].'" >';

echo '<br /><br />';

echo '<input type="submit" name="alterar" value="Alterar" />';
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo '<input type="submit" name="voltar" value="Voltar"/>';

echo '</form>';
echo '</center>';

}}else{
		echo '<div id="cabecalho">Acesso Negado</div>';
		echo '<br /><br />';
		echo '<span style="color:red"><b>Você não tem permissão para acessar essa página.</b></span>';
		echo '<br /><br />';
		echo '<a href="index.php">Voltar</a>';}}

else{
	include("login.php");
}
	
?>	