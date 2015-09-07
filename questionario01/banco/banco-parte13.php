<?php

function insereDepressao($conexao ,$dep_triste, $dep_futuro, $dep_frac, $dep_prazer, $dep_culpado, $dep_punido, $dep_decepcionado, $dep_pior_outros, $dep_matar, $dep_choro, $dep_irritado, $dep_interesse, $dep_decisoes, $dep_pior_antes,$dep_trabalhar_antes, $dep_dormir_brm, $dep_cansado, $dep_apetite, $dep_peso, $dep_perder_peso, $dep_preocupado_saude,$dep_mudanca_sexo, $pes_id){
	$query = "insert into avaliacao_de_depressao (dep_triste, dep_futuro, dep_frac, dep_prazer, dep_culpado, dep_punido, dep_decepcionado, dep_pior_outros, dep_matar, dep_choro, dep_irritado, dep_interesse, dep_decisoes, dep_pior_antes, dep_trabalhar_antes, dep_dormir_brm, dep_cansado, dep_apetite, dep_peso, dep_perder_peso, dep_preocupado_saude, dep_mudanca_sexo, pes_id) values ('{$dep_triste}','{$dep_futuro}','{$dep_frac}','{$dep_prazer}','{$dep_culpado}' '{$dep_punido}','{$dep_decepcionado}','{$dep_pior_outros}','{$dep_matar}','{$dep_choro}','{$dep_irritado}','{$dep_interesse}','{$dep_decisoes}','{$dep_pior_antes}','{$dep_trabalhar_antes}','{$dep_dormir_brm}','{$dep_cansado}','{$dep_apetite}','{$dep_peso}','{$dep_perder_peso}','{$dep_preocupado_saude}','{$dep_mudanca_sexo}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id
