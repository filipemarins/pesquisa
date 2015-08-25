<h2 class="fs-title centraltitulo">Doenças Pré-Existentes</h2>
	<h3 class="fs-subtitle">Etapa 9</h3>
	<div class="fs-error"></div>

<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte03.php" accept-charset="UTF-8">

	<div data-row-span="4">
	    <div data-field-span="3">
	        <label>Data do último exame médico</label>
	        <input type="date" name="pre_dataex" id="" class=""  required>
	        
		</div> 
		<div data-field-span="1">
            <label>Último exame realizado foi completo ou imcompleto?</label>
            <label><input type="radio" name="pre_excom" value="s" id="pes_trabalhas" <?=check($usuario['pes_trabalha'],"s")?>> Completo</label>
            <label><input type="radio" name="pre_excom" value="n" id="pes_trabalhan"<?=check($usuario['pes_trabalha'],"n")?>> Incompleto</label>
    	</div>
	</div>

	<div data-row-span="4">
	    <div data-field-span="3">
	        <label>Data do último teste de condicionamento</label>
	        <input type="date" name="pre_datateste" id="" class=""  required>
	        
		</div> 
		<div data-field-span="1">
            <label>Último teste de condicionamento realizado foi completo ou imcompleto?</label>
            <label><input type="radio" name="pre_testecom" value="s" id="pes_trabalhas" <?=check($usuario['pes_trabalha'],"s")?>> Completo</label>
            <label><input type="radio" name="pre_testecom" value="n" id="pes_trabalhan"<?=check($usuario['pes_trabalha'],"n")?>> Incompleto</label>
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
				  <td class="rdbtn"><input type="radio" name="pre_medicdores" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdores" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdores" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdores" value="Diariamente"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para dormir</td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdorm" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdorm" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdorm" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdorm" value="Diariamente"></td>				  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a depressão</td>
				  <td class="rdbtn"><input type="radio" name="pre_medicpress" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicpress" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicpress" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicpress" value="Diariamente"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a ansiedade</td>
				  <td class="rdbtn"><input type="radio" name="pre_medicans" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicans" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicans" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicans" value="Diariamente"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para psicose</td>
				  <td class="rdbtn"><input type="radio" name="pre_medicpsi" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicpsi" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicpsi" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicpsi" value="Diariamente"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a alergia</td>
				  <td class="rdbtn"><input type="radio" name="pre_medicalerg" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicalerg" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicalerg" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicalerg" value="Diariamente"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a asma</td>
				  <td class="rdbtn"><input type="radio" name="pre_medicasm" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicasm" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicasm" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicasm" value="Diariamente"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para o coração</td>
				 <td class="rdbtn"><input type="radio" name="pre_mediccor" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_mediccor" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_mediccor" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_mediccor" value="Diariamente"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos para a diabetes</td>
				 <td class="rdbtn"><input type="radio" name="pre_medicdiab" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdiab" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdiab" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicdiab" value="Diariamente"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Medicamentos naturais e de ervanários (ex. homeopatia)</td>
				 <td class="rdbtn"><input type="radio" name="pre_medicnatu" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicnatu" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicnatu" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicnatu" value="Diariamente"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Outros medicamentos</td>
				 <td class="rdbtn"><input type="radio" name="pre_medicoutros" value="Nunca"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicoutros" value="1 a 2 vezes por semana"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicoutros" value="Regulamente"></td>
				  <td class="rdbtn"><input type="radio" name="pre_medicoutros" value="Diariamente"></td>		  
				</tr>

			
			</tbody>
		</table>
	</div>
	<div data-row-span="4">
	    <div data-field-span="4">
	        <label>Se usa outros medicamentos, especifique</label>
	        <input type="text" name="pre_medicoutros" id="" class="" >					        
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
				  <td class="rdbtn"><input type="radio" name="pre_pai" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_pai" value="Outra doença"></td>
				  <td class="rdbtn"><input type="radio" name="pre_pai" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Mãe</td>
				   <td class="rdbtn"><input type="radio" name="pre_mae" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_mae" value="Outra doença"></td>
				  <td class="rdbtn"><input type="radio" name="pre_mae" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Irmão</td>
				   <td class="rdbtn"><input type="radio" name="pre_irmao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_irmao" value="Outra doença"></td>
				  <td class="rdbtn"><input type="radio" name="pre_irmao" value="Não sei informar"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Irmã</td>
				 <td class="rdbtn"><input type="radio" name="pre_irma" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_irma" value="Outra doença"></td>
				  <td class="rdbtn"><input type="radio" name="pre_irma" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Avô / Avó</td>
				   <td class="rdbtn"><input type="radio" name="pre_avo" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_avo" value="Outra doença"></td>
				  <td class="rdbtn"><input type="radio" name="pre_avo" value="Não sei informar"></td>	
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
				  <td class="rdbtn"><input type="radio" name="pre_coluna" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_coluna" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_coluna" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Coração</td>
				  <td class="rdbtn"><input type="radio" name="pre_coracao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_coracao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_coracao" value="Não sei informar"></td>	
				</tr>
				<tr>
				  <td class="labelgrid">Articulações</td>
				  <td class="rdbtn"><input type="radio" name="pre_articulacao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_articulacao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_articulacao" value="Não sei informar"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Hérnia</td>
				  <td class="rdbtn"><input type="radio" name="pre_hernia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hernia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hernia" value="Não sei informar"></td>	
				</tr>
				<tr>
					<td class="labelgrid">Rim</td>
					<td class="rdbtn"><input type="radio" name="pre_rim" value="Sim"></td>
					<td class="rdbtn"><input type="radio" name="pre_rim" value="Não"></td>
					<td class="rdbtn"><input type="radio" name="pre_rim" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Pescoço</td>
				 <td class="rdbtn"><input type="radio" name="pre_pescoco" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_pescoco" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_pescoco" value="Não sei informar"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Pulmão</td>
				 <td class="rdbtn"><input type="radio" name="pre_pulmao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_pulmao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_pulmao" value="Não sei informar"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Olhos</td>
				 <td class="rdbtn"><input type="radio" name="pre_olhos" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_olhos" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_olhos" value="Não sei informar"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Outras</td>
				 <td class="rdbtn"><input type="radio" name="pre_outras" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_outras" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_outras" value="Não sei informar"></td>		  
				</tr>	
			</tbody>
		</table>
	</div>
	<div data-row-span="4">
	    <div data-field-span="4">
	        <label>Se outras operações, especifique</label>
	        <input type="text" name="pre_outrasesp" id="" class="" >					        
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
				  <td class="rdbtn"><input type="radio" name="pre_alcoolismo" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_alcoolismo" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_alcoolismo" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_alcoolismo" value="Não sei informar"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Problema renal</td>
				  <td class="rdbtn"><input type="radio" name="pre_problema_renal" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_problema_renal" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_problema_renal" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_problema_renal" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Enfisema</td>
				   <td class="rdbtn"><input type="radio" name="pre_enfisema" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_enfisema" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_enfisema" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_enfisema" value="Não sei informar"></td>  
				</tr>
				<tr>
				  <td class="labelgrid">Anemia</td>
				   <td class="rdbtn"><input type="radio" name="pre_anemia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_anemia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_anemia" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_anemia" value="Não sei informar"></td>  
				</tr>
				<tr>
				  <td class="labelgrid">Dor no pescoço</td>
				   <td class="rdbtn"><input type="radio" name="pre_dor_pescoco" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_dor_pescoco" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_dor_pescoco" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_dor_pescoco" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Dor nas costas</td>
				   <td class="rdbtn"><input type="radio" name="pre_dor_costas" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_dor_costas" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_dor_costas" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_dor_costas" value="Não sei informar"></td> 
				</tr>
				<tr>
				  <td class="labelgrid">Visão</td>
				  <td class="rdbtn"><input type="radio" name="pre_visao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_visao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_visao" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_visao" value="Não sei informar"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Flebite</td>
				   <td class="rdbtn"><input type="radio" name="pre_flebite" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_flebite" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_flebite" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_flebite" value="Não sei informar"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Artrite reumatóide</td>
				 <td class="rdbtn"><input type="radio" name="pre_artrite" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_artrite" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_artrite" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_artrite" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Cardiopatia</td>
				   <td class="rdbtn"><input type="radio" name="pre_cardiopatia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cardiopatia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cardiopatia" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cardiopatia" value="Não sei informar"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Câncer</td>
				   <td class="rdbtn"><input type="radio" name="pre_cancer" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cancer" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cancer" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cancer" value="Não sei informar"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Tireóide</td>
				   <td class="rdbtn"><input type="radio" name="pre_tireoide" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_tireoide" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_tireoide" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_tireoide" value="Não sei informar"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Hipoglicemia</td>
				   <td class="rdbtn"><input type="radio" name="pre_hipoglicemia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hipoglicemia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hipoglicemia" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hipoglicemia" value="Não sei informar"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Concussão</td>
				   <td class="rdbtn"><input type="radio" name="pre_concussao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_concussao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_concussao" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_concussao" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Defeito Congênito</td>
				   <td class="rdbtn"><input type="radio" name="pre_defeito_congenito" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_defeito_congenito" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_defeito_congenito" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_defeito_congenito" value="Não sei informar"></td>  
				</tr>
				<tr>
				  <td class="labelgrid">Sangramento</td>
				   <td class="rdbtn"><input type="radio" name="pre_sangramento" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_sangramento" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_sangramento" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_sangramento" value="Não sei informar"></td>
				<tr>
				  <td class="labelgrid">Diabete</td>
				  <td class="rdbtn"><input type="radio" name="pre_diabete" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_diabete" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_diabete" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_diabete" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Anemia falciforme</td>
				   <td class="rdbtn"><input type="radio" name="pre_anemia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_anemia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_anemia" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_anemia" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Doença Mental</td>
				   <td class="rdbtn"><input type="radio" name="pre_doenca_mental" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_doenca_mental" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_doenca_mental" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_doenca_mental" value="Não sei informar"></td> 
				</tr>
				<tr>
				  <td class="labelgrid">Epilepsia</td>
				   <td class="rdbtn"><input type="radio" name="pre_epilepsia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_epilepsia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_epilepsia" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_epilepsia" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Asma</td>
				   <td class="rdbtn"><input type="radio" name="pre_asma" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_asma" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_asma" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_asma" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Obesidade</td>
				   <td class="rdbtn"><input type="radio" name="pre_obesidade" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_obesidade" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_obesidade" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_obesidade" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Gota</td>
				   <td class="rdbtn"><input type="radio" name="pre_gota" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_gota" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_gota" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_gota" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Audição</td>
				  <td class="rdbtn"><input type="radio" name="pre_audicao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_audicao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_audicao" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_audicao" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Bronquite</td>
				   <td class="rdbtn"><input type="radio" name="pre_bronquite" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_bronquite" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_bronquite" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_bronquite" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">AVC</td>
				  <td class="rdbtn"><input type="radio" name="pre_avc" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_avc" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_avc" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_avc" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Hipertensão</td>
				   <td class="rdbtn"><input type="radio" name="pre_hipertensao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hipertensao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hipertensao" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hipertensao" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Cirrose</td>
				   <td class="rdbtn"><input type="radio" name="pre_cirrose" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cirrose" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cirrose" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_cirrose" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Úlcera</td>
				   <td class="rdbtn"><input type="radio" name="pre_ulcera" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_ulcera" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_ulcera" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_ulcera" value="Não sei informar"></td>	  
				</tr>
				<tr>
				  <td class="labelgrid">Hiperlipidemia</td>
				  <td class="rdbtn"><input type="radio" name="pre_hiperlipidemia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hiperlipidemia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hiperlipidemia" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_hiperlipidemia" value="Não sei informar"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Outras</td>
				   <td class="rdbtn"><input type="radio" name="pre_outras_doencas" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_outras_doencas" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_outras_doencas" value="Antes sim, atualmente não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_outras_doencas" value="Não sei informar"></td>  
				</tr>

			
			</tbody>
		</table>
	</div>

	<div data-row-span="4">
	    <div data-field-span="4">
	        <label>Se outros problemas, especifique</label>
	        <input type="text" name="pre_outras_doencas_especifique" id="" class="" >					        
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
				  <td class="rdbtn"><input type="radio" name="pre_anticoagulante" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_anticoagulante" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_anticoagulante" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Para Epilepsia</td>
				 <td class="rdbtn"><input type="radio" name="pre_para_epilepsia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_epilepsia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_epilepsia" value="Não sei informar"></td>	
				</tr>
				<tr>
				  <td class="labelgrid">Nitroglicemia</td>
				  <td class="rdbtn"><input type="radio" name="pre_nitroglicemia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_nitroglicemia" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_nitroglicemia" value="Não sei informar"></td>	
				</tr>
				<tr>
				  <td class="labelgrid">Para Diabete</td>
				  <td class="rdbtn"><input type="radio" name="pre_para_diabete" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_diabete" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_diabete" value="Não sei informar"></td>			  
				</tr>
				<tr>
				  <td class="labelgrid">Para Coração</td>
				  <td class="rdbtn"><input type="radio" name="pre_para_coracao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_coracao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_coracao" value="Não sei informar"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Para Estômago</td>
				  <td class="rdbtn"><input type="radio" name="pre_para_estomago" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_estomago" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_estomago" value="Não sei informar"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Para Pressão</td>
				  <td class="rdbtn"><input type="radio" name="pre_para_pressao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_pressao" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_para_pressao" value="Não sei informar"></td>		  
				</tr>	
				<tr>
				  <td class="labelgrid">Diurético</td>
				 <td class="rdbtn"><input type="radio" name="pre_diuretico" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_diuretico" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_diuretico" value="Não sei informar"></td>	 
				</tr>	
				<tr>
				  <td class="labelgrid">Outros</td>
				  <td class="rdbtn"><input type="radio" name="pre_outros_medicamentos" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="pre_outros_medicamentos" value="Não"></td>
				  <td class="rdbtn"><input type="radio" name="pre_outros_medicamentos" value="Não sei informar"></td>	
				</tr>	
			</tbody>
		</table>
	</div>
	<div data-row-span="4">
	    <div data-field-span="4">
	        <label>Se outros medicamentos, especifique:</label>
	        <input type="text" name="pre_outros_medicamentos_especifique" id="" class="" >					        
		</div> 
	</div>
	<!--<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">-->
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
	
</form>