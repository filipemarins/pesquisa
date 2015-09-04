<?php

function inserePedsql($conexao ,$qal_difand, $qal_difcor, $qal_difpra, $qal_diflev, $qal_difban, $qal_difdom, $qal_dor, $qal_energia, $qal_divconv, $qal_jovamigos, $qal_jovimpl, $qal_jovidade, $qal_dificilidade, $qal_ataula, $qal_esque, $qal_difiacomp, $qal_faltrabalhobem, $qal_faltrabalhohos,$pes_id){
	$query = "insert into qualidade_de_vida_pedsql (qal_difand, qal_difcor, qal_difpra, qal_diflev, qal_difban, qal_difdom, qal_dor, qal_energia, qal_divconv, qal_jovamigos, qal_jovimpl, qal_jovidade, qal_dificilidade, qal_ataula, qal_esque, qal_difiacomp, qal_faltrabalhobem, qal_faltrabalhohos,pes_id) values ('{$qal_difand}','{$qal_difcor}','{$qal_difpra}','{$qal_diflev}','{$qal_difban}' '{$qal_difdom}','{$qal_dor}','{$qal_energia}','{$qal_divconv}','{$qal_jovamigos}','{$qal_jovimpl}','{$qal_jovidade}','{$qal_dificilidade}','{$qal_ataula}','{$qal_esque}','{$qal_difiacomp}','{$qal_faltrabalhobem}','{$qal_faltrabalhohos}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id
