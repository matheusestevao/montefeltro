<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

echo '<link rel="shortcut icon" href="favicon2.ico"/>';
echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all"/>';

if(isset($logado)){
    if ($nivel == 3){
	
	//cabaçalho da tabela
	echo '<title>. . . : : : Usu&aacute;rios : : : . . .</title>';

	echo '<div style="font-size:50px;text-align:center;color:red"><b>Usu&aacute;rios</b></div>';
		
	//Ordem de exibição da lista
	$buscar = mysqli_query($conexao, "SELECT * FROM lixo ORDER BY usuario ASC")or die(mysql_error($conexao));
	
	echo '<br />';
	echo '<a id="link3" href="index.php">Menu</a>';
        echo '<a href="usuario.php">Cadastro de Usu&aacute;rios</a>';
	echo '<br /><br />';



	if(mysqli_num_rows($buscar) > 0){
	
	
        echo '<table border="5px" style="margin-right:auto; margin-left:auto;">
				 <thead>
					<tr>
						<th style="text-align:center;color:red"><b>Nome</b></th>
						<th style="text-align:center;color:red"><b>E-mail</b></th>
						<th style="text-align:center;color:red"><b>Login</b></th>
						<th style="text-align:center;color:red"><b>N&iacute;vel*</b></th>
					</tr>
				</thead>';

        while($row = mysqli_fetch_array($buscar)) {

	   // celulas da tabela
	   		echo'<tr>
					<td style="text-align:center">' . $row['usuario'] . '</td>
					<td style="text-align:center">' . $row['email'] . '</td>
					<td style="text-align:center">' . $row['login_demo2'] . '</td>
					<td style="text-align:center">' . $row['nivel'] . '</td>				
					<td style="text-align:center">
					<a href="alterar_usu.php?id='.$row['id'].'">Alterar</a></td>
					<td style="text-align:center">
					<a href="deletar_usu.php?id='.$row['id'].'">Excluir</a></td>					
				</tr>';

	  }
        }else{
         echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<center>Sem dados cadastrais</center>';
         }         

        echo '</table>';
echo '*( 1-Vendedor / 2-Estoque / 3-Administrador )';
	@mysqli_close($conexao);


	//echo '<center>Você não tem permissão para acessar esta página.</center>';
        //echo '<br />';
	//echo '<center><a href="index.php">Voltar</a></center>';
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