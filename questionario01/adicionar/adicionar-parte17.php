<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$ans_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$tab_fumou = $_POST['tab_fumou'];
$tab_cigarro = $_POST['tab_cigarro'];
$tab_cachimbo = $_POST['tab_cachimbo'];
$tab_charuto = $_POST['tab_charuto'];
$tab_narguile = $_POST['tab_narguile'];
$tab_atualmente_fuma = $_POST['tab_atualmente_fuma'];
$tab_tempo_fumou = $_POST['tab_tempo_fumou'];
$tab_frequencia = $_POST['tab_frequencia'];
$tab_media_fuma = $_POST['tab_media_fuma'];
$tab_frequencia = $_POST['tab_frequencia'];


if(insereTabagismo($conexao, $tab_fumou, $tab_cigarro, $tab_cachimbo, $tab_charuto, $tab_narguile, $tab_atualmente_fuma, $tab_tempo_fumou, $tab_frequencia, $tab_media_fuma, $tab_frequencia ,$tab_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();


	}
