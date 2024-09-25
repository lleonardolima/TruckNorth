<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function formatarString($input)
{
    return htmlentities($input);
}

// Email Configuration
$dominio = 'mail.mrfmidiadigital.com.br';
$port = 587;
$emailRemetente = 'enviodedicado@mrfmidiadigital.com.br';
$senhaEmail = 'envioformulario';
$emailContato = 'vinicius.yaslip@gmail.com';
$comcopiaoculta = 'backupmail.yaslip@gmail.com';

if (isset($_POST['submit'])) {
    $quebra_linha = (PHP_OS == "Linux") ? "\n" : "\r\n";
    
    $nome = formatarString($_POST['nome']);
    $empresa = formatarString($_POST['empresa']);
    $email_form = formatarString($_POST['email_form']);
    $telefone_form = formatarString($_POST['telefone_form']);
    $como_nos_conheceu = formatarString($_POST['como_nos_conheceu']);
    $mensagem = formatarString($_POST['mensagem']);
    $assunto = "Contato via Site";
    $date = date("d/m/Y H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];

    $mensagemCurta = strlen($mensagem) >= 500 ? substr($mensagem, 0, 500) : $mensagem;
    $camposFormBackup = array(
        "<h2>$assunto</h2>",
        "<p><strong>Nome:</strong> $nome</p>",
        "<p><strong>Empresa:</strong> $empresa</p>",
        "<p><strong>Email:</strong> $email_form</p>",
        "<p><strong>Telefone:</strong> $telefone_form</p>",
        "<p><strong>Como nos Conheceu:</strong> $como_nos_conheceu</p>",
        "<p><strong>Mensagem:</strong> $mensagemCurta ...</p>",
        "<p><br>Email enviado na data: $date - através do IP: $ip</p>",
        "<p><br>Email do destinatário : $emailContato</p>"
    );
    $camposFormBackupImplode = implode("", $camposFormBackup);
    $campos_codificados = base64_encode($camposFormBackupImplode);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6Lekel0nAAAAAPDOvfVzBJvaTm5EX_XXhEVd236s';
        $recaptcha_response = $_POST['recaptcha_response'];

        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);

        if ($recaptcha->score >= 0.5) {
            $phpmail = new PHPMailer(true);
            try {
                //Server settings
                $phpmail->isSMTP();
                $phpmail->Host = $dominio;
                $phpmail->SMTPAuth = true;
                $phpmail->Username = $emailRemetente;
                $phpmail->Password = $senhaEmail;
                $phpmail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $phpmail->Port = $port;
                $phpmail->CharSet = 'UTF-8';

                //Recipients
                $phpmail->setFrom($emailRemetente, $nome);
                $phpmail->addAddress($emailContato);
                $phpmail->addBCC($comcopiaoculta);
                $phpmail->addReplyTo($email_form, $nome);

                //Content
                $phpmail->isHTML(true);
                $phpmail->Subject = $assunto;
                $phpmail->Body = "<h2>Formulário via site/páginas - $assunto</h2>
                <div style=\"font: 12px calibri, arial, tahoma;\">
                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                <td valign=\"top\" style=\"width: 160px;\">
                <strong>
                Nome: <br>
                Empresa: <br>
                Email: <br>
                Telefone: <br>
                Como nos conheceu?: <br>
                Mensagem: <br>
                </strong>
                </td>
                <td valign=\"top\">
                $nome <br>
                $empresa <br>
                $email_form <br>
                $telefone_form <br>
                $como_nos_conheceu <br>
                </td>
                </tr>
                </table>
                $mensagem <br>
                </div>
                <font color='#666666' size='1'><br><br>Email enviado em: $date - IP: $ip <br> (Enviado via SMTP)</font><br>";

                $phpmail->send();
                echo '<div class="formulario-enviado">Email Enviado com Sucesso!</div>';

                // Save backup
                ?>
                <script src="https://www.yaslip.com.br/ferramenta/scripts/jquery.min.js"></script>
                <script>
                    var vNome = '<?= $assunto ?>';
                    var vUrl = '<?= $url ?>';
                    var vMsg = '<?= $campos_codificados ?>';
                    $.ajax({
                        url: 'https://www.yaslip.com.br/ferramenta/models/salvarbackup.php',
                        type: 'POST',
                        data: {
                            'nome': vNome,
                            'endereco': vUrl,
                            'mensagem': vMsg
                        },
                        beforeSend: function() {
                            console.log('Enviando email ... ... ...');
                        }
                    }).done(function(resp) {
                        console.log(`Email enviado com sucesso logado! \n ${resp}`);
                    }).fail(function(e, textStatus, msg) {
                        console.log(`Erro... \n ${msg} \n ${e} \n ${textStatus}`);
                    });
                </script>
                <?php
            } catch (Exception $e) {
                echo "Erro ao enviar email: {$phpmail->ErrorInfo}";
            }
        } else {
            echo ('<div class="erro-captcha">Falha na verificação do reCAPTCHA</div>');
        }
    } else {
        echo "<script>alert('Por favor preencha todos os campos do formulário!')</script>";
    }
}
?>
