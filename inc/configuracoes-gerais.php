<?php
$pastaDominio = "";
$pastaEPagina = explode("/", $_SERVER['PHP_SELF']);
foreach ($pastaEPagina as $element) {
	if (strpos($element, ".") === false) {
		$pastaDominio .= $element . "/";
	}
}
$url = "http://" . $_SERVER['HTTP_HOST'] . $pastaDominio;
include ('funcoes.php');
if (!isset($h1)) {
	$h1 = '';
}
if (!isset($description)) {
	$description = '';
}
if (!isset($key)) {
	$key = '';
}
/*--------------------------------------------------------------
- Configurações Gerais
--------------------------------------------------------------*/
$exibirPreenchimentoObrigatorio = false;
$textoCreditos = '';
$urlCreditos = '';
$nomeSite = 'Truck North';
$slogan = 'Mecânico a Disel';
$classificacao = '';
$ddd = '(11)'; 			/*--- Interior ---*/
$telefone = ' 2242-2316';		/*--- São Paulo ---*/
$linkWhatsapp = 'https://api.whatsapp.com/send?phone=5511947052653'; /*--Use este para Whatsapp API : 55 + DDD + Numero de celular // sem pontos ou barras --*/
$whatsapp = '94705-2653';
$email = '';
$rua = 'Avenida Sanatório, 1487 ';
$bairro = 'Jardim Modelo';
$cidadeUF = 'São Paulo / SP';
$cep = 'CEP: 02238-000';
$urlGoogleMaps = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.679683087596!2d-46.5702723!3d-23.472016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef59439237293%3A0x7f8a51b3016f5faa!2sAv.%20Sanat%C3%B3rio%2C%201487%20-%20Jardim%20Modelo%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002238-000!5e0!3m2!1spt-BR!2sbr!4v1715991047227!5m2!1spt-BR!2sbr";
$AtividadesEmpresa = 'Informações';
$urlAtividadesEmpresa = 'informacoes.php';
$IDFacebook = ''; // http://graph.facebook.com/nome_da_pagina


// Utilize o gerador de tags

/*--------------------------------------------------------------
- Utilizar a Latitude e Longitude do endereço do cliente

* http://www.geo-tag.de/generator/en.html *
--------------------------------------------------------------*/
$geolocation = '
<meta name="geo.region" content="BR-SP">
<meta name="geo.placename" content="S&atilde;o Paulo">
<meta name="geo.position" content="-23.470022;-46.565877">
<meta name="ICBM" content="-23.470022, -46.565877">
';

/*--------------------------------------------------------------
- Ativar e desativar partes do site
--------------------------------------------------------------*/
$exibirBarraLateral = true;
$exibirRegioes = true;
$exibirProdutosRelacionados = true;
$exibirSaibaMaisSobre = true;
$exibirTags = true;
$exibirMaisVisitados = true;
$exibirTextoDireitosAutorais = true;

/*--------------------------------------------------------------
- Configurações de Pastas e URLs
--------------------------------------------------------------*/
$imagensPadrao = 'assets/';
$nomePagina = explode("/", $_SERVER['PHP_SELF']); // com .php
$nomePagina = end($nomePagina);
$urlGaleria = str_replace('.php', '', $nomePagina); // sem .php
// Pega o nome do arquivo/página atual
if ($nomePagina == 'index.php' || '') {
	$nomePagina = '';
	$urlCanonical = $url;
} else {
	$urlCanonical = $url . $nomePagina;
}

/*--------------------------------------------------------------
- Palavras Chaves (Utilizar o gerador)
--------------------------------------------------------------*/



