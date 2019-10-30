<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
echo '<title>. . . : : Cadastro : : . . .</title>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';

if (isset($logado)){
   
    if ($nivel == 2){
?>

<html>
	<head>
                
		<div id="cabecalho"><span style="font-size:50px;text-align:center;color:red"><b>Entrada de Mercadorias</b></span></div>
		<script type="text/javascript" src="js/verifica.js" ></script>
	</head>

	<body>
		<center><form name="teste" id="teste" method="POST" action="formu.php">
                                <br />
				<b>Cliente:</b> <br /><input type="text" name="cliente" class="cliente" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
				<br />
				<b>O.S.:</b> <br /><input type="text" name="os" class="os" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
				<br />
				<b>Item:</b> <br /><input type="text" name="item" class="item" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
				<br />
				<b>Modelo:</b><br /><input type="text" name="modelo" class="modelo" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
				<br />
				<b>Quantidade:</b><br /><input type="text" name="qnt" class="qnt" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
				<br /><br />
				<input type="submit" name="cadastrar" value="Cadastrar" onclick="return enviardados(this)"/>
                                &nbsp&nbsp&nbsp&nbsp
				<input type="submit" name="voltar" value="Voltar"/>

		</form></center>
	</body>
</html>

<?php
}else{
		echo '<div id="cabecalho">Acesso Negado</div>';
		echo '<br /><br />';
		echo '<span style="color:red"><b>Você não tem permissão para acessar essa página.</b></span>';
		echo '<br /><br />';
		echo '<a href="index.php">Voltar</a>';}}

else{
	include("login.php");
}
	
?>		