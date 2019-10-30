<?php

include("includes/header.php");
mysqli_select_db($conexao, $database_conexao);

if (isset($logado)){

        echo '<link rel="shortcut icon" href="imagens/favicon2.ico"/>';
        echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="all" />';
	
	//cabaçalho da tabela
	echo '<title>. . . : : : Mercadorias a Retirar : : : . . .</title>';
	echo '<div style="font-size:50px;text-align:center;color:red"><b>Mercadorias a Retirar</b></div>';
		
	//Ordem de exibição da lista
	$buscar = mysqli_query($conexao, "SELECT * FROM mercadorias ORDER BY cliente ASC")or die(mysql_error($conexo));
	
	echo '<br />';
	echo '<a id="link" href="index.php">Menu</a>';
        echo '<a href="retirada.php">Mercadorias Entregues</a>';
	echo '<br /><br />';
	
	if(mysqli_num_rows($buscar) > 0){
	
	
        echo '<table border="5px" style="margin-right:auto; margin-left:auto;">
				 <thead>
                                 <tr>
					<th style="text-align:center;color:red"><b>Cliente</b></th>
					<th style="text-align:center;color:red"><b>O.S.</b></th>
					<th style="text-align:center;color:red"><b>Item</b></th>
					<th style="text-align:center;color:red"><b>Modelo</b></th>
					<th style="text-align:center;color:red"><b>Quantidade</b></th>
				</tr></thead>';

        while($row = mysqli_fetch_array($buscar)) {

	   // celulas da tabela
	   		echo'<tr>
					<td style="text-align:center">' . $row['cliente'] . '</td>
					<td style="text-align:center">' . $row['os'] . '</td>
					<td style="text-align:center">' . $row['item'] . '</td>
					<td style="text-align:center">' . $row['modelo'] . '</td>
					<td style="text-align:center">' . $row['qnt'] . '</td>
					<td style="text-align:center">	
					<a href="pedido.php?id='.$row['id'].'">Requisitar</a></td>				
				</tr>';

	  }
        }else{
         echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<br />';
		 echo '<center>Sem dados cadastrados</center>';
         }         

        echo '</table>';

	@mysqli_close($conexao);

}else{
include ("login.php");
}
?>