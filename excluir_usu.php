<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . : : Excluir Usu&aacute;rio : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';

if ($logado){
if($_SERVER['REQUEST_METHOD']=='POST'){

$usuario  = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$email  = isset($_POST['email']) ? $_POST['email'] : '';
$nivel  = isset($_POST['nivel']) ? $_POST['nivel'] : '';


    $delete = mysqli_query($conexao, "DELETE FROM lixo WHERE email='$email'") or die(mysql_error());
    echo '<center style="color:red"><b>Usu&aacute;rio Excluido com Sucesso!</b></center>';


}
echo '<br />';
echo '<br /><br />';
echo '<br /><br />';
echo '<br />';


?>
<center>
<form name="voltar" action="index.php" method="POST">
<input type="submit" value="Menu">
</form>
</center>

<?php
}
else{
	include("login.php");
}

?>