<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$soc_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$soc_rendafamiliar = $_POST['soc_rendafamiliar'];
$soc_contri = $_POST['soc_contri'];
$soc_sustentadas = $_POST['soc_sustentadas'];
$soc_suacontri = $_POST['soc_suacontri'];


if(insereSocioEco($conexao ,$soc_rendafamiliar, $soc_contri, $soc_sustentadas, $soc_suacontri, $soc_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}
