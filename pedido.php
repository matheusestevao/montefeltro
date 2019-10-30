<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<title>. . : : Pedido : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';

if (($logado)){

echo '<div id="cabecalho"><span style="font-size:50px;text-align:center;color:red"><b>Pedido</b></span></div>';
echo '<br /><br />';
echo '<span id="nome5">Favor, conferir a Ordem de Serviço<br /></span>';

$id=$_GET['id'];

$result= mysqli_query($conexao, "SELECT * FROM mercadorias WHERE id='$id' ");

echo '<center>';	
echo '<form name="teste" id="teste" method="POST" action="formu.php">';

while($row=mysqli_fetch_array($result)){

echo '<input type="hidden" name="email" class="email" id="email" value="Pedido">';

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

echo '<input type="hidden" name="msg" class="msg" value="Favor separar a O.S. acima">';
echo '<input type="hidden" name="titulo" class="assunto" id="assunto" value="Separar O.S.">';

echo '<br /><br />';

echo '<input type="submit" name="requisitar" value="Requisitar" />';
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo '<input type="submit" name="voltar" value="Voltar"/>';

echo '</form>';
echo '</center>';

}}

else{
	include("login.php");
}
	
?>	