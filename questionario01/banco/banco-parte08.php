<?php

function insereHabtAliment($conexao ,$hab_comcafmanha, $hab_comlanchemanha, $hab_comalmoco, $hab_comlanchetarde, $hab_comjantar, $hab_comlanchenoite, $hab_ondcafmanha, $hab_ondlanchemanha, $hab_ondalmoco, $hab_ondlanchetarde, $hab_ondjantar, $hab_ondlanchenoite, $hab_maiondlanch, $hab_carneboi,$hab_frango, $hab_carnoproco, $hab_peixe, $hab_linguica, $hab_leite, $hab_ovos, $hab_feijao,$hab_outleg, $hab_frutas, $hab_suconat, $hab_hortalicas, $hamburguer, $hab_batatafrita, $hab_batata, $hab_margman, $hab_manteiga, $hab_paosal, $hab_bolo, $hab_biscoitorech,$hab_biscotosalg, $hab_salgadoass, $hab_salgadofrito, $hab_macarrao, $hab_pizza, $hab_outmassas, $hab_acucar, $hab_chocolate, $hab_bombom, $hab_balas, $hab_gelgomcre, $hab_sorvetes,$hab_outdoces, $hab_sucosindu, $hab_refrigerantes, $hab_vcachacome, $hab_periodcome, $hab_alergiali, $hab_tipodieta, $hab_motivodieta, $hab_infodieta, $pes_id){
	$query = "insert into habitos_alimentares (hab_comcafmanha, hab_comlanchemanha, hab_comalmoco, hab_comlanchetarde, hab_comjantar, hab_comlanchenoite, hab_ondcafmanha, hab_ondlanchemanha, hab_ondalmoco, hab_ondlanchetarde, hab_ondjantar, hab_ondlanchenoite, hab_maiondlanch, hab_carneboi, hab_frango, hab_carnoproco, hab_peixe, hab_linguica, hab_leite, hab_ovos, hab_feijao, hab_outleg, hab_frutas, hab_suconat, hab_hortalicas, hamburguer, hab_batatafrita, hab_batata, hab_margman, hab_manteiga, hab_paosal, hab_bolo, hab_biscoitorech, hab_biscotosalg, hab_salgadoass, hab_salgadofrito, hab_macarrao, hab_pizza, hab_outmassas, hab_acucar, hab_chocolate, hab_bombom, hab_balas, hab_gelgomcre, hab_sorvetes, hab_outdoces, hab_sucosindu, hab_refrigerantes, hab_vcachacome, hab_periodcome, hab_alergiali, hab_tipodieta, hab_motivodieta, hab_infodieta, pes_id) values ('{$hab_comcafmanha}','{$hab_comlanchemanha}','{$hab_comalmoco}','{$hab_comlanchetarde}','{$hab_comjantar}' '{$hab_comlanchenoite}','{$hab_ondcafmanha}','{$hab_ondlanchemanha}','{$hab_ondalmoco}','{$hab_ondlanchetarde}','{$hab_ondjantar}','{$hab_ondlanchenoite}','{$hab_maiondlanch}','{$hab_carneboi}','{$hab_frango}','{$hab_carnoproco}','{$hab_peixe}','{$hab_linguica}','{$hab_leite}','{$hab_ovos}','{$hab_feijao}','{$hab_outleg}','{$hab_frutas}','{$hab_suconat}','{$hab_hortalicas}','{$hamburguer}','{$hab_batatafrita}','{$hab_batata}','{$hab_margman}','{$hab_manteiga}','{$hab_paosal}','{$hab_bolo}','{$hab_biscoitorech}','{$hab_biscotosalg}','{$hab_salgadoass}','{$hab_salgadofrito}','{$hab_macarrao}','{$hab_pizza}','{$hab_outmassas}','{$hab_acucar}','{$hab_chocolate}','{$hab_bombom}','{$hab_balas}','{$hab_gelgomcre}','{$hab_sorvetes}','{$hab_outdoces}','{$hab_sucosindu}','{$hab_refrigerantes}','{$hab_vcachacome}','{$hab_periodcome}','{$hab_alergiali}','{$hab_tipodieta}','{$hab_motivodieta}','{$hab_infodieta}','{$pes_id}')";
	$query1 = mysqli_query($conexao,$query);
	//cadastroUsuario($pes_id);
	return $query;
}	

//$conexao,$pai_nome,$pai_datanascimento,$pai_escolaridade,$pai_profissao,$pai_trabalhaatualmente,$pai_datahora,$pes_id
//pai_nome,pai_datanascimento,pai_escolaridade,pai_profissao,pai_trabalhaatualmente,pai_datahora,pes_id