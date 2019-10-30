<?php
//Starts
ob_start();
session_start();

//Globais
include("globais.php");

//Include das classes
include("classes/Login.class.php");

//Conexão com o banco de dados
include("connection/conexao.php");

//Métodos
include("controllers/login.php");
include("controllers/logout.php");
include("controllers/check.php");
?>