$dataString = '{ 
	"a-melhor-empresa-em-limpeza-de-supermercados.php": "A melhor empresa em limpeza de supermercados",
	"terceirizacao-de-limpeza-em-supermercados-em-sp.php": "Terceirização de Limpeza em Supermercados em SP",
	"terceirizacao-de-office-boy-e-mensageiro.php": "Terceirização de Office Boy e Mensageiro",
	"terceirizacao-de-copeira-executiva-em-sp.php": "Terceirização de Copeira Executiva em SP",
	"copeira-executiva.php": "Copeira Executiva",
	"terceirizacao-de-limpeza-em-hoteis.php": "Terceirização de Limpeza em Hotéis",
	"limpeza-de-supermercados.php": "Limpeza de Supermercados",
	"servicos-terceirizados-com-produtos-e-equipamentos-especializados.php": "Serviços Terceirizados com Produtos e Equipamentos Especializados",
	"terceirizacao-de-copeira-e-camareira.php": "Terceirização de Copeira e Camareira",
	"cobertura-de-profissionais-em-licenca-e-ferias.php": "Cobertura de Profissionais em Licença e Férias",
	"a-melhor-empresa-em-limpeza-de-hoteis.php": "A melhor empresa em limpeza de hotéis",
	"terceirizacao-de-limpeza-em-supermercados.php": "Terceirização de Limpeza em Supermercados",
	"terceirizacao-de-auxiliar-de-limpeza-na-zona-norte.php": "Terceirização de auxiliar de limpeza na zona norte",
	"limpeza-de-supermercados-em-sao-paulo.php": "Limpeza de supermercados em São Paulo",
	"terceirizacao-de-portaria-desarmada-e-controle-de-acesso-em-condominios.php": "Terceirização de Portaria Desarmada e Controle de Acesso em Condomínios",
	"terceirizacao-de-servicos-de-recepcao.php": "Terceirização de Serviços de Recepção",
	"a-melhor-empresa-em-limpeza-de-lojas.php": "A melhor empresa em limpeza de lojas",
	"empresa-especializada-em-limpeza-de-hoteis.php": "Empresa especializada em limpeza de hotéis",
	"empresa-especializada-em-limpeza-de-supermercados.php": "Empresa especializada em limpeza de supermercados",
	"terceirizacao-de-limpeza-em-condominios-na-zona-norte.php": "Terceirização de Limpeza em Condomínios na Zona Norte",
	"limpeza-comercial-na-zona-norte.php": "Limpeza comercial na zona norte",
	"terceirizacao-de-limpeza-em-escritorios-em-sao-paulo.php": "Terceirização de Limpeza em Escritórios em São Paulo",
	"terceirizacao-de-limpeza-em-academia.php": "Terceirização de limpeza em academia",
	"limpeza-de-lojas-em-sao-paulo.php": "Limpeza de lojas em São Paulo",
	"terceirizacao-de-servicos-na-zona-oeste.php": "Terceirização de Serviços na Zona Oeste",
	"terceirizacao-de-servico-de-limpeza-na-zona-oeste.php": "Terceirização de serviço de limpeza na zona oeste",
	"terceirizacao-de-limpeza-em-condominios-em-guarulhos.php": "Terceirização de Limpeza em Condomínios em Guarulhos",
	"terceirizacao-de-auxiliar-de-limpeza-na-zona-sul.php": "Terceirização de auxiliar de limpeza na zona sul",
	"terceirizacao-de-servicos-na-zona-sul.php": "Terceirização de Serviços na Zona Sul",
	"limpeza-terceirizada-na-zona-oeste.php": "Limpeza terceirizada na zona oeste",
	"a-melhor-empresa-em-limpeza-e-conservacao.php": "A melhor empresa em limpeza e conservação",
	"terceirizacao-de-limpeza-em-escritorios-em-sp.php": "Terceirização de Limpeza em Escritórios em SP",
	"limpeza-e-conservacao-de-predios-e-edificios-em-sao-paulo.php": "Limpeza e Conservação de Prédios e Edifícios em São Paulo",
	"terceirizacao-de-servico-de-limpeza-na-zona-sul.php": "Terceirização de serviço de limpeza na zona sul",
	"terceirizacao-de-limpeza-na-zona-oeste.php": "Terceirização de Limpeza na Zona Oeste",
	"terceirizacao-de-limpeza-na-zona-sul.php": "Terceirização de Limpeza na Zona Sul",
	"terceirizacao-de-auxiliar-de-limpeza-na-zona-oeste.php": "Terceirização de auxiliar de limpeza na zona oeste",
	"terceirizacao-de-auxiliar-de-limpeza.php": "Terceirização de Auxiliar de Limpeza",
	"terceirizacao-de-copeira-em-sp.php": "Terceirização de Copeira em SP",
	"terceirizacao-de-limpeza-em-condominios-na-zona-sul.php": "Terceirização de Limpeza em Condomínios na Zona Sul",
	"terceirizacao-de-limpeza-em-escritorios.php": "Terceirização de Limpeza em Escritórios",
	"terceirizacao-de-faxineira-em-sao-paulo.php": "Terceirização de faxineira em São Paulo",
	"terceirizacao-de-servico-de-limpeza-na-zona-norte.php": "Terceirização de serviço de limpeza na zona norte",
	"limpeza-terceirizada-na-zona-sul.php": "Limpeza terceirizada na zona sul",
	"limpeza-e-conservacao-em-guarulhos.php": "Limpeza e Conservação em Guarulhos",
	"limpeza-comercial-terceirizada-na-zona-sul.php": "Limpeza comercial terceirizada na zona sul",
	"limpeza-e-conservacao-em-osasco.php": "Limpeza e Conservação em Osasco",
	"a-melhor-empresa-em-limpeza-de-escritorios.php": "A melhor empresa em limpeza de escritórios",
	"terceirizacao-de-limpeza-em-hospitais-em-sp.php": "Terceirização de Limpeza em Hospitais em SP",
	"terceirizacao-de-limpeza-em-condominios-em-sao-paulo.php": "Terceirização de limpeza em condomínios em São Paulo",
	"terceirizacao-de-limpeza-em-academia-sp.php": "Terceirização de limpeza em academia sp",
	"a-melhor-empresa-em-limpeza-de-escolas.php": "A melhor empresa em limpeza de escolas",
	"servico-de-limpeza-comercial-na-zona-sul.php": "Serviço de Limpeza comercial na zona sul",
	"terceirizacao-de-limpeza-em-condominios-em-sp.php": "Terceirização de Limpeza em Condomínios em SP",
	"terceirizacao-de-servicos-para-supermercados.php": "Terceirização de Serviços para Supermercados",
	"limpeza-e-conservacao-de-condominios-em-sp.php": "Limpeza e Conservação de Condomínios em SP",
	"a-melhor-empresa-em-limpeza-em-condominios.php": "A melhor empresa em limpeza em condomínios",
	"limpeza-e-conservacao-predial-em-sp.php": "Limpeza e Conservação Predial em SP",
	"terceirizacao-de-limpeza-em-condominios-na-zona-oeste.php": "Terceirização de Limpeza em Condomínios na Zona Oeste",
	"linha-de-produtos-de-limpeza-para-venda.php": "Linha de Produtos de Limpeza para Venda",
	"terceirizacao-de-servico-de-copeira.php": "Terceirização de Serviço de Copeira",
	"limpeza-e-conservacao-em-sao-paulo.php": "Limpeza e Conservação em São Paulo",
	"seguranca-desarmado.php": "Segurança Desarmado",
	"empresa-especializada-em-limpeza-de-escolas.php": "Empresa especializada em limpeza de escolas",
	"limpeza-comercial-na-zona-oeste.php": "Limpeza comercial na zona oeste",
	"empresa-especializada-em-limpeza-em-condominios.php": "Empresa especializada em limpeza em condomínios",
	"servicos-terceirizados-de-limpeza.php": "Serviços Terceirizados de Limpeza",
	"terceirizacao-de-limpeza-em-condominios.php": "Terceirização de Limpeza em Condomínios",
	"terceirizacao-de-recepcionista-em-sp.php": "Terceirização de Recepcionista em SP",
	"office-boy.php": "Office Boy",
	"a-melhor-empresa-em-limpeza-terceirizada.php": "A melhor empresa em limpeza terceirizada",
	"servicos-terceirizados-de-limpeza-em-sp.php": "Serviços Terceirizados de Limpeza em SP",
	"cobertura-de-ferias.php": "Cobertura de Férias",
	"limpeza-e-conservacao-de-escolas.php": "Limpeza e Conservação de Escolas",
	"terceirizacao-de-servicos-em-guarulhos.php": "Terceirização de Serviços em Guarulhos",
	"servicos-terceirizados-de-limpeza-em-sao-paulo.php": "Serviços Terceirizados de Limpeza em São Paulo",
	"produtos-de-limpeza-biodegradaveis.php": "Produtos de Limpeza Biodegradáveis",
	"limpeza-e-conservacao-predial.php": "Limpeza e Conservação Predial",
	"limpeza-terceirizada-hospitalar.php": "Limpeza Terceirizada Hospitalar",
	"limpeza-comercial-terceirizada-em-sp.php": "Limpeza comercial terceirizada em SP",
	"limpeza-terceirizada-predial.php": "Limpeza Terceirizada Predial",
	"a-melhor-empresa-de-terceirizacao-em-sao-paulo.php": "A melhor empresa de terceirização em São Paulo",
	"terceirizacao-de-porteiro-em-sp.php": "Terceirização de Porteiro em SP",
	"terceirizacao-de-limpeza-em-sao-paulo.php": "Terceirização de Limpeza em São Paulo",
	"a-melhor-empresa-em-limpeza-de-hospitais.php": "A melhor empresa em limpeza de hospitais",
	"terceirizacao-de-limpeza-em-sp.php": "Terceirização de Limpeza em SP",
	"terceirizacao-servico-de-limpeza-em-sp.php": "Terceirização Serviço de Limpeza em SP",
	"terceirizacao-de-recepcionista.php": "Terceirização de Recepcionista",
	"empresa-especializada-em-limpeza.php": "Empresa especializada em limpeza",
	"terceirizacoes-adicionais.php": "Terceirizações Adicionais",
	"servicos-especializados-para-condominios.php": "Serviços Especializados para Condomínios",
	"terceirizacao-de-servicos-em-osasco.php": "Terceirização de serviços em Osasco",
	"terceirizacao-de-mao-de-obra-temporaria-em-sp.php": "Terceirização de Mão de Obra Temporária em SP",
	"terceirizacao-incluindo-produtos-e-equipamentos.php": "Terceirização Incluindo Produtos e Equipamentos",
	"produtos-para-comercio-e-residencias.php": "Produtos para Comércio e Residências",
	"a-melhor-empresa-em-limpeza-comercial.php": "A melhor empresa em limpeza comercial",
	"limpeza-comercial-em-sp.php": "Limpeza comercial em SP",
	"contratacao-de-mao-de-obra-em-sp.php": "Contratação de Mão de Obra em SP",
	"limpeza-terceirizada-para-condominios.php": "Limpeza Terceirizada para Condomínios",
	"servicos-terceirizados-em-osasco.php": "Serviços Terceirizados em Osasco",
	"empresa-especializada-em-limpeza-terceirizada.php": "Empresa especializada em limpeza terceirizada",
	"terceirizacao-de-portaria-em-sp.php": "Terceirização de Portaria em SP",
	"limpeza-em-academia.php": "Limpeza em academia",
	"terceirizacao-de-servicos-em-sao-paulo.php": "Terceirização de Serviços em São Paulo",
	"limpeza-e-conservacao-em-condominios.php": "Limpeza e Conservação em Condomínios",
	"terceirizacao-de-portaria-e-limpeza.php": "Terceirização de Portaria e Limpeza",
	"terceirizacao-de-mao-de-obra-para-condominios.php": "Terceirização de Mão de Obra para Condomínios",
	"empresas-de-limpeza-e-conservacao-sp.php": "Empresas de Limpeza e Conservação sp",
	"terceirizacao-de-servicos-em-sp.php": "Terceirização de Serviços em SP",
	"terceirizacao-de-limpeza-e-conservacao.php": "Terceirização de Limpeza e Conservação",
	"terceirizacao-de-servicos-de-limpeza-e-conservacao.php": "Terceirização de Serviços de Limpeza e Conservação",
	"contratacao-de-mao-de-obra.php": "Contratação de Mão de Obra",
	"limpeza-e-conservacao-terceirizada.php": "Limpeza e Conservação Terceirizada",
	"empresa-especializada-em-limpeza-e-conservacao.php": "Empresa especializada em limpeza e conservação",
	"terceirizacao-de-servicos-gerais.php": "Terceirização de Serviços Gerais",
	"copeira.php": "Copeira",
	"cobertura-de-ferias-para-condominios.php": "Cobertura de Férias para Condomínios",
	"terceirizacao-de-servicos.php": "Terceirização de Serviços",
	"contratacao-de-servicos-em-sp.php": "Contratação de Serviços em SP",
	"contratacao-de-servico-de-terceiros.php": "Contratação de serviço de Terceiros",
	"auxiliar-de-limpeza.php": "Auxiliar de Limpeza",
	"prestacao-de-servicos-para-condominios.php": "Prestação de Serviços para Condomínios",
	"empresa-de-terceirizacao-de-servicos.php": "Empresa de Terceirização de Serviços",
	"auxiliar-administrativo.php": "Auxiliar administrativo",
	"mao-de-obra-temporaria.php": "Mão de Obra Temporária",
	"porteiro.php": "Porteiro",
	"servicos-terceirizados-em-condominios-e-industrias.php": "Serviços Terceirizados em Condomínios e Industrias",
	"terceirizacao-de-servico-de-limpeza.php": "Terceirização de Serviço de Limpeza",
	"terceirizacao-de-servicos-de-limpeza.php": "Terceirização de Serviços de Limpeza",
	"terceirizacao-de-portaria-em-sao-paulo.php": "Terceirização de Portaria em São Paulo",
	"contratacao-de-servicos.php": "Contratação de Serviços",
	"telefonista.php": "Telefonista",
	"terceirizacao-de-portaria.php": "Terceirização de Portaria",
	"controlador-de-acesso.php": "Controlador de Acesso"
}';


// Convert the string to an associative array
$linkTitlePairs = json_decode($dataString, true);