
<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$atv_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$atv_dias = $_POST['atv_dias'];
$atv_tmpdia = $_POST['atv_tmpdia'];
$atv_diasmod = $_POST['atv_diasmod'];
$atv_tmpdiamod = $_POST['atv_tmpdiamod'];
$atv_diasrig = $_POST['atv_diasrig'];
$atv_tmpdiarig = $_POST['atv_tmpdiarig'];
$atv_tmpsentfds = $_POST['atv_tmpsentfds'];
$atv_tmpsentfds = $_POST['atv_tmpsentfds'];

if(insereSocioEco($conexao ,$atv_dias, $atv_tmpdia, $atv_diasmod, $atv_diasrig, $atv_tmpdiarig, $atv_tmpsentfds, $atv_tmpsentfds, $atv_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}
