<?php
session_start();
include 'inc/configuracoes-gerais.php';

require 'libraries/PHPMailer-master/src/PHPMailer.php';
require 'libraries/PHPMailer-master/src/SMTP.php';
require 'libraries/PHPMailer-master/src/Exception.php';

include('inc/mobile_detect.php');
$detect = new Mobile_Detect;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php
	echo "
			<!--
				Site desenvolvido por $textoCreditos
				$urlCreditos
				Cliente: $nomeSite
			-->";

	if (substr_count($url, 'grouptechs.com.br/') > 0) {
		$indexRobots = "noindex, nofollow";
	} else {
		$indexRobots = "index, follow";
	}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $h1 ?> - <?= $nomeSite ?></title>
	<link rel="canonical" href="<?= $urlCanonical ?>">
	<meta name="robots" content="<?= $indexRobots ?>">
	<meta name="description" content="<?= $description ?>">
	<meta name="keywords" content="<?= $key ?>">
	<?php echo $geolocation; ?>
	<meta name="classification" content="<?= $classificacao ?>">
	<meta property="publisher" content="<?= $textoCreditos ?>">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:region" content="Brasil">
	<meta property="og:title" content="<?= $h1 ?> - <?= $nomeSite ?>">
	<meta property="og:author" content="<?= $nomeSite ?>">
	<meta property="og:url" content="<?= $urlCanonical; ?>">
	<meta property="og:description" content="<?= $description; ?>">
	<meta property="og:updated_time" content="2023-04-28T08:33:00+00:00">
	<meta property="og:site_name" content="<?= $nomeSite ?>">
	<?php if ($IDFacebook != '') { ?>
		<meta property="fb:admins" content="<?php $IDFacebook ?>">
	<?php }	?>

	<?php
	/*--------------------------------------------------------------
	- Mudando o og:type da página
	--------------------------------------------------------------*/
	if (($nomePagina != 'index.php' || $nomePagina != 'index') && $nomePagina != '') {
		//<meta property="article:publisher" content="https://www.mrfmidiadigital.com.br/" >
		echo ('<meta property="og:type" content="article" >' . "\n");

		/*--------------------------------------------------------------
		- Montado as tags baseado na variavel $key
		--------------------------------------------------------------*/
		if ($key != '') {
			$arrayTags = explode(', ', $key);
			foreach ($arrayTags as $tag) {
				echo ('<meta property="article:tag" content="' . $tag . '" >' . "\n");
			}
		}

		/*--------------------------------------------------------------
		- Adicionando o Segmento como seção do artigo
		--------------------------------------------------------------*/
		echo ('<meta property="article:section" content="' . $h1 . '">' . "\n");

		/*--------------------------------------------------------------
		- Pegando informações do arquivo (data de criação e de modificação)
		--------------------------------------------------------------*/
		$path_parts = explode("/", $_SERVER['SCRIPT_NAME']);
		$arquivoPagina = end($path_parts);
		if (file_exists($arquivoPagina)) {
			$dataCriacao = date("Y-m-d\TH:i:sP", filectime($arquivoPagina));
			$dataModificacao = date("Y-m-d\TH:i:sP", filemtime($arquivoPagina));
			echo ('<meta property="article:published_time" content="' . $dataCriacao . '" >' . "\n");
			echo ('<meta property="article:modified_time" content="' . $dataModificacao . '" >' . "\n");
		}
	} else {
		/*--------------------------------------------------------------
		- Mudando se estiver na index
		--------------------------------------------------------------*/
		echo ('<meta property="og:type" content="website" >' . "\n");
	}

	/*--------------------------------------------------------------
	- Meta tags do twitter
	--------------------------------------------------------------*/
	echo ('<meta name="twitter:card" content="summary_large_image">' . "\n");
	echo ('<meta name="twitter:title" content="' . $h1 . ' - ' . $nomeSite . '">' . "\n");
	echo ('<meta name="twitter:description" content="' . $description . '">' . "\n");
	$urlImagem = explode(".php", $urlCanonical);
	$urlImagem = $urlImagem[0] . '-01' . '.webp';
	echo ('<meta name="twitter:image" content="' . $urlImagem . '">' . "\n");
	?>
	<?php

	/*--------------------------------------------------------------
	- Meta tag que exibe miniaturas do lado dos resultados de busca
	--------------------------------------------------------------*/
	if ($nomePagina == 'index.php' || $nomePagina == 'index' || $nomePagina == 'informacoes.php' || $nomePagina == 'informacoes' || $nomePagina == 'contato-telefone-email.php' || $nomePagina == 'contato-telefone-email') {
	?>
		<meta property="og:image" content="assets/logo.webp">
		<meta name="thumbnail" content="assets/logo.webp">
		<?php
	} else {
		if (file_exists($urlImagem)) { ?>
			<meta property="og:image" content="<?php echo 'assets/imgs-contratadas/' . $urlGaleria . '-01' . 'webp' ?>">
			<meta name="thumbnail" content="<?php echo 'assets/imgs-contratadas/' . $urlGaleria . '-01' . 'webp' ?>">
		<?php } else {
		?>
			<meta property="og:image" content="assets/logo.webp">
			<meta name="thumbnail" content="assets/logo.webp">
	<?php
		}
	}
	?>
	<?php
	/*--------------------------------------------------------------
	- Scripts
	--------------------------------------------------------------*/
	require_once("inc/scripts.php");


	/*--------------------------------------------------------------
	- Folhas de Estilo
	--------------------------------------------------------------*/
	?>
	<style>
		<?php
		$pastaExternalCSS = 'css/ExternalCss/';
		$pastaCompiledCss = 'css/CompiledCss/';
		$arquivosCSS = array(
			$pastaCompiledCss . 'Universal.css',
			$pastaCompiledCss . 'PaginasContratadas.css',
			$pastaCompiledCss . 'ContatoTelefoneEmail.css',
			$pastaCompiledCss . 'styles.css',
			$pastaCompiledCss . 'topo.css',
			$pastaCompiledCss . 'contato.css',
			$pastaCompiledCss . 'formulario.css',
			$pastaCompiledCss . 'rodape.css',
			$pastaCompiledCss . 'fonts.css',
			$pastaCompiledCss . 'modal.css',
			$pastaExternalCSS . 'normalize.css',
			$pastaExternalCSS . 'slick-theme.css',
			$pastaExternalCSS . 'slick.css',
		);
		internal($arquivosCSS);
		?>
	</style>

	<?php
	/*--------------------------------------------------------------
	- Scripts
	--------------------------------------------------------------*/
	?>
	<script>
		<?php
		$pastaJS = 'js/';
		$pastaLibs = 'libraries/';

		$arquivosJS = array(
			// Insira os Arquivos JS abaixo (um por linha, mantenha o jQuery sempre em primeiro)
			$pastaLibs . "jquerry/jquery-3.6.0.min.js",
			$pastaLibs . "slick/slick.min.js",
			$pastaJS . "scripts.js",
		);

		foreach ($arquivosJS as $filePath) {
			if ($filePath == $pastaJS . 'scripts.js') {
				$retornaCodigo = file_get_contents($filePath);
				$expressaoJS = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\')\/\/.*))/';
				$retornaCodigo = preg_replace($expressaoJS, '', $retornaCodigo);
				$retornaCodigo = str_replace(array("\n", "\t", "\r", "\n\t"), '', $retornaCodigo);
			} else {
				$retornaCodigo = file_get_contents($filePath);
			}
			echo $retornaCodigo;
		}

		?>
	</script>
	<?php

	/*--------------------------------------------------------------
	- Outros Arquivos Configurações
	--------------------------------------------------------------*/
	?>
	<link rel="shortcut icon" href="<?= $url ?>assets/truckNorth/logo.webp">