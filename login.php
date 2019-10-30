<html>
	<head>
                <link rel="shortcut icon" href="imagens/favicon2.ico"/>
		<meta charset="utf-8">
		<meta content="Matheus Estev&atilde;o" name="author" />
		<title>. . . : : : M O N T E F E L T R O : : : . . . </title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
		<script>function mudacor(ref,cor){ref.style.backgroundColor=cor;}</script>

	</head>

	<body>
        <div id="cabecalho">
           <span id="nome">MONTEFELTRO</span>
           <br>
           <span id="nome2">D&nbsp&nbsp&nbsp&nbsp
                            I&nbsp&nbsp&nbsp&nbsp
                            E&nbsp&nbsp&nbsp&nbsp
                            S&nbsp&nbsp&nbsp&nbsp
                            E&nbsp&nbsp&nbsp
                            L</span>
        </div>
		<center>
			<div  id="login">
					<form action="index.php?acao=logar" method="post"><br />
					<b>Login:</b><br />  <input type="text" name="login_demo2" class="login" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
					<br />
					<b>Senha:</b><br /> <input type="password" name="senha" class="senha" onfocus="mudacor(this,'#A9A9A9')" onblur="mudacor(this,'white')"/>
					<br /><br />
					<input type="submit" value="Entrar" href="acesso.php?id='.$row['id'].'">
				</form>
			</div>
		</center>
	</body>
</html>			