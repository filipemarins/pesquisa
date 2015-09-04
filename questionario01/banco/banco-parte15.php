<?php

function insereAlcolismo($conexao ,$alc_ja_bebeu, $alc_atualmente_bebe, $alc_frequencia, $alc_quantidade, $alc_quantidade_seix, $alc_deixou_beber, $alc_bebe_muito, $alc_parentes_acham, $alc_aa, $alc_perdeu_bebida, $alc_problema_trabalho, $alc_obrigacoes, $alc_tremores, $alc_ajuda,$alc_hospitalizado, $alc_preso_multado, $pes_id){
	$query = "insert into etilismo (alc_ja_bebeu, alc_atualmente_bebe, alc_frequencia, alc_quantidade, alc_quantidade_seix, alc_deixou_beber, alc_bebe_muito, alc_parentes_acham, alc_aa, alc_perdeu_bebida, alc_problema_trabalho, alc_obrigacoes, alc_tremores, alc_ajuda, alc_hospitalizado, alc_preso_multado, pes_id) values ('{$alc_ja_bebeu}','{$alc_atualmente_bebe}','{$alc_frequencia}','{$alc_quantidade}','{$alc_quantidade_seix}' '{$alc_deixou_beber}','{$alc_bebe_muito}','{$alc_parentes_acham}','{$alc_aa}','{$alc_perdeu_bebida}','{$alc_problema_trabalho}','{$alc_obrigacoes}','{$alc_tremores}','{$alc_ajuda}','{$alc_hospitalizado}','{$alc_preso_multado}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id
