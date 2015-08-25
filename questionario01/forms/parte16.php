<h2 class="fs-title centraltitulo">QUESTIONÁRIO DE ANABOLIZANTES</h2>
	<h3 class="fs-subtitle">Etapa 16</h3>
	<div class="fs-error"></div>

<form id="msform" class="grid-form"  method="POST" action="" accept-charset="UTF-8">

	<div data-row-span="5">
		<div data-field-span="5" id="pes_atividadefisica_wrap">
	        <label>Alguma vez fez uso de Esteróide Anabolizante?</label>
	    	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisicas" value="s" <?=check($usuario['pes_atividadefisica'],"s")?> required> Sim</label>
	    	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisican"  value="n" <?=check($usuario['pes_atividadefisica'],"n")?> required> Não</label>
		</div>
	</div>

	<div data-row-span="5">
		<div data-field-span="5" id="pes_atividadefisica_wrap">
	        <label>Faz uso atualmente?</label>
	    	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisicas" value="s" <?=check($usuario['pes_atividadefisica'],"s")?> required> Sim</label>
	    	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisican"  value="n" <?=check($usuario['pes_atividadefisica'],"n")?> required> Não</label>
		</div>
	</div>

	<div class="leg"><legend>Qual Esteróide você usou ou usa?</legend></div>
	<div data-row-span="2">
		<table class="flakes-table">
			<colgroup>
				<col span="1" style="width:40%">
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
				  <td class="labelgrid">Winstrol®</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Dianabol®</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Deca - Durabolin®</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Oxandrin®</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Depo - testosterone®</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Equipoise ®</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Durateston®</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Outros, especifique:</td>
	        	  <td><input type="text" name="mae_datanascimento" id="mae_datanascimento" placeholder="" ></td>
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
					<td class="rdbtn">Menos de um mês</td>
					<td class="rdbtn">De um mês a seis meses</td>
					<td class="rdbtn">De seis meses a um ano</td>
					<td class="rdbtn">Mais de um ano</td>
				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Há quanto tempo usa ou usou esteróides anabolizantes?</td>
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
			</colgroup>
			<thead>
				<tr>
					<td class="soc_contri"></td>
					<td class="rdbtn">Melhorar o desempenho nos esportes</td>
					<td class="rdbtn">Aumentar a massa muscular</td>
					<td class="rdbtn">Reduzir gordura do corpo</td>
					<td class="rdbtn">Estética</td>
				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Qual a finalidade do uso?</td>
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
			</colgroup>
			<tbody class="list"><tr>
				  <td class="labelgrid">Outros, especifique:</td>
				  <td><input type="text" name="mae_datanascimento" id="mae_datanascimento" placeholder="" ></td>
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
					<td class="rdbtn">Sim</td>
					<td class="rdbtn">Não</td>
				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Faz uso de outros medicamentos ou suplementos em associação com os esteroides anabolizantes?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				</tr>
			</tbody>
		</table>
</div>

<div class="leg"><legend>Se já fez uso de outros medicamentos ou suplementos em associação com os esteroides anabolizantes, quais?</legend></div>
	<div data-row-span="2">
		<table class="flakes-table">
			<colgroup>
				<col span="1" style="width:40%">
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
				  <td class="labelgrid">Efedrina</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Insulina</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Clembuterol</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Diuréticos</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Tamoxifeno</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">GH (hormônio do crescimento)</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Outros, especifique:</td>
				  <td><input type="text" name="mae_datanascimento" id="mae_datanascimento" placeholder="" ></td>
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
			</colgroup>
			<thead>
				<tr>
					<td class="soc_contri"></td>
					<td class="rdbtn">Sim</td>
					<td class="rdbtn">Não</td>
				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Durante o uso, já evidenciou algum sintoma colateral?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				</tr>
			</tbody>
		</table>
</div>

<div class="leg"><legend>Se durante o uso já evidenciou algum sintoma colateral?</legend></div>
	<div data-row-span="2">
		<table class="flakes-table">
			<colgroup>
				<col span="1" style="width:40%">
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
				  <td class="labelgrid">Pressão alta</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Náuseas e vômitos</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Aparecimento de "espinhas"</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Diminuição da libido</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Depressão</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Dependência</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Aumento da libido</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Alteração no humor</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Atrofia dos testículos</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Outros, especifique:</td>
				  <td><input type="text" name="mae_datanascimento" id="mae_datanascimento" placeholder="" ></td>
				</tr>
			</tbody>
		</table>
</div>

</form>