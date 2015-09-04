<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$ans_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$alc_ja_bebeu = $_POST['alc_ja_bebeu'];
$alc_atualmente_bebe = $_POST['alc_atualmente_bebe'];
$alc_frequencia = $_POST['alc_frequencia'];
$alc_quantidade = $_POST['alc_quantidade'];
$alc_quantidade_seix = $_POST['alc_quantidade_seix'];
$alc_deixou_beber = $_POST['alc_deixou_beber'];
$alc_bebe_muito = $_POST['alc_bebe_muito'];
$alc_parentes_acham = $_POST['alc_parentes_acham'];
$alc_aa = $_POST['alc_aa'];
$alc_perdeu_bebida = $_POST['alc_perdeu_bebida'];
$alc_problema_trabalho = $_POST['alc_problema_trabalho'];
$alc_obrigacoes = $_POST['alc_obrigacoes'];
$alc_tremores = $_POST['alc_tremores'];
$alc_ajuda = $_POST['alc_ajuda'];
$alc_hospitalizado = $_POST['alc_hospitalizado'];
$alc_preso_multado = $_POST['alc_preso_multado'];


if(insereAlcolismo($conexao, $alc_ja_bebeu, $alc_atualmente_bebe, $alc_frequencia, $alc_quantidade, $alc_quantidade_seix, $alc_deixou_beber, $alc_bebe_muito, $ $alc_parentes_acham, $alc_aa, $alc_perdeu_bebida, $alc_problema_trabalho, $alc_obrigacoes, $alc_tremores, $alc_hospitalizado, $alc_preso_multado ,$alc_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}
