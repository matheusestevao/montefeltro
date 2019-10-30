<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

        echo '<link rel="shortcut icon" href="imagens/logo.ico"/>';
        echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
	echo '<title>. . . : : : Mercadorias Retiradas : : : . . .</title>';        

if (isset($logado)){
    if ($nivel == 2){
	
	echo '<div style="font-size:50px;text-align:center;color:red"><b>Mercadorias Entregues</b></div>';
        

	//Ordem de exibi√ß√£o da lista
	$buscar = mysqli_query($conexao, "SELECT * FROM saida ORDER BY cliente ASC")or die(mysql_error());
        

	echo '<br />';
	echo '<a id="link2" href="index.php">Menu</a>';
        echo '<a href="lista2.php">Mercadorias a Retirar</a>';
	echo '<br /><br />';
	
	if(mysqli_num_rows($buscar) > 0){


	//caba√ßalho da tabela
        echo '<table border="5px" style="margin-right:auto; margin-left:auto;">
				<thead><tr>
                                        <th style="text-align:center;color:red"><b>Cliente</b></th>
					<th style="text-align:center;color:red"><b>O.S.</b></th>
					<th style="text-align:center;color:red"><b>Item</b></th>
					<th style="text-align:center;color:red"><b>Modelo</b></th>
					<th style="text-align:center;color:red"><b>Quantidade</b></th>
					<th style="text-align:center;color:red"><b>Retirada Por:</b></th>
					<th style="text-align:center;color:red"><b>Dia</b></th>
				</tr></thead>';

	while($row = mysqli_fetch_array($buscar)) {

	   // celulas da tabela
	   		echo'<tr>
					<td style="text-align:center">' . $row['cliente'] . '</td>
					<td style="text-align:center">' . $row['os'] . '</td>
					<td style="text-align:center">' . $row['item'] . '</td>
					<td style="text-align:center">' . $row['modelo'] . '</td>
					<td style="text-align:center">' . $row['qnt'] . '</td>
					<td style="text-align:center">' . $row['ret'] . '</td>
					<td style="text-align:center;color:red">' . $row['data'] . '</td>
					<td style="text-align:center">
					<a href="alterar2.php?id='.$row['id'].'">Reintegrar</a></td>
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

	@mysql_close($conexao);

}else{
		echo '<div id="cabecalho">Acesso Negado</div>';
		echo '<br /><br />';
		echo '<span style="color:red"><b>VocÍ n„o tem permiss„o para acessar essa p·gina.</b></span>';
		echo '<br /><br />';
		echo '<a href="index.php">Voltar</a>';}}

else{
	include("login.php");
}
?>