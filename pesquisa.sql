-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Set-2015 às 19:03
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pesquisa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anabolizantes`
--

CREATE TABLE IF NOT EXISTS `anabolizantes` (
  `anab_id` int(11) NOT NULL AUTO_INCREMENT,
  `ana_ja_usou` varchar(255) NOT NULL,
  `ana_atualmente_usa` varchar(255) NOT NULL,
  `ana_winstrol` varchar(255) NOT NULL,
  `ana_dianabol` varchar(255) NOT NULL,
  `ana_deca` varchar(255) NOT NULL,
  `ana_oxandrin` varchar(255) NOT NULL,
  `ana_depo` varchar(255) NOT NULL,
  `ana_equipoise` varchar(255) NOT NULL,
  `ana_durateston` varchar(255) NOT NULL,
  `ana_outros_anabolizantes` varchar(255) NOT NULL,
  `ana_tempo_usou` varchar(255) NOT NULL,
  `ana_finalidade` varchar(255) NOT NULL,
  `ana_outras_finalidade` varchar(255) NOT NULL,
  `ana_usa_medicamento` varchar(255) NOT NULL,
  `ana_efedrina` varchar(255) NOT NULL,
  `ana_insulina` varchar(255) NOT NULL,
  `ana_hepatoprotetor` varchar(255) NOT NULL,
  `ana_clembuterol` varchar(255) NOT NULL,
  `ana_diuretico` varchar(255) NOT NULL,
  `ana_tamoxifeno` varchar(255) NOT NULL,
  `ana_gh` varchar(255) NOT NULL,
  `ana_outros_medicamentos` varchar(255) NOT NULL,
  `ana_sintomas` varchar(255) NOT NULL,
  `ana_pressao` varchar(255) NOT NULL,
  `ana_nausea` varchar(255) NOT NULL,
  `ana_espinhas` varchar(255) NOT NULL,
  `ana_diminuicao_libido` varchar(255) NOT NULL,
  `ana_depressao` varchar(255) NOT NULL,
  `ana_dependencia` varchar(255) NOT NULL,
  `ana_aumento_libido` varchar(255) NOT NULL,
  `ana_humor` varchar(255) NOT NULL,
  `ana_testiculos` varchar(255) NOT NULL,
  `ana_outros_sintomas` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`anab_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ansiedade`
--

CREATE TABLE IF NOT EXISTS `ansiedade` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `ans_domencia` varchar(255) NOT NULL,
  `ans_calor` varchar(255) NOT NULL,
  `ans_tremores_pernas` varchar(255) NOT NULL,
  `ans_relaxar` varchar(255) NOT NULL,
  `ans_medo_pior` varchar(255) NOT NULL,
  `ans_tonto` varchar(255) NOT NULL,
  `ans_palpitacao` varchar(255) NOT NULL,
  `ans_equilibrio` varchar(255) NOT NULL,
  `ans_ateroorizado` varchar(255) NOT NULL,
  `ans_nervoso` varchar(255) NOT NULL,
  `ans_sufocacao` varchar(255) NOT NULL,
  `ans_tremores_mao` varchar(255) NOT NULL,
  `ans_tremulo` varchar(255) NOT NULL,
  `ans_medo_controle` varchar(255) NOT NULL,
  `ans_respirar` varchar(255) NOT NULL,
  `ans_morrer` varchar(255) NOT NULL,
  `ans_assustado` varchar(255) NOT NULL,
  `ans_ingestaro` varchar(255) NOT NULL,
  `ans_desmao` varchar(255) NOT NULL,
  `ans_afogueado` varchar(255) NOT NULL,
  `ans_suor` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade_física`
--

