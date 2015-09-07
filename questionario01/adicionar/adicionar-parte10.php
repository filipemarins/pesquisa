<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$odt_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$odt_dataex = $_POST['odt_dataex'];
$odt_excom = $_POST['odt_excom'];
$odt_nfoi_dentista = $_POST['odt_nfoi_dentista'];
$odt_nfoi_motivo = $_POST['odt_nfoi_motivo'];
$odt_carie_familia = $_POST['odt_carie_familia'];
$odt_ganglios_dolorido = $_POST['odt_ganglios_dolorido'];
$odt_sangra_extrai = $_POST['odt_sangra_extrai'];
$odt_dores_nuca = $_POST['odt_dores_nuca'];
$odt_zumbido = $_POST['odt_zumbido'];
$odt_abrir_boca = $_POST['odt_abrir_boca'];
$odt_estala_abre = $_POST['odt_estala_abre'];
$odt_estala_come = $_POST['odt_estala_come'];
$odt_anestesia = $_POST['odt_anestesia'];
$odt_reacao_anestesia = $_POST['odt_reacao_anestesia'];
$odt_dor_dente = $_POST['odt_dor_dente'];
$odt_retencao_alimento = $_POST['odt_retencao_alimento'];
$odt_mastiga_lado = $_POST['odt_mastiga_lado'];
$odt_qual_lado = $_POST['odt_qual_lado'];
$odt_dor_ouvido = $_POST['odt_dor_ouvido'];
$odt_refrigerante = $_POST['odt_refrigerante'];
$odt_gengiva = $_POST['odt_gengiva'];
$odt_protese = $_POST['odt_protese'];
$odt_perdeu_dente = $_POST['odt_perdeu_dente'];
$odt_perdeu_dente_lado = $_POST['odt_perdeu_dente_lado'];
$odt_cirurgia_pescoco = $_POST['odt_cirurgia_pescoco'];
$odt_aparelho = $_POST['odt_aparelho'];
$odt_usou_aparelho = $_POST['odt_usou_aparelho'];
$odt_usa_implate = $_POST['odt_usa_implate'];
$odt_canal = $_POST['odt_canal'];
$odt_experiencia = $_POST['odt_experiencia'];
$odt_qual_experiencia = $_POST['odt_qual_experiencia'];
$odt_ingere_alimentos = $_POST['odt_ingere_alimentos'];
$odt_roi_unhas = $_POST['odt_roi_unhas'];
$odt_respira_boca = $_POST['odt_respira_boca'];
$odt_chimarrao = $_POST['odt_chimarrao'];
$odt_chupa_bico_dedo = $_POST['odt_chupa_bico_dedo'];
$odt_morde_caneta_lapis = $_POST['odt_morde_caneta_lapis'];
$odt_range = $_POST['odt_range'];
$odt_apertar_boca = $_POST['odt_apertar_boca'];
$odt_fio_dental = $_POST['odt_fio_dental'];
$odt_rangerdentes = $_POST['odt_rangerdentes'];
$odt_quantas_fio = $_POST['odt_quantas_fio'];
$odt_escovar = $_POST['odt_escovar'];
$odt_tipo_escova = $_POST['odt_tipo_escova'];
$odt_quantas_escova = $_POST['odt_quantas_escova'];
$odt_escova_interdental = $_POST['odt_escova_interdental'];
$odt_palito = $_POST['odt_palito'];
$odt_creme = $_POST['odt_creme'];
$odt_fluor_gel = $_POST['odt_fluor_gel'];
$odt_fluor_creme = $_POST['odt_fluor_creme'];
$odt_fluor_bochecho = $_POST['odt_fluor_bochecho'];
$odt_fluor_agua = $_POST['odt_fluor_agua'];
$odt_info = $_POST['odt_info'];


if(insereOdontologico( $odt_dataex, $odt_excom, $odt_nfoi_dentista, $odt_nfoi_motivo, $odt_carie_familia, $odt_ganglios_dolorido, $odt_sangra_extrai, $odt_dores_nuca, $odt_zumbido, $odt_abrir_boca, $odt_estala_abre, $odt_estala_come, $odt_anestesia, $odt_reacao_anestesia, $odt_dor_dente, $odt_retencao_alimento, $odt_mastiga_lado, $odt_qual_lado, $odt_dor_ouvido, $odt_refrigerante, $odt_gengiva, $odt_protese, $odt_perdeu_dente, $odt_perdeu_dente_lado, $odt_cirurgia_pescoco, $odt_aparelho, $odt_usou_aparelho, $odt_usa_implate, $odt_canal, $odt_experiencia, $odt_qual_experiencia, $odt_ingere_alimentos, $odt_roi_unhas, $odt_respira_boca, $odt_chimarrao, $odt_chupa_bico_dedo, $odt_morde_caneta_lapis, $odt_range, $odt_apertar_boca, $odt_fio_dental, $odt_rangerdentes, $odt_quantas_fio, $odt_escovar, $odt_tipo_escova, $odt_quantas_escova, $odt_escova_interdental, $odt_palito, $odt_creme, $odt_fluor_gel, $odt_fluor_creme, $odt_fluor_bochecho, $odt_fluor_agua, $odt_info, $odt_datahora,$pes_id)){


	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	
	}
