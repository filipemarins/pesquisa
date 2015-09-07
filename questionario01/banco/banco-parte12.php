<?php

function insereStress($conexao ,$sts_tensao, $sts_hiperacidez, $sts_esquecimento, $sts_irritabilidade, $sts_vontadesumir, $sts_incompetencia, $sts_umassunto, $sts_ansiedade, $sts_sono, $sts_cansaco_levantar, $sts_competencia_baixa, $sts_nada_vale, $pes_id){
	$query = "insert into avaliacao_stress (sts_tensao, sts_hiperacidez, sts_esquecimento, sts_irritabilidade, sts_vontadesumir, sts_incompetencia, sts_umassunto, sts_ansiedade, sts_sono, sts_cansaco_levantar, sts_competencia_baixa, sts_nada_vale, pes_id) values ('{$sts_tensao}','{$sts_hiperacidez}','{$sts_esquecimento}','{$sts_irritabilidade}','{$sts_vontadesumir}' '{$sts_incompetencia}','{$sts_umassunto}','{$sts_ansiedade}','{$sts_sono}','{$sts_cansaco_levantar}','{$sts_competencia_baixa}','{$sts_nada_vale}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id
