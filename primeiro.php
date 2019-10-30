<?php
include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
echo '<title>. . : : Retirada : : . .</title>';
echo '<link rel="shortcut icon" href="js/favicon2.ico"/>';

if($_SERVER['REQUEST_METHOD']=='POST'){

$usuario  = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$email  = isset($_POST['email']) ? $_POST['email'] : '';
$nivel  = isset($_POST['nivel']) ? $_POST['nivel'] : '';
$senha  = isset($_POST['senha']) ? $_POST['senha'] : '';
$status  = isset($_POST['status']) ? $_POST['status'] : '';

if($senha != ""){
                 $senha=md5($senha);
		}

$update = mysqli_query($conexao, "UPDATE lixo SET nivel='$nivel', senha='$senha', status='$status' WHERE email='$email'")or die(mysql_error());

}
echo '<br />';
echo '<br /><br />';
echo '<br /><br />';
echo '<br />';

    echo '<center style="color:red"><b>Senha Alterada com Sucesso!<br />
                                       Refaça o login, para ter seu acesso liberado.</b></center>';
?>
<br />
<br />

<center>
<form name="voltar" action="index.php" method="POST">
<input type="submit" value="Voltar">
</form>
</center>

<?php
?>