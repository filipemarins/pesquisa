<?php


function insereDadosMae($conexao,$mae_nome,$mae_datanascimento,$mae_escolaridade,$mae_profissao,$mae_trabalhaatualmente,$mae_datahora,$pes_id){
	$query = "insert into dados_mae (mae_nome,mae_datanascimento,mae_escolaridade,mae_profissao,mae_trabalhaatualmente,mae_datahora,pes_id) values ('{$mae_nome}','{$mae_datanascimento}','{$mae_escolaridade}','{$mae_profissao}','{$mae_trabalhaatualmente}','{$mae_datahora}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$mae_nome,$mae_datanascimento,$mae_escolaridade,$mae_profissao,$mae_trabalhaatualmente,$mae_datahora,$pes_id
//mae_nome,mae_datanascimento,mae_escolaridade,mae_profissao,mae_trabalhaatualmente,mae_datahora,pes_id

