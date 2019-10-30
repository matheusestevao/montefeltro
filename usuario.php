<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
echo '<title>. . . : : Cadastro de Usu&aacute;rio : : . . .</title>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';

if  (isset($logado)){
   if ($nivel == 3){
?>
<html>
	<head>
		<script type="text/javascript" src="js/verifica_usu.js" ></script>
	</head>

	<body>

             <div id="cabecalho">
             <span style="font-size:50px;text-align:center;color:red"><b>Cadastro Usu&aacute;rio</b></span>
             </div>

		<center><form name="teste" id="teste" method="POST" action="formu.php">
			        <input name="assunto" type="hidden" id="assunto" value="Cadastro Efetuado">
			        <br />
				<b>Nome Usu&aacute;rio:</b> <br /><input type="text" name="usuario" class="usuario" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
				<br /><br />
				<b>E-Mail:</b> <br /><input type="text" name="email" class="email" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
				<br /><br />
				<b>Nivel:</b> <br />
				<select name="nivel"  onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')">
					<option value="1">Vendedor</option>
					<option value="2">Estoque</option>
					<option value="3">Administrador</option>
				</select>
				<br /><br />
				<b>Login:</b> <br /><input type="text" name="login" class="login" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
				<br /><br />
				<input type="hidden" name="senha" class="senha" value="montefeltro"/>
				<input type="hidden" name="status" class="status" value="1"/>
				<input type="submit" name="cad_usuario" value="Cadastrar" onclick="return enviardados(this)"/>
                                &nbsp&nbsp&nbsp
                                <input type="submit" name="voltar" value="Voltar" />
		</form></center>

          <!-- <footer>Desenvolvido por <a href="http://goo.gl/gS5tWN">M.E. Web Design</footer>-->
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