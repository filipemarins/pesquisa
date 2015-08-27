<h2 class="fs-title centraltitulo">Atividade Física</h2>
	<h3 class="fs-subtitle">Etapa 7</h3>
	<div class="fs-error"></div>
	<div class="grid-10 gutter-20">
		<div class="span-7">
			<fieldset class="flakes-information-box">
				<legend style="border-bottom:none!important;">Instruções</legend>

				<dl>
					<dt>Nós estamos interessados em saber que tipos de atividade física as pessoas fazem como parte do seu dia a dia. Este projeto faz parte de um grande estudo que está sendo feito em diferentes países ao redor do mundo. Suas respostas nos ajudarão a entender que tão ativos nós somos em relação à pessoas de outros países. As perguntas estão relacionadas ao tempo que você gasta fazendo atividade física na ÚLTIMA semana. As perguntas incluem as atividades que você faz no trabalho, para ir de um lugar a outro, por lazer, por esporte, por exercício ou como parte das suas atividades em casa ou no jardim. Suas respostas são MUITO importantes. Por favor responda cada questão mesmo que considere que não seja ativo. Obrigado pela sua participação! Para responder as questões lembre que: ¾ atividades físicas VIGOROSAS são aquelas que precisam de um grande esforço físico e que fazem respirar MUITO mais forte que o normal ¾ atividades físicas MODERADAS são aquelas que precisam de algum esforço físico e que fazem respirar UM POUCO mais forte que o normal Para responder as perguntas pense somente nas atividades que você realiza por pelo menos 10 minutos contínuos de cada vez.</dt>
				</dl>
			</fieldset>
		</div>
	</div>

<form id="msform" class="grid-form"  method="POST" action="questionario01/adicionar/adicionar-parte03.php" accept-charset="UTF-8">
	<div class="leg"><legend></legend></div>
		
	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Em quantos dias da última semana você CAMINHOU por pelo menos 10 minutos contínuos em casa ou no trabalho, como forma de transporte para ir de um lugar para outro, por lazer, por prazer ou como forma de exercício?</label>
	        <input type="number" name="atv_dias" id="" class="numeros" placeholder="Quantos dias por semana?" required>
	        <input type="checkbox" id="mul_qtdgestao" id="mul_qtdgestao" name="mul_qtdgestao" class="checkboxnew" value=""><label style="float:right;color:#333" for="mul_qtdgestao" class="checkboxnew"> <span>Nenhum</span></label>
		</div> 
	</div>

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Nos dias em que você caminhou por pelo menos 10 minutos contínuos quanto tempo no total você gastou caminhando por dia? </label>
	        <input type="text" name="atv_tmpdia" id="" class="hour" placeholder="Quantas horas por semana? (Média) hh:mm" required>
		</div> 
	</div>

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Em quantos dias da última semana, você realizou atividades MODERADAS por pelo menos 10 minutos contínuos, como por exemplo pedalar leve na bicicleta, nadar, dançar, fazer ginástica aeróbica leve, jogar vôlei recreativo, carregar pesos leves, fazer serviços domésticos na casa, no quintal ou no jardim como varrer, aspirar, cuidar do jardim, ou qualquer atividade moderada (POR FAVOR NÃO INCLUA CAMINHADA)
			</label>
	        <input type="number" name="atv_diasmod" id="" class="numeros" placeholder="Quantos dias por semana?" required>
	        <input type="checkbox" id="mul_qtdgestao" id="mul_qtdgestao" name="mul_qtdgestao" class="checkboxnew" value=""><label style="float:right;color:#333" for="mul_qtdgestao" class="checkboxnew"> <span>Nenhum</span></label>
		</div> 
	</div>

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Nos dias em que você fez essas atividades moderadas por pelo menos 10 minutos contínuos, quanto tempo no total você gastou fazendo essas atividades por dia?</label>
	        <input type="text" name="atv_tmpdiamod" id="" class="hours" placeholder="Quantas horas por semana? (Média) hh:mm" required>
		</div> 
	</div>

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Em quantos dias da última semana, você realizou atividades VIGOROSAS por pelo menos 10 minutos contínuos, como por exemplo correr, fazer ginástica aeróbica, jogar futebol, pedalar rápido na bicicleta, jogar basquete, fazer serviços domésticos pesados em casa, no quintal ou cavoucar no jardim, carregar pesos elevados ou qualquer atividade que fez aumentar MUITO sua respiração ou batimentos do coração.
			</label>
	        <input type="number" name="atv_diasrig" id="" class="numeros" placeholder="Quantos dias por semana?" required>
	        <input type="checkbox" id="mul_qtdgestao" id="mul_qtdgestao" name="mul_qtdgestao" class="checkboxnew" value=""><label style="float:right;color:#333" for="mul_qtdgestao" class="checkboxnew"> <span>Nenhum</span></label>
		</div> 
	</div>

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Nos dias em que você fez essas atividades moderadas por pelo menos 10 minutos contínuos, quanto tempo no total você gastou fazendo essas atividades por dia?</label>
	        <input type="text" name="atv_tmpdiarig" id="" class="hourss" placeholder="Quantas horas por semana? (Média) hh:mm" required>
		</div> 
	</div>

	<div class="leg"><legend>Estas últimas questões são sobre o tempo que você permanece sentado todo dia, no trabalho, na escola ou faculdade, em casa e durante seu tempo livre. Isto inclui o tempo sentado estudando, sentado enquanto descansa, fazendo lição de casa visitando um amigo, lendo, sentado ou deitado assistindo TV. Não inclua o tempo gasto sentando durante o transporte em ônibus, trem, metrô ou carro.</legend></div>

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Quanto tempo no total você gasta sentado durante um dia de semana?</label>
	        <input type="text" name="atv_tmpsentfds" id="" class="hoursss" placeholder="Quantas horas por semana? (Média) hh:mm" required>
		</div> 
	</div>

	<div data-row-span="2">
	    <div data-field-span="2">
	        <label>Quanto tempo no total você gasta sentado durante em um dia de final de semana?</label>
	        <input type="text" name="atv_tmpsentfds" id="" class="hourssss" placeholder="Quantas horas por semana? (Média) hh:mm" required>
		</div> 
	</div>
	<!--<input type="hidden" value="<?=usuarioCadastrado()?>" name="pes_id">-->
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
	
</form>