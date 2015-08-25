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
				<option value="Ensino fundamental completo" title="2-3 vezes por semana" <?=verifica($usuario['pes_escolaridade']) == "2-3 vezes por semana" ? "selected" : "" ?>>2-3 vezes por semana</option>
				<option value="Ensino médio incompleto" title="4 ou mais por semana" <?=verifica($usuario['pes_escolaridade']) == "4 ou mais por semana" ? "selected" : "" ?>>4 ou mais por semana</option>
								
		</select>
	</div>
</div>
<<<<<<< HEAD
=======

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
>>>>>>> origin/master

<div data-row-span="1">	 
    <div data-field-span="1">
        <label>Nos dias em que bebe, quantas bebidas alcoólicas bebe, em média?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
            	<option value="nenhuma" title="1 ou 2" <?=verifica($usuario['pes_escolaridade']) == "1 ou 2" ? "selected" : "" ?>>1 ou 2</option>
				<option value="3 ou 4" title="3 ou 4" <?=verifica($usuario['pes_escolaridade']) == "3 ou 4" ? "selected" : "" ?>>3 ou 4</option>
				<option value="5 ou 6" title="5 ou 6" <?=verifica($usuario['pes_escolaridade']) == "5 ou 6" ? "selected" : "" ?>>5 ou 6</option>
				<option value="7, 8 ou 9" title="7, 8 ou 9" <?=verifica($usuario['pes_escolaridade']) == "7, 8 ou 9" ? "selected" : "" ?>>7, 8 ou 9</option>
				<option value="10 ou mais" title="10 ou mais" <?=verifica($usuario['pes_escolaridade']) == "10 ou mais" ? "selected" : "" ?>>10 ou mais</option>
								
		</select>
	</div>
</div>

<div data-row-span="1">	 
    <div data-field-span="1">
  		<label>Quantas vezes bebe seis ou mais bebidas em seguida/numa única ocasião?</label>

    		<select name="pes_escolaridade" required>
				<option value="" title=""></option>
            	<option value="nenhuma" title="Nunca" <?=verifica($usuario['pes_escolaridade']) == "Nunca" ? "selected" : "" ?>>Nunca</option>
				<option value="Menos de 1 vez por mês" title="Menos de 1 vez por mês" <?=verifica($usuario['pes_escolaridade']) == "Menos de 1 vez por mês" ? "selected" : "" ?>>Menos de 1 vez por mês</option>
				<option value="Mensalmente" title="Mensalmente" <?=verifica($usuario['pes_escolaridade']) == "Mensalmente" ? "selected" : "" ?>>Mensalmente</option>
				<option value="Semanalmente" title="Semanalmente" <?=verifica($usuario['pes_escolaridade']) == "Semanalmente" ? "selected" : "" ?>>Semanalmente</option>
				<option value="Diariamente ou quase diariamente" title="Diariamente ou quase diariamente" <?=verifica($usuario['pes_escolaridade']) == "Diariamente ou quase diariamente" ? "selected" : "" ?>>Diariamente ou quase diariamente</option>
								
		</select>
	</div>
</div>

<div data-row-span="1">	 
    <div data-field-span="1">
  		<label>Se deixou de beber bebidas alcoólicas foi a quanto tempo?</label>

    		<select name="pes_escolaridade" required>
				<option value="" title=""></option>
            	<option value="Menos de 6 meses" title="Menos de 6 meses" <?=verifica($usuario['pes_escolaridade']) == "Menos de 6 meses" ? "selected" : "" ?>>Menos de 6 meses</option>
				<option value="6 ou mais meses" title="6 ou mais meses" <?=verifica($usuario['pes_escolaridade']) == "6 ou mais meses" ? "selected" : "" ?>>6 ou mais meses</option>
			</select>
	</div>
</div>

<div data-row-span="2">
			
			<legend>Se você consome bebidas alcoólicas responda as questões.</legend>

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
					<td class="rdbtn">Sim</td>
					<td class="rdbtn">Não</td>

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
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>

				<tr>
				  <td class="labelgrid">Você já foi a algum encontro dos Alcoólicos Anônimos (AA)?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>

				<tr>
				  <td class="labelgrid">Você já perdeu amigos/amigas ou namorado/na-morada por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>

				<tr>
				  <td class="labelgrid">Você já teve problemas no trabalho/emprego por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>

				<tr>
				  <td class="labelgrid">Você já abandonou suas obrigações, sua família ou seu trabalho por 2 ou mais dias em seguida por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>

				<tr>
				  <td class="labelgrid">Você já teve tremores, ouviu vozes, viu coisas que não estavam lá depois de beber muito?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>

				<tr>
				  <td class="labelgrid">Você já procurou algum tipo de ajuda por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>

				<tr>
				  <td class="labelgrid">Você já foi hospitalizado por causa da bebida?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>

				<tr>
				  <td class="labelgrid">Você já esteve preso ou foi multado por dirigir embriagado?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>

				</tr>
				
			</tbody>
		</table>
</div>