CREATE TABLE IF NOT EXISTS `atividade_física` (
  `atv_id` int(11) NOT NULL AUTO_INCREMENT,
  `atv_dias` varchar(255) NOT NULL,
  `atv_tmpdia` varchar(255) NOT NULL,
  `atv_diasmod` varchar(255) NOT NULL,
  `atv_tmpdiamod` varchar(255) NOT NULL,
  `atv_diasrig` varchar(255) NOT NULL,
  `atv_tmpdiarig` varchar(255) NOT NULL,
  `atv_tmpsent` varchar(255) NOT NULL,
  `atv_tmpsentfds` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`atv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_de_depressao`
--

CREATE TABLE IF NOT EXISTS `avaliacao_de_depressao` (
  `avdp_id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_triste` varchar(255) NOT NULL,
  `dep_futuro` varchar(255) NOT NULL,
  `dep_frac` varchar(255) NOT NULL,
  `dep_prazer` varchar(255) NOT NULL,
  `dep_culpado` varchar(255) NOT NULL,
  `dep_punido` varchar(255) NOT NULL,
  `dep_decepcionado` varchar(255) NOT NULL,
  `dep_pior_outros` varchar(255) NOT NULL,
  `dep_matar` varchar(255) NOT NULL,
  `dep_choro` varchar(255) NOT NULL,
  `dep_irritado` varchar(255) NOT NULL,
  `dep_interesse` varchar(255) NOT NULL,
  `dep_decisoes` varchar(255) NOT NULL,
  `dep_pior_antes` varchar(255) NOT NULL,
  `dep_trabalhar_antes` varchar(255) NOT NULL,
  `dep_dormir_brm` varchar(255) NOT NULL,
  `dep_cansado` varchar(255) NOT NULL,
  `dep_apetite` varchar(255) NOT NULL,
  `dep_peso` varchar(255) NOT NULL,
  `dep_perder_peso` varchar(255) NOT NULL,
  `dep_preocupado_saude` varchar(255) NOT NULL,
  `dep_mudanca_sexo` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`avdp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_stress`
--

CREATE TABLE IF NOT EXISTS `avaliacao_stress` (
  `avstres_id` int(11) NOT NULL AUTO_INCREMENT,
  `sts_tensao` varchar(255) NOT NULL,
  `sts_hiperacidez` varchar(255) NOT NULL,
  `sts_esquecimento` varchar(255) NOT NULL,
  `sts_irritabilidade` varchar(255) NOT NULL,
  `sts_vontadesumir` varchar(255) NOT NULL,
  `sts_incompetencia` varchar(255) NOT NULL,
  `sts_umassunto` varchar(255) NOT NULL,
  `sts_ansiedade` varchar(255) NOT NULL,
  `sts_sono` varchar(255) NOT NULL,
  `sts_cansaco_levantar` varchar(255) NOT NULL,
  `sts_competencia_baixa` varchar(255) NOT NULL,
  `sts_nada_vale` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`avstres_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliação_corporal`
--

CREATE TABLE IF NOT EXISTS `avaliação_corporal` (
  `avcp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cop_satisfeito_corpo` varchar(255) NOT NULL,
  `cop_gostaria_magro` varchar(255) NOT NULL,
  `cop_gostaria_gordo` varchar(255) NOT NULL,
  `cop_ver_espelho` varchar(255) NOT NULL,
  `cop_gostaria_ser` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`avcp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_mae`
--

CREATE TABLE IF NOT EXISTS `dados_mae` (
  `mae_id` int(11) NOT NULL AUTO_INCREMENT,
  `mae_nome` varchar(255) NOT NULL,
  `mae_datanascimento` varchar(255) NOT NULL,
  `mae_escolaridade` varchar(255) NOT NULL,
  `mae_profissao` varchar(255) NOT NULL,
  `mae_trabalhaatualmente` varchar(255) NOT NULL,
  `mae_datahora` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`mae_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pai`
--

CREATE TABLE IF NOT EXISTS `dados_pai` (
  `pai_id` int(11) NOT NULL AUTO_INCREMENT,
  `pai_nome` varchar(255) NOT NULL,
  `pai_datanascimento` varchar(255) NOT NULL,
  `pai_escolaridade` varchar(255) NOT NULL,
  `pai_profissao` varchar(255) NOT NULL,
  `pai_trabalhaatualmente` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`pai_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pessoais`
--

CREATE TABLE IF NOT EXISTS `dados_pessoais` (
  `pes_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pes_nomecompleto` varchar(255) NOT NULL,
  `pes_sexo` enum('m','f') NOT NULL,
  `pes_datanascimento` date NOT NULL,
  `pes_naturalidade` varchar(255) NOT NULL,
  `pes_email` varchar(255) NOT NULL,
  `pes_escolaridade` varchar(255) NOT NULL,
  `pes_estudouem` varchar(255) NOT NULL,
  `pes_trabalha` enum('s','n') NOT NULL,
  `pes_hosrassemtrab` varchar(255) NOT NULL,
  `pes_estadocivil` varchar(255) NOT NULL,
  `pes_comquemvive` varchar(255) NOT NULL,
  `pes_sangue` varchar(255) NOT NULL,
  `pes_rh` varchar(255) NOT NULL,
  `pes_pesonascer` varchar(255) NOT NULL,
  `pes_atividadefisica` enum('s','n') NOT NULL,
  `pes_quaisatividades` varchar(255) NOT NULL,
  `pes_classpai` varchar(255) NOT NULL,
  `pes_classmae` varchar(255) NOT NULL,
  `pes_classeu` varchar(255) NOT NULL,
  `pes_datahora` datetime NOT NULL,
  PRIMARY KEY (`pes_id`),
  UNIQUE KEY `pes_email` (`pes_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `dados_pessoais`
--

INSERT INTO `dados_pessoais` (`pes_id`, `pes_nomecompleto`, `pes_sexo`, `pes_datanascimento`, `pes_naturalidade`, `pes_email`, `pes_escolaridade`, `pes_estudouem`, `pes_trabalha`, `pes_hosrassemtrab`, `pes_estadocivil`, `pes_comquemvive`, `pes_sangue`, `pes_rh`, `pes_pesonascer`, `pes_atividadefisica`, `pes_quaisatividades`, `pes_classpai`, `pes_classmae`, `pes_classeu`, `pes_datahora`) VALUES
(29, 'Filipe Marins', 'm', '1993-04-07', 'Soteropolitano', 'lipe_bm@yahoo.com.br', 'nenhuma', 'Escola Pública', 's', 'Menos de 20 horas', 'Solteiro', 'Sozinho - Cônjuge - Irmão(s)', 'Não se informar', 'Não sei informar', '11', 's', 'Ginástica - Musculação - Artes Marciais', 'Magro', 'Normal', 'Gordo', '2015-07-24 07:13:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pessoais_mulher`
--

CREATE TABLE IF NOT EXISTS `dados_pessoais_mulher` (
  `mul_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mul_qtdgestao` int(255) NOT NULL,
  `mul_qtdfilhos` int(255) NOT NULL,
  `mul_probgestacional` varchar(255) NOT NULL,
  `mul_partosnormais` int(255) NOT NULL,
  `mul_partoscesario` int(255) NOT NULL,
  `mul_partoforceps` int(255) NOT NULL,
  `mul_partoprematuro` int(255) NOT NULL,
  `mul_partotermo` int(255) NOT NULL,
  `mul_postermo` int(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`mul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doencas_pre_existentes`
--

CREATE TABLE IF NOT EXISTS `doencas_pre_existentes` (
  `dpre_id` int(11) NOT NULL AUTO_INCREMENT,
  `pre_dataex` varchar(255) NOT NULL,
  `pre_excom` varchar(255) NOT NULL,
  `pre_datateste` varchar(255) NOT NULL,
  `pre_testecom` varchar(255) NOT NULL,
  `pre_medicdores` varchar(255) NOT NULL,
  `pre_medicdorm` varchar(255) NOT NULL,
  `pre_medicpress` varchar(255) NOT NULL,
  `pre_medicans` varchar(255) NOT NULL,
  `pre_medicpsi` varchar(255) NOT NULL,
  `pre_medicalerg` varchar(255) NOT NULL,
  `pre_medicasm` varchar(255) NOT NULL,
  `pre_mediccor` varchar(255) NOT NULL,
  `pre_medicdiab` varchar(255) NOT NULL,
  `pre_medicnatu` varchar(255) NOT NULL,
  `pre_medicoutros` varchar(255) NOT NULL,
  `pre_medicoutrosesp` varchar(255) NOT NULL,
  `pre_pai` varchar(255) NOT NULL,
  `pre_mae` varchar(255) NOT NULL,
  `pre_irmao` varchar(255) NOT NULL,
  `pre_irma` varchar(255) NOT NULL,
  `pre_avo` varchar(255) NOT NULL,
  `pre_coluna` varchar(255) NOT NULL,
  `pre_articulacao` varchar(255) NOT NULL,
  `pre_hernia` varchar(255) NOT NULL,
  `pre_rim` varchar(255) NOT NULL,
  `pre_pescoco` varchar(255) NOT NULL,
  `pre_pulmao` varchar(255) NOT NULL,
  `pre_olhos` varchar(255) NOT NULL,
  `pre_outras` varchar(255) NOT NULL,
  `pre_outrasesp` varchar(255) NOT NULL,
  `pre_alcoolismo` varchar(255) NOT NULL,
  `pre_problema_renal` varchar(255) NOT NULL,
  `pre_enfisema` varchar(255) NOT NULL,
  `pre_anemia` varchar(255) NOT NULL,
  `pre_dor_pescoco` varchar(255) NOT NULL,
  `pre_dor_costas` varchar(255) NOT NULL,
  `pre_visao` varchar(255) NOT NULL,
  `pre_flebite` varchar(255) NOT NULL,
  `pre_artrite` varchar(255) NOT NULL,
  `pre_cancer` varchar(255) NOT NULL,
  `pre_tireoide` varchar(255) NOT NULL,
  `pre_hipoglicemia` varchar(255) NOT NULL,
  `pre_concussao` varchar(255) NOT NULL,
  `pre_defeito_congenito` varchar(255) NOT NULL,
  `pre_sangramento` varchar(255) NOT NULL,
  `pre_diabete` varchar(255) NOT NULL,
  `pre_doenca_mental` varchar(255) NOT NULL,
  `pre_epilepsia` varchar(255) NOT NULL,
  `pre_asma` varchar(255) NOT NULL,
  `pre_obesidade` varchar(255) NOT NULL,
  `pre_gota` varchar(255) NOT NULL,
  `pre_audicao` varchar(255) NOT NULL,
  `pre_bronquite` varchar(255) NOT NULL,
  `pre_avc` varchar(255) NOT NULL,
  `pre_hipertensao` varchar(255) NOT NULL,
  `pre_cirrose` varchar(255) NOT NULL,
  `pre_ulcera` varchar(255) NOT NULL,
  `pre_hiperlipidemia` varchar(255) NOT NULL,
  `pre_outras_doencas` varchar(255) NOT NULL,
  `pre_outras_doencas_especifique` varchar(255) NOT NULL,
  `pre_anticoagulante` varchar(255) NOT NULL,
  `pre_para_epilepsia` varchar(255) NOT NULL,
  `pre_nitroglicemia` varchar(255) NOT NULL,
  `pre_para_diabete` varchar(255) NOT NULL,
  `pre_para_coracao` varchar(255) NOT NULL,
  `pre_para_estomago` varchar(255) NOT NULL,
  `pre_para_pressao` varchar(255) NOT NULL,
  `pre_diuretico` varchar(255) NOT NULL,
  `pre_outros_medicamentos` varchar(255) NOT NULL,
  `pre_outros_medicamentos_especifique` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`dpre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `drogas_ilícitas`
--

CREATE TABLE IF NOT EXISTS `drogas_ilícitas` (
  `drogil_id` int(11) NOT NULL AUTO_INCREMENT,
  `dro_uso_drogas` varchar(255) NOT NULL,
  `dro_uso_atualmente` varchar(255) NOT NULL,
  `dro_maconha` varchar(255) NOT NULL,
  `dro_cocaina` varchar(255) NOT NULL,
  `dro_crack` varchar(255) NOT NULL,
  `dro_ecstasy` varchar(255) NOT NULL,
  `dro_lsd` varchar(255) NOT NULL,
  `dro_inalantes` varchar(255) NOT NULL,
  `dro_heroina` varchar(255) NOT NULL,
  `dro_barbituricos` varchar(255) NOT NULL,
  `dro_morfina` varchar(255) NOT NULL,
  `dro_skank` varchar(255) NOT NULL,
  `dro_cogumelo` varchar(255) NOT NULL,
  `dro_anferamina` varchar(255) NOT NULL,
  `dro_cloroformio` varchar(255) NOT NULL,
  `dro_opio` varchar(255) NOT NULL,
  `dro_outras_drogas` varchar(255) NOT NULL,
  `dro_tempo_usa` varchar(255) NOT NULL,
  `dro_sintomas` varchar(255) NOT NULL,
  `dro_pressao` varchar(255) NOT NULL,
  `dro_nausea` varchar(255) NOT NULL,
  `dro_espinhas` varchar(255) NOT NULL,
  `dro_diminuicao_libido` varchar(255) NOT NULL,
  `dro_depressao` varchar(255) NOT NULL,
  `dro_dependencia` varchar(255) NOT NULL,
  `dro_aumento_libido` varchar(255) NOT NULL,
  `dro_humor` varchar(255) NOT NULL,
  `dro_testiculos` varchar(255) NOT NULL,
  `dro_outros_sintomas` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`drogil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `end_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `end_cep` varchar(255) NOT NULL,
  `end_rua` varchar(255) NOT NULL,
  `end_numero` int(255) NOT NULL,
  `end_bairro` varchar(255) NOT NULL,
  `end_cidade` varchar(255) NOT NULL,
  `end_estado` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`end_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`end_id`, `end_cep`, `end_rua`, `end_numero`, `end_bairro`, `end_cidade`, `end_estado`, `pes_id`) VALUES
(24, '46190000', 'Pastor Arthur de Souza Freire', 585, 'Candeias', 'Paramirim', 'BA', 29);

-- --------------------------------------------------------

--
-- Estrutura da tabela `etilismo`
--

CREATE TABLE IF NOT EXISTS `etilismo` (
  `etil_id` int(11) NOT NULL AUTO_INCREMENT,
  `alc_ja_bebeu` varchar(255) NOT NULL,
  `alc_atualmente_bebe` varchar(255) NOT NULL,
  `alc_frequencia` varchar(255) NOT NULL,
  `alc_quantidade` varchar(255) NOT NULL,
  `alc_quantidade_seix` varchar(255) NOT NULL,
  `alc_deixou_beber` varchar(255) NOT NULL,
  `alc_bebe_muito` varchar(255) NOT NULL,
  `alc_parentes_acham` varchar(255) NOT NULL,
  `alc_aa` varchar(255) NOT NULL,
  `alc_perdeu_bebida` varchar(255) NOT NULL,
  `alc_problema_trabalho` varchar(255) NOT NULL,
  `alc_obrigacoes` varchar(255) NOT NULL,
  `alc_tremores` varchar(255) NOT NULL,
  `alc_ajuda` varchar(255) NOT NULL,
  `alc_hospitalizado` varchar(255) NOT NULL,
  `alc_preso_multado` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`etil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `habitos_alimentares`
--

CREATE TABLE IF NOT EXISTS `habitos_alimentares` (
  `hab_id` int(11) NOT NULL AUTO_INCREMENT,
  `hab_comcafmanha` varchar(255) NOT NULL,
  `hab_comlanchemanha` varchar(255) NOT NULL,
  `hab_comalmoco` varchar(255) NOT NULL,
  `hab_comlanchetarde` varchar(255) NOT NULL,
  `hab_comjantar` varchar(255) NOT NULL,
  `hab_comlanchenoite` varchar(255) NOT NULL,
  `hab_ondcafmanha` varchar(255) NOT NULL,
  `hab_ondlanchemanha` varchar(255) NOT NULL,
  `hab_ondalmoco` varchar(255) NOT NULL,
  `hab_ondlanchetarde` varchar(255) NOT NULL,
  `hab_ondjantar` varchar(255) NOT NULL,
  `hab_ondlanchenoite` varchar(255) NOT NULL,
  `hab_maiondlanch` varchar(255) NOT NULL,
  `hab_carneboi` varchar(255) NOT NULL,
  `hab_frango` varchar(255) NOT NULL,
  `hab_carnoproco` varchar(255) NOT NULL,
  `hab_peixe` varchar(255) NOT NULL,
  `hab_linguica` varchar(255) NOT NULL,
  `hab_leite` varchar(255) NOT NULL,
  `hab_ovos` varchar(255) NOT NULL,
  `hab_feijao` varchar(255) NOT NULL,
  `hab_outleg` varchar(255) NOT NULL,
  `hab_frutas` varchar(255) NOT NULL,
  `hab_suconat` varchar(255) NOT NULL,
  `hab_hortalicas` varchar(255) NOT NULL,
  `hamburguer` varchar(255) NOT NULL,
  `hab_batatafrita` varchar(255) NOT NULL,
  `hab_batata` varchar(255) NOT NULL,
  `hab_margman` varchar(255) NOT NULL,
  `hab_manteiga` varchar(255) NOT NULL,
  `hab_paosal` varchar(255) NOT NULL,
  `hab_bolo` varchar(255) NOT NULL,
  `hab_biscoitorech` varchar(255) NOT NULL,
  `hab_biscotosalg` varchar(255) NOT NULL,
  `hab_salgadoass` varchar(255) NOT NULL,
  `hab_salgadofrito` varchar(255) NOT NULL,
  `hab_macarrao` varchar(255) NOT NULL,
  `hab_pizza` varchar(255) NOT NULL,
  `hab_outmassas` varchar(255) NOT NULL,
  `hab_acucar` varchar(255) NOT NULL,
  `hab_chocolate` varchar(255) NOT NULL,
  `hab_bombom` varchar(255) NOT NULL,
  `hab_balas` varchar(255) NOT NULL,
  `hab_gelgomcre` varchar(255) NOT NULL,
  `hab_sorvetes` varchar(255) NOT NULL,
  `hab_outdoces` varchar(255) NOT NULL,
  `hab_sucosindu` varchar(255) NOT NULL,
  `hab_refrigerantes` varchar(255) NOT NULL,
  `hab_vcachacome` varchar(255) NOT NULL,
  `hab_periodcome` varchar(255) NOT NULL,
  `hab_alergiali` varchar(255) NOT NULL,
  `hab_tipodieta` varchar(255) NOT NULL,
  `hab_motivodieta` varchar(255) NOT NULL,
  `hab_infodieta` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`hab_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `odontologico`
--

CREATE TABLE IF NOT EXISTS `odontologico` (
  `odont_id` int(11) NOT NULL AUTO_INCREMENT,
  `odt_dataex` varchar(255) NOT NULL,
  `odt_excom` varchar(255) NOT NULL,
  `odt_nfoi_dentista` varchar(255) NOT NULL,
  `odt_nfoi_motivo` varchar(255) NOT NULL,
  `odt_carie_familia` varchar(255) NOT NULL,
  `odt_ganglios_dolorido` varchar(255) NOT NULL,
  `odt_sangra_extrai` varchar(255) NOT NULL,
  `odt_dores_nuca` varchar(255) NOT NULL,
  `odt_zumbido` varchar(255) NOT NULL,
  `odt_abrir_boca` varchar(255) NOT NULL,
  `odt_estala_abre` varchar(255) NOT NULL,
  `odt_estala_come` varchar(255) NOT NULL,
  `odt_anestesia` varchar(255) NOT NULL,
  `odt_reacao_anestesia` varchar(255) NOT NULL,
  `odt_dor_dente` varchar(255) NOT NULL,
  `odt_retencao_alimento` varchar(255) NOT NULL,
  `odt_mastiga_lado` varchar(255) NOT NULL,
  `odt_qual_lado` varchar(255) NOT NULL,
  `odt_dor_ouvido` varchar(255) NOT NULL,
  `odt_refrigerante` varchar(255) NOT NULL,
  `odt_gengiva` varchar(255) NOT NULL,
  `odt_protese` varchar(255) NOT NULL,
  `odt_perdeu_dente` varchar(255) NOT NULL,
  `odt_perdeu_dente_lado` varchar(255) NOT NULL,
  `odt_cirurgia_pescoco` varchar(255) NOT NULL,
  `odt_aparelho` varchar(255) NOT NULL,
  `odt_usou_aparelho` varchar(255) NOT NULL,
  `odt_usa_implate` varchar(255) NOT NULL,
  `odt_canal` varchar(255) NOT NULL,
  `odt_experiencia` varchar(255) NOT NULL,
  `odt_qual_experiencia` varchar(255) NOT NULL,
  `odt_ingere_alimentos` varchar(255) NOT NULL,
  `odt_roi_unhas` varchar(255) NOT NULL,
  `odt_respira_boca` varchar(255) NOT NULL,
  `odt_chimarrao` varchar(255) NOT NULL,
  `odt_chupa_bico_dedo` varchar(255) NOT NULL,
  `odt_morde_caneta_lapis` varchar(255) NOT NULL,
  `odt_range` varchar(255) NOT NULL,
  `odt_apertar_boca` varchar(255) NOT NULL,
  `odt_fio_dental` varchar(255) NOT NULL,
  `odt_quantas_fio` varchar(255) NOT NULL,
  `odt_escovar` varchar(255) NOT NULL,
  `odt_tipo_escova` varchar(255) NOT NULL,
  `odt_quantas_escova` varchar(255) NOT NULL,
  `odt_escova_interdental` varchar(255) NOT NULL,
  `odt_palito` varchar(255) NOT NULL,
  `odt_creme` varchar(255) NOT NULL,
  `odt_fluor_gel` varchar(255) NOT NULL,
  `odt_fluor_creme` varchar(255) NOT NULL,
  `odt_fluor_bochecho` varchar(255) NOT NULL,
  `odt_fluor_agua` varchar(255) NOT NULL,
  `odt_info` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`odont_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualidade_de_vida_pedsql`
--

CREATE TABLE IF NOT EXISTS `qualidade_de_vida_pedsql` (
  `qal_id` int(11) NOT NULL AUTO_INCREMENT,
  `qal_difand` varchar(255) NOT NULL,
  `qal_difcor` varchar(255) NOT NULL,
  `qal_difpra` varchar(255) NOT NULL,
  `qal_diflev` varchar(255) NOT NULL,
  `qal_difban` varchar(255) NOT NULL,
  `qal_difdom` varchar(255) NOT NULL,
  `qal_dor` varchar(255) NOT NULL,
  `qal_energia` varchar(255) NOT NULL,
  `qal_divconv` varchar(255) NOT NULL,
  `qal_jovamigos` varchar(255) NOT NULL,
  `qal_jovimpl` varchar(255) NOT NULL,
  `qal_jovidade` varchar(255) NOT NULL,
  `qal_dificilidade` varchar(255) NOT NULL,
  `qal_ataula` varchar(255) NOT NULL,
  `qal_esque` varchar(255) NOT NULL,
  `qal_difiacomp` varchar(255) NOT NULL,
  `qal_faltrabalhobem` varchar(255) NOT NULL,
  `qal_faltrabalhohos` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`qal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualidade_de_vida_whoqol`
--

CREATE TABLE IF NOT EXISTS `qualidade_de_vida_whoqol` (
  `qualw_id` int(11) NOT NULL AUTO_INCREMENT,
  `who_avalia` varchar(255) NOT NULL,
  `who_satsaude` varchar(255) NOT NULL,
  `who_dorfisica` varchar(255) NOT NULL,
  `who_medicamento` varchar(255) NOT NULL,
  `who_apvida` varchar(255) NOT NULL,
  `who_sentidovida` varchar(255) NOT NULL,
  `who_concentrar` varchar(255) NOT NULL,
  `who_seguro` varchar(255) NOT NULL,
  `who_saudavel` varchar(255) NOT NULL,
  `who_energia` varchar(255) NOT NULL,
  `who_apfisica` varchar(255) NOT NULL,
  `who_dinheirosuf` varchar(255) NOT NULL,
  `who_dispdiadia` varchar(255) NOT NULL,
  `who_opolazer` varchar(255) NOT NULL,
  `who_locomover` varchar(255) NOT NULL,
  `who_sono` varchar(255) NOT NULL,
  `who_diadia` varchar(255) NOT NULL,
  `who_trabalho` varchar(255) NOT NULL,
  `who_satisf` varchar(255) NOT NULL,
  `who_satisfpessoais` varchar(255) NOT NULL,
  `who_satisfvida` varchar(255) NOT NULL,
  `who_satisfamigos` varchar(255) NOT NULL,
  `who_satismora` varchar(255) NOT NULL,
  `who_satisfsaude` varchar(255) NOT NULL,
  `who_saitsftransporte` varchar(255) NOT NULL,
  `who_frequencianeg` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`qualw_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `socio-economico`
--

CREATE TABLE IF NOT EXISTS `socio-economico` (
  `soc_id` int(11) NOT NULL AUTO_INCREMENT,
  `soc_rendafamiliar` varchar(255) NOT NULL,
  `soc_contri` varchar(255) NOT NULL,
  `soc_sustentadas` varchar(255) NOT NULL,
  `soc_suacontri` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`soc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabagismo`
--

CREATE TABLE IF NOT EXISTS `tabagismo` (
  `tab_id` int(11) NOT NULL AUTO_INCREMENT,
  `tab_fumou` varchar(255) NOT NULL,
  `tab_cigarro` varchar(255) NOT NULL,
  `tab_cachimbo` varchar(255) NOT NULL,
  `tab_charuto` varchar(255) NOT NULL,
  `tab_narguile` varchar(255) NOT NULL,
  `tab_atualmente_fuma` varchar(255) NOT NULL,
  `tab_tempo_fumou` varchar(255) NOT NULL,
  `tab_frequencia` varchar(255) NOT NULL,
  `tab_media_fuma` varchar(255) NOT NULL,
  `pes_id` int(11) NOT NULL,
  PRIMARY KEY (`tab_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
