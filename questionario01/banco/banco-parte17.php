<?php

function insereTabagismo($conexao ,$tab_fumou, $tab_cigarro, $tab_cachimbo, $tab_charuto, $tab_narguile, $tab_atualmente_fuma, $tab_tempo_fumou, $tab_frequencia, $tab_media_fuma, $tab_frequencia,$pes_id){
	$query = "insert into tabagismo (tab_fumou, tab_cigarro, tab_cachimbo, tab_charuto, tab_narguile, tab_atualmente_fuma, tab_tempo_fumou, tab_frequencia, tab_media_fuma, tab_frequencia,pes_id) values ('{$tab_fumou}','{$tab_cigarro}','{$tab_cachimbo}','{$tab_charuto}','{$tab_narguile}' '{$tab_atualmente_fuma}','{$tab_tempo_fumou}','{$tab_frequencia}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id