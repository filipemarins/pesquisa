<h2 class="fs-title centraltitulo">Qualidade de vida WHOQOL</h2>
	<h3 class="fs-subtitle">Etapa 6</h3>
	<div class="fs-error"></div>

<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte03.php" accept-charset="UTF-8">

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Como você avaliaria sua qualidade de vida?</label>
	        <select name="who_avalia" required>
	        		<option value="" title=""></option>
					<option value="Muito ruim" title="Muito ruim">Muito ruim</option>
					<option value="Ruim" title="Ruim">Ruim</option>
					<option value="Razoável" title="Razoável">Razoável</option>
					<option value="Boa" title="Boa">Boa</option>
					<option value="Muito boa" title="Muito boa">Muito boa</option>
			</select>
		</div>		 
	</div>
	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Quão satisfeito(a) você está com sua saúde?</label>
	        <select name="who_satsaude" required>
	        		<option value="" title=""></option>
					<option value="Muito insatisfeito" title="Muito insatisfeito">Muito insatisfeito</option>
					<option value="Insatisfeito" title="Insatisfeito">Insatisfeito</option>
					<option value="Nem satisfeito nem insatisfeito" title="Nem satisfeito nem insatisfeito">Nem satisfeito nem insatisfeito</option>
					<option value="Satisfeito" title="Satisfeito">Satisfeito</option>
					<option value="Muito satisfeito" title="Muito satisfeito">Muito satisfeito</option>
			</select>
		</div>		 
	</div>
		
	<div class="leg"><legend>As questões seguintes são sobre o quanto você tem sentido alguma coisa nas últimas duas semanas.</legend></div>
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
					<td class="rdbtn">1 <br> Nada</td>
					<td class="rdbtn">2 <br> Muito pouco</td>
					<td class="rdbtn">3 <br> Mais ou menos</td>
					<td class="rdbtn">4 <br> Bastante</td>
					<td class="rdbtn">5 <br> Extremamente</td>

				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Em que medida você acha que sua dor (física) impede você de fazer o que você precisa?</td>
				  <td class="rdbtn"><input type="radio" name="who_dorfisica" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_dorfisica" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_dorfisica" value="Mais ou menos"></td>
				  <td class="rdbtn"><input type="radio" name="who_dorfisica" value="Bastante"></td>
				  <td class="rdbtn"><input type="radio" name="who_dorfisica" value="Extremamente"></td>
				  
				</tr>
				<tr>
				  <td class="labelgrid">O quanto você precisa de algum tratamento médico para levar sua vida diária?</td>
				 <td class="rdbtn"><input type="radio" name="who_medicamento" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_medicamento" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_medicamento" value="Mais ou menos"></td>
				  <td class="rdbtn"><input type="radio" name="who_medicamento" value="Bastante"></td>
				  <td class="rdbtn"><input type="radio" name="who_medicamento" value="Extremamente"></td>
				</tr>
				<tr>
				  <td class="labelgrid">O quanto você aproveita a vida?</td>
				  <td class="rdbtn"><input type="radio" name="who_apvida" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_apvida" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_apvida" value="Mais ou menos"></td>
				  <td class="rdbtn"><input type="radio" name="who_apvida" value="Bastante"></td>
				  <td class="rdbtn"><input type="radio" name="who_apvida" value="Extremamente"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Em que medida você acha que a sua vida tem sentido? </td>
				  <td class="rdbtn"><input type="radio" name="who_sentidovida" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_sentidovida" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_sentidovida" value="Mais ou menos"></td>
				  <td class="rdbtn"><input type="radio" name="who_sentidovida" value="Bastante"></td>
				  <td class="rdbtn"><input type="radio" name="who_sentidovida" value="Extremamente"></td>
				</tr>
				<tr>
				  <td class="labelgrid">O quanto você consegue se concentrar? </td>
				  <td class="rdbtn"><input type="radio" name="who_concentrar" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_concentrar" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_concentrar" value="Mais ou menos"></td>
				  <td class="rdbtn"><input type="radio" name="who_concentrar" value="Bastante"></td>
				  <td class="rdbtn"><input type="radio" name="who_concentrar" value="Extremamente"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão seguro(a) você se sente em sua vida diária? </td>
				  <td class="rdbtn"><input type="radio" name="who_seguro" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_seguro" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_seguro" value="Mais ou menos"></td>
				  <td class="rdbtn"><input type="radio" name="who_seguro" value="Bastante"></td>
				  <td class="rdbtn"><input type="radio" name="who_seguro" value="Extremamente"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão saudável é o seu ambiente físico (clima, barulho, poluição, atrativos)?</td>
				  <td class="rdbtn"><input type="radio" name="who_saudavel" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_saudavel" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_saudavel" value="Mais ou menos"></td>
				  <td class="rdbtn"><input type="radio" name="who_saudavel" value="Bastante"></td>
				  <td class="rdbtn"><input type="radio" name="who_saudavel" value="Extremamente"></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="leg"><legend>As questões seguintes perguntam sobre quão completamente você tem sentido ou é capaz de fazer certas coisas
