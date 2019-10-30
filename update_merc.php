<?php
include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . : : Retirada : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';

if (($nivel == 2)){
if($_SERVER['REQUEST_METHOD']=='POST'){

$cliente  = isset($_POST['cliente']) ? $_POST['cliente'] : '';
$os = isset($_POST['os']) ? $_POST['os'] : '';
$item  = isset($_POST['item']) ? $_POST['item'] : '';
$modelo  = isset($_POST['modelo']) ? $_POST['modelo'] : '';
$qnt  = isset($_POST['qnt']) ? $_POST['qnt'] : '';

$update = mysqli_query($conexao, "UPDATE mercadorias SET cliente='$cliente', os='$os', item='$item', modelo='$modelo', qnt='$qnt' WHERE os='$os'")or die(mysql_error());

}
echo '<br />';
echo '<br /><br />';
echo '<br /><br />';
echo '<br />';

    echo '<center style="color:red"><b>Ordem de Serviço('.$os.') Alterada com Sucesso!</b></center>';
?>
<br />
<br />

<center>
<form name="voltar" action="lista2.php" method="POST">
<input type="submit" value="Voltar">
</form>
</center>

<?php
}

else{
	include("login.php");
}
?>