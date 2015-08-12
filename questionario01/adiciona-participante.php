<?php

include('../conecta.php');
include('banco-categoria.php');
include('banco-participante.php');
include('banco-evento.php');
include('logica-usuario.php');

verificaUsuario();
include('header.php');
$eventos = listaEvento($conexao);
$categorias = listaCategoria($conexao);

$participante = array(
	'par_nome' => '',
	'par_cpf' => '',
	'par_email' => '',
	'eve_id' => '3',
	'cat_id' => '1',
	'par_id' => '',
	'par_pagante' => '1',
	'par_valor' => '60,00'

	);
?>

<form name="calcular" id="calcular" method="post" action="adicionar-participante.php">
	<div class="row inicial">
	
		  <fieldset class="formu">
		  	<?php if(array_key_exists("adicionado", $_GET) && $_GET["adicionado"] == "true"){ ?>
			<div data-alert class="alert-box success radius">
			  Participante Adicionado com Sucesso
			  <a href="#" class="close">&times;</a>
			</div>
			<?php } ?>
			<?php if(array_key_exists("adicionado", $_GET) && $_GET["adicionado"] == "false"){ 
			$msg = mysqli_error($conexao);

				?>
			<div data-alert class="alert-box warning radius">
			  Erro ao Adicionar o Participante <?php echo $msg; ?><br>
			 	
			  <a href="#" class="close">&times;</a>
			</div>
			<?php } ?>
				<?php mostraAlerta("success");?>
			<i class="fi-torsos-all pessoa"></i>
			<div class="large-12 columns">
				<?php include('formulario-participante-base.php'); ?>			   
			</div>
			
			<div class="large-12 columns">
				<input type="submit" class="button botaocalc" value="Cadastrar">
			</div>
	
		  </fieldset>
	</div>
</form>

<?php
include('footer.php');
?>