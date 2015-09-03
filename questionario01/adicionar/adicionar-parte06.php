
<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$who_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$who_avalia = $_POST['who_avalia'];
$who_satsaude = $_POST['who_satsaude'];
$who_dorfisica = $_POST['who_dorfisica'];
$who_medicamento = $_POST['who_medicamento'];
$who_apvida = $_POST['who_apvida'];
$who_sentidovida = $_POST['who_sentidovida'];
$who_concentrar = $_POST['who_concentrar'];
$who_seguro = $_POST['who_seguro'];
$who_saudavel = $_POST['who_saudavel'];
$who_energia = $_POST['who_energia'];
$who_apfisica = $_POST['who_apfisica'];
$who_dinheirosuf = $_POST['who_dinheirosuf'];
$who_dispdiadia = $_POST['who_dispdiadia'];
$who_opolazer = $_POST['who_opolazer'];
$who_locomover = $_POST['who_locomover'];
$who_sono = $_POST['who_sono'];
$who_diadia = $_POST['who_diadia'];
$who_trabalho = $_POST['who_trabalho'];
$who_satisf = $_POST['who_satisf'];
$who_satisfpessoais = $_POST['who_satisfpessoais'];
$who_satisfvida = $_POST['who_satisfvida'];
$who_satisfamigos = $_POST['who_satisfamigos'];
$who_satismora = $_POST['who_satismora'];
$who_satisfsaude = $_POST['who_satisfsaude'];
$who_saitsftransporte = $_POST['who_saitsftransporte'];
$who_frequencianeg = $_POST['who_frequencianeg'];

if(insereSocioEco($conexao ,$who_avalia, $who_satsaude, $who_dorfisica, $who_medicamento, $who_apvida, $who_sentidovida, $who_concentrar, $who_seguro, $who_saudavel, $who_energia, $who_apfisica, $who_dinheirosuf, $who_dispdiadia, $who_dispdiadia,$who_opolazer, $who_locomover, $who_sono, $who_diadia, $who_trabalho, $who_satisf, $who_satisfpessoais,$who_satisfvida, $who_satisfamigos, $who_satismora, $who_satisfvida, $who_saitsftransporte, $who_frequencianeg $who_datahora,$pes_id)){

	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}
