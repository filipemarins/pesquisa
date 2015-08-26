<h2 class="fs-title centraltitulo">QUESTIONÁRIO DE ANABOLIZANTES</h2>
	<h3 class="fs-subtitle">Etapa 16</h3>
	<div class="fs-error"></div>

<form id="msform" class="grid-form"  method="POST" action="" accept-charset="UTF-8">

	<div data-row-span="5">
		<div data-field-span="5" id="pes_atividadefisica_wrap">
	        <label>Alguma vez fez uso de Esteróide Anabolizante?</label>
	    	<label><input type="radio" name="ana_ja_usou" id="pes_atividadefisicas" value="s" <?=check($usuario['pes_atividadefisica'],"s")?> required> Sim</label>
	    	<label><input type="radio" name="ana_ja_usou" id="pes_atividadefisican"  value="n" <?=check($usuario['pes_atividadefisica'],"n")?> required> Não</label>
		</div>
	</div>

	<div data-row-span="5">
		<div data-field-span="5" id="pes_atividadefisica_wrap">
	        <label>Faz uso atualmente?</label>
	    	<label><input type="radio" name="ana_atualmente_usa" id="pes_atividadefisicas" value="s" <?=check($usuario['pes_atividadefisica'],"s")?> required> Sim</label>
	    	<label><input type="radio" name="ana_atualmente_usa" id="pes_atividadefisican"  value="n" <?=check($usuario['pes_atividadefisica'],"n")?> required> Não</label>
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
				  <td class="rdbtn"><input type="radio" name="ana_winstrol" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_winstrol" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Dianabol®</td>
				  <td class="rdbtn"><input type="radio" name="ana_dianabol" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_dianabol" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Deca - Durabolin®</td>
				  <td class="rdbtn"><input type="radio" name="ana_deca" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_deca" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Oxandrin®</td>
				  <td class="rdbtn"><input type="radio" name="ana_oxandrin" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_oxandrin" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Depo - testosterone®</td>
				  <td class="rdbtn"><input type="radio" name="ana_depo" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_depo" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Equipoise ®</td>
				  <td class="rdbtn"><input type="radio" name="ana_equipoise" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_equipoise" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Durateston®</td>
				  <td class="rdbtn"><input type="radio" name="ana_durateston" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_durateston" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Outros, especifique:</td>
	        	  <td><input type="text" name="ana_outros_anabolizantes" id="ana_outros_anabolizantes" placeholder="" ></td>
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
				  <td class="rdbtn"><input type="radio" name="ana_tempo_usou" value=">Menos de um mês"></td>
				  <td class="rdbtn"><input type="radio" name="ana_tempo_usou" value="De um mês a seis meses"></td>
				  <td class="rdbtn"><input type="radio" name="ana_tempo_usou" value="De seis meses a um ano"></td>
				  <td class="rdbtn"><input type="radio" name="ana_tempo_usou" value="Mais de um ano"></td>
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
				  <td class="rdbtn"><input type="radio" name="ana_finalidade" value="Melhorar o desempenho nos esportes"></td>
				  <td class="rdbtn"><input type="radio" name="ana_finalidade" value="Aumentar a massa muscular"></td>
				  <td class="rdbtn"><input type="radio" name="ana_finalidade" value="Reduzir gordura do corpo"></td>
				  <td class="rdbtn"><input type="radio" name="ana_finalidade" value="Estética"></td>
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
				  <td><input type="text" name="ana_outras_finalidade" id="ana_outras_finalidade" placeholder="" ></td>
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
				  <td class="rdbtn"><input type="radio" name="ana_usa_medicamento" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_usa_medicamento" value="Não"></td>
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
				  <td class="rdbtn"><input type="radio" name="ana_efedrina" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_efedrina" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Insulina</td>
				  <td class="rdbtn"><input type="radio" name="ana_insulina" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_insulina" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Clembuterol</td>
				  <td class="rdbtn"><input type="radio" name="ana_clembuterol" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_clembuterol" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Diuréticos</td>
				  <td class="rdbtn"><input type="radio" name="ana_diuretico" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_diuretico" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Tamoxifeno</td>
				  <td class="rdbtn"><input type="radio" name="ana_tamoxifeno" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_tamoxifeno" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">GH (hormônio do crescimento)</td>
				  <td class="rdbtn"><input type="radio" name="ana_gh" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_gh" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Outros, especifique:</td>
				  <td><input type="text" name="ana_outros_medicamentos" id="ana_outros_medicamentos" placeholder="" ></td>
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
				  <td class="rdbtn"><input type="radio" name="ana_sintomas" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_sintomas" value="Não"></td>
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
				  <td class="rdbtn"><input type="radio" name="ana_pressao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_pressao" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Náuseas e vômitos</td>
				  <td class="rdbtn"><input type="radio" name="ana_nausea" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_nausea" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Aparecimento de "espinhas"</td>
				  <td class="rdbtn"><input type="radio" name="ana_espinhas" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_espinhas" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Diminuição da libido</td>
				  <td class="rdbtn"><input type="radio" name="ana_diminuicao_libido" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_diminuicao_libido" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Depressão</td>
				  <td class="rdbtn"><input type="radio" name="ana_depressao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_depressao" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Dependência</td>
				  <td class="rdbtn"><input type="radio" name="ana_dependencia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_dependencia" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Aumento da libido</td>
				  <td class="rdbtn"><input type="radio" name="ana_aumento_libido" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_aumento_libido" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Alteração no humor</td>
				  <td class="rdbtn"><input type="radio" name="ana_humor" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_humor" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Atrofia dos testículos</td>
				  <td class="rdbtn"><input type="radio" name="ana_testiculos" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="ana_testiculos" value="Não"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Outros, especifique:</td>
				  <td><input type="text" name="ana_outros_sintomas" id="ana_outros_sintomas" placeholder="" ></td>
				</tr>
			</tbody>
		</table>
</div>

</form>