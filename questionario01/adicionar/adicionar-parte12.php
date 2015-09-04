<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$sts_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$sts_tensao = $_POST['sts_tensao'];
$sts_hiperacidez = $_POST['sts_hiperacidez'];
$sts_esquecimento = $_POST['sts_esquecimento'];
$sts_irritabilidade = $_POST['sts_irritabilidade'];
$sts_vontadesumir = $_POST['sts_vontadesumir'];
$sts_incompetencia = $_POST['sts_incompetencia'];
$sts_umassunto = $_POST['sts_umassunto'];
$sts_ansiedade = $_POST['sts_ansiedade'];
$sts_sono = $_POST['sts_sono'];
$sts_cansaco_levantar = $_POST['sts_cansaco_levantar'];
$sts_competencia_baixa = $_POST['sts_competencia_baixa'];
$sts_nada_vale = $_POST['sts_nada_vale'];


if(insere($conexao, $sts_tensao, $sts_hiperacidez, $sts_esquecimento, $sts_irritabilidade, $sts_vontadesumir, $sts_incompetencia, $sts_umassunto, $sts_ansiedade, $sts_sono, $sts_cansaco_levantar, $sts_competencia_baixa, $sts_nada_vale, $sts_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}
