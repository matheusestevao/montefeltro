<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . : : Retirada : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';

if ($logado){

if($_SERVER['REQUEST_METHOD']=='POST'){

$cliente  = isset($_POST['cliente']) ? $_POST['cliente'] : '';
$os = isset($_POST['os']) ? $_POST['os'] : '';
$item  = isset($_POST['item']) ? $_POST['item'] : '';
$modelo  = isset($_POST['modelo']) ? $_POST['modelo'] : '';
$qnt  = isset($_POST['qnt']) ? $_POST['qnt'] : '';
$ret  = isset($_POST['ret']) ? $_POST['ret'] : '';
$data = isset($_POST['data']) ? $_POST['data'] : '';
$result= mysqli_query($conexao, "SELECT * FROM mercadorias WHERE os='$os' ");
$data = implode("/",array_reverse(explode("-",$data)));

$saida = mysqli_query($conexao, "INSERT INTO saida (ret,data,cliente,os,item,modelo,qnt) VALUES('$ret','$data','$cliente','$os','$item','$modelo','$qnt')")or die(mysqli_error($conexao));

}

    echo '<center style="color:red"><b>Ordem de Serviço ('.$os.') Retirada!</b></center>';

?>

<br />
<br />

<center>
<form name="voltar" action="index.php" method="POST">
<input type="submit" value="Voltar">
</form>
</center>

<?php
}

else{
	include("login.php");
}
?>