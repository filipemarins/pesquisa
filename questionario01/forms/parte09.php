<h2 class="fs-title centraltitulo">Doenças Pré-Existentes</h2>
	<h3 class="fs-subtitle">Etapa 9</h3>
	<div class="fs-error"></div>

<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte03.php" accept-charset="UTF-8">

	<div data-row-span="4">
	    <div data-field-span="3">
	        <label>Data do último exame médico</label>
	        <input type="date" name="" id="" class=""  required>
	        
		</div> 
		<div data-field-span="1">
            <label>Último exame realizado foi completo ou imcompleto?</label>
            <label><input type="radio" name="pes_trabalha" value="s" id="pes_trabalhas" <?=check($usuario['pes_trabalha'],"s")?>> Completo</label>
            <label><input type="radio" name="pes_trabalha" value="n" id="pes_trabalhan"<?=check($usuario['pes_trabalha'],"n")?>> Incompleto</label>
    	</div>
	</div>

	<div data-row-span="4">
	    <div data-field-span="3">
	        <label>Data do último teste de condicionamento</label>
	        <input type="date" name="" id="" class=""  required>
	        
		</div> 
		<div data-field-span="1">
            <label>Último teste de condicionamento realizado foi completo ou imcompleto?</label>
            <label><input type="radio" name="pes_trabalha" value="s" id="pes_trabalhas" <?=check($usuario['pes_trabalha'],"s")?>> Completo</label>
            <label><input type="radio" name="pes_trabalha" value="n" id="pes_trabalhan"<?=check($usuario['pes_trabalha'],"n")?>> Incompleto</label>
    	</div>
	</div>

		
	<div class="leg"><legend>Com que frequência você realizou cada uma das refeições abaixo</legend></div>
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
					<td class="rdbtn">Nunca</td>
					<td class="rdbtn">1 a 2 vezes por semana</td>
					<td class="rdbtn">Regulamente</td>
					<td class="rdbtn">Diariamente</td>

				</tr>
			</thead>
			<tbody class="list">
				<tr>
				  <td class="labelgrid">Medicamentos para as dores</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para dormir</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a depressão</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a ansiedade</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para psicose</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a alergia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a asma</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para o coração</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a diabetes</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos naturais e de ervanários (ex. homeopatia)</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Outros medicamentos</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>

			
			</tbody>
		</table>
	</div>
	<div data-row-span="4">
	    <div data-field-span="4">
	        <label>Se usa outros medicamentos, especifique</label>
	        <input type="text" name="" id="" class="" >					        
		</div> 
	</div>

	<div class="leg"><legend>Indique apenas aquele(s) que tenham falecido de ataque cardíaco antes dos 50 anos</legend></div>
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
					<td class="rdbtn">Outra doença</td>
					<td class="rdbtn">Não sei informar</td>

				</tr>
			</thead>
			<tbody class="list">
				<tr>
				  <td class="labelgrid">Pai</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Mãe</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Irmão</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Irmã</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Avô / Avó</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>			
			</tbody>
		</table>
	</div>

	<div class="leg"><legend>Indique as operações que você tenha feito</legend></div>
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
					<td class="rdbtn">Não sei informar</td>

				</tr>
			</thead>
			<tbody class="list">
				<tr>
				  <td class="labelgrid">Coluna</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Coração</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Articulações</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Hérnia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Rim</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Pescoço</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Pulmão</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Olhos</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Outras</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>	
			</tbody>
		</table>
	</div>
	<div data-row-span="4">
	    <div data-field-span="4">
	        <label>Se outras operações, especifique</label>
	        <input type="text" name="" id="" class="" >					        
		</div> 
	</div>

	<div class="leg"><legend>Indique o(s) problema(s) abaixo para o(s) qual(is) você tenha sido diagnosticado ou tratado por um médico ou profissional da saúde</legend></div>
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
					<td class="rdbtn">Antes sim, atualmente não</td>
					<td class="rdbtn">Não sei informar</td>

				</tr>
			</thead>
			<tbody class="list">
				<tr>
				  <td class="labelgrid">Alcoolismo</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Problema renal</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Enfisema</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Anemia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Dor no pescoço</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Dor nas costas</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Visão</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Flebite</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Artrite reumatóide</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Cardiopatia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Câncer</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Tireóide</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Hipoglicemia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Concussão</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Defeito Congênito</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Sangramento</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Diabete</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Anemia falciforme</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Doença Mental</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Epilepsia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Asma</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Obesidade</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Gota</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Audição</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Bronquite</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">AVC</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Hipertensão</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Cirrose</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Úlcera</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Hiperlipidemia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Outras</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="4"></td>			  
				</tr>

			
			</tbody>
		</table>
	</div>

	<div data-row-span="4">
	    <div data-field-span="4">
	        <label>Se outros problemas, especifique</label>
	        <input type="text" name="" id="" class="" >					        
		</div> 
	</div>

		<div class="leg"><legend>Indique as operações que você tenha feito</legend></div>
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
					<td class="rdbtn">Não sei informar</td>

				</tr>
			</thead>
			<tbody class="list">
				<tr>
				  <td class="labelgrid">Anticoagulante</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Para Epilepsia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Nitroglicemia</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Para Diabete</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Para Coração</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Para Estômago</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Para Pressão</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Diurético</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Outros</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="3"></td>		  
				</tr>	
			</tbody>
		</table>
	</div>
	<div data-row-span="4">
	    <div data-field-span="4">
	        <label>Se outros medicamentos, especifique:</label>
	        <input type="text" name="" id="" class="" >					        
		</div> 
	</div>
	<!--<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">-->
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
	
</form>