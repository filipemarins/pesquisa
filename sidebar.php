<div class="flakes-navigation">
	<a href="index.html" class="logo">
		<img src="img/logo.png" width="120">
	</a>

	<ul>
		<li class="title">Etapas</li>
		<li><a href="questionario01?parte=01">Dados Pessoais</a></li>
		<li><a href="questionario01?parte=02">Dados da Mãe</a></li>
		<li><a href="questionario01?parte=03">Dados do Pai</a></li>
		<li><a href="questionario01?parte=04">Sócio-Ecocômico</a></li>
		<li><a href="questionario01?parte=05">Qualidade de Vida (PEDSQL)</a></li>
		<li><a href="questionario01?parte=06">Qualidade de Vida (WHOQOL)</a></li>
		<li><a href="questionario01?parte=07">Atividade Física</a></li>
		<li><a href="questionario01?parte=08">Habitos Alimentares</a></li>
		<li><a href="questionario01?parte=09">Doenças Pré-Existentes</a></li>
		<li><a href="questionario01?parte=10">Odontológico</a></li>
		<li>Avalização Corporal</li>
		<li>Avalização de Stress</li>
		<li>Avalização de Depressão</li>
		<li>Ansiedade</li>
		<li>Etilismo</li>
		<li>Anabolizantes</li>
		<li>Tabagismo</li>
		<li>Drogas Ilícitas</li>
		<li>Antropometria</li>

	</ul>

	<p class="foot">
		<?php 
		$nome = 0;
		if(isset($_SESSION["usuario_cadastro"])){
			$pes_id = usuarioCadastrado();
			$nome =	buscaUsuario($conexao,$pes_id)['pes_nomecompleto'];
		}

		 ?>
		 <?php  echo (verifica($nome) ? "Olá <b>" . $nome . "</b><br>": ""); ?>

		<a href="">Minha Conta</a> &bullet; <a href="">Encerrar</a>
	</p>
</div>