<?php

function buscaUsuario($conexao,$pes_id){
	$query = "SELECT * FROM dados_pessoais where pes_id = {$pes_id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
