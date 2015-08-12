<?php

function insereDadosPai($conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id){
	$query = "insert into dados_pai (pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id) values ('{$pai_nome}','{$pai_datanascimento}','{$pai_escolaridade}','{$pai_profissao}','{$pai_trabalhaatualmente}','{$pai_datahora}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id

