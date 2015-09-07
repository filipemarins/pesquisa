<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$dep_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$dep_triste = $_POST['dep_triste'];
$dep_futuro = $_POST['dep_futuro'];
$dep_frac = $_POST['dep_frac'];
$dep_prazer = $_POST['dep_prazer'];
$dep_culpado = $_POST['dep_culpado'];
$dep_punido = $_POST['dep_punido'];
$dep_decepcionado = $_POST['dep_decepcionado'];
$dep_pior_outros = $_POST['dep_pior_outros'];
$dep_matar = $_POST['dep_matar'];
$dep_choro = $_POST['dep_choro'];
$dep_irritado = $_POST['dep_irritado'];
$dep_interesse = $_POST['dep_interesse'];
$dep_decisoes = $_POST['dep_decisoes'];
$dep_pior_antes = $_POST['dep_pior_antes'];
$dep_trabalhar_antes = $_POST['dep_trabalhar_antes'];
$dep_dormir_brm = $_POST['dep_dormir_brm'];
$dep_cansado = $_POST['dep_cansado'];
$dep_apetite = $_POST['dep_apetite']
$dep_peso = $_POST['dep_peso'];
$dep_perder_peso = $_POST['dep_perder_peso'];
$dep_preocupado_saude = $_POST['dep_preocupado_saude'];
$dep_mudanca_sexo = $_POST['dep_mudanca_sexo'];


]if(insereDepressao($conexao, $dep_triste, $dep_futuro, $dep_frac, $dep_prazer, $dep_punido, $dep_decepcionado, $dep_pior_outros, $dep_matar, $dep_choro, $dep_irritado, $dep_interesse, $dep_decisoes, $dep_pior_antes, $dep_trabalhar_antes, $dep_dormir_brm, $dep_cansado, $dep_apetite, $dep_peso, $dep_perder_peso, $dep_preocupado_saude, $dep_mudanca_sexo, $dep_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();


	}
