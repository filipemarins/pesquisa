<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$soc_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$soc_rendafamiliar = $_POST['soc_rendafamiliar'];
$soc_contri = $_POST['soc_contri'];
$soc_sustentadas = $_POST['soc_sustentadas'];
$soc_suacontri = $_POST['soc_suacontri'];

