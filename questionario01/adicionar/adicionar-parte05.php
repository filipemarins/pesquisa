<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$qal_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$qal_difand = $_POST['qal_difand'];
$qal_difcor = $_POST['qal_difcor'];
$qal_difpra = $_POST['qal_difpra'];
$qal_diflev = $_POST['qal_diflev'];
$qal_difban = $_POST['qal_difban'];
$qal_difdom = $_POST['qal_difdom'];
$qal_dor = $_POST['qal_dor'];
$qal_energia = $_POST['qal_energia'];
$qal_divconv = $_POST['qal_divconv'];
$qal_jovamigos = $_POST['qal_jovamigos'];
$qal_jovimpl = $_POST['qal_jovimpl'];
$qal_jovidade = $_POST['qal_jovidade'];
$qal_dificilidade = $_POST['qal_dificilidade'];
$qal_ataula = $_POST['qal_ataula'];
$qal_esque = $_POST['qal_esque'];
$qal_difiacomp = $_POST['qal_difiacomp'];
$qal_faltrabalhobem = $_POST['qal_faltrabalhobem'];
$qal_faltrabalhohos = $_POST['qal_faltrabalhohos'];

if(insereSocioEco($conexao, $qal_difand, $qal_difcor, $qal_difpra, $qal_diflev, $qal_difban, $qal_difdom, $qal_dor, $qal_energia, $qal_divconv, $qal_jovamigos, $qal_jovidade, $qal_dificilidade, $qal_ataula, $qal_esque, $qal_difiacomp, $qal_faltrabalhobem, $qal_faltrabalhohos  $qal_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}