nestas últimas duas semanas.</legend></div>
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
					<td class="rdbtn">1 <br> Nada</td>
					<td class="rdbtn">2 <br> Muito pouco</td>
					<td class="rdbtn">3 <br> Médio</td>
					<td class="rdbtn">4 <br> Muito</td>
					<td class="rdbtn">5 <br> Completamente</td>

				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Você tem energia suficiente para seu dia-a-dia?</td>
				  <td class="rdbtn"><input type="radio" name="who_energia" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_energia" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_energia" value="Médio"></td>
				  <td class="rdbtn"><input type="radio" name="who_energia" value="Muito"></td>
				  <td class="rdbtn"><input type="radio" name="who_energia" value="Completamente"></td>
				  
				</tr>
				<tr>
				  <td class="labelgrid">Você é capaz de aceitar sua aparência física?</td>
				  <td class="rdbtn"><input type="radio" name="who_apfisica" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_apfisica" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_apfisica" value="Médio"></td>
				  <td class="rdbtn"><input type="radio" name="who_apfisica" value="Muito"></td>
				  <td class="rdbtn"><input type="radio" name="who_apfisica" value="Completamente"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Você tem dinheiro suficiente para satisfazer suas necessidades?</td>
				 <td class="rdbtn"><input type="radio" name="who_dinheirosuf" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_dinheirosuf" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_dinheirosuf" value="Médio"></td>
				  <td class="rdbtn"><input type="radio" name="who_dinheirosuf" value="Muito"></td>
				  <td class="rdbtn"><input type="radio" name="who_dinheirosuf" value="Completamente"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão disponíveis para você estão as informações que precisa no seu dia-a-dia?</td>
				  <td class="rdbtn"><input type="radio" name="who_dispdiadia" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_dispdiadia" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_dispdiadia" value="Médio"></td>
				  <td class="rdbtn"><input type="radio" name="who_dispdiadia" value="Muito"></td>
				  <td class="rdbtn"><input type="radio" name="who_dispdiadia" value="Completamente"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Em que medida você tem oportunidades de atividade de lazer?</td>
				  <td class="rdbtn"><input type="radio" name="who_opolazer" value="Nada"></td>
				  <td class="rdbtn"><input type="radio" name="who_opolazer" value="Muito pouco"></td>
				  <td class="rdbtn"><input type="radio" name="who_opolazer" value="Médio"></td>
				  <td class="rdbtn"><input type="radio" name="who_opolazer" value="Muito"></td>
				  <td class="rdbtn"><input type="radio" name="who_opolazer" value="Completamente"></td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="leg"><legend>As questões seguintes perguntam sobre quão bem ou satisfeito você se sentiu a respeito de vários aspectos de sua
vida nas últimas duas semanas.</legend></div>
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
					<td class="rdbtn">1 <br> Muito ruim</td>
					<td class="rdbtn">2 <br> Ruim</td>
					<td class="rdbtn">3 <br> Nem ruim nem bom</td>
					<td class="rdbtn">4 <br> Bom</td>
					<td class="rdbtn">5 <br> Muito bom</td>

				</tr>
			</thead>
			<tbody class="list"><tr>
				  <td class="labelgrid">Quão bem você é capaz de se locomover?</td>
				  <td class="rdbtn"><input type="radio" name="who_locomover" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_locomover" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_locomover" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_locomover" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_locomover" value="Muito bom"></td>
				  
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com seu sono?</td>
				  <td class="rdbtn"><input type="radio" name="who_sono" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_sono" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_sono" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_sono" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_sono" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com sua capacidade de desempenhar as atividades do seu dia-a-dia?</td>
				 <td class="rdbtn"><input type="radio" name="who_diadia" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_diadia" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_diadia" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_diadia" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_diadia" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com sua capacidade para o trabalho?</td>
				 <td class="rdbtn"><input type="radio" name="who_trabalho" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_trabalho" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_trabalho" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_trabalho" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_trabalho" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está consigo mesmo?</td>
				  <td class="rdbtn"><input type="radio" name="who_satisf" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisf" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisf" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisf" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisf" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com suas relações pessoais (amigos, parentes, conhecidos,colegas)?</td>
				  <td class="rdbtn"><input type="radio" name="who_satisfpessoais" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfpessoais" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfpessoais" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfpessoais" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfpessoais" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com sua vida sexual? </td>
				 <td class="rdbtn"><input type="radio" name="who_satisfvida" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfvida" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfvida" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfvida" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfvida" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com o apoio que você recebe dos seus amigos?</td>
				  <td class="rdbtn"><input type="radio" name="who_satisfamigos" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfamigos" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfamigos" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfamigos" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfamigos" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com as condições do local onde mora?</td>
				 <td class="rdbtn"><input type="radio" name="who_satismora" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satismora" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satismora" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satismora" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satismora" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com o seu acesso aos serviços de saúde?</td>
				 <td class="rdbtn"><input type="radio" name="who_satisfsaude" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfsaude" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfsaude" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfsaude" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_satisfsaude" value="Muito bom"></td>
				</tr>
				<tr>
				  <td class="labelgrid">Quão satisfeito(a) você está com o seu meio de transporte?</td>
				  <td class="rdbtn"><input type="radio" name="who_saitsftransporte" value="Muito ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_saitsftransporte" value="Ruim"></td>
				  <td class="rdbtn"><input type="radio" name="who_saitsftransporte" value="Nem ruim nem bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_saitsftransporte" value="Bom"></td>
				  <td class="rdbtn"><input type="radio" name="who_saitsftransporte" value="Muito bom"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="leg"><legend>As questões seguintes referem-se a com que frequência você se sentiu ou experimentou certas coisas nas últimas semanas.</legend></div>
	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Com que frequência você tem sentimentos negativos tais como mau humor, desespero,ansiedade, depressão?</label>
	        <select name="who_frequencianeg" required>
	        		<option value="" title=""></option>
					<option value="Nunca" title="Nunca">Nunca</option>
					<option value="Algumas vezes" title="Algumas vezes">Algumas vezes</option>
					<option value="Frequentemente" title="Frequentemente">Frequentemente</option>
					<option value="Muito frequentemente" title="Muito frequentemente">Muito frequentemente</option>
					<option value="Sempre" title="Sempre">Sempre</option>
			</select>
		</div>		 
	</div>
	

	<!--<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">-->
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
	
</form>