<?php

function buscaEndereco($conexao,$pes_id){
	$query = "SELECT * FROM endereco where pes_id = {$pes_id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
