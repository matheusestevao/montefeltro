<?php
if($startaction == 1 && $acao == "logar"){
		//Dados
		$login=addslashes($_POST["login_demo2"]);
		$senha=addslashes(md5($_POST["senha"]));
		
		if(empty($login) || empty($senha)){
			$msg="Preencha todos os campos!";
		}else{
			if(!filter_var($login)){
				$msg="Digite seu Login corretamente!";
			}else{
				//Executa a busca pelo usuario
				$conectar=new Login;
				echo "<div class=\"flash\">";
				$conectar=$conectar->logar($login, $senha); 
				echo"</div>";
				
			}
		}
}
?>