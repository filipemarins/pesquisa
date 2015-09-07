<?php

function insereSocioEco($conexao ,$soc_rendafamiliar, $soc_contri, $soc_sustentadas, $soc_suacontri, $soc_datahora,$pes_id){
	$query = "insert into socio-economico (soc_rendafamiliar, soc_contri, soc_sustentadas, soc_suacontri, soc_datahora,pes_id) values ('{$soc_rendafamiliar}','{$soc_contri}','{$soc_sustentadas}','{$soc_suacontri}','{$soc_datahora}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id

