<?php

$conexao = mysqli_connect("localhost","root", "", "pesquisa");

mysqli_set_charset($conexao,'utf8');

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Bahia');
header('Content-Type: text/html; charset=utf-8');