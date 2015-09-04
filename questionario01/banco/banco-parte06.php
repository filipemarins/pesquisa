<?php

function insereWhoqol($conexao ,$who_avalia, $who_satsaude, $who_dorfisica, $who_medicamento, $who_apvida, $who_sentidovida, $who_concentrar, $who_seguro, $who_saudavel, $who_energia, $who_apfisica, $who_dinheirosuf, $who_dispdiadia, $who_dispdiadia,$who_opolazer, $who_locomover, $who_sono, $who_diadia, $who_trabalho, $who_satisf, $who_satisfpessoais,$who_satisfvida, $who_satisfamigos, $who_satismora, $who_satisfvida, $who_saitsftransporte, $who_frequencianeg, $who_datahora,$pes_id){
	$query = "insert into qualidade_de_vida_whoqol (who_avalia, who_satsaude, who_dorfisica, who_medicamento, who_apvida, who_sentidovida, who_concentrar, who_seguro, who_saudavel, who_energia, who_apfisica, who_dinheirosuf, who_dispdiadia, who_dispdiadia, who_opolazer, who_locomover, who_sono, who_diadia, who_trabalho, who_satisf, who_satisfpessoais, who_satisfvida, who_satisfamigos, who_satismora, who_satisfvida, who_saitsftransporte, who_frequencianeg, who_datahora, pes_id) values ('{$who_avalia}','{$who_satsaude}','{$who_dorfisica}','{$who_medicamento}','{$who_apvida}' '{$who_sentidovida}','{$who_concentrar}','{$who_seguro}','{$who_saudavel}','{$who_energia}','{$who_apfisica}','{$who_dinheirosuf}','{$who_dispdiadia}','{$who_dispdiadia}','{$who_opolazer}','{$who_locomover}','{$who_sono}','{$who_diadia}','{$who_trabalho}','{$who_satisf}','{$who_satisfpessoais}','{$who_satisfvida}','{$who_satisfamigos}','{$who_satismora}','{$who_satisfvida}','{$who_saitsftransporte}','{$who_frequencianeg}','{$who_datahora}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id
