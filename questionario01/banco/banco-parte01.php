<?php
//include('../logica/logica-usuario.php');
function listaParticipante($conexao){
	$participantes = array();
	$resultado = mysqli_query($conexao, "select p.*,e.eve_nome as evento_nome,c.cat_descricao as categoria_nome from participante as p INNER JOIN evento as e on p.eve_id=e.eve_id INNER JOIN categoria as c ON p.cat_id=c.cat_id order by p.par_id desc");
	while($participante = mysqli_fetch_assoc($resultado)){
		array_push($participantes, $participante);
	}

	return $participantes;
}
function insereDadosMulher($conexao,$pes_nomecompleto,$pes_sexo,$pes_datanascimento,$pes_naturalidade,$pes_email,$pes_escolaridade,$pes_estudouem,$pes_trabalha,$pes_hosrassemtrab,$pes_estadocivil,$pes_comquemviveconcatenado,$pes_sangue,$pes_rh,$pes_pesonascer,$pes_atividadefisica,$pes_quaisatividadesconcatenado,$pes_classpai,$pes_classmae,$pes_classeu,$mul_probgestacionalconcatenado,$mul_qtdgestao,$mul_qtdfilhos,$mul_partosnormais,$mul_partoscesario,$mul_partoforceps,$mul_partoprematuro,$mul_partotermo,$mul_postermo,$end_cep,$end_rua,$end_numero,$end_bairro,$end_cidade,$end_estado,$pes_datahora){
	$query = "insert into dados_pessoais (pes_nomecompleto,pes_sexo,pes_datanascimento,pes_naturalidade,pes_email,pes_escolaridade,pes_estudouem,pes_trabalha,pes_hosrassemtrab,pes_estadocivil,pes_comquemvive,pes_sangue,pes_rh,pes_pesonascer,pes_atividadefisica,pes_quaisatividades,pes_classpai,pes_classmae,pes_classeu,pes_datahora) values ('{$pes_nomecompleto}','{$pes_sexo}','{$pes_datanascimento}','{$pes_naturalidade}','{$pes_email}','{$pes_escolaridade}','{$pes_estudouem}','{$pes_trabalha}','{$pes_hosrassemtrab}','{$pes_estadocivil}','{$pes_comquemviveconcatenado}','{$pes_sangue}','{$pes_rh}','{$pes_pesonascer}','{$pes_atividadefisica}','{$pes_quaisatividadesconcatenado}','{$pes_classpai}','{$pes_classmae}','{$pes_classeu}','{$pes_datahora}')";
	$query1 = mysqli_query($conexao,$query);
	$query2 = null;
	$query3 = null;
	if($query1){
		$pes_id = mysqli_insert_id($conexao);
		$query2 = "insert into endereco (end_cep,end_rua,end_numero,end_bairro,end_cidade,end_estado,pes_id) values ('{$end_cep}','{$end_rua}','{$end_numero}','{$end_bairro}','{$end_cidade}','{$end_estado}','{$pes_id}')";
		$query2 = mysqli_query($conexao,$query2);
		$query3 = "insert into dados_pessoais_mulher (mul_probgestacional,mul_qtdgestao,mul_qtdfilhos,mul_partosnormais,mul_partoscesario,mul_partoforceps,mul_partoprematuro,mul_partotermo,mul_postermo,pes_id) values ('{$mul_probgestacionalconcatenado}','{$mul_qtdgestao}','{$mul_qtdfilhos}','{$mul_partosnormais}','{$mul_partoscesario}','{$mul_partoforceps}','{$mul_partoprematuro}','{$mul_partotermo}','{$mul_postermo}','{$pes_id}')";
		$query3 = mysqli_query($conexao,$query3);
	}
	cadastroUsuario($pes_id);
	return $query1 & $query2 & $query3;

}

