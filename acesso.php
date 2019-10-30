<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<title>. . : : Alterar Senha: : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
echo '<script type="text/javascript" src="js/senha.js" ></script>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<div id="cabecalho"><span style="font-size:50px;text-align:center;color:red"><b>Alteração de Senha</b></span></div>';
echo '<br /><br />';
echo '<span id="nome5">Este é o seu Primeiro Acesso.<br />
                       Para prosseguir, faça a alteração da senha que foi enviada por E-email.<br />
                       </span>';

$id=$_GET['id'];

$result= mysqli_query($conexao, "SELECT * FROM lixo WHERE id='$id' ");

echo '<center>';
echo '<form name="teste" id="teste2" method="POST" action="primeiro.php">';

while($row=mysqli_fetch_array($result)){
echo '<br />';
echo '<b>Nome do Usu&aacute;rio:</b> <br />';
echo '<input type="text" name="usuario" class="usuario" value="'.$row['usuario'].'" readonly="readonly">';
echo '<br /><br />';

echo '<b>E-mail</b> <br />';
echo '<input type="text" name="email" class="email" value="'.$row['email'].'" readonly="readonly">';
echo '<br /><br />';

echo '<input type="hidden" name="nivel" class="nivel" value="'.$row['nivel'].'">';

echo '<b>Nova Senha:</b> <br />';
echo '<input type="password" name="senha" class="senha" >';

echo '<input type="hidden" name="status" class="status" value="0" >';

echo '<br /><br />';

echo '<input type="submit" name="alterar" value="Alterar" onclick="return enviardados(this)"/>';

echo '</form>';
echo '</center>';
}
	
?>	