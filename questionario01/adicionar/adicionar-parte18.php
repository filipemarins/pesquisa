<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$dro_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$dro_uso_drogas = $_POST['dro_uso_drogas'];
$dro_uso_atualmente = $_POST['dro_uso_atualmente'];
$dro_maconha = $_POST['dro_maconha'];
$dro_cocaina = $_POST['dro_cocaina'];
$dro_crack = $_POST['dro_crack'];
$dro_ecstasy = $_POST['dro_ecstasy'];
$dro_lsd = $_POST['dro_lsd'];
$dro_inalantes = $_POST['dro_inalantes'];
$dro_heroina = $_POST['dro_heroina'];
$dro_barbituricos = $_POST['dro_barbituricos'];
$dro_morfina = $_POST['dro_morfina'];
$dro_skank = $_POST['dro_skank'];
$dro_cogumelo = $_POST['dro_cogumelo'];
$dro_anferamina = $_POST['dro_anferamina'];
$dro_cloroformio = $_POST['dro_cloroformio'];
$dro_opio = $_POST['dro_opio'];
$dro_outras_drogas = $_POST['dro_outras_drogas'];
$dro_tempo_usa = $_POST['dro_tempo_usa'];
$dro_sintomas = $_POST['dro_sintomas'];
$dro_pressao = $_POST['dro_pressao'];
$dro_nausea = $_POST['dro_nausea'];
$dro_espinhas = $_POST['dro_espinhas'];
$dro_diminuicao_libido = $_POST['dro_diminuicao_libido'];
$dro_depressao = $_POST['dro_depressao'];
$dro_dependencia = $_POST['dro_dependencia'];
$dro_aumento_libido = $_POST['dro_aumento_libido'];
$dro_testiculos = $_POST['dro_testiculos'];
$dro_outros_sintomas = $_POST['dro_outros_sintomas'];
