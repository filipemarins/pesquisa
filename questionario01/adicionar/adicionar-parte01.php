<?php
include('../../conecta.php');
include('../banco/banco-parte01.php');
require('../logica/logica-usuario.php');
//include('logica-usuario.php');
//include('banco-evento.php');

//verificaUsuario();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Bahia');
$pes_datahora = date("Y-m-d H:i:s"); 

$pes_nomecompleto = $_POST['pes_nomecompleto'];
$pes_sexo = $_POST['pes_sexo'];
$pes_datanascimento = $_POST['pes_datanascimento'];
//$pes_cidadereside = $_POST['pes_cidadereside'];
$pes_naturalidade = $_POST['pes_naturalidade'];
$pes_email = $_POST['pes_email'];
$pes_escolaridade = $_POST['pes_escolaridade'];
$pes_estudouem = $_POST['pes_estudouem'];
$pes_trabalha = $_POST['pes_trabalha'];
$pes_hosrassemtrab = $_POST['pes_hosrassemtrab'];
$pes_estadocivil = $_POST['pes_estadocivil'];
$pes_sangue = $_POST['pes_sangue'];
$pes_rh = $_POST['pes_rh'];
$pes_pesonascer = $_POST['pes_pesonascer'];
$pes_atividadefisica = $_POST['pes_atividadefisica'];
$pes_classpai = $_POST['pes_classpai'];
$pes_classmae = $_POST['pes_classmae'];
$pes_classeu = $_POST['pes_classeu'];

//Exclusivo Mulher --------
$mul_qtdgestao = $_POST['mul_qtdgestao'];
$mul_qtdfilhos = $_POST['mul_qtdfilhos'];
$mul_partosnormais = $_POST['mul_partosnormais'];
$mul_partoscesario = $_POST['mul_partoscesario'];
$mul_partoforceps = $_POST['mul_partoforceps'];
$mul_partoprematuro = $_POST['mul_partoprematuro'];
$mul_partotermo = $_POST['mul_partotermo'];
$mul_partoprematuro = $_POST['mul_partoprematuro'];
$mul_postermo = $_POST['mul_postermo'];


//concatenaçao --- com quem convive
$pes_comquemvive2 = null;
if(isset($_POST['pes_comquemvive'])){
	$pes_comquemvive = $_POST['pes_comquemvive'];

	foreach($pes_comquemvive as $conquemvive){
		if($conquemvive === reset($pes_comquemvive)){
			 $pes_comquemvive2 .= $conquemvive;
			}else{
			$pes_comquemvive2 .= " - " . $conquemvive;
		}
	}
}

if($pes_comquemviveconc = $_POST['pes_comquemviveconc']){
$pes_comquemviveconcatenado = $pes_comquemvive2 . " - " . $pes_comquemviveconc;
}else{
$pes_comquemviveconcatenado = $pes_comquemvive2;

}

//concatenaçao --- Atividades fisicas
$pes_quaisatividades2 = null;
if(isset($_POST['pes_quaisatividades'])){
	$pes_quaisatividades = $_POST['pes_quaisatividades'];

	foreach($pes_quaisatividades as $quaisatividades){
		if($quaisatividades === reset($pes_quaisatividades)){
			 $pes_quaisatividades2 .= $quaisatividades;
		}else{
			$pes_quaisatividades2 .= " - " . $quaisatividades;
		}


	}
}
if($pes_quaisatividadesconc = $_POST['pes_quaisatividadesconc']){
$pes_quaisatividadesconcatenado = $pes_quaisatividades2 . " - " . $pes_quaisatividadesconc;
}else{
$pes_quaisatividadesconcatenado = $pes_quaisatividades2;
}
//concatenaçao --- probgestacional
$mul_probgestacional2 = null;
if(isset($_POST['mul_probgestacional'])){
	$mul_probgestacional = $_POST['mul_probgestacional'];
	$i=0;
	foreach($mul_probgestacional as $probgestacional){
		if($probgestacional === reset($mul_probgestacional)){
			 $mul_probgestacional2 .= $probgestacional;
			}else{
			$mul_probgestacional2 .= " - " . $probgestacional;
		}
	 	$i++;
	}
}
if($mul_probgestacionalconc = $_POST['mul_probgestacionalconc']){
$mul_probgestacionalconcatenado = $mul_probgestacional2 . " - " . $mul_probgestacionalconc;
}else{
$mul_probgestacionalconcatenado = $mul_probgestacional2;

}


