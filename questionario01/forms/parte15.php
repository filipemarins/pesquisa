<h2 class="fs-title centraltitulo">QUESTIONÁRIO DE ETILISMO - ABUEL</h2>
	<h3 class="fs-subtitle">Etapa 15</h3>
	<div class="fs-error"></div>

<form id="msform" class="grid-form"  method="POST" action="" accept-charset="UTF-8">

	<div data-row-span="5">
		<div data-field-span="5" id="pes_atividadefisica_wrap">
	        <label>Alguma vez bebeu bebidas alcoólicas?</label>
	    	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisicas" value="s" <?=check($usuario['pes_atividadefisica'],"s")?> required> Sim</label>
	    	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisican"  value="n" <?=check($usuario['pes_atividadefisica'],"n")?> required> Não</label>
		</div>
	</div>

	<div data-row-span="5">
		<div data-field-span="5" id="pes_atividadefisica_wrap">
	        <label>Atualmente bebe bebidas alcoólicas? (Como a cerveja, vinho, vodka, etc., ex.)</label>
	    	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisicas" value="s" <?=check($usuario['pes_atividadefisica'],"s")?> required> Sim</label>
	    	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisican"  value="n" <?=check($usuario['pes_atividadefisica'],"n")?> required> Não</label>
		</div>
	</div>

 <div data-row-span="1">	 
    <div data-field-span="1">
        <label>Com que frequência bebe bebidas alcoólicas?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
            	<option value="nenhuma" title="1 vez por mês ou menos" <?=verifica($usuario['pes_escolaridade']) == "1 vez por mês ou menos" ? "selected" : "" ?>>1 vez por mês ou menos</option>
				<option value="2-4 vezes por mês" title="2-4 vezes por mês" <?=verifica($usuario['pes_escolaridade']) == "2-4 vezes por mês" ? "selected" : "" ?>>2-4 vezes por mês</option>
				<option value="Ensino fundamental completo" title="Ensino fundamental completo" <?=verifica($usuario['pes_escolaridade']) == "Ensino fundamental completo" ? "selected" : "" ?>>Ensino fundamental completo</option>
				<option value="Ensino médio incompleto" title="Ensino médio incompleto" <?=verifica($usuario['pes_escolaridade']) == "Ensino médio incompleto" ? "selected" : "" ?>>Ensino médio incompleto</option>
				<option value="Ensino medio completo" title="Ensino medio completo" <?=verifica($usuario['pes_escolaridade']) == "Ensino medio completo" ? "selected" : "" ?>>Ensino medio completo</option>
				<option value="Ensino superior incompleto" title="Ensino superior incompleto" <?=verifica($usuario['pes_escolaridade']) == "Ensino superior incompleto" ? "selected" : "" ?>>Ensino superior incompleto</option>					
				<option value="Ensino superior completo" title="Ensino superior completo" <?=verifica($usuario['pes_escolaridade']) == "Ensino superior completo" ? "selected" : "" ?>>Ensino superior completo</option>					
		</select>
	</div>
</div>
</form>


