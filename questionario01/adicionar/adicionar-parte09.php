
<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$pre_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$pre_dataex = $_POST['pre_dataex'];
$pre_excom = $_POST['pre_excom'];
$pre_datateste = $_POST['pre_datateste'];
$pre_testecom = $_POST['pre_testecom'];
$pre_medicdores = $_POST['pre_medicdores'];
$pre_medicdorm = $_POST['pre_medicdorm'];
$pre_medicpress = $_POST['pre_medicpress'];
$pre_medicans = $_POST['pre_medicans'];
$pre_medicpsi = $_POST['pre_medicpsi'];
$pre_medicalerg = $_POST['pre_medicalerg'];
$pre_medicasm = $_POST['pre_medicasm'];
$pre_mediccor = $_POST['pre_mediccor'];
$pre_medicdiab = $_POST['pre_medicdiab'];
$pre_medicnatu = $_POST['pre_medicnatu'];
$pre_medicoutros = $_POST['pre_medicoutros'];
$pre_medicoutros = $_POST['pre_medicoutros'];
$pre_pai = $_POST['pre_pai'];
$pre_mae = $_POST['pre_mae'];
$pre_irmao = $_POST['pre_irmao'];
$pre_irma = $_POST['pre_irma'];
$pre_avo = $_POST['pre_avo'];
$pre_coluna = $_POST['pre_coluna'];
$pre_coracao = $_POST['pre_coracao'];
$pre_articulacao = $_POST['pre_articulacao'];
$pre_hernia = $_POST['pre_hernia'];
$pre_rim = $_POST['pre_rim'];
$pre_pescoco = $_POST['pre_pescoco'];
$pre_pulmao = $_POST['pre_pulmao'];
$pre_olhos = $_POST['pre_olhos'];
$pre_outras = $_POST['pre_outras'];
$pre_outrasesp = $_POST['pre_outrasesp'];
$pre_alcoolismo = $_POST['pre_alcoolismo'];
$pre_problema_renal = $_POST['pre_problema_renal'];
$pre_enfisema = $_POST['pre_enfisema'];
$pre_anemia = $_POST['pre_anemia'];
$pre_dor_pescoco = $_POST['pre_dor_pescoco'];
$pre_dor_costas = $_POST['pre_dor_costas'];
$pre_visao = $_POST['pre_visao'];
$pre_flebite = $_POST['pre_flebite'];
$pre_artrite = $_POST['pre_artrite'];
$pre_cardiopatia = $_POST['pre_cardiopatia'];
$pre_cancer = $_POST['pre_cancer'];
$pre_tireoide = $_POST['pre_tireoide'];
$pre_hipoglicemia = $_POST['pre_hipoglicemia'];
$pre_concussao = $_POST['pre_concussao'];
$pre_defeito_congenito = $_POST['pre_defeito_congenito'];
$pre_sangramento = $_POST['pre_sangramento'];
$pre_diabete = $_POST['pre_diabete'];
$pre_anemia = $_POST['pre_anemia'];
$pre_doenca_mental = $_POST['pre_doenca_mental'];
$pre_epilepsia = $_POST['pre_epilepsia'];
$pre_asma = $_POST['pre_asma'];
$pre_obesidade = $_POST['pre_obesidade'];
$pre_gota = $_POST['pre_gota'];
$pre_audicao = $_POST['pre_audicao'];
$pre_bronquite = $_POST['pre_bronquite'];
$pre_avc = $_POST['pre_avc'];
$pre_hipertensao = $_POST['pre_hipertensao'];
$pre_cirrose = $_POST['pre_cirrose'];
$pre_ulcera = $_POST['pre_ulcera'];
$pre_hiperlipidemia = $_POST['pre_hiperlipidemia'];
$pre_outras_doencas = $_POST['pre_outras_doencas'];
$pre_outras_doencas_especifique = $_POST['pre_outras_doencas_especifique'];
$pre_anticoagulante = $_POST['pre_anticoagulante'];
$pre_para_epilepsia = $_POST['pre_para_epilepsia'];
$pre_nitroglicemia = $_POST['pre_nitroglicemia'];
$pre_para_diabete = $_POST['pre_para_diabete'];
$pre_para_coracao = $_POST['pre_para_coracao'];
$pre_para_estomago = $_POST['pre_para_estomago'];
$pre_para_pressao = $_POST['pre_para_pressao'];
$pre_diuretico = $_POST['pre_diuretico'];
$pre_outros_medicamentos = $_POST['pre_outros_medicamentos'];
$pre_outros_medicamentos_especifique = $_POST['pre_outros_medicamentos_especifique'];



if(insereDoenpre($conexao,$pre_dataex, $pre_excom, $pre_datateste, $pre_testecom, $pre_medicdores, $pre_medicdorm, $pre_medicpress, $pre_medicans, $pre_medicpsi, $pre_medicalerg, $pre_medicasm, $pre_mediccor, $pre_medicdiab, $pre_medicnatu, $pre_medicoutros, $pre_medicoutros, $pre_pai, $pre_mae, $pre_irmao, $pre_irma, $pre_avo $pre_coluna, $pre_coracao, $pre_articulacao, $pre_hernia, $pre_rim, $pre_pescoco, $pre_pulmao, $pre_olhos, $pre_outras, $pre_outrasesp, $pre_alcoolismo, $pre_problema_renal, $pre_enfisema, $pre_anemia, $pre_dor_pescoco, $pre_dor_costas, $pre_visao, $pre_flebite, $pre_artrite, $pre_cardiopatia,$pre_cancer, $pre_tireoide, $pre_hipoglicemia, $pre_concussao, $pre_defeito_congenito, $pre_sangramento, $pre_diabete, $pre_anemia, $pre_doenca_mental, $pre_epilepsia, $pre_asma, $pre_obesidade, $pre_gota, $pre_audicao, $pre_bronquite, $pre_avc, $pre_hipertensao, 
$pre_cirrose, $pre_ulcera, $pre_hiperlipidemia, $pre_outras_doencas, $pre_outras_doencas_especifique, $pre_anticoagulante, $pre_para_epilepsia, $pre_nitroglicemia, $pre_para_diabete, $pre_para_coracao, $pre_para_estomago, $pre_para_pressao, $pre_diuretico, $pre_outros_medicamentos, $pre_outros_medicamentos_especifique, $pre_datahora,$pes_id)){

	//header("Location: ../index.php?parte=03&adicionado=true");
	echo 'Cadastro concluido';

	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}