// Endereço
$end_cep = $_POST['end_cep'];
$end_rua = $_POST['end_rua'];
$end_numero = $_POST['end_numero'];
$end_bairro = $_POST['end_bairro'];
$end_cidade = $_POST['end_cidade'];
$end_estado = $_POST['end_estado'];



// ------------------------------------------------------------------------------------------------------


//echo $pes_nomecompleto . " " . $pes_sexo . " " . $pes_datanascimento . " " . $pes_naturalidade . " " . $pes_email . " " . $pes_escolaridade . " " . $pes_estudouem . " " . $pes_trabalha . " " . $pes_hosrassemtrab . " " . $pes_estadocivil . " " . $pes_comquemviveconcatenado . " " . $pes_sangue . " " . $pes_rh . " " . $pes_pesonascer . " " . $pes_atividadefisica . " " . $pes_quaisatividadesconcatenado   . " " . $pes_classpai . " " . $pes_classmae . " " . $pes_classeu . " " . $pes_probgestacionalconcatenado . " " . $pes_qtdgestao . " " . $pes_qtdfilhos . " " . $pes_partosnormais . " " . $pes_partoscesario . " " . $pes_partoforceps . " " . $pes_partoprematuro . " " . $pes_partotermo . " " . $pes_postermo . " " . $end_cep . " " . $end_rua . " " . $end_numero . " " . $end_bairro . " " . $end_cidade . " " . $end_estado ;

//$pes_nomecompleto,$pes_sexo,$pes_datanascimento,$pes_naturalidade,$pes_email,$pes_escolaridade,$pes_estudouem,$pes_trabalha,$pes_hosrassemtrab,$pes_estadocivil,$pes_comquemviveconcatenado,$pes_sangue,$pes_rh,$pes_pesonascer,$pes_atividadefisica,$pes_quaisatividadesconcatenado,$pes_classpai,$pes_classmae,$pes_classeu,$pes_probgestacionalconcatenado,$pes_qtdgestao,$pes_qtdfilhos,$pes_partosnormais,$pes_partoscesario,$pes_partoforceps,$pes_partoprematuro,$pes_partotermo,$pes_postermo,$end_cep,$end_rua,$end_numero,$end_bairro,$end_cidade,$end_estado;
//pes_nomecompleto,pes_sexo,pes_datanascimento,pes_naturalidade,pes_email,pes_escolaridade,pes_estudouem,pes_trabalha,pes_hosrassemtrab,pes_estadocivil,pes_comquemviveconcatenado,pes_sangue,pes_rh,pes_pesonascer,pes_atividadefisica,pes_quaisatividadesconcatenado,pes_classpai,pes_classmae,pes_classeu,pes_probgestacionalconcatenado,pes_qtdgestao,pes_qtdfilhos,pes_partosnormais,pes_partoscesario,pes_partoforceps,pes_partoprematuro,pes_partotermo,pes_postermo,end_cep,end_rua,end_numero,end_bairro,end_cidade,end_estado;
//'{pes_nomecompleto}','{pes_sexo}','{pes_datanascimento}','{pes_naturalidade}','{pes_email}','{pes_escolaridade}','{pes_estudouem}','{pes_trabalha}','{pes_hosrassemtrab}','{pes_estadocivil}','{pes_comquemviveconcatenado}','{pes_sangue}','{pes_rh}','{pes_pesonascer}','{pes_atividadefisica}','{pes_quaisatividadesconcatenado}','{pes_classpai}','{pes_classmae}','{pes_classeu}','{pes_probgestacionalconcatenado}','{pes_qtdgestao}','{pes_qtdfilhos}','{pes_partosnormais}','{pes_partoscesario}','{pes_partoforceps}','{pes_partoprematuro}','{pes_partotermo}','{pes_postermo}','{end_cep}','{end_rua}','{end_numero}','{end_bairro}','{end_cidade}','{end_estado}'



