
<?php
include('../../conecta.php');
include('../banco/banco-parte03.php');
require('../logica/logica-usuario.php');

$who_datahora = date("Y-m-d H:i:s"); 

//----------------------------------------

$atv_dias = $_POST['atv_dias'];
$atv_dias = $_POST['atv_dias'];
$atv_diasmod = $_POST['atv_diasmod'];
$atv_tmpdiamod = $_POST['atv_tmpdiamod'];
$atv_diasrig = $_POST['atv_diasrig'];
$atv_tmpdiarig = $_POST['atv_tmpdiarig'];
$atv_tmpsentfds = $_POST['atv_tmpsentfds'];
$atv_tmpsentfds = $_POST['atv_tmpsentfds'];