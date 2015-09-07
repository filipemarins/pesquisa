<?php

function insereDrogas($conexao ,$dro_uso_drogas, $dro_uso_atualmente, $dro_maconha, $dro_cocaina, $dro_crack, $dro_ecstasy, $dro_lsd, $dro_inalantes, $dro_heroina, $dro_barbituricos, $dro_morfina, $dro_skank, $dro_cogumelo, $dro_anferamina,$dro_cloroformio, $dro_opio, $dro_outras_drogas, $dro_tempo_usa, $dro_sintomas, $dro_pressao, $dro_nausea,$dro_espinhas, $dro_diminuicao_libido, $dro_depressao, $dro_dependencia, $dro_aumento_libido, $ana_diminuicao_libido, $dro_testiculos, $dro_outros_sintomas, $pes_id){
	$query = "insert into drogas_ilícitas (dro_uso_drogas, dro_uso_atualmente, dro_maconha, dro_cocaina, dro_crack, dro_ecstasy, dro_lsd, dro_inalantes, dro_heroina, dro_barbituricos, dro_morfina, dro_skank, dro_cogumelo, dro_anferamina, dro_cloroformio, dro_opio, dro_outras_drogas, dro_tempo_usa, dro_sintomas, dro_pressao, dro_nausea, dro_espinhas, dro_diminuicao_libido, dro_depressao, dro_dependencia, dro_aumento_libido, odt_usou_aparelh, ana_diminuicao_libido, dro_testiculos, dro_outros_sintomas, pes_id) values ('{$dro_uso_drogas}','{$dro_uso_atualmente}','{$dro_maconha}','{$dro_cocaina}','{$dro_crack}' '{$dro_ecstasy}','{$dro_lsd}','{$dro_inalantes}','{$dro_heroina}','{$dro_barbituricos}','{$dro_morfina}','{$dro_skank}','{$dro_cogumelo}','{$dro_anferamina}','{$dro_cloroformio}','{$dro_opio}','{$dro_outras_drogas}','{$dro_tempo_usa}','{$dro_sintomas}','{$dro_pressao}','{$dro_nausea}','{$dro_espinhas}','{$dro_diminuicao_libido}','{$dro_depressao}','{$dro_dependencia}','{$dro_aumento_libido}','{$odt_usaana_sintomas_implate}','{$ana_diminuicao_libido}','{$dro_testiculos}','{$dro_outros_sintomas}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id
