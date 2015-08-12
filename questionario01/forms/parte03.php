<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte03.php" accept-charset="UTF-8">
	<div class="leg"><legend>Dados do Pai</legend></div>
		
	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Nome do Pai</label>
	        <input type="text" name="pai_nome" id="pai_nome" placeholder="Nome do Pai" required>
		</div> 
	</div>

	<div data-row-span="2">
		<div data-field-span="2">
	        <label>Data de nascimento (Pai)</label>
	        <input type="date" name="pai_datanascimento" id="pai_datanascimento" placeholder="" >
		</div>  
	</div>
	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Escolaridade (Pai)</label>
	        <select name="pai_escolaridade" required>
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
	        <label>Profissão (Pai)</label>
	        <input type="text" name="pai_profissao" id="pai_profissao" placeholder="Profissão do Pai" required>
		</div>  
	</div>
	<div data-row-span="2">
	    <div data-field-span="2">
	            <label>Trabalha atualmente (Pai)</label>
	            <label><input type="radio" name="pai_trabalhaatualmente" value="s"> Sim</label>
	            <label><input type="radio" name="pai_trabalhaatualmente" value="n"> Não</label>
		</div>
	</div>
	<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
	
</form>