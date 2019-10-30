<?php
	include("connection/conexao.php");
	class Login{
		public function logar($login_demo2, $senha){
			$sql = "SELECT * FROM lixo WHERE login_demo2='$login_demo2' AND senha='$senha' LIMIT 1";
			$conn = new mysqli("localhost", "root", '', "skinn673_demo2");
			$buscar=mysqli_query($conn, $sql);
			if(mysqli_num_rows($buscar) == 1){
				$dados=mysqli_fetch_array($buscar);
				if($dados["status"] == '1'){
					$_SESSION["login_demo2"]=$dados["login_demo2"];
					$_SESSION["senha"]=$dados["senha"];
					$_SESSION["nivel"]=$dados["nivel"];
					setcookie("logado",1);
					$log=1;
			    }else{?>
				  <script>
				  	alert('Este Usuário não tem mais permissão para acessar o sistema.');
					
				  </script>
<?php			  }
		}
	
	}
}
?>	