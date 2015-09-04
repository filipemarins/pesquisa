<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$ans_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$ana_ja_usou = $_POST['ana_ja_usou'];
$ana_atualmente_usa = $_POST['ana_atualmente_usa'];
$ana_winstrol = $_POST['ana_winstrol'];
$ana_dianabol = $_POST['ana_dianabol'];
$ana_deca = $_POST['ana_deca'];
$ana_oxandrin = $_POST['ana_oxandrin'];
$ana_depo = $_POST['ana_depo'];
$ana_equipoise = $_POST['ana_equipoise'];
$ana_durateston = $_POST['ana_durateston'];
$ana_outros_anabolizantes = $_POST['ana_outros_anabolizantes'];
$ana_tempo_usou = $_POST['ana_tempo_usou'];
$ana_finalidade = $_POST['ana_finalidade'];
$ana_outras_finalidade = $_POST['ana_outras_finalidade'];
$ana_usa_medicamento = $_POST['ana_usa_medicamento'];
$ana_efedrina = $_POST['ana_efedrina'];
$ana_insulina = $_POST['ana_insulina'];
$ana_hepatoprotetor = $_POST['ana_hepatoprotetor'];
$ana_clembuterol = $_POST['ana_clembuterol'];
$ana_diuretico = $_POST['ana_diuretico'];
$ana_tamoxifeno = $_POST['ana_tamoxifeno'];
$ana_gh = $_POST['ana_gh'];
$ana_outros_medicamentos = $_POST['ana_outros_medicamentos'];
$ana_sintomas = $_POST['ana_sintomas'];
$ana_pressao = $_POST['ana_pressao'];
$ana_nausea = $_POST['ana_nausea'];
$ana_espinhas = $_POST['ana_espinhas'];
$ana_diminuicao_libido = $_POST['ana_diminuicao_libido'];
$ana_depressao = $_POST['ana_depressao'];
$ana_dependencia = $_POST['ana_dependencia'];
$ana_aumento_libido = $_POST['ana_aumento_libido'];
$ana_humor = $_POST['ana_humor'];
$ana_testiculos = $_POST['ana_testiculos'];
$ana_outros_sintomas = $_POST['ana_outros_sintomas'];


if(insereAnabolizante($conexao, $ana_ja_usou, $ana_atualmente_usa, $ana_winstrol, $ana_dianabol, $ana_deca, $ana_oxandrin, $ana_depo, $ana_equipoise, $ana_durateston, $ana_outros_anabolizantes, $ana_tempo_usou, $ana_finalidade, $ana_outras_finalidade, $ana_usa_medicamento, $ana_efedrina, $ana_insulina, $ana_hepatoprotetor, $ana_clembuterol, $ana_diuretico, $ana_tamoxifeno, $ana_gh, $ana_outros_medicamentos, $ana_sintomas, $ana_pressao, $ana_nausea, $ana_espinhas, $ana_diminuicao_libido, $ana_depressao, $ana_dependencia, $ana_aumento_libido, $ana_humor, $ana_testiculos, $ana_outros_sintomas ,$ana_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();


	}
