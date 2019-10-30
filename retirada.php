<?php
include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

if (isset($logado)){

        echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
	echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';

	echo '<title id="nome3">. . . : : : Mercadorias Entregues : : : . . .</title>';	
	echo '<div style="font-size:50px;text-align:center;color:red"><b>Mercadorias Retiradas</b></div>';


	//Ordem de exibição da lista
	$buscar = mysqli_query($conexao, "SELECT * FROM saida ORDER BY cliente ASC")or die(mysql_error($conexao));
        

	echo '<br />';
	echo '<a id="link" href="index.php">Menu</a>';
        echo '<a href="lista.php">Mercadorias a Retirar</a>';
	echo '<br /><br />';
	
	if(mysqli_num_rows($buscar) > 0){


	//cabaçalho da tabela
        echo '<table border="5px" style="margin-right:auto; margin-left:auto;">
				<thead>
                                 <tr>
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
					<td style="text-align:center">' . $row['data'] . '</td>
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

	@mysqli_close($conexao);

}

else{
	include("login.php");
}
?>