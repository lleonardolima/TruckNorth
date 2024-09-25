<?php
$h1           = 'Mapa do site';
$description  = 'Atalhos para todas as páginas deste site...';
$key          = 'Atalhos para as páginas do site, Mapa do site';
require_once('inc/head.php');
?>
</head>

<body>
    <?php
    require_once 'inc/topo/topoPadrao.php';
    require_once 'inc/banners/titulo-pagina.php';
    ?>
    <main>
        <div class="mapa">
            <h1><?= $h1 ?></h1>
            <ul class="lista-mapa-site">
                <?php menu() ?>
            </ul>
            <br> <br>
            <p>Voltar para a <a rel="nofollow" href="index.php" title="Voltar para página inicial">página inicial</a></p>
        </div>
    </main>
    <?php
    require_once 'inc/rodape/rodape-padrao.php';
    ?>
</body>

</html>