<h2 class="fs-title centraltitulo">Odontológico</h2>
	<h3 class="fs-subtitle">Etapa 10</h3>
	<div class="fs-error"></div>

<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte03.php" accept-charset="UTF-8">

	<div data-row-span="4">
	    <div data-field-span="3">
	        <label>Data do último atendimento odontológico</label>
	        <input type="date" name="odt_dataex" id="" class=""  required>
	        
		</div> 
		<div data-field-span="1">
            <label>Último atendimento odontológico realizado foi completo ou imcompleto?</label>
            <label><input type="radio" name="odt_excom" value="s" id="odt_excom" <?=check($usuario['odt_excom'],"s")?>> Completo</label>
            <label><input type="radio" name="odt_excom" value="n" id="odt_excom"<?=check($usuario['pes_trabalha'],"n")?>> Incompleto</label>
    	</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Já foi ao dentista?</label>

            <select name="odt_nfoi_dentista" required>
				<option value="" title=""></option>
				<option value="s" title="">Sim</option>
				<option value="n" title="">Não</option>        						
			</select>
		</div>
	</div>
	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Se nunca foi ao dentista, qual o motivo?</label>

            <select name="odt_nfoi_motivo" required>
				<option value="" title=""></option>
				<option value="Não acho necessario" title="">Não acho necessário</option>
				<option value="Medo" title="">Medo</option>        						
				<option value="Fala de oportunidade" title="">Falta de oportunidade</option>        						
				<option value="Falta de tempo" title="">Falta de tempo</option>           						
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
				  <td class="rdbtn"><input type="radio" name="odt_ganglios_dolorido" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_ganglios_dolorido" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Sangra muito quando se fere ou extrai dente?</td>
				  <td class="rdbtn"><input type="radio" name="odt_sangra_extrai" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_sangra_extrai" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Tem dores na região da nuca?</td>
				  <td class="rdbtn"><input type="radio" name=" odt_dores_nuca" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name=" odt_dores_nuca" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Tem zumbido nos ouvidos?</td>
				  <td class="rdbtn"><input type="radio" name="odt_zumbido" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_zumbido" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Consegue abrir a boca normalmente?</td>
				  <td class="rdbtn"><input type="radio" name="odt_abrir_boca" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_abrir_boca" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Sua mandíbula estala quando abre a boca?</td>
				  <td class="rdbtn"><input type="radio" name="odt_estala_abre" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_estala_abre" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Sua mandíbula estala quando mastiga?</td>
				  <td class="rdbtn"><input type="radio" name="odt_estala_come" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_estala_come" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Já tomou anestesia para tratar ou extrair dente?</td>
				  <td class="rdbtn"><input type="radio" name="odt_anestesia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_anestesia" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Teve reação à anestesia?</td>
				  <td class="rdbtn"><input type="radio" name="odt_reacao_anestesia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_reacao_anestesia" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Tem / teve alguma dor de dente por causa do calor, frio ou doce?</td>
				  <td class="rdbtn"><input type="radio" name="odt_dor_dente" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_dor_dente" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Sente retenção de alimento entre os dentes?</td>
				  <td class="rdbtn"><input type="radio" name="odt_retencao_alimento" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_retencao_alimento" value="Não"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Mastiga só de um lado da boca?</td>
				  <td class="rdbtn"><input type="radio" name="odt_mastiga_lado" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_mastiga_lado" value="Não"></td>		  
				</tr>
				
			
			</tbody>
		</table>
	</div>
	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Se mastiga só de um lado, qual lado?</label>

            <select name="odt_qual_lado" required>
				<option value="" title=""></option>
				<option value="" title="">Direito</option>
				<option value="" title="">Esquerdo</option>        						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Sente dor perto do ouvido?</label>

            <select name="odt_dor_ouvido" required>
				<option value="" title=""></option>
				<option value="Nao sinto" title="">Não sinto</option>
				<option value="Dos dois lados" title="">Dos dois lados</option>        						
				<option value="Apenas direto" title="">Apenas lado direito</option>        						
				<option value="Apenas lado esquerdo" title="">Apenas lado esquerdo</option>        						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Toma refrigerante com que frequência na semana?</label>

            <select name="odt_refrigerante" required>
				<option value="" title=""></option>
				<option value="Nenhum dia" title="">Nenhum dia</option>
				<option value="" title="1 a 3 dias">1 a 3 dias</option>        						
				<option value="" title="4 a 6 dias">4 a 6 dias</option>        						
				<option value="" title="Todos os dias">Todos os dias</option>        						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Sente sua gengiva inchada ou sangrando?</label>

            <select name="odt_gengiva" required>
				<option value="" title=""></option>
				<option value="Nunca" title="">Nunca</option>
				<option value="As vezes" title="">Às vezes</option>        						
				<option value="Sempre" title="">Sempre</option>      						
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

            <select name="odt_protese" required>
				<option value="" title=""></option>
				<option value="Nenhum" title="">Nenhum</option>
				<option value="1 a 6 " title="">1 a 6 dentes</option>   						
				<option value="7 a 12" title="">7 a 12 dentes</option>   						
				<option value="13 a 20" title="">13 a 20 dentes</option>   						
				<option value="21 a 26" title="">21 a 26 dentes</option>   						
				<option value="27 a 32" title="">27 a 32 dentes</option>   						
				<option value="Todos" title="">Todos</option> 						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Se já perdeu algum dente, em qual lado perdeu a maioria?</label>

            <select name="odt_perdeu_dente_lado" required>
				<option value="" title=""></option>
				<option value="Direito" title="">Direito</option>
				<option value="Esquerdo" title="">Esquerdo</option>   						
				<option value="Superior" title="">Superior</option>   						
				<option value="Inferior" title="">Inferior</option>						
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
				  <td class="rdbtn"><input type="radio" name="odt_cirurgia_pescoco" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_cirurgia_pescoco" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Usa aparelho fixo ou móvel?</td>
				  <td class="rdbtn"><input type="radio" name="odt_aparelho" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_aparelho" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid"> Já usou aparelho fixo?</td>
				  <td class="rdbtn"><input type="radio" name="odt_usou_aparelho" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_usou_aparelho" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Usa implantes?</td>
				  <td class="rdbtn"><input type="radio" name="odt_usa_implate" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_usa_implate" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Já fez canal?</td>
				  <td class="rdbtn"><input type="radio" name="odt_canal" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_canal" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você já teve alguma experiência negativa em tratamentos odontológicos?</td>
				  <td class="rdbtn"><input type="radio" name="odt_experiencia" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_experiencia" value="Nao"></td>		  
				</tr>
						
			</tbody>
		</table>
	</div>
	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Se já teve alguma experiência negativa, qual?</label>

            <select name="odt_qual_experiencia" required>
				<option value="" title=""></option>
				<option value="Deixou de ser examinado" title="">Deixou de ser examinado</option>
				<option value="Sofreu algum tipo de lesão por falha do profissional" title="">Sofreu algum tipo de lesão por falha do profissional</option>        						
				<option value="Passou por algum procedimento incorreto" title="">Passou por algum procedimento incorreto</option>        						
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
				  <td class="rdbtn"><input type="radio" name="odt_ingere_alimentos" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_ingere_alimentos" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você rói unhas?</td>
				  <td class="rdbtn"><input type="radio" name="odt_roi_unhas" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_roi_unhas" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você respira pela boca?</td>
				  <td class="rdbtn"><input type="radio" name="odt_respira_boca" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_respira_boca" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você toma chimarrão?</td>
				  <td class="rdbtn"><input type="radio" name="odt_chimarrao" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_chimarrao" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você chupa ou já chupou bico/dedo?</td>
				  <td class="rdbtn"><input type="radio" name="odt_chupa_bico_dedo" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_chupa_bico_dedo" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você morde caneta / lápis?</td>
				  <td class="rdbtn"><input type="radio" name="odt_morde_caneta_lapis" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_morde_caneta_lapis" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você range os dentes durante o dia ou enquanto dorme?</td>
				  <td class="rdbtn"><input type="radio" name="odt_range" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_range" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você possui o hábito de apertar a boca?</td>
				  <td class="rdbtn"><input type="radio" name="odt_apertar_boca" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_apertar_boca" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza fio / fita dental diariamente?</td>
				  <td class="rdbtn"><input type="radio" name="odt_fio_dental" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_fio_dental" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você range os dentes durante o dia ou enquanto dorme?</td>
				  <td class="rdbtn"><input type="radio" name="odt_rangerdentes" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_rangerdentes" value="Nao"></td>		  
				</tr>

				
			
			</tbody>
		</table>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você utiliza fio dental quantas vezes por dia?</label>

            <select name="odt_quantas_fio" required>
				<option value="" title=""></option>
				<option value="1 vez" title="">1 vez</option>
				<option value="2 vezes" title="">2 vezes</option>        						
				<option value="3 a 4 vezes" title="">3 a 4 vezes</option>        						
				<option value="As vezes" title="">Às vezes</option>        						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você escova os dentes diariamente?</label>

            <select name="odt_escovar" required>
				<option value="" title=""></option>
				<option value="Sim" title="">Sim</option>
				<option value="Nao" title="">Não</option>            						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você costuma usar que tipo de escova dental?</label>

            <select name="odt_tipo_escova" required>
				<option value="" title=""></option>
				<option value="Macia" title="">Macia</option>
				<option value="Media" title="">Média</option>            						
				<option value="Grossa" title="">Grossa</option>            						
			</select>
		</div>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Você escova os dentes diariamente?</label>

            <select name="odt_quantas_escova" required>
				<option value="" title=""></option>
				<option value="1 vez" title="">1 vez</option>
				<option value="2 vez" title="">2 vezes</option>        						
				<option value="3 a 4 vezes" title="">3 a 4 vezes</option>        						
				<option value="As vezes" title="">Às vezes</option>            						
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
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="soc_contri" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza palito de dente?</td>
				  <td class="rdbtn"><input type="radio" name="odt_palito" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_palito" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza creme dental?</td>
				  <td class="rdbtn"><input type="radio" name="odt_creme" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_creme" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza o flúor em forma de gel?</td>
				  <td class="rdbtn"><input type="radio" name="odt_creme" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_creme" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza o flúor em forma de creme dental?</td>
				  <td class="rdbtn"><input type="radio" name="odt_fluor_creme" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_fluor_creme" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza o flúor em forma de bochecho?</td>
				  <td class="rdbtn"><input type="radio" name="odt_fluor_bochecho" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_fluor_bochecho" value="Nao"></td>		  
				</tr>
				<tr>
				  <td class="labelgrid">Você utiliza o flúor em forma de água fluoretada (água tratada)?</td>
				  <td class="rdbtn"><input type="radio" name="odt_fluor_agua" value="Sim"></td>
				  <td class="rdbtn"><input type="radio" name="odt_fluor_agua" value="Nao"></td>		  
				</tr>
			
			</tbody>
		</table>
	</div>

	<div data-row-span="1">	 
        <div data-field-span="1">
            <label>Onde você adquiriu conhecimentos sobre bons hábitos bucais?</label>

            <select name="odt_info" required>
				<option value="" title=""></option>
				<option value="Em casa" title="">Em casa</option>
				<option value="Escola" title="">Escola</option>        						
				<option value="Consultorio" title="">Consultório</option>        						
				<option value="Midia" title="">Mídia</option>            						
				<option value="Outros" title="">Outros</option>            						
				<option value="Nao adquiri" title="">Não adquiri</option>            						
			</select>
		</div>
	</div>
	<!--<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">-->
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
	
</form>