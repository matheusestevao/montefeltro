<?
include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<title>. . : : Confirma&ccedil;&aatilde;o de Pedido : : . .</title>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';

//N�o remova estas linhas
//Altere somente o necess�rio e onde for indicado
//Caso deseje adicionar mais campos ao seu Formul�rio
//Adicione abaixo a vari�vel conforme a estrutura abaxio
//Exemplo: $endereco =  $_POST["endereco"];
  // $endereco � a vari�vel que recebe o campo do formul�rio html
  //que dever� obrigat�riamente se chamar endereco, letras maiusculas e minusculas
  //fazem diferen�a
  //$_POST["campo do formul�rio"]; � a express�o que por m�todo post pega o campo
  //do formul�rio e atribui a vari�vel que est� antes com o mesmo nome do campo.
  // Se adiconar variaveis aqui adicione os campos tamb�m no formul�rio HTML do site
  
$cliente  = $_POST['cliente'];
$os = $_POST['os'];
$item  = $_POST['item'];
$modelo  = $_POST['modelo'];
$qnt  = $_POST['qnt'];
$msg = $_POST['msg'];
$assunto = $_POST['assunto'];
$email = $_POST['email'];

global $email; //fun��o para validar a vari�vel $email no script todo
//aqui envia o e-mail para voc�
$envia = mail ("matheus.estevao990@gmail.com",	 //email aonde o php vai enviar os dados do form
  "$assunto", //N�o altere � o assunto digitado no formul�rio html
  //Se voc� adicionou algum campo l� no inicio voc� dever� colocar logo abaixo tamb�m
  //para o script poder enviar corretamente para o seu email
  //Exemplo de como adicionar:  Campo_do_Formul�rio: $vari�veln
  //A vari�vel da senten�a acima deve ser a mesma que voc� colocou para o campo no alto deste script n � para quebrar a linha para baixo
  // lembre que se for adicionar no inicio da linha abaixo de n�o excluir as " aspas,
  // Se for no final tamb�m " deve ter aspas.
  "   Cliente: $cliente
   O.S.: $os
   Item: $item
   Modelo: $modelo
   qnt: $qnt
   


   $msg"
  //"From: $email"
);
if ($envia) {
echo '<br /><br /><br />';
echo '<center style="color:red"><b>Pedido enviado ao Estoque com Sucesso!</b>';
echo '<br /><br /><br />';
echo '<form name="voltar" action="formu.php" method="POST">';
echo '<input type="submit" name="lista" value="Voltar">';
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo '<input type="submit" name="voltar" value="Menu"></center>'; //Msg de Agradecimento.
echo '</form>';
}
else {
echo '<center style="color:red"><b>Problemas no envio, por favor tente novamente</b>';
echo "<a href='pedido.php' name='pedido'>Voltar</a></center>"; //volte ao formulario do pedido
}
?>