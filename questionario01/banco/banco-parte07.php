<?php


function insereAtivFisica($conexao ,$atv_dias, $atv_tmpdia, $atv_diasmod, $atv_tmpdiamod, $atv_diasrig, $atv_tmpdiarig, $atv_tmpsentfds, $atv_tmpsentfds,$pes_id){
	$query = "insert into atividade_física (atv_dias, atv_tmpdia, atv_diasmod, atv_tmpdiamod, atv_diasrig, atv_tmpdiarig, atv_tmpsentfds, atv_tmpsentfds, pes_id) values ('{$atv_dias}','{$atv_tmpdia}','{$atv_diasmod}','{$atv_tmpdiamod}','{$atv_diasrig}' '{$atv_tmpdiarig}','{$atv_tmpsentfds}','{$atv_tmpsentfds}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id
