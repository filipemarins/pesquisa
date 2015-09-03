
<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$who_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$hab_comcafmanha = $_POST['hab_comcafmanha'];
$hab_comlanchemanha = $_POST['hab_comlanchemanha'];
$hab_comalmoco = $_POST['hab_comalmoco'];
$hab_comlanchetarde = $_POST['hab_comlanchetarde'];
$hab_comjantar = $_POST['hab_comjantar'];
$hab_comlanchenoite = $_POST['hab_comlanchenoite'];
$hab_ondcafmanha = $_POST['hab_ondcafmanha'];
$hab_ondlanchemanha = $_POST['hab_ondlanchemanha'];
$hab_ondalmoco = $_POST['hab_ondalmoco'];
$hab_ondlanchetarde = $_POST['hab_ondlanchetarde'];
$hab_ondjantar = $_POST['hab_ondjantar'];
$hab_ondlanchenoite = $_POST['hab_ondlanchenoite'];
$hab_maiondlanch = $_POST['hab_maiondlanch'];
$hab_carneboi = $_POST['hab_carneboi'];
$hab_frango = $_POST['hab_frango'];
$hab_carnoproco = $_POST['hab_carnoproco'];
$hab_peixe = $_POST['hab_peixe'];
$hab_linguica = $_POST['hab_linguica'];
$hab_leite = $_POST['hab_leite'];
$hab_ovos = $_POST['hab_ovos'];
$hab_feijao = $_POST['hab_feijao'];
$hab_outleg = $_POST['hab_outleg'];
$hab_frutas = $_POST['hab_frutas'];
$hab_suconat = $_POST['hab_suconat'];
$hab_hortalicas = $_POST['hab_hortalicas'];
$hamburguer = $_POST['hamburguer'];
$hab_batatafrita = $_POST['hab_batatafrita'];
$hab_batata = $_POST['hab_batata'];
$hab_margman = $_POST['hab_margman'];
$hab_manteiga = $_POST['hab_manteiga'];
$hab_paosal = $_POST['hab_paosal'];
$hab_bolo = $_POST['hab_bolo'];
$hab_biscoitorech = $_POST['hab_biscoitorech'];
$hab_biscotosalg = $_POST['hab_biscotosalg'];
$hab_salgadoass = $_POST['hab_salgadoass'];
$hab_salgadofrito = $_POST['hab_salgadofrito'];
$hab_macarrao = $_POST['hab_macarrao'];
$hab_pizza = $_POST['hab_pizza'];
$hab_outmassas = $_POST['hab_outmassas'];
$hab_acucar = $_POST['hab_acucar'];
$hab_chocolate = $_POST['hab_chocolate'];
$hab_bombom = $_POST['hab_bombom'];
$hab_balas = $_POST['hab_balas'];
$hab_gelgomcre = $_POST['hab_gelgomcre'];
$hab_sorvetes = $_POST['hab_sorvetes'];
$hab_outdoces = $_POST['hab_outdoces'];
$hab_sucosindu = $_POST['hab_sucosindu'];
$hab_refrigerantes = $_POST['hab_refrigerantes'];
$hab_vcachacome = $_POST['hab_vcachacome'];
$hab_periodcome = $_POST['hab_periodcome'];
$hab_alergiali = $_POST['hab_alergiali'];
$hab_tipodieta = $_POST['hab_tipodieta'];
$hab_motivodieta = $_POST['hab_motivodieta'];
$hab_infodieta = $_POST['hab_infodieta'];

if(insereHabtAliment($conexao, $hab_comcafmanha, $hab_comlanchemanha, $hab_comalmoco, $hab_comlanchetarde, $hab_comjantar, $hab_comlanchenoite, $hab_ondcafmanha, $hab_ondlanchemanha ,$hab_ondalmoco, $hab_ondlanchetarde , $hab_ondjantar ,$hab_ondlanchenoite, $hab_maiondlanch, $hab_carneboi, $hab_frango, $hab_carnoproco, $hab_peixe, $hab_linguica, $hab_leite, $hab_ovos, $hab_feijao, $hab_outleg, $hab_frutas, $hab_suconat, $hab_hortalicas, $hab_hamburguer, $hab_batatafrita, $hab_batata, $hab_margman, $hab_manteiga, $hab_paosal, $hab_bolo, $hab_biscoitorech, $hab_biscotosalg, $hab_salgadoass, $hab_salgadofrito, $hab_macarrao, $hab_pizza, $hab_outmassas, $hab_acucar, $hab_chocolate, $hab_bombom, $hab_balas, $hab_gelgomcre, $hab_sorvetes, $hab_outdoces, $hab_sucosindu, $hab_refrigerantes, $hab_vcachacome, $hab_periodcome, $hab_alergiali , $hab_tipodieta, $hab_motivodieta , $hab_infodieta,$soc_datahora,$pes_id)){



	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}
