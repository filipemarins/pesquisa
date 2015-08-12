<form id="msform" class="grid-form" method="POST" action="questionario01/adicionar/adicionar-parte01.php" accept-charset="UTF-8">
	<fieldset class="fields">
		<h2 class="fs-title centraltitulo">Dados Pessoais</h2>
		<h3 class="fs-subtitle">Etapa 1</h3>
		<div class="fs-error"></div>

		<div data-row-span="2">
			<legend>Seus Dados Pessoais</legend>
            <div data-field-span="2">
                <label>Nome Completo</label>
                <input type="text" name="pes_nomecompleto" id="pes_nomecompleto" placeholder="Nome completo" value="<?=verifica($usuario['pes_nomecompleto'])?>" required>
        	 </div> 
       	</div>
       	<div data-row-span="2">
	        <div data-field-span="2">
                <label>Email</label>
                <label><input type="text" name="pes_email" id="pes_email" placeholder="Email" value="<?=verifica($usuario['pes_email'])?>" required>
	    	</div>  
 	 
        </div>
        <div data-row-span="1">
	        <div data-field-span="1" id="pes_sexo_wrap">
                <label>Sexo</label>
                <?php 
                $checkedm = null;
					$checkedf = null;
                if(verifica($usuario['pes_sexo'])){
                	
                	if($usuario['pes_sexo'] == 'm'){
					
					$masculino = $usuario['pes_sexo'];

					$checkedm = $masculino ? "checked" : "";
					}else{
					$feminino = $usuario['pes_sexo'];

					$checkedf = $feminino ? "checked" : "";
					}
				}
				
				?>
                <label><input type="radio" name="pes_sexo" value="m" id="pes_sexom" <?=echoisset($checkedm)?> required> Masculino</label>
                <label><input type="radio" name="pes_sexo" value="f" id="pes_sexof"<?=echoisset($checkedf)?> required> Feminino</label>
	    	</div>
	    </div>
       	<div data-row-span="1">
	    	<div data-field-span="1">
                <label>Data de nascimento</label>
                <input type="date" name="pes_datanascimento" id="pes_datanascimento" placeholder="" value="<?=verifica($usuario['pes_datanascimento'])?>" required>
        	</div>   
	    </div>
	    <div data-row-span="2">
	    	<div data-field-span="2">
                <label>Naturalidade</label>
                <input type="text" name="pes_naturalidade" id="pes_naturalidade" placeholder="Sua Naturalidade" value="<?=verifica($usuario['pes_naturalidade'])?>" required>
        	</div>   
	    </div>

	    <div data-row-span="1">
	        <div data-field-span="1">
                <label>Cep</label>
                <label><input type="text" name="end_cep" id="cep" placeholder="Cep" value="<?=verifica($endereco['end_cep'])?>"  required>
	    	</div>
	    </div>
       	<div data-row-span="1">
	    	<div data-field-span="1">
                <label>Rua</label>
                <input type="text" name="end_rua" id="rua" placeholder="Nome da Rua / Logradouro" value="<?=verifica($endereco['end_rua'])?>" required>
        	</div>   
	    </div>

	    <div data-row-span="1">
	        <div data-field-span="1">
                <label>Número</label>
                <label><input type="text" name="end_numero" id="numero" class="numbers" placeholder="Número" value="<?=verifica($endereco['end_numero'])?>" required>
	    	</div>
	    </div>
       	<div data-row-span="1">
	    	<div data-field-span="1">
                <label>Bairro</label>
                <input type="text" name="end_bairro" id="bairro" placeholder="Bairro" value="<?=verifica($endereco['end_bairro'])?>" required>
        	</div>   
	    </div>
	    <div data-row-span="1">
	        <div data-field-span="1">
                <label>Cidade</label>
                <label><input type="text" name="end_cidade" id="cidade" placeholder="Cidade" value="<?=verifica($endereco['end_cidade'])?>" required>
	    	</div>
	    </div>
       	<div data-row-span="2">
	    	<div data-field-span="2">
                <label>Estado</label>
                <input type="text" name="end_estado" id="estado" placeholder="Estado" value="<?=verifica($endereco['end_estado'])?>" required>
        	</div>   
	    </div>
	    
	    <div data-row-span="1">	 
	        <div data-field-span="1">
                <label>Escolaridade</label>

                <select name="pes_escolaridade" required>
					<option value="" title=""></option>
                	<option value="nenhuma" title="nenhuma" <?=verifica($usuario['pes_escolaridade']) == "Nenhuma" ? "selected" : "" ?>>Nenhuma</option>
					<option value="Ensino fundamental incompleto" title="Ensino fundamental incompleto" <?=verifica($usuario['pes_escolaridade']) == "Ensino fundamental incompleto" ? "selected" : "" ?>>Ensino fundamental incompleto</option>
					<option value="Ensino fundamental completo" title="Ensino fundamental completo" <?=verifica($usuario['pes_escolaridade']) == "Ensino fundamental completo" ? "selected" : "" ?>>Ensino fundamental completo</option>
					<option value="Ensino médio incompleto" title="Ensino médio incompleto" <?=verifica($usuario['pes_escolaridade']) == "Ensino médio incompleto" ? "selected" : "" ?>>Ensino médio incompleto</option>
					<option value="Ensino medio completo" title="Ensino medio completo" <?=verifica($usuario['pes_escolaridade']) == "Ensino medio completo" ? "selected" : "" ?>>Ensino medio completo</option>
					<option value="Ensino superior incompleto" title="Ensino superior incompleto" <?=verifica($usuario['pes_escolaridade']) == "Ensino superior incompleto" ? "selected" : "" ?>>Ensino superior incompleto</option>					
					<option value="Ensino superior completo" title="Ensino superior completo" <?=verifica($usuario['pes_escolaridade']) == "Ensino superior completo" ? "selected" : "" ?>>Ensino superior completo</option>					
				</select>
    		</div>
    	</div>
       	<div data-row-span="1">

    		<div data-field-span="1">
                <label>Você estuda ou estudou em:</label>
                <select name="pes_estudouem" required>
					<option value="" title=""></option>
                	<option value="Escola Pública" title="Escola Pública" <?=verifica($usuario['pes_estudouem']) == "Escola Pública" ? "selected" : "" ?>>Escola Pública</option>
					<option value="Escola Particular" title="Escola Particular" <?=seleciona($usuario['pes_estudouem'],"Escola Particular")?>>Escola Particular</option>
					<option value="Não estudei" title="Não estudei" <?=seleciona($usuario['pes_estudouem'],"Não estudei")?>>Não estudei</option>
			
				</select>
        	</div> 
	    	 
    	</div>

    	<div data-row-span="1">
	        <div data-field-span="1" id="offer">
                <label>Você trabalha?</label>
                <label><input type="radio" name="pes_trabalha" value="s" id="pes_trabalhas" <?=check($usuario['pes_trabalha'],"s")?>> Sim</label>
                <label><input type="radio" name="pes_trabalha" value="n" id="pes_trabalhan"<?=check($usuario['pes_trabalha'],"n")?>> Não</label>
	    	</div>
	    </div>
       	<div data-row-span="1">
	    	<div data-field-span="1">
                <label>Número de horas semanais trabalhadas</label>
                <select name="pes_hosrassemtrab" id="pes_hosrassemtrab">
					<option value="" title=""></option>              	
					<option value="Menos de 20 horas" title="Menos de 20 horas" <?=seleciona($usuario['pes_hosrassemtrab'],"Menos de 20 horas" )?>>Menos de 20 horas</option>
					<option value="20 a 40 horas" title="20 a 40 horas" <?=seleciona($usuario['pes_hosrassemtrab'],"20 a 40 horas" )?>>20 a 40 horas</option>
					<option value="41 a 60 horas" title="41 a 60 horas" <?=seleciona($usuario['pes_hosrassemtrab'],"41 a 60 horas" )?>>41 a 60 horas</option>
					<option value="Mais 60 horas" title="Mais 60 horas" <?=seleciona($usuario['pes_hosrassemtrab'],"Mais 60 horas" )?>>Mais 60 horas</option>				
				</select>
    		</div>
	    </div>
	    <div data-row-span="2">
	        <div data-field-span="2">
                <label>Estado civil</label>
                <select name="pes_estadocivil" required>
					<option value="" title=""></option>
					<option value="Solteiro" title="Solteiro" <?=seleciona($usuario['pes_estadocivil'],"Solteiro" )?> >Solteiro</option>
					<option value="Casado" title="Casado" <?=seleciona($usuario['pes_estadocivil'],"Casado" )?> >Casado</option>
					<option value="Divorciado" title="Divorciado" <?=seleciona($usuario['pes_estadocivil'],"Divorciado" )?> >Divorciado</option>
					<option value="Viúvo" title="Viúvo" <?=seleciona($usuario['pes_estadocivil'],"Viúvo" )?> >Viúvo</option>				
				</select>
    		</div>
	    </div>
	    <div data-row-span="2">
	    	<div data-field-span="2">

                <label>Com quem vive (Uma ou mais opções)</label>
                <label><input type="checkbox" name="pes_comquemvive[]" value="Sozinho" <?=forcheckbox($usuario['pes_comquemvive'],"Sozinho")?> > Sozinho</label>
                <label><input type="checkbox" name="pes_comquemvive[]" value="Pais" <?=forcheckbox($usuario['pes_comquemvive'],"Pais")?> > Pais</label>
                <label><input type="checkbox" name="pes_comquemvive[]" value="Cônjuge" <?=forcheckbox($usuario['pes_comquemvive'],"Cônjuge")?> > Cônjuge</label>
                <label><input type="checkbox" name="pes_comquemvive[]" value="Filhos"<?=forcheckbox($usuario['pes_comquemvive'],"Filhos")?> > Filhos</label>
                <label><input type="checkbox" name="pes_comquemvive[]" value="Irmão(s)" <?=forcheckbox($usuario['pes_comquemvive'],"Irmão(s)")?> > Irmão(s)</label>
                <label><input type="checkbox" name="pes_comquemvive[]" value="Neto(s)" <?=forcheckbox($usuario['pes_comquemvive'],"Neto(s)")?> > Neto(s)</label>
                <label><input type="checkbox" name="pes_comquemvive[]" value="Ajudante Remunerado" <?=forcheckbox($usuario['pes_comquemvive'],"Ajudante Remunerado")?> > Ajudante Remunerado</label>
                <label><input type="checkbox" name="pes_comquemvive[]" value="Parentes 1º grau" <?=forcheckbox($usuario['pes_comquemvive'],"Parentes 1º grau")?> > Parentes 1º grau</label>
    		</div>
	    </div>
	    <div data-row-span="2">
	    	<div data-field-span="2">
	    		<?php 
	    		$pes_comquenviveconc = 0;
	                if(verifica($usuario['pes_comquemvive'])){
	                	$pes_comquenviveconc = str_replace(array("Sozinho","Cônjuge","Pais","Filhos","Irmão(s)","Neto(s)","Ajudante Remunerado","Parentes 1º grau","-", " " ), "", $usuario['pes_comquemvive']);

	                }
                ?>
	    		<!-- concatenar com o de cima -->
                <label>Convive com mais alguem? (Se sim especifique)</label>

                <label><input type="text"  name="pes_comquemviveconc" id="convive" placeholder="Se convive com mais alguem especifique" value="<?=verifica($pes_comquenviveconc)?>" style="width:500px;">
    		</div>
	    </div>

	    <div data-row-span="1">
	        <div data-field-span="1">
                <label>Tipo sanguíneo</label>
                <select name="pes_sangue" required>
					<option value="" title=""></option>
					<option value="A" title="A" <?=seleciona($usuario['pes_sangue'],"A" )?> >A</option>
					<option value="B" title="B" <?=seleciona($usuario['pes_sangue'],"B" )?> >B</option>
					<option value="O" title="O" <?=seleciona($usuario['pes_sangue'],"O" )?> >O</option>
					<option value="AB" title="AB" <?=seleciona($usuario['pes_sangue'],"AB" )?> >AB</option>				
					<option value="Não se informar" title="Não se informar"  <?=seleciona($usuario['pes_sangue'],"Não se informar" )?> >Não sei informar</option>				
				</select>
    		</div>
    	</div>
       	<div data-row-span="1">
    		<div data-field-span="1">
                <label>Fator RH</label>
                <select name="pes_rh" required>
					<option value="" title=""></option>
					<option value="-" title="-" <?=seleciona($usuario['pes_rh'],"-" )?> > - (Negativo)</option>
					<option value="+" title="+" <?=seleciona($usuario['pes_rh'],"+" )?> > + (Positivo)</option>
					<option value="Não sei informar" title="Não sei informar"  <?=seleciona($usuario['pes_rh'],"Não sei informar" )?> >Não sei informar</option>						
				</select>
    		</div>
	    </div>

	    <div data-row-span="5">
	        <div data-field-span="5">
                <label>Peso ao nascer</label>
                <input type="text" name="pes_pesonascer" class="numbers" placeholder="Peso ao nascer (kg)" id="pes_peso" value="<?=verifica($usuario['pes_pesonascer'])?>">
                <input type="checkbox" id="pes_pesonascer" name="pes_pesonascer"  class="checkboxnew" value=""><label style="float:right;color:#333"for="pes_pesonascer" class="checkboxnew"> <span>Não sei informar</span></label>
    		</div>
    	</div>
       	<div data-row-span="5">
    		<div data-field-span="5" id="pes_atividadefisica_wrap">
                <label>Pratica atividade fisica?</label>
                	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisicas" value="s" <?=check($usuario['pes_atividadefisica'],"s")?> required> Sim</label>
                	<label><input type="radio" name="pes_atividadefisica" id="pes_atividadefisican"  value="n" <?=check($usuario['pes_atividadefisica'],"n")?> required> Não</label>
    		</div>
	    </div>
	    <div data-row-span="2">
	        <div data-field-span="2" id="pes_quaisatividades_wrap">
	        	<!-- Desativar se não -->
                <label>Quais atividades fisica?</label>
                <label><input type="checkbox" name="pes_quaisatividades[]" class="pes_quaisatividades" value="Ginástica" <?=forcheckbox($usuario['pes_quaisatividades'],"Ginástica")?> > Ginástica</label>
                <label><input type="checkbox" name="pes_quaisatividades[]" class="pes_quaisatividades" value="Musculação" <?=forcheckbox($usuario['pes_quaisatividades'],"Musculação")?> > Musculação</label>
                <label><input type="checkbox" name="pes_quaisatividades[]" class="pes_quaisatividades" value="Artes Marciais" <?=forcheckbox($usuario['pes_quaisatividades'],"Artes Marciais")?> > Artes Marciais</label>
                <label><input type="checkbox" name="pes_quaisatividades[]" class="pes_quaisatividades" value="Natação" <?=forcheckbox($usuario['pes_quaisatividades'],"Natação")?> > Natação</label>
                <label><input type="checkbox" name="pes_quaisatividades[]" class="pes_quaisatividades" value="Caminhada" <?=forcheckbox($usuario['pes_quaisatividades'],"Caminhada")?> > Caminhada</label>
                <label><input type="checkbox" name="pes_quaisatividades[]" class="pes_quaisatividades" value="Outros" <?=forcheckbox($usuario['pes_quaisatividades'],"Outros")?> > Outros</label>
    		</div>
	    </div>
	    <div data-row-span="2">
	        <div data-field-span="2" id="pes_quaisatividadesconc_wrap">
	        	<?php 
	    		$pes_quaisatividadesconc = 0;
	                if(verifica($usuario['pes_quaisatividades'])){
	                	$pes_quaisatividadesconc = str_replace(array("Ginástica","Musculação","Artes Marciais","Natação","Caminhada","Outros","-", " " ), "", $usuario['pes_quaisatividades']);

	                }
                ?>
	        	<!-- Concatenar com a de cima -->
                <label>Pratica outras atividades? (Especifique)</label>
                <input type="text" name="pes_quaisatividadesconc" class="pes_quaisatividadesconc" placeholder="Especifique as outras atividades" value="<?=verifica($pes_quaisatividadesconc)?>">
    		</div>
	    </div>

	    <div class="leg"><legend>Com relação você e aos seus pais como você classifica?</legend></div>

	    <div data-row-span="3">
	    	
	        <div data-field-span="1">
                <label>Pai</label>
                <select name="pes_classpai" required>
					<option value="" title="" ></option>
                	<option value="Muito gordo" title="Muito gordo" <?=seleciona($usuario['pes_classpai'],"Muito gordo" )?> >Muito gordo</option>
					<option value="Gordo" title="Gordo" <?=seleciona($usuario['pes_classpai'],"Muito gordo" )?> >Gordo</option>
					<option value="Normal" title="Normal" <?=seleciona($usuario['pes_classpai'],"Normal" )?> >Normal</option>
					<option value="Magro" title="Magro" <?=seleciona($usuario['pes_classpai'],"Magro" )?> >Magro</option>
					<option value="Muito magro" title="Muito magro" <?=seleciona($usuario['pes_classpai'],"Muito magro" )?> >Muito magro</option>
					<option value="Não sei informar" title="Não sei informar"  <?=seleciona($usuario['pes_classpai'],"Não sei informar" )?> >Não sei informar</option>					
				</select>
    		</div>
    		<div data-field-span="1">
                <label>Mãe</label>
                <select name="pes_classmae" required>
					<option value="" title="" ></option>
                	<option value="Muito gorda" title="Muito gorda" <?=seleciona($usuario['pes_classmae'],"Muito gorda" )?> >Muito gorda</option>
					<option value="Gorda" title="Gorda" <?=seleciona($usuario['pes_classmae'],"Gorda" )?> >Gorda</option>
					<option value="Normal" title="Normal" <?=seleciona($usuario['pes_classmae'],"Normal" )?> >Normal</option>
					<option value="Magra" title="Magra" <?=seleciona($usuario['pes_classmae'],"Magra" )?> >Magra</option>
					<option value="Muito magra" title="Muito magra" <?=seleciona($usuario['pes_classmae'],"Muito magra" )?> >Muito magra</option>
					<option value="Não sei informar" title="Não sei informar"  <?=seleciona($usuario['pes_classmae'],"Não sei informar" )?> >Não sei informar</option>					
				</select>
    		</div>
    		<div data-field-span="1">
                <label>Eu</label>
                <select name="pes_classeu" required>
					<option value="" title="" ></option>
                	<option value="Muito gordo(a)" title="Muito gordo(a)" <?=seleciona($usuario['pes_classeu'],"Muito gordo(a)" )?> >Muito gordo(a)</option>
					<option value="Gordo(a)" title="Gordo(a)" <?=seleciona($usuario['pes_classeu'],"Gordo(a)" )?> >Gordo(a)</option>
					<option value="Normal(a)" title="Normal(a)" <?=seleciona($usuario['pes_classeu'],"Normal(a)" )?> >Normal(a)</option>
					<option value="Magro(a)" title="Magro(a)" <?=seleciona($usuario['pes_classeu'],"Magro(a)" )?> >Magro(a)</option>
					<option value="Muito magro(a)" title="Muito magro(a)" <?=seleciona($usuario['pes_classeu'],"Muito magro(a)" )?> >Muito magro(a)</option>
					<option value="Não sei informar" title="Não sei informar"  <?=seleciona($usuario['pes_classeu'],"Não sei informar" )?> >Não sei informar</option>					
				</select>
    		</div>
	    	 
    	</div>

    	<fieldset id="mul_wrap">
	    	<div class="leg"><legend>Exclusivo para mulheres</legend></div>
	    	<div data-row-span="1">
	    		<div data-field-span="1" id="mul_qtdgestao_wrap">
	                <label>Quantas gestações?</label>
	                <input type="number" min="1" max="20" class="numeros" name="mul_qtdgestao" id="qtdgestao" placeholder="Quantas gestações?" value="<?=verifica($mulher['mul_qtdgestao'])?>">
	                <input type="checkbox" id="mul_qtdgestao" id="mul_qtdgestao" name="mul_qtdgestao" class="checkboxnew" value=""><label style="float:right;color:#333" for="mul_qtdgestao" class="checkboxnew"> <span>Nenhum</span></label>
	    		</div>
	    	</div>
       		<div data-row-span="1">
	    		<div data-field-span="1" id="mul_qtdfilhos_wrap">
	                <label>Quantos filhos?</label>
	                <input type="number" min="1" max="20" class="numeros"  name="mul_qtdfilhos" id="qtdfilhos" placeholder="Quantos filhos?"  value="<?=verifica($mulher['mul_qtdfilhos'])?>" >
	    		</div>
		    </div>

		    <div data-row-span="2">
		        <div data-field-span="2" id="mul_probgestacional_wrap">
	                <label>Problema gestacional</label>
	                <label><input type="checkbox" name="mul_probgestacional[]" class="mul_probgestacional" value="Nenhum" <?=forcheckbox($mulher['mul_probgestacional'],"Nenhum")?> > Nenhum</label>
	                <label><input type="checkbox" name="mul_probgestacional[]" class="mul_probgestacional"  value="Anemia" <?=forcheckbox($mulher['mul_probgestacional'],"Anemia")?> > Anemia</label>
	                <label><input type="checkbox" name="mul_probgestacional[]" class="mul_probgestacional"  value="Diabetes gestacional" <?=forcheckbox($mulher['mul_probgestacional'],"Diabetes gestacional")?> > Diabetes gestacional</label>
	                <label><input type="checkbox" name="mul_probgestacional[]" class="mul_probgestacional"  value="Hipertensão" <?=forcheckbox($mulher['mul_probgestacional'],"Hipertensão")?> > Hipertensão</label>
	                <label><input type="checkbox" name="mul_probgestacional[]" class="mul_probgestacional" value="Pré eclampsia" <?=forcheckbox($mulher['mul_probgestacional'],"Pré eclampsia")?> > Pré eclampsia</label>
	                <label><input type="checkbox" name="mul_probgestacional[]" class="mul_probgestacional"  value="Outro(s)" <?=forcheckbox($mulher['mul_probgestacional'],"Outro(s)")?> > Outro(s)</label>
	    		</div>
		    </div>

		    <div data-row-span="2">
		        <div data-field-span="2" id="mul_probgestacionalconc_wrap">
		        	<!-- Concatenar com o de cima -->
		        	<?php 
		    		$mul_probgestacionalconc = 0;
		                if(verifica($mulher['mul_probgestacional'])){
		                	$mul_probgestacionalconc = str_replace(array("Nenhum","Anemia","Diabetes gestacional","Hipertensão","Pré eclampsia","Outros(s)","-", " " ), "", $mulher['mul_probgestacional']);

		                }
	                ?>
	                <label>Outros problemas gestacional? (Especifique)</label>
	                <input type="text" name="mul_probgestacionalconc" placeholder="Se teve outros problemas gestacional especifique" value="<?=verifica($mul_probgestacionalconc)?>" class="mul_probgestacionalconc">
	    		</div>
		    </div>
		    <div data-row-span="2">
		        <div data-field-span="1" id="mul_partosnormais_wrap">
	                <label>Quantos partos normais?</label>
	                <input type="number" min="1" max="20" class="numeros"  name="mul_partosnormais" id="partosnormais" placeholder="Quantos partos normais?" value="<?=verifica($mulher['mul_partosnormais'])?>" >
	                <input type="checkbox" id="mul_partosnormais" name="mul_partosnormais" class="checkboxnew" value=""><label style="float:right;color:#333" for="mul_partosnormais" class="checkboxnew"> <span>Nenhum</span></label>
	    		</div>
	    		<div data-field-span="1" id="mul_partoscesario_wrap">
	                <label>Quantos partos cesário?</label>
	                <input type="number" min="1" max="20" class="numeros"  name="mul_partoscesario" placeholder="Quantos partos cesário?" id="partoscesario" value="<?=verifica($mulher['mul_partoscesario'])?>">
	                <input type="checkbox" id="mul_partoscesario" name="mul_partoscesario" class="checkboxnew"  value=""><label style="float:right;color:#333" for="mul_partoscesario" class="checkboxnew" > <span>Nenhum</span></label>
	    		</div>
	    	</div>
	    	<div data-row-span="2">
	    		<div data-field-span="1" id="mul_partoforceps_wrap">
	                <label>Quantos partos fórceps?</label>
	                <input type="number" min="1" max="20" class="numeros"  name="mul_partoforceps" id="partoforceps" placeholder="Quantos partos fórceps?" value="<?=verifica($mulher['mul_partoforceps'])?>">
	                <input type="checkbox" id="mul_partoforceps" name="mul_partoforceps" class="checkboxnew"  value=""><label style="float:right;color:#333" for="mul_partoforceps" class="checkboxnew" > <span>Nenhum</span></label>
	    		</div>
		    
		        <div data-field-span="1"  id="mul_partoprematuro_wrap">
	                <label>Quantos partos prematuro?</label>
	                <input type="number" min="1" max="20" class="numeros"  name="mul_partoprematuro" id="partoprematuro" placeholder="Quantos partos prematuro?" value="<?=verifica($mulher['mul_partoprematuro'])?>">
	                <input type="checkbox" id="mul_partoprematuro" name="mul_partoprematuro" class="checkboxnew"  value=""><label style="float:right;color:#333" for="mul_partoprematuro" class="checkboxnew" > <span>Nenhum</span></label>
	    		</div>
	    	</div>
		    <div data-row-span="2">
	    		<div data-field-span="1" id="mul_partotermo_wrap">
	                <label>Quantos partos a termo?</label>
	                <input type="number" min="1" max="20" class="numeros"  name="mul_partotermo" id="partotermo" placeholder="Quantos partos a termo?" value="<?=verifica($mulher['mul_partotermo'])?>">
	                <input type="checkbox" id="mul_partotermo" name="mul_partotermo" class="checkboxnew"  value=""><label style="float:right;color:#333" for="mul_partotermo" class="checkboxnew" > <span>Nenhum</span></label>
	    		</div>
	    		<div data-field-span="1" id="mul_postermo_wrap">
	                <label>Quantos partos pós termo?</label>
	                <input type="number" min="1" max="20" class="numeros" name="mul_postermo" id="postermo" placeholder="Quantos partos pós termo?"  value="<?=verifica($mulher['mul_postermo'])?>">
	                <input type="checkbox" id="mul_postermo" name="mul_postermo" class="checkboxnew" value=""><label style="float:right;color:#333" for="mul_postermo" class="checkboxnew" > <span>Nenhum</span></label>
	    		</div>
		    </div>
		</fieldset>
	</fieldset>
	<input type="submit" name="next" class="button-green" value="Salvar e Continuar" />
</form>