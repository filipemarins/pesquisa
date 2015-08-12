<h2 class="fs-title centraltitulo">Odontológico</h2>
	<h3 class="fs-subtitle">Etapa 10</h3>
	<div class="fs-error"></div>

<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte03.php" accept-charset="UTF-8">

	<div data-row-span="4">
	    <div data-field-span="3">
	        <label>Data do último atendimento odontológico</label>
	        <input type="date" name="" id="" class=""  required>
	        
		</div> 
		<div data-field-span="1">
            <label>Último atendimento odontológico realizado foi completo ou imcompleto?</label>
            <label><input type="radio" name="pes_trabalha" value="s" id="pes_trabalhas" <?=check($usuario['pes_trabalha'],"s")?>> Completo</label>
            <label><input type="radio" name="pes_trabalha" value="n" id="pes_trabalhan"<?=check($usuario['pes_trabalha'],"n")?>> Incompleto</label>
    	</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Já foi ao dentista?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Sim</option>
				<option value="" title="">Não</option>        						
			</select>
		</div>
	</div>
	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Se nunca foi ao dentista, qual o motivo?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Não acho necessário</option>
				<option value="" title="">Medo</option>        						
				<option value="" title="">Falta de oportunidade</option>        						
				<option value="" title="">Falta de tempo</option>           						
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
					<td class="rdbtn">Sim</td>
					<td class="rdbtn">Não</td>

				</tr>
			</thead>
			<tbody class="list">
				<tr>
				  <td class="labelgrid">Tem gânglios doloridos em alguma região do corpo?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Sangra muito quando se fere ou extrai dente?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Tem dores na região da nuca?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Tem zumbido nos ouvidos?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Consegue abrir a boca normalmente?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Sua mandíbula estala quando abre a boca?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Sua mandíbula estala quando mastiga?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Já tomou anestesia para tratar ou extrair dente?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Teve reação à anestesia?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Tem / teve alguma dor de dente por causa do calor, frio ou doce?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Sente retenção de alimento entre os dentes?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Mastiga só de um lado da boca?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				
			
			</tbody>
		</table>
	</div>
	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Se mastiga só de um lado, qual lado?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Direito</option>
				<option value="" title="">Esquerdo</option>        						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Sente dor perto do ouvido?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Não sinto</option>
				<option value="" title="">Dos dois lados</option>        						
				<option value="" title="">Apenas lado direito</option>        						
				<option value="" title="">Apenas lado esquerdo</option>        						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Toma refrigerante com que frequência na semana?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Nenhum dia</option>
				<option value="" title="">1 a 3 dias</option>        						
				<option value="" title="">4 a 6 dias</option>        						
				<option value="" title="">Todos os dias</option>        						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Sente sua gengiva inchada ou sangrando?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Nunca</option>
				<option value="" title="">Às vezes</option>        						
				<option value="" title="">Sempre</option>      						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você faz uso de próteses totais ou removíveis (dentadura)?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Sim</option>
				<option value="" title="">Não</option>   						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Já perdeu algum dente?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Nenhum</option>
				<option value="" title="">1 a 6 dentes</option>   						
				<option value="" title="">7 a 12 dentes</option>   						
				<option value="" title="">13 a 20 dentes</option>   						
				<option value="" title="">21 a 26 dentes</option>   						
				<option value="" title="">27 a 32 dentes</option>   						
				<option value="" title="">Todos</option> 						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Se já perdeu algum dente, em qual lado perdeu a maioria?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Direito</option>
				<option value="" title="">Esquerdo</option>   						
				<option value="" title="">Superior</option>   						
				<option value="" title="">Inferior</option>						
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
					<td class="rdbtn">Sim</td>
					<td class="rdbtn">Não</td>

				</tr>
			</thead>
			<tbody class="list">
				<tr>
				  <td class="labelgrid">Já precisou de algum tipo de cirurgia na região de cabeça e pescoço?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Usa aparelho fixo ou móvel?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid"> Já usou aparelho fixo?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Usa implantes?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Já fez canal?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você já teve alguma experiência negativa em tratamentos odontológicos?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
						
			</tbody>
		</table>
	</div>
	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Se já teve alguma experiência negativa, qual?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Deixou de ser examinado</option>
				<option value="" title="">Sofreu algum tipo de lesão por falha do profissional</option>        						
				<option value="" title="">Passou por algum procedimento incorreto</option>        						
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
					<td class="rdbtn">Sim</td>
					<td class="rdbtn">Não</td>

				</tr>
			</thead>
			<tbody class="list">
				
				<tr>
				  <td class="labelgrid">Você ingere alimentos ou bebidas entre as refeições?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você rói unhas?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você respira pela boca?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você toma chimarrão?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você chupa ou já chupou bico/dedo?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você morde caneta / lápis?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você range os dentes durante o dia ou enquanto dorme?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você possui o hábito de apertar a boca?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza fio / fita dental diariamente?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você range os dentes durante o dia ou enquanto dorme?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>

				
			
			</tbody>
		</table>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você utiliza fio dental quantas vezes por dia?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">1 vez</option>
				<option value="" title="">2 vezes</option>        						
				<option value="" title="">3 a 4 vezes</option>        						
				<option value="" title="">Às vezes</option>        						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você escova os dentes diariamente?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Sim</option>
				<option value="" title="">Não</option>            						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você costuma usar que tipo de escova dental?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Macia</option>
				<option value="" title="">Média</option>            						
				<option value="" title="">Grossa</option>            						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você escova os dentes diariamente?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">1 vez</option>
				<option value="" title="">2 vezes</option>        						
				<option value="" title="">3 a 4 vezes</option>        						
				<option value="" title="">Às vezes</option>            						
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
					<td class="rdbtn">Sim</td>
					<td class="rdbtn">Não</td>

				</tr>
			</thead>
			<tbody class="list">
				
				<tr>
				  <td class="labelgrid">Você utiliza escova interdental?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza palito de dente?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza creme dental?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza o flúor em forma de gel?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza o flúor em forma de creme dental?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza o flúor em forma de bochecho?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza o flúor em forma de água fluoretada (água tratada)?</td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="1"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="2"></td>		  
				</tr>
			
			</tbody>
		</table>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Onde você adquiriu conhecimentos sobre bons hábitos bucais?</label>

            <select name="pes_escolaridade" required>
				<option value="" title=""></option>
				<option value="" title="">Em casa</option>
				<option value="" title="">Escola</option>        						
				<option value="" title="">Consultório</option>        						
				<option value="" title="">Mídia</option>            						
				<option value="" title="">Outros</option>            						
				<option value="" title="">Não adquiri</option>            						
			</select>
		</div>
	</div>
	<!--<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">-->
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
	
</form>