<?php 

//error_reporting(E_ALL ^ E_NOTICE);
//require_once('mostra-alerta.php');
//define('BASE_URL', 'http://localhost/pesquisa/');
include('conecta.php');
include('functions.php');
include('questionario01/logica/logica-usuario.php');
include('questionario01/banco/banco-usuario.php');
include('questionario01/banco/banco-endereco.php');
include('questionario01/banco/banco-parte01.php');
$usuario = 0;
$endereco = 0;
$mulher = 0;

if(verificaSessao()){
	$pes_id = $_SESSION['usuario_cadastro'];
	$endereco = buscaEndereco($conexao,$pes_id);
}
if(verificaSessao()){
	$pes_id = $_SESSION['usuario_cadastro'];
	$usuario = buscaUsuario($conexao,$pes_id);
}
if(verificaSessao()){
	$pes_id = $_SESSION['usuario_cadastro'];
	$mulher = buscaMulher($conexao,$pes_id);
}

?>
<!doctype HTML>
<html>
<head>
<base href="http://localhost/pesquisa/" />
<!-- jQuery -->
<script src="jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="jquery.easing.min.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="css/all.css">
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
</head>
<body>