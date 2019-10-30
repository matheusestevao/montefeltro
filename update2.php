<?php
 
include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);
 
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
echo '<title>. . : : Reintegra&ccedil;&atilde;o	 : : . .</title>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
 
if (isset($logado)){
     if ($nivel == 2 ){
 
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
 
if($_SERVER['REQUEST_METHOD']=='POST'){

$cliente  = isset($_POST['cliente']) ? $_POST['cliente'] : '';
$os = isset($_POST['os']) ? $_POST['os'] : '';
$item  = isset($_POST['item']) ? $_POST['item'] : '';
$modelo  = isset($_POST['modelo']) ? $_POST['modelo'] : '';
$qnt  = isset($_POST['qnt']) ? $_POST['qnt'] : '';
$busca = mysqli_query($conexao, "SELECT * FROM mercadorias WHERE os='$os' ");
$valida = mysqli_num_rows($busca);
 
	if (($valida)=='0'){	
	 $inserir = mysqli_query($conexao, "INSERT INTO mercadorias (cliente,os,item,modelo,qnt) VALUES('$cliente','$os','$item','$modelo','$qnt')")or 
	 die(mysql_error());
	 echo '<br />';
	 echo '<br />';
	 echo '<br />';
	 echo '<br />';
	 echo '<br />';
	 echo '<br />';
	 echo '<br />';
	 echo '<br />';
	 echo '<center style="color:red"><b>Ordem de Serviço ('.$os.'), Reintegrada!</b></center>'; }
		else {
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<center style="color:red"><b>Ordem de Serviço ('.$os.'), Já Reintegrada!</b></center>';				
				}
					}
 
function deletar($os)
{
    $delete = mysqli_query($conexao, "DELETE FROM saida where os='$os'") or die(mysql_error());
}
deletar($os);
?>
 
<br />
<br />
 
<center>
<form name="voltar" action="index.php" method="POST">
<input type="submit" value="Menu">
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