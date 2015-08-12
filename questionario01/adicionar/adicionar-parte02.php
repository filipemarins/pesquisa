<?php
include('../../conecta.php');
include('../banco/banco-parte02.php');
require('../logica/logica-usuario.php');
//include('logica-usuario.php');
//include('banco-evento.php');

//verificaUsuario();

$mae_datahora = date("Y-m-d H:i:s"); 

$mae_nome = $_POST['mae_nome'];
$mae_datanascimento = $_POST['mae_datanascimento'];
$mae_escolaridade = $_POST['mae_escolaridade'];
$mae_profissao = $_POST['mae_profissao'];
$mae_trabalhaatualmente = $_POST['mae_trabalhaatualmente'];
$pes_id = usuarioCadastrado();

if(insereDadosMae($conexao,$mae_nome,$mae_datanascimento,$mae_escolaridade,$mae_profissao,$mae_trabalhaatualmente,$mae_datahora,$pes_id)){


	header("Location: ../index.php?parte=03&adicionado=true");
	

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}
