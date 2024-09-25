<?php if ($detect->isMobile()) {
    require_once 'inc/rodape/botoes-rodape-mobile.php';
} ?>
<footer id="footer">

    <div class="top">
        <div class="logoFooter">
            <a href="<?= $url ?>" aria-label="Logo">
                <img src="assets/truckNorth/logo.webp" alt="Logo" title="Logo">
            </a>
        </div>
        <div class="menuFooter">
            <h3>Menu</h3>
            <ul>
                <li><a href="<?= $url ?>">Home</a></li>
                <li><a href="#quem-somos">Quem Somos</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="mapa-site.php">Mapa do Site</a></li>
            </ul>

        </div>
        <div class="contactFooter">
            <h3>Contato</h3>
            <ul>
                <li><a href="https://www.google.com/maps/embed?pb=!4v1715990562340!6m8!1m7!1sr78U6qZQTuGbShyfxSHxWA!2m2!1d-23.47207089966951!2d-46.57021825796271!3f319.15!4f0!5f0.7820865974627469"
                        target="_blank"><?= $rua ?>, <?= $bairro ?> <br> <?= $cidadeUF ?></a></li>
                <!-- <li>
                    <a href="mailto:<?= $email ?>" target="_blank">
                        <img class="icon" src="assets/cleansweep/envelope.webp" alt=""><?= $email ?>
                    </a>
                </li> -->
                <li>
                    <a href="tel:<?= $telefone ?>" target="_blank">
                        <img class="icon" src="assets/truckNorth/telefone.webp" alt=""><?= $ddd . $telefone ?>
                    </a>
                </li>
                <li><a href="<?= $linkWhatsapp ?>" target="_blank">
                        <img class="icon" src="assets/truckNorth/whatsapp.webp" alt=""><?= $ddd . $whatsapp ?></a>
                </li>

            </ul>
        </div>

    </div>

    <div class="bottomRowFooter">
        <p>Copyright © 2024 Truck North. Todos os direitos reservados</p>
        <!-- <div class="footerSelos">
            <a rel="nofollow" href="http://validator.w3.org/check?uri=<?= $url . $nomePagina ?>" target="_blank">
                <img src="assets/selos/w3c-html.webp" alt="W3C HTML">
            </a>
            <a rel="nofollow" href="http://jigsaw.w3.org/css-validator/validator?uri=<?= $url . $nomePagina ?>" target="_blank">
                <img src="assets/selos/w3c-css.webp" alt="W3C CSS">
            </a>
            <a rel="nofollow" href="https://developers.google.com/speed/pagespeed/insights/?url=<?= $url . $nomePagina; ?>" target="_blank">
                <img src="assets/selos/pagespeed.webp" alt="Pagespeed - Dev">
            </a>
            <?php
            $securityType = explode(':', $url);
            if ($securityType[0] == 'https') {
                ?>
                <a rel="nofollow" href="https://www.sslshopper.com/ssl-checker.html#hostname=<?= $url . $nomePagina; ?>" target="_blank" title="SSL - Certificado de Segurança"><img src="assets/selos/ssl.webp" loading="lazy" alt="ssl"></a>
            <?php
            }
            ?>
        </div> -->
    </div>

    <div class="botoes">
        <a href="<?= $linkWhatsapp ?>" target="blank" rel="nofollow">
            <div class="whatsapp-icon-fix">
                <img src="assets/selos/WhatsApp.webp" width="40" height="40" alt="whatsapp-imagem" loading="lazy"
                    class="img-whats">
            </div>
        </a>
        <a href="#" class="voltar-para-o-topo"><span style="display: none;">.</span></a>
    </div>

</footer>