function insereDadosHomem($conexao,$pes_nomecompleto,$pes_sexo,$pes_datanascimento,$pes_naturalidade,$pes_email,$pes_escolaridade,$pes_estudouem,$pes_trabalha,$pes_hosrassemtrab,$pes_estadocivil,$pes_comquemviveconcatenado,$pes_sangue,$pes_rh,$pes_pesonascer,$pes_atividadefisica,$pes_quaisatividadesconcatenado,$pes_classpai,$pes_classmae,$pes_classeu,$mul_probgestacionalconcatenado,$mul_qtdgestao,$mul_qtdfilhos,$mul_partosnormais,$mul_partoscesario,$mul_partoforceps,$mul_partoprematuro,$mul_partotermo,$mul_postermo,$end_cep,$end_rua,$end_numero,$end_bairro,$end_cidade,$end_estado,$pes_datahora){
	$query = "insert into dados_pessoais (pes_nomecompleto,pes_sexo,pes_datanascimento,pes_naturalidade,pes_email,pes_escolaridade,pes_estudouem,pes_trabalha,pes_hosrassemtrab,pes_estadocivil,pes_comquemvive,pes_sangue,pes_rh,pes_pesonascer,pes_atividadefisica,pes_quaisatividades,pes_classpai,pes_classmae,pes_classeu,pes_datahora) values ('{$pes_nomecompleto}','{$pes_sexo}','{$pes_datanascimento}','{$pes_naturalidade}','{$pes_email}','{$pes_escolaridade}','{$pes_estudouem}','{$pes_trabalha}','{$pes_hosrassemtrab}','{$pes_estadocivil}','{$pes_comquemviveconcatenado}','{$pes_sangue}','{$pes_rh}','{$pes_pesonascer}','{$pes_atividadefisica}','{$pes_quaisatividadesconcatenado}','{$pes_classpai}','{$pes_classmae}','{$pes_classeu}','{$pes_datahora}')";
	$query1 = mysqli_query($conexao,$query);
	$query2 = null;
	$query3 = null;
	if($query1){
		$pes_id = mysqli_insert_id($conexao);
		$query2 = "insert into endereco (end_cep,end_rua,end_numero,end_bairro,end_cidade,end_estado,pes_id) values ('{$end_cep}','{$end_rua}','{$end_numero}','{$end_bairro}','{$end_cidade}','{$end_estado}','{$pes_id}')";
		$query2 = mysqli_query($conexao,$query2);
		
	}
	cadastroUsuario($pes_id);
	return $query1 & $query2;
}

function buscaMulher($conexao,$pes_id){
	$query = "SELECT * FROM dados_pessoais_mulher where pes_id = {$pes_id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}







function alteraParticipante($conexao,$par_nome,$par_cpf,$par_email,$eve_id,$cat_id,$par_id,$par_pagante,$par_valor){
	$query = "update participante set par_nome='{$par_nome}', par_cpf='{$par_cpf}', par_email='{$par_email}', eve_id='{$eve_id}', cat_id='{$cat_id}',par_pagante={$par_pagante},par_valor='{$par_valor}' where par_id='{$par_id}'";
	return mysqli_query($conexao,$query);


}

function removeParticipante($conexao,$par_id){
	$query = "delete from participante where par_id = '{$par_id}'";
	return mysqli_query($conexao,$query);
}

function buscaParticipantecpf($conexao,$par_cpf){
	$participantes = array();
	$resultado = mysqli_query($conexao, "select * from participante where par_cpf = '{$par_cpf}'");

	while($participante = mysqli_fetch_assoc($resultado)){
		array_push($participantes, $participante);
	}
	return $participantes;
	
}

function buscaParticipanteProtocolo($conexao,$par_protocolo){


	$query = "SELECT * FROM participante where par_protocolo = '{$par_protocolo}'";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
	
}

function listaParticipanteEvento($conexao,$eve_id){
	$participantes = array();
	$resultado = mysqli_query($conexao, "select * from participante where eve_id = '{$eve_id}'");

	while($participante = mysqli_fetch_assoc($resultado)){
		array_push($participantes, $participante);
	}
	return $participantes;

}

function numParticipanteEvento($conexao,$eve_id){
	$resultado = mysqli_query($conexao, "select * from participante where eve_id = '{$eve_id}'");
	$totalparticipante = mysqli_num_rows($resultado);

	return $totalparticipante;

}
function valorParticipanteEvento($conexao,$eve_id){
	$resultado = mysqli_query($conexao, "select sum(par_valor) from participante where eve_id = '{$eve_id}'");
	$valorparticipante = mysqli_fetch_row($resultado);

	return $valorparticipante[0];

}
function numParticipanteEventoCat($conexao,$eve_id,$cat){
	$resultado = mysqli_query($conexao, "select * from participante where eve_id = '{$eve_id}' and cat_id={$cat}");
	$totalparticipante = mysqli_num_rows($resultado);

	return $totalparticipante;

}
function numParticipantePagante($conexao,$eve_id,$tipo){
	$resultado = mysqli_query($conexao, "select * from participante where par_pagante = '{$tipo}' and eve_id = '{$eve_id}'");
	$totalparticipante = mysqli_num_rows($resultado);

	return $totalparticipante;

}
