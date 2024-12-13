<?php
// editar.php

// Função para editar o e-mail no arquivo emails.txt
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emailAtual = $_POST['email_atual'];
    $novoEmail = $_POST['novo_email'];

    // Verifica se o novo e-mail não é vazio
    if (empty($novoEmail)) {
        echo "Por favor, insira um novo e-mail.";
        exit;
    }

    // Lê o arquivo emails.txt
    $emails = file('emails.txt', FILE_IGNORE_NEW_LINES);

    // Procura pelo e-mail atual no arquivo e substitui por um novo
    $encontrado = false;
    for ($i = 0; $i < count($emails); $i++) {
        if ($emails[$i] == $emailAtual) {
            $emails[$i] = $novoEmail;
            $encontrado = true;
            break;
        }
    }

    // Se o e-mail atual não foi encontrado
    if (!$encontrado) {
        echo "E-mail não encontrado. Tente novamente.";
        exit;
    }

    // Salva as mudanças no arquivo emails.txt
    file_put_contents('emails.txt', implode(PHP_EOL, $emails) . PHP_EOL);

    // Redireciona para o arquivo site.php após atualizar o e-mail
    header("Location: site.php");
    exit();  // Finaliza a execução do script
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Editar E-mail | Fitclub</title>
</head>
<body>
    <nav>
        <div class="nav__logo">
            <a href="#"><img src="images/logo (1).png" alt="logo" /></a>
        </div>
        <ul class="nav__links">
            <li class="link"><a href="site.php">Início</a></li>
            <li class="link"><a href="#">Programa</a></li>
            <li class="link"><a href="#">Serviços</a></li>
            <li class="link"><a href="#">Sobre</a></li>
            <li class="link"><a href="#">Comunidade</a></li>
        </ul>
    </nav>

    <section class="section__container"><br>
        <h2>Editar E-mail</h2>
        <form action="editar.php" method="POST">
            <div class="form__group">
                <label for="email_atual">E-mail Atual</label>
                <input type="email" id="email_atual" name="email_atual" placeholder="Digite o e-mail atual" required />
            </div><br>

            <div class="form__group">
                <label for="novo_email">Novo E-mail</label>
                <input type="email" id="novo_email" name="novo_email" placeholder="Digite o novo e-mail" required />
            </div><br>

            <button type="submit" class="btn">Atualizar E-mail</button>
        </form><br>
    </section>

    <footer class="section__container footer__container">
        <div class="footer__col">
            <div class="footer__logo"><img src="images/logo (1).png" alt="logo" /></div>
            <p>
                Dê o primeiro passo para uma vida mais saudável com nossos planos
                de preços imbatíveis. Vamos suar, alcançar e conquistar juntos!
            </p>

            <div class="footer__socials">
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
        </div>
    </footer>

    <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. Todos os direitos reservados.
    </div>
</body>
</html>
