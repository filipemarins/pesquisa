<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$ans_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$ans_domencia = $_POST['ans_domencia'];
$ans_calor = $_POST['ans_calor'];
$ans_tremores_pernas = $_POST['ans_tremores_pernas'];
$ans_relaxar = $_POST['ans_relaxar'];
$ans_medo_pior = $_POST['ans_medo_pior'];
$ans_tonto = $_POST['ans_tonto'];
$ans_palpitacao = $_POST['ans_palpitacao'];
$ans_equilibrio = $_POST['ans_equilibrio'];
$ans_aterrorizado = $_POST['ans_aterrorizado'];
$ans_nervoso = $_POST['ans_nervoso'];
$ans_sufocacao = $_POST['ans_sufocacao'];
$ans_tremores_mao = $_POST['ans_tremores_mao'];
$ans_tremulo = $_POST['ans_tremulo'];
$ans_medo_controle = $_POST['ans_medo_controle'];
$ans_respirar = $_POST['ans_respirar'];
$ans_morrer = $_POST['ans_morrer'];
$ans_assustado = $_POST['ans_assustado'];
$ans_ingestaro = $_POST['ans_ingestaro'];
$ans_desmaio = $_POST['ans_desmaio'];
$ans_afogueado = $_POST['ans_afogueado'];
$ans_suor = $_POST['ans_suor'];
