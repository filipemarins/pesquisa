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

<div data-row-span="2">
		<table class="flakes-table">
			<colgroup>
				<col span="1" style="width:40%">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
			</colgroup>
			<thead>
				<tr>
					<td class="soc_contri"></td>
					<td class="rdbtn">1 vez por mês ou menos</td>
					<td class="rdbtn">2-4 vezes por mês</td>
					<td class="rdbtn">2-3 vezes por semana</td>
					<td class="rdbtn">4 ou mais por semana</td>
				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Com que frequência bebe bebidas alcoólicas?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>
				</tr>
			</tbody>
		</table>
</div>

<div data-row-span="2">
		<table class="flakes-table">
			<colgroup>
				<col span="1" style="width:40%">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
			</colgroup>
			<thead>
				<tr>
					<td class="soc_contri"></td>
					<td class="rdbtn">1 ou 2</td>
					<td class="rdbtn">3 ou 4</td>
					<td class="rdbtn">5 ou 6</td>
					<td class="rdbtn">7, 8 ou 9</td>
					<td class="rdbtn">10 ou mais</td>
				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Nos dias em que bebe, quantas bebidas alcoólicas bebe, em média?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="5"></td>

				</tr>
			</tbody>
		</table>
</div>

<div data-row-span="2">
		<table class="flakes-table">
			<colgroup>
				<col span="1" style="width:40%">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
			</colgroup>
			<thead>
				<tr>
					<td class="soc_contri"></td>
					<td class="rdbtn">Nunca</td>
					<td class="rdbtn">Menos de 1 vez por mês</td>
					<td class="rdbtn">Mensalmente</td>
					<td class="rdbtn">Semanalmente</td>
					<td class="rdbtn">Diariamente ou quase diariamente</td>
				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Quantas vezes bebe seis ou mais bebidas em seguida/numa única ocasião?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="5"></td>

				</tr>
			</tbody>
		</table>
</div>

<div data-row-span="2">
		<table class="flakes-table">
			<colgroup>
				<col span="1" style="width:40%">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
			</colgroup>
			<thead>
				<tr>
					<td class="soc_contri"></td>
					<td class="rdbtn">Menos de 6 meses</td>
					<td class="rdbtn">6 ou mais meses</td>
				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Se deixou de beber bebidas alcoólicas foi a quanto tempo?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				</tr>
			</tbody>
		</table>
</div>

<div class="leg"><legend>Se você consome bebidas alcoólicas responda as questões.</legend></div>
	<div data-row-span="2">
		<table class="flakes-table">
			<colgroup>
				<col span="1" style="width:40%">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
				<col span="1" style="">
			</colgroup>
			<thead>
				<tr>
					<td class="soc_contri"></td>
					<td class="rdbtn"><br> Sim</td>
					<td class="rdbtn"><br> Não</td>
				</tr>
			</thead>
			<tbody class="list">
				<tr>
				  <td class="labelgrid">Você se considera uma pessoa que bebe de modo normal?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Seus amigos ou parentes acham que você bebe de modo normal?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você já foi a algum encontro dos Alcoólicos Anônimos (AA)?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você já perdeu amigos/amigas ou namorado/namorada por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você já teve problemas no trabalho/emprego por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você já abandonou suas obrigações, sua família ou seu trabalho por 2 ou mais dias em seguida por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você já teve tremores, ouviu vozes, viu coisas que não estavam lá depois de beber muito?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você já procurou algum tipo de ajuda por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você já foi hospitalizado por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você já esteve preso ou foi multado por dirigir embriagado?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
			</tbody>
		</table>
	</div>
</form>


