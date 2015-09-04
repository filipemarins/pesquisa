<?php

function insereAnsiedade($conexao ,$ans_domencia, $ans_calor, $ans_tremores_pernas, $ans_relaxar, $ans_medo_pior, $ans_tonto, $ans_palpitacao, $ans_equilibrio, $ans_aterrorizado, $ans_nervoso, $ans_sufocacao, $ans_tremores_mao, $ans_tremulo, $ans_medo_controle,$ans_respirar, $ans_morrer, $ans_assustado, $ans_ingestaro, $ans_desmaio, $ans_afogueado, $ans_suor, $pes_id){
	$query = "insert into ansiedade (ans_domencia, ans_calor, ans_tremores_pernas, ans_relaxar, ans_medo_pior, ans_tonto, ans_palpitacao, ans_equilibrio, ans_aterrorizado, ans_nervoso, ans_sufocacao, ans_tremores_mao, ans_tremulo, ans_medo_controle, ans_respirar, ans_morrer, ans_assustado, ans_ingestaro, ans_desmaio, ans_afogueado, ans_suor, pes_id) values ('{$ans_domencia}','{$ans_calor}','{$ans_tremores_pernas}','{$ans_relaxar}','{$ans_medo_pior}' '{$ans_tonto}','{$ans_palpitacao}','{$ans_equilibrio}','{$ans_aterrorizado}','{$ans_nervoso}','{$ans_sufocacao}','{$ans_tremores_mao}','{$ans_tremulo}','{$ans_medo_controle}','{$ans_respirar}','{$ans_morrer}','{$ans_assustado}','{$ans_ingestaro}','{$ans_desmaio}','{$ans_afogueado}','{$ans_suor}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id
