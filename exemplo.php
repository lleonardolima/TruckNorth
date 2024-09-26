<?php
$h1 = 'Exemplo';
$description = 'Exemplo'; // Obrigatório
$key = 'Exemplo'; // Obrigatório
require_once('inc/head.php');
?>

</head>

<body>
	<?php
	require_once('inc/topo/topoPadrao.php');
	require_once('inc/banners/titulo-pagina.php');
	?>
	<main>
		<div class="wraper-contratadas">
			<div class="info-conteudo-contratadas">
				<div class="info-contratadas">
					<h2>Terceirização de serviço de limpeza na zona oeste</h2>

					<div><?php imgsContratadas(); ?></div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quos aut modi ex quisquam
						facere aliquam minima veritatis! Blanditiis, illum.</p>

					<h3>Lorem ipsum dolor sit amet consectetur.</h3>

					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est deleniti adipisci vero molestiae
						facilis esse, suscipit officiis quas provident nostrum delectus impedit officia quaerat quasi
						quisquam eveniet laudantium tempore inventore consequatur soluta accusamus repellat, cupiditate
						dolor! Id consequuntur natus in?</p>

					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est vitae alias officia facilis labore
						cumque architecto aut tenetur perspiciatis, explicabo aspernatur iure iste iusto. Dicta nisi ab
						voluptate reprehenderit nostrum amet sit quo labore corporis at dolore quisquam ipsa aperiam
						rem, quasi eos est eligendi velit? Perspiciatis quos aperiam illo.</p>

					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore blanditiis ipsam esse
						consequatur nisi nesciunt quis sunt unde repudiandae labore voluptates saepe nobis eum accusamus
						molestias laboriosam, fugit veritatis aperiam, ducimus ea. Ratione dolore eligendi possimus quis
						adipisci voluptatibus aliquam recusandae, blanditiis, eum ipsum, quo autem unde saepe et. Dolor
						illum unde corrupti perferendis nulla temporibus quisquam dolores soluta. Quasi corporis
						temporibus, alias voluptatem dolor illo, quidem numquam dolorum nihil ducimus eum accusamus
						aspernatur aut molestias doloribus id eveniet et!</p>

					<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sed?</h3>

					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non iste necessitatibus commodi
						quisquam consequuntur.</strong>.</p>
				</div>
				<?php require_once('inc/inc-paginas/menu-lateral.php'); ?>
			</div>
			<div class="includes"><?php require_once('inc/inc-paginas/includes-padrao-conteudo.php'); ?></div>
		</div>
		<?php require_once('inc/formulario.php'); ?>
	</main>
	<?php require_once('inc/rodape/rodape-padrao.php'); ?>
</body>

</html>