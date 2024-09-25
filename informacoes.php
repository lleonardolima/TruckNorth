<?php
$h1           = 'CleanSweep - Informações';
$description  = 'Na CleanSweep realizamos diversos serviços para melhor atender nossos clientes';
$key          = '';
require_once('inc/head.php');
?>
</head>

<body>
	<?php
	require_once('inc/topo/topoPadrao.php');
	require_once('inc/banners/titulo-pagina.php');
	?>
	<main>
		<div class="infomacoes">
			<div class="cards">
					<?php paginaInformacoes(); ?>		
			</div>
		</div>
		<?php
		require_once('inc/rodape/rodape-padrao.php');
		?>
	</main>
</body>

</html>