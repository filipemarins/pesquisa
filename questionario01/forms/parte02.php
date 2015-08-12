<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte02.php" accept-charset="UTF-8">
	<div class="leg"><legend>Dados da Mãe</legend></div>
		
	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Nome da Mãe</label>
	        <input type="text" name="mae_nome" id="mae_nome" placeholder="Nome da Mãe" required>
		</div> 
	</div>

	<div data-row-span="2">
		<div data-field-span="2">
	        <label>Data de nascimento (Mãe)</label>
	        <input type="date" name="mae_datanascimento" id="mae_datanascimento" placeholder="" >
		</div> 
	</div>
	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Escolaridade (Mãe)</label>
	        <select name="mae_escolaridade" required>
	        		<option value="" title=""></option>
					<option value="nenhuma" title="nenhuma">Nenhuma</option>
					<option value="Ensino fundamental incompleto" title="Ensino fundamental incompleto">Ensino fundamental incompleto</option>
					<option value="Ensino fundamental completo" title="Ensino fundamental completo">Ensino fundamental completo</option>
					<option value="Ensino médio incompleto" title="Ensino médio incompleto">Ensino médio incompleto</option>
					<option value="Ensino medio completo" title="Ensino medio completo">Ensino medio completo</option>
					<option value="Ensino superior incompleto" title="Ensino superior incompleto">Ensino superior incompleto</option>					
					<option value="Ensino superior completo" title="Ensino superior completo">Ensino superior completo</option>
			</select>
		</div>		 
	</div>
	<div data-row-span="2">
		<div data-field-span="2">
	        <label>Profissão (Mãe)</label>
	        <input type="text" name="mae_profissao" id="mae_profissao" placeholder="Profissão da Mãe" required>
		</div>  
	</div>
	<div data-row-span="2">
	    <div data-field-span="2">
	            <label>Trabalha atualmente (Mãe)</label>
	            <label><input type="radio" name="mae_trabalhaatualmente" value="s" required> Sim</label>
	            <label><input type="radio" name="mae_trabalhaatualmente" value="n" required> Não</label>
		</div>
	</div>
		<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
</form>