/*
$cpf_proto = substr($par_cpf, 0, 3);
$gera_protocolo = date('dmYHis').time();
$num_aleatorio = rand(1000, 999999);
$num_aleatoriomenor = rand(100, 999);
$protocolo = $num_aleatoriomenor . $gera_protocolo . $cpf_proto . $num_aleatorio;
$protocolo_enc = md5($protocolo);
*/

//$evento = buscaEvento($conexao,$eve_id);
//$nome_evento = $evento['eve_nome'];
//preg_replace("/[^0-9]/", "",$par_cpf)
if($pes_sexo=='m'){
	if(insereDadosHomem($conexao,$pes_nomecompleto,$pes_sexo,$pes_datanascimento,$pes_naturalidade,$pes_email,$pes_escolaridade,$pes_estudouem,$pes_trabalha,$pes_hosrassemtrab,$pes_estadocivil,$pes_comquemviveconcatenado,$pes_sangue,$pes_rh,$pes_pesonascer,$pes_atividadefisica,$pes_quaisatividadesconcatenado,$pes_classpai,$pes_classmae,$pes_classeu,$mul_probgestacionalconcatenado,$mul_qtdgestao,$mul_qtdfilhos,$mul_partosnormais,$mul_partoscesario,$mul_partoforceps,$mul_partoprematuro,$mul_partotermo,$mul_postermo,$end_cep,$end_rua,$end_numero,$end_bairro,$end_cidade,$end_estado,$pes_datahora)){


	header("Location: ../index.php?parte=02&adicionado=true");



	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}

}else{
	if(insereDadosMulher($conexao,$pes_nomecompleto,$pes_sexo,$pes_datanascimento,$pes_naturalidade,$pes_email,$pes_escolaridade,$pes_estudouem,$pes_trabalha,$pes_hosrassemtrab,$pes_estadocivil,$pes_comquemviveconcatenado,$pes_sangue,$pes_rh,$pes_pesonascer,$pes_atividadefisica,$pes_quaisatividadesconcatenado,$pes_classpai,$pes_classmae,$pes_classeu,$mul_probgestacionalconcatenado,$mul_qtdgestao,$mul_qtdfilhos,$mul_partosnormais,$mul_partoscesario,$mul_partoforceps,$mul_partoprematuro,$mul_partotermo,$mul_postermo,$end_cep,$end_rua,$end_numero,$end_bairro,$end_cidade,$end_estado,$pes_datahora)){


	header("Location: ../index.php?parte=02&adicionado=true");
	//header("Location: adiciona-participante.php?adicionado=true");
	
	/*
	require '/mail/PHPMailerAutoload.php';

	$nome = 'Filipe Marins';
	$evento = 'Semana de bicicletada';
	//Create a new PHPMailer instance
	$mail = new PHPMailer;

	$mail->CharSet = 'UTF-8';
	$mail->isSMTP();
	$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "eventos@fainor.com.br";
	$mail->Password = "15fainoreventos";
	$mail->setFrom('eventos@fainor.com.br', 'FAINOR');
	$mail->addAddress($par_email, $par_nome);
	$mail->Subject = 'O seu certificado do evento: ' . $nome_evento . ' está pronto. ';
	$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	if (!$mail->send()) {
	    //echo "Mailer Error: " . $mail->ErrorInfo;
	    header("Location: adiciona-participante.php?adicionado=false&naoenviouemail");
	    die();
	} else {   
	    header("Location: adiciona-participante.php?adicionado=true");
	    die();
	}
	*/


	}else{ 

	//header("Location: adiciona-participante.php?adicionado=false");
	$msg = mysqli_error($conexao);
	echo $msg;
		die();

	}

}