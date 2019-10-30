<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<title>. . : : Reintegrar	 : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';

if (isset($logado)){
      
      if ($nivel == 2){

echo '<div id="cabecalho" style="font-size:50px;text-align:center;color:red"><b>Reintegrar Mercadoria</b></div>';

$id=$_GET['id'];

$result= mysqli_query($conexao, "SELECT * FROM saida WHERE id='$id' ");

echo '<center>';	
echo '<form name="teste" id="teste3" method="POST" action="formu.php">';

while($row=mysqli_fetch_array($result)){
echo '<br />';
echo '<b>Cliente:</b> <br />';
echo '<input type="text" name="cliente" class="cliente" value="'.$row['cliente'].'" readonly="readonly">';
echo '<br />';

echo '<b>O.S.:</b> <br />';
echo '<input type="text" name="os" class="os" value="'.$row['os'].'" readonly="readonly">';
echo '<br />';

echo '<b>Item:</b> <br />';
echo '<input type="text" name="item" class="item" value="'.$row['item'].'" readonly="readonly">';
echo '<br />';

echo '<b>Modelo:</b><br />';
echo '<input type="text" name="modelo" class="modelo" value="'.$row['modelo'].'" readonly="readonly">';
echo '<br />';

echo '<b>Quantidade:</b> <br />';
echo '<input type="text" name="qnt" class="qnt" value="'.$row['qnt'].'" readonly="readonly">';
echo '<br />';

echo '<b>Retirada</b> <br />';
echo '<input type="text" name="ret" class="ret" value="'.$row['ret'].'">';
echo '<br />';

echo '<b>Data</b> <br />';
echo '<input type="text" name="data" class="data" value="'.$row['data'].'">';
echo '<br /><br />';

echo '<input type="submit" name="reintegrar" value="Reintegrar" />';
echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
echo '<input type="submit" name="voltar" value="Voltar" />';

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