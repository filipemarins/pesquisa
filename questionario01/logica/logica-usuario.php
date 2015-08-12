<?php
session_start();
function usuarioEstaCadastrado(){
	return isset($_SESSION["usuario_cadastro"]);

}

function verificaUsuario(){
	if(!usuarioEstaCadastrado()){
		$_SESSION["warning"] = "Você não tem acesso a essa funcionalidade.";
		header("Location: index.php");
		die();
	}
}

function usuarioCadastrado(){
	return $_SESSION["usuario_cadastro"];
}

function cadastroUsuario($pes_id){
	//setcookie("usuario_Cadastrado", $usu_email);

	$_SESSION["usuario_cadastro"] = $pes_id;
}


function logout(){
	session_destroy();
	session_start();
}