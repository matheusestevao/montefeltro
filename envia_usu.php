<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . . : : : Confirma&ccedil;&atilde;o : : : . . .</title>';

if (isset($logado)){
     if ($nivel == 3){

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
			
			$usuario  = isset($_POST['usuario']) ? $_POST['usuario'] : '';
			$login = isset($_POST['login_demo2']) ? $_POST['login_demo2'] : '';
			$email  = isset($_POST['email']) ? $_POST['email'] : '';
			$nivel  = isset($_POST['nivel']) ? $_POST['nivel'] : '';
			$senha  = isset($_POST['senha']) ? $_POST['senha'] : '';
			$status = isset($_POST['status']) ? $_POST['status'] : '';
			$busca = mysqli_query("SELECT * FROM lixo WHERE email='$email' ");
			$valida = mysqli_num_rows($busca);
			
			if($senha != ""){
				$senha=md5($senha);
				}
				
			if (($valida)=='0'){	
				$inserir = mysqli_query($conexao "INSERT INTO lixo (usuario,login_demo2,email,nivel,senha,status) VALUES('$usuario','$login','$email','$nivel','$senha','$status')")or 
				die(mysql_error());

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
include("phpmailer/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conex�o
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem sera SMTP
$mail->Port = '2525';
$mail->Host = 'mail.skinnysoft.com.br'; // Endere�o do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'sistema@skinnysoft.com.br'; // Usuario do servidor SMTP
$mail->Password = 'diesel123'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->SetFrom = 'sistema@skinnysoft.com.br'; // Seu e-mail
$mail->FromName = 'Sistema Estoque'; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($email, $usuario);
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('matheus@montefeltrodiesel.com.br', 'Matheus'); // Cópia Oculta

// Define os dados t�cnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail sera enviado como HTML
$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = 'Confirma��o de Cadastro'; // Assunto da mensagem
$mail->MsgHTML('Confirma��o de Cadastro.
<br /><br />
Login: '.$login.'
<br />
Senha: montefeltro
<br /><br />
Acesse: www.mercadorias.hol.es para maiores informa��es. 
<br /><br /><br /><br />
(MENSAGEM GERADA AUTOMATICAMENTE. FAVOR, N�O RESPONDER.) ');
//$mail->AltBody = "Este � o corpo da mensagem de teste, em Texto Plano! \r\n <img src="http://i2.wp.com/blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif?w=625" alt=":)" class="wp-smiley" width="15" height="15"> ";

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
	
// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
echo '<center style="color:red"><b>E-mail enviado para '.$usuario.'!</b></center>';
} else {
echo '<center style="color:red"><b>N�o foi poss�vel informar o Usu�rio.</b></center><br /><br />';
echo '<b>Informa��o do erro:</b> <br />' . '$mail->ErrorInfo';
}

		  
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo '<center style="color:red"><b>Usu�rio cadastrado com Sucesso!</b></center>'; }
					 else {
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo '<center style="color:red"><b>N�o foi poss�vel realizar o Cadastro.</b></center><br />';
					echo '<center style="color:red"><b>E-mail j� cadastrado!</b></center>';				
				}
					}
		?>
<br />			
<br />	
<br />
             			<form name="voltar" action="index.php" method="POST">	
				   <input type="submit" name="voltar" value="Voltar" />
			        </form>			

<?php
}else{
		echo '<div id="cabecalho">Acesso Negado</div>';
		echo '<br /><br />';
		echo '<span style="color:red"><b>Voc� n�o tem permiss�o para acessar essa p�gina.</b></span>';
		echo '<br /><br />';
		echo '<a href="index.php">Voltar</a>';}}

else{
	include("login.php");
}
	
?>	