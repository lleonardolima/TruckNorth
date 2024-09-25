<?php
$h1           = 'CleanSweep - Contatos';
$description  = 'Entre em contato conosco e tire todas as suas dúvidas...';
require_once('inc/head.php');
?>
</head>

<body>
	<?php
	require_once('inc/topo/topoPadrao.php');
	require_once('inc/banners/titulo-pagina.php');
	?>

	<main>
		<div class="formulario-contato-telefone-email">
			<div class="foto-formulario"></div>
			<div class="contato-formulario">
				<h3>Deixe Sua Mensagem</h3>
				<form class="formulario-form" method="POST">
					<?php require_once('inc/contato-telefone-email-envio.php'); ?>
					<div class="box-campos-formulario reCaptchaForm">
						<input onfocus="addCode()" placeholder="Nome" name="nome" type="text" value="<?php echo isset($nome) && !empty($nome) ? $nome : ''; ?>" required>

						<input onfocus="addCode()" placeholder="Empresa" name="empresa" type="text" value="<?php echo isset($empresa) && !empty($empresa) ? $empresa : ''; ?>" required>

						<input onfocus="addCode()" placeholder="(__) ____ ____" name="telefone_form" type="text" maxlength="15" value="<?php echo isset($telefone_form) && !empty($telefone_form) ? $telefone_form : ''; ?>">

						<input onfocus="addCode()" placeholder="Email" name="email_form" type="text" value="<?php echo isset($email_form) && !empty($email_form) ? $email_form : ''; ?>" required>

						<select onfocus="addCode()" name="como_nos_conheceu" required>
							<option value="">Como nos conheceu?</option>
							<option value="Busca do Google" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Busca do Google" ? 'selected' : ''; ?>>Busca do Google</option>
							<option value="Outros Buscadores" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Outros Buscadores" ? 'selected' : ''; ?>>Outros Buscadores</option>
							<option value="Links Patrocinados" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Links Patrocinados" ? 'selected' : ''; ?>>Links patrocinados</option>
							<option value="Facebook" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Facebook" ? 'selected' : ''; ?>>Facebook</option>
							<option value="Twitter" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Twitter" ? 'selected' : ''; ?>>Twitter</option>
							<option value="Google+" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Google+" ? 'selected' : ''; ?>>Google+</option>
							<option value="Indicação de um amigo" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Indicação de um amigo" ? 'selected' : ''; ?>>Indicação de um amigo</option>
							<option value="Outros" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Outros" ? 'selected' : ''; ?>>Outros</option>
						</select>

						<textarea onfocus="addCode()" placeholder="Mensagem" name="mensagem" cols="37" rows="3" required><?php echo isset($mensagem) && !empty($mensagem) ? $mensagem : ''; ?></textarea>

						<input onfocus="addCode()" type="hidden" name="recaptcha_response" id="recaptchaResponse">

						<input onfocus="addCode()" type="submit" name="submit" value="Enviar">
					</div>
				</form>
			</div>
		</div>
		<div class="info-contato-telefone-email">
			<p><img src="assets/cleansweep/telefone.webp" alt="">(011) 2943-1763</p>
			<p><img src="assets/cleansweep/telefone.webp" alt="">(011) 2367-1763</p>
			<p><img src="assets/cleansweep/envelope.webp" alt="">contato@cleansweep.com.br</p>
		</div>
		<div class="mapa-overlay">
			<iframe loading="lazy" width="100" height="380" src="<?php echo $urlGoogleMaps ?>" class="mapa-do-google"></iframe>
		</div>
	</main>
	<?php
	require_once ('inc/rodape/rodape-padrao.php');
	?>
</body>

</html>