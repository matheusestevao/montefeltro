<?
include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<title>. . : : Confirma&ccedil;&aatilde;o de Pedido : : . .</title>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';

//Não remova estas linhas
//Altere somente o necessário e onde for indicado
//Caso deseje adicionar mais campos ao seu Formulário
//Adicione abaixo a variável conforme a estrutura abaxio
//Exemplo: $endereco =  $_POST["endereco"];
  // $endereco é a variável que recebe o campo do formulário html
  //que deverá obrigatóriamente se chamar endereco, letras maiusculas e minusculas
  //fazem diferença
  //$_POST["campo do formulário"]; é a expressão que por método post pega o campo
  //do formulário e atribui a variável que está antes com o mesmo nome do campo.
  // Se adiconar variaveis aqui adicione os campos também no formulário HTML do site
  
$cliente  = $_POST['cliente'];
$os = $_POST['os'];
$item  = $_POST['item'];
$modelo  = $_POST['modelo'];
$qnt  = $_POST['qnt'];
$msg = $_POST['msg'];
$assunto = $_POST['assunto'];
$email = $_POST['email'];

global $email; //função para validar a variável $email no script todo
//aqui envia o e-mail para você
$envia = mail ("matheus.estevao990@gmail.com",	 //email aonde o php vai enviar os dados do form
  "$assunto", //Não altere é o assunto digitado no formulário html
  //Se você adicionou algum campo lá no inicio você deverá colocar logo abaixo também
  //para o script poder enviar corretamente para o seu email
  //Exemplo de como adicionar:  Campo_do_Formulário: $variáveln
  //A variável da sentença acima deve ser a mesma que você colocou para o campo no alto deste script n é para quebrar a linha para baixo
  // lembre que se for adicionar no inicio da linha abaixo de não excluir as " aspas,
  // Se for no final também " deve ter aspas.
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