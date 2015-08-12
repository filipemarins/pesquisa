<?php

function verifica($variavel){
	if(isset($variavel) && $variavel != null){
		return $variavel;
	}else{
		return null;
	}
}

function echoisset($variavel){
	if(isset($variavel)){
		echo $variavel;
	}else{
		return null;
	}
}

function verificaSessao(){
	
	 return isset($_SESSION['usuario_cadastro']) && $_SESSION['usuario_cadastro'] != 0;

}

function seleciona($verificavel, $variavel){
	return verifica($verificavel) == $variavel ? "selected" : "";
}
function check($verificavel, $variavel){
	return verifica($verificavel) == $variavel ? "checked" : "";
}
function forcheckbox($verificavel, $variavel){

	if (strpos($verificavel,$variavel) !== false) {
    echo 'checked';
	}
}