<?php
include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<link rel="shortcut icon" href="favicon2.ico"/>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . . : : : Confirma&ccedil;&atilde;o : : : . . .</title>';

if (isset($logado)){
     if ($nivel == 2){		
			if($_SERVER['REQUEST_METHOD']=='POST'){
     
			$cliente  = isset($_POST['cliente']) ? $_POST['cliente'] : '';
			$os = isset($_POST['os']) ? $_POST['os'] : '';
			$item  = isset($_POST['item']) ? $_POST['item'] : '';
			$modelo  = isset($_POST['modelo']) ? $_POST['modelo'] : '';
			$qnt  = isset($_POST['qnt']) ? $_POST['qnt'] : '';
			$busca = mysqli_query($conexao, "SELECT * FROM mercadorias WHERE os='$os' ");
			$valida = mysqli_num_rows($busca);
			$data	  = date("d/m/y");	 //função para pegar a data de envio do e-mail
			
			if (($valida)=='0'){	
				$inserir = mysqli_query($conexao, "INSERT INTO mercadorias (cliente,os,item,modelo,qnt) VALUES('$cliente','$os','$item','$modelo','$qnt')")or 
				die(mysql_error($conexao));

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
include("phpmailer/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Port = '2525';
$mail->Host = 'mail.skinnysoft.com.br'; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'sistema@skinnysoft.com.br'; // Usuário do servidor SMTP
$mail->Password = 'jarvan,666'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->SetFrom = 'sistema@skinnysoft.com.br'; // Seu e-mail
$mail->FromName = 'Sistema - Almoxarifado'; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('matheus.estevao990@gmail.com', 'Matheus Firma');
//$mail->AddAddress('murilo.c.tavares@ericssoninovacao.com.br', 'Murillo');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('matheus@montefeltrodiesel.com.br', 'Matheus'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = 'Ordem de Serviço '.$os.' ('.$item.') Pronta!'; // Assunto da mensagem
$mail->MsgHTML('Ordem de Serviço Pronta! <br /> 
'.$data.' <br /><br /> 
<b>Cliente</b>:'.$cliente.'<br /> 
<b>O.S.</b>:'.$os.'<br /> <b>Item</b>:'.$item.'<br /> 
<b>Modelo</b>:'.$modelo.'<br /> 
<b>Quantidade</b>:'.$qnt.'
<br /> <br />
Acesse: www.mercadorias.hol.es para verificar outras O.S. pendentes. 
<br /><br /><br /><br />
(MENSAGEM GERADA AUTOMATICAMENTE. FAVOR, NÃO RESPONDER.) ');
//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <img src="http://i2.wp.com/blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif?w=625" alt=":)" class="wp-smiley" width="15" height="15"> ";

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
echo '<span style="color:red"><b>Vendedores Informados!</b></span>';
} else {
echo '<span style="color:red"><b>Não foi possível informar os vendedores.</b></span><br /><br />';
echo '<b>Informações do erro:</b> <br />' . $mail.'->ErrorInfo';
}

		  
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo "<br />";
				  echo '<center style="color:red"><b>Ordem de Serviço ('.$os.'), Cadastrada!</b></center>'; }
					 else {
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo "<br />";
					echo '<center style="color:red"><b>Ordem de Serviço ('.$os.'), Já Cadastrada!</b></center>';				
				}
					}
		?>
		
		<br />			
		<br />	
		<br />
		
		<center>
			<form name="voltar" action="formu.php" method="POST">	
				<input type="submit" name="menu" value="Menu" />	
				<input type="submit" name="cadastro" value="Cadastro" />
			</form>
		</center>	

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