<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
                <link rel="shortcut icon" href="imagens/favicon2.ico"/>
		<meta content="Matheus Estev&atilde;o" name="author" />
		<title>. . . : : : M O N T E F E L T R O : : : . . . </title>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="all"/>
		
	</head>
	<body>
	     <div id="cadastrar">
                <!--<a href="suporte.php" title="Suporte!">Suporte</a>-->
                <a href="index.php?acao=logout" title="Fazer logout!">Logout &raquo;</a>
             </div>
		
           <div id="cabecalho">
           <span id="nome3">MONTEFELTRO</span>
           <br>
           <span id="nome4">D&nbsp&nbsp&nbsp&nbsp
                            I&nbsp&nbsp&nbsp&nbsp
                            E&nbsp&nbsp&nbsp&nbsp
                            S&nbsp&nbsp&nbsp&nbsp
                            E&nbsp&nbsp&nbsp
                            L</span>
        </div>

                 <!-- nivel de acesso para Estoque-->
                <?php
		if($nivel == 2){
		?>
			<div id="conteudo"> 
				<a href="cadastro.php" id="lista_ent">
				<img src="imagens/estoque02.jpg" title="Entrada de Mercadorias" id="img_entrada" alt="Entrada de Mercadorias"/><br /><br />
				Entrada de Mercadorias</a>
				
				<br />
				
				<a href="lista2.php" id="lista_sai">
				<img src="imagens/estoque04.jpg" id="img_retirada" alt="Mercadorias a Retirar" title="Mercadorias a Retirar"/><br /><br />
				Mercadorias a Retirar</a>
				
				<br />
				
				<a href="retirada2.php" id="lista_sai4">
				<img src="imagens/estoque01.jpg" id="img_entregue2" alt="Mercadorias Entregues" title="Mercadorias Entregues"/><br /><br />
				Mercadorias Entregues</a>
				<br />
		       </div>
		<?php } 
		
		// nivel de acesso para Vendedores
		else if ($nivel == 1){?>
			<div id="conteudo"> 
			  <a href="lista.php" id="lista_ent2">
			  <img src="imagens/estoque04.jpg"  id="img" alt="Mercadorias a Retirar" title="Mercadorias a Retirar"/><br /><br />
			  Mercadorias a Retirar</a>
			
			  <br />
			
			  <a href="retirada.php" id="lista_sai2">
			  <img src="imagens/estoque01.jpg" id="img2" alt="Mercadorias Entregues" title="Mercadorias Entregues"/><br /><br />
			  Mercadorias Entregues</a>
			  <br />
			</div>
		<?php }	
		
		// nivel para ADM
		 else{?>
			<center>
				<div id="conteudo"> 
				<a href="usuario.php" id="lista_ent">
				<img src="imagens/usuario.jpg" title="Cadastro de Usuario" id="img_entrada" alt="Cadastro de Usuario"/><br /><br />
				Cadastro de Usu&aacute;rio</a>
				
				<br />
				
				<a href="lista.php" id="lista_sai">
				<img src="imagens/estoque04.jpg" id="img_retirada" alt="Mercadorias a Retirar" title="Mercadorias a Retirar"/><br /><br />
				Mercadorias a Retirar</a>
				
				<br />
				
				<a href="retirada.php" id="lista_sai3">
				<img src="imagens/estoque01.jpg" id="img_entregue" alt="Mercadorias Entregues" title="Mercadorias Entregues"/><br /><br />
				Mercadorias Entregues</a>
				<br />
			
				<a href="equipe.php" id="usuario_cada">
				<img src="imagens/equipe.jpg" id="img_usuario" alt="Lista de Usuarios" title="Lista de Usuarios"/><br /><br />
				Painel de Usu&aacute;rios</a>
				<br />
		       </div>
		       </center>
		<?php }	?>
	</body>
</html>