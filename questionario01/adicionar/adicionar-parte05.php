<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$pai_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$qal_difand = $_POST['qal_difand'];
$qal_difcor = $_POST['qal_difcor'];
$qal_difpra = $_POST['qal_difpra'];
$qal_diflev = $_POST['qal_diflev'];
$qal_difban = $_POST['qal_difban'];
$qal_difdom = $_POST['qal_difdom'];
$qal_dor = $_POST['qal_dor'];
$qal_energia = $_POST['qal_energia'];
$qal_divconv = $_POST['qal_divconv'];
$qal_jovamigos = $_POST['qal_jovamigos'];
$qal_jovimpl = $_POST['qal_jovimpl'];
$qal_jovidade = $_POST['qal_jovidade'];
$qal_dificilidade = $_POST['qal_dificilidade'];
$qal_ataula = $_POST['qal_ataula'];
$qal_esque = $_POST['qal_esque'];
$qal_difiacomp = $_POST['qal_difiacomp'];
$qal_faltrabalhobem = $_POST['qal_faltrabalhobem'];
$qal_faltrabalhohos = $_POST['qal_faltrabalhohos'];
