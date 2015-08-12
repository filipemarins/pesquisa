<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');
//include('logica-usuario.php');
//include('banco-evento.php');

//verificaUsuario();

$pai_datahora = date("Y-m-d H:i:s"); 

$pai_nome = $_POST['pai_nome'];
$pai_datanascimento = $_POST['pai_datanascimento'];
$pai_escolaridade = $_POST['pai_escolaridade'];
$pai_profissao = $_POST['pai_profissao'];
$pai_trabalhaatualmente = $_POST['pai_trabalhaatualmente'];
$pes_id = usuarioCadastrado();

//echo $pai_nome . $pes_id . $pai_datanascimento . $pai_escolaridade . $pai_profissao . $pai_trabalhaatualmente . $pai_datahora;

if(insereDadosPai($conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}
