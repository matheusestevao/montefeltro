<?php
include ("includes/header.php");

echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . : : Retirada : : . .</title>';
echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';

if (($nivel == 3)){

if($_SERVER['REQUEST_METHOD']=='POST'){

$usuario  = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$email  = isset($_POST['email']) ? $_POST['email'] : '';
$nivel  = isset($_POST['nivel']) ? $_POST['nivel'] : '';

$update = mysqli_query($conexao, "UPDATE lixo SET nivel='$nivel' WHERE email='$email'")or die(mysql_error());

}
echo '<br />';
echo '<br /><br />';
echo '<br /><br />';
echo '<br />';

    echo '<center style="color:red"><b>Usu&aacute;rio Alterado com Sucesso!</b></center>';
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