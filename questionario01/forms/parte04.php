<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte03.php" accept-charset="UTF-8">
	<div class="leg"><legend>Sócio-Econômico</legend></div>
		
	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Qual é a renda familiar mensal de sua casa?</label>
	        <select name="soc_rendafamiliar" required>
	        		<option value="" title=""></option>
					<option value="Até 1 salário mínimo (R$ 788,00)" title="Até 1 salário mínimo (R$ 788,00)">Até 1 salário mínimo (R$ 788,00)</option>
					<option value="Mais de 1 até 3 salários mínimos (R$ 789,00 até R$ 2.364,00)" title="Mais de 1 até 3 salários mínimos (R$ 789,00 até R$ 2.364,00)">Mais de 1 até 3 salários mínimos (R$ 789,00 até R$ 2.364,00)</option>
					<option value="Mais de 3 até 5 salários mínimos (R$ 2.365,00 até R$ 3.940,00)" title="Mais de 3 até 5 salários mínimos (R$ 2.365,00 até R$ 3.940,00)">Mais de 3 até 5 salários mínimos (R$ 2.365,00 até R$ 3.940,00)</option>
					<option value="Mais de 5 até 7 salários mínimos (R$ 3.941,00 até R$ 5.516,00)" title="Mais de 5 até 7 salários mínimos (R$ 3.941,00 até R$ 5.516,00)">Mais de 5 até 7 salários mínimos (R$ 3.941,00 até R$ 5.516,00)</option>
					<option value="Mais de 7 até 10 salários mínimos (R$ 5.517,00 até R$ 7.880,00)" title="Mais de 7 até 10 salários mínimos (R$ 5.517,00 até R$ 7.880,00)">Mais de 7 até 10 salários mínimos (R$ 5.517,00 até R$ 7.880,00)</option>
					<option value="Mais de 10 até 20 salários mínimos (R$ 7.881,00 até R$ 15.760,00)" title="Mais de 10 até 20 salários mínimos (R$ 7.881,00 até R$ 15.760,00)">Mais de 10 até 20 salários mínimos (R$ 7.881,00 até R$ 15.760,00)</option>					
					<option value="Mais de 20 salários mínimos (Mais de R$ 15.761,00)" title="Mais de 20 salários mínimos (Mais de R$ 15.761,00)">Mais de 20 salários mínimos (Mais de R$ 15.761,00)</option>
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
					<td class="rdbtn">1 - uma</td>
					<td class="rdbtn">2 – duas</td>
					<td class="rdbtn">3 – três</td>
					<td class="rdbtn">4 - quatro</td>
					<td class="rdbtn">5 – cinco</td>
					<td class="rdbtn">mais de 5</td>

				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Quantas pessoas contribuem para a obtenção dessa renda familiar?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="5"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="6"></td>
				  
				</tr>
				<tr>
				  <td class="labelgrid">Quantas pessoas são sustentadas com a renda familiar?</td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="4"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="5"></td>
				  <td class="rdbtn"><input type="radio" name="soc_sustentadas" value="6"></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Qual é a sua contribuição na renda familiar mensal de sua casa?</label>
	        <select name="soc_suacontri" required>
	        		<option value="" title=""></option>
					<option value="Não possuo atividade remunerada mensal" title="Não possuo atividade remunerada mensal">Não possuo atividade remunerada mensal</option>
					<option value="Até 1 salário mínimo (R$ 788,00)" title="Até 1 salário mínimo (R$ 788,00)">Até 1 salário mínimo (R$ 788,00)</option>
					<option value="Mais de 1 até 3 salários mínimos (R$ 789,00 até R$ 2.364,00)" title="Mais de 1 até 3 salários mínimos (R$ 789,00 até R$ 2.364,00)">Mais de 1 até 3 salários mínimos (R$ 789,00 até R$ 2.364,00)</option>
					<option value="Mais de 3 até 5 salários mínimos (R$ 2.365,00 até R$ 3.940,00)" title="Mais de 3 até 5 salários mínimos (R$ 2.365,00 até R$ 3.940,00)">Mais de 3 até 5 salários mínimos (R$ 2.365,00 até R$ 3.940,00)</option>
					<option value="Mais de 5 até 7 salários mínimos (R$ 3.941,00 até R$ 5.516,00)" title="Mais de 5 até 7 salários mínimos (R$ 3.941,00 até R$ 5.516,00)">Mais de 5 até 7 salários mínimos (R$ 3.941,00 até R$ 5.516,00)</option>
					<option value="Mais de 7 até 10 salários mínimos (R$ 5.517,00 até R$ 7.880,00)" title="Mais de 7 até 10 salários mínimos (R$ 5.517,00 até R$ 7.880,00)">Mais de 7 até 10 salários mínimos (R$ 5.517,00 até R$ 7.880,00)</option>
					<option value="Mais de 10 até 20 salários mínimos (R$ 7.881,00 até R$ 15.760,00)" title="Mais de 10 até 20 salários mínimos (R$ 7.881,00 até R$ 15.760,00)">Mais de 10 até 20 salários mínimos (R$ 7.881,00 até R$ 15.760,00)</option>					
					<option value="Mais de 20 salários mínimos (Mais de R$ 15.761,00)" title="Mais de 20 salários mínimos (Mais de R$ 15.761,00)">Mais de 20 salários mínimos (Mais de R$ 15.761,00)</option>
			</select>
		</div>		 
	</div>

	<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
	
</form>