<?php

function insereAnabolizante($conexao ,$ana_ja_usou, $ana_atualmente_usa, $ana_winstrol, $ana_dianabol, $ana_deca, $ana_oxandrin, $ana_depo, $ana_equipoise, $ana_durateston, $ana_outros_anabolizantes, $ana_tempo_usou, $ana_finalidade, $ana_outras_finalidade, $ana_usa_medicamento,$ana_efedrina, $ana_insulina, $ana_hepatoprotetor, $ana_clembuterol, $ana_diuretico, $ana_tamoxifeno, $ana_gh,$ana_outros_medicamentos, $ana_sintomas, $ana_pressao, $ana_nausea, $ana_espinhas, $odt_usou_aparelho, $ana_diminuicao_libido, $ana_depressao, $ana_dependencia, $ana_aumento_libido, $ana_humor,$ana_testiculos, $ana_outros_sintomas, $odt_morde_caneta_lapis, $odt_range, $odt_apertar_boca, $odt_fio_dental, $odt_rangerdentes, $odt_quantas_fio, $odt_escovar, $odt_tipo_escova, $odt_quantas_escova,$odt_escova_interdental, $odt_palito, $odt_creme, $odt_creme, $odt_fluor_gel, $odt_fluor_creme, $odt_fluor_bochecho, $odt_fluor_agua, ,$odt_info, $pes_id){
	$query = "insert into anabolizantes (ana_ja_usou, ana_atualmente_usa, ana_winstrol, ana_dianabol, ana_deca, ana_oxandrin, ana_depo, ana_equipoise, ana_durateston, ana_outros_anabolizantes, ana_tempo_usou, ana_finalidade, ana_outras_finalidade, ana_usa_medicamento, ana_efedrina, ana_insulina, ana_hepatoprotetor, ana_clembuterol, ana_diuretico, ana_tamoxifeno, ana_gh, ana_outros_medicamentos, ana_sintomas, ana_pressao, ana_nausea, ana_espinhas, odt_usou_aparelh, ana_diminuicao_libido, ana_depressao, ana_dependencia, ana_aumento_libido, ana_humor, ana_testiculos, ana_outros_sintomas, odt_morde_caneta_lapis, odt_range, odt_apertar_boca, odt_fio_dental, odt_rangerdentes, odt_quantas_fio, odt_escovar, odt_tipo_escova, odt_quantas_escova, odt_escova_interdental, odt_palito, pre_anemia, odt_creme, odt_fluor_gel, odt_fluor_creme, odt_fluor_bochecho, odt_fluor_agua, odt_info, pes_id) values ('{$ana_ja_usou}','{$ana_atualmente_usa}','{$ana_winstrol}','{$ana_dianabol}','{$ana_deca}' '{$ana_oxandrin}','{$ana_depo}','{$ana_equipoise}','{$ana_durateston}','{$ana_outros_anabolizantes}','{$ana_tempo_usou}','{$ana_finalidade}','{$ana_outras_finalidade}','{$ana_usa_medicamento}','{$ana_efedrina}','{$ana_insulina}','{$ana_hepatoprotetor}','{$ana_clembuterol}','{$ana_diuretico}','{$ana_tamoxifeno}','{$ana_gh}','{$ana_outros_medicamentos}','{$ana_sintomas}','{$ana_pressao}','{$ana_nausea}','{$ana_espinhas}','{$odt_usou_aparelho}','{$odt_usaana_sintomas_implate}','{$ana_diminuicao_libido}','{$ana_depressao}','{$ana_dependencia}','{$ana_aumento_libido}','{$ana_humor}','{$ana_testiculos}','{$pre_anemia}','{$ana_outros_sintomas}','{$odt_morde_caneta_lapis}','{$odt_range}','{$odt_apertar_boca}','{$odt_fio_dental}','{$odt_rangerdentes}','{$odt_quantas_fio}','{$odt_escovar}','{$odt_tipo_escova}','{$odt_quantas_escova}','{$odt_escova_interdental}','{$odt_palito}','{$pre_anemia}','{$odt_creme}','{$odt_fluor_gel}','{$odt_fluor_creme}','{$odt_fluor_bochecho}','{$odt_fluor_agua}','{$odt_info}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id