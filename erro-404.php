<?php
$h1           = 'Título da Página de Exemplo';
$description  = ''; // Obrigatório
$key          = 'teste, teste2, teste3, teste4'; // Obrigatório
require_once('inc/head.php');
?>
</head>

<body>
	<?php require_once('inc/topo/topoPadrao.php'); ?>
	<main>
		<div class="error-404">
			<h2>Ooops... Error 404</h2>
			<h4>Lamentamos, mas a página que você está procurando não existe.</h4>
			<span> Verifique o endereço digitado e tente novamente ou</span>
			<div class="botao-contato">
				<p><a href="<?= $url ?>" title="<?= $nomeSite ?>">volte para homepage</a></p>
			</div>
		</div>
	</main>
	<?php require_once 'inc/rodape/rodape-padrao.php'; ?>
</body>

</html>