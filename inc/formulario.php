<div class="module-formulario">
    <div class="contactIndex">

        <div class="configContactIndex">
            <div class="formIndex">
                <span>Tire suas dúvidas</span>
                <h2 id="contato" style="scroll-margin-top:210px ;">Fale Conosco</h2>
                <p>Contrate a líder em Terceirização</p>
                <form method="POST">
                    <?php require_once 'inc/contato-telefone-email-envio.php' ?>
                    <div class="formCamp">

                        <input type="text" name="nome" onfocus="addCode()" required id="nome">
                        <label for="nome">Nome:</label>
                    </div>
                    <div class="formCamp">
                        <input type="text" onfocus="addCode()" name="empresa" required id="empresa">
                        <label for="empresa">Empresa:</label>
                    </div>
                    <div class="formCamp">
                        <input type="text" onfocus="addCode()" name="email_form" required id="email_form">
                        <label for="email_form">E-mail:</label>
                    </div>
                    <div class="formCamp">
                        <input type="text" onfocus="addCode()" name="telefone_form" required id="telefone_form">
                        <label for="telefone_form">Telefone:</label>
                    </div>
                    <div class="formCamp conheceu">
                        <select name="como_nos_conheceu" onfocus="addCode()" title="como_nos_conheceu" required>
                            <option value="">Como nos conheceu?</option>
                            <option value="Busca do Google" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Busca do Google" ? 'selected' : ''; ?>>
                                Busca do Google</option>
                            <option value="Outros Buscadores" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Outros Buscadores" ? 'selected' : ''; ?>>
                                Outros Buscadores</option>
                            <option value="Links Patrocinados" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Links Patrocinados" ? 'selected' : ''; ?>>
                                Links patrocinados</option>
                            <option value="Facebook" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Facebook" ? 'selected' : ''; ?>>
                                Facebook</option>
                            <option value="Twitter" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Twitter" ? 'selected' : ''; ?>>
                                Twitter</option>
                            <option value="Instagram" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Instagram" ? 'selected' : ''; ?>>
                                Instagram</option>
                            <option value="Indicação de um amigo" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Indicação de um amigo" ? 'selected' : ''; ?>>
                                Indicação de um amigo</option>
                            <option value="Outros" <?php echo isset($como_nos_conheceu) && $como_nos_conheceu === "Outros" ? 'selected' : ''; ?>>
                                Outros</option>
                        </select>
                    </div>
                    <div class="formCamp">
                        <textarea name="mensagem" onfocus="addCode()" cols="30" rows="10" required
                            id="mensagem"></textarea>
                        <label for="mensagem">Mensagem: </label>
                    </div>
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    <input class="submit" type="submit" name="submit" value="Enviar">
                </form>
            </div>
            <div class="mapsIndex">
                <span>Como chegar?</span>
                <h2>Venha até nós</h2>
                <p>Você aqui é muito mais que bem-vindo</p>
                <iframe title="Mapa do Google" loading="lazy" src="<?= $urlGoogleMaps ?>"></iframe>
            </div>
        </div>
    </div>
</div>