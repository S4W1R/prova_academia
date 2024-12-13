<?php
// deletar.php

// Função para deletar o e-mail no arquivo emails.txt
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emailParaDeletar = $_POST['email'];

    // Lê o arquivo emails.txt
    $emails = file('emails.txt', FILE_IGNORE_NEW_LINES);

    // Verifica se o e-mail a ser deletado está na lista
    if (in_array($emailParaDeletar, $emails)) {
        // Remove o e-mail da lista
        $emails = array_diff($emails, [$emailParaDeletar]);

        // Salva as mudanças no arquivo emails.txt
        file_put_contents('emails.txt', implode(PHP_EOL, $emails) . PHP_EOL);

        // Redireciona para o site.php após a exclusão bem-sucedida
        header("Location: site.php");
        exit;  // Importante para garantir que o script seja interrompido após o redirecionamento
    } else {
        echo "E-mail não encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Deletar E-mail | Fitclub</title>
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
        <h2>Deletar E-mail</h2>
        <form action="deletar.php" method="POST">
            <div class="form__group">
                <label for="email">E-mail a ser deletado</label>
                <input type="email" id="email" name="email" placeholder="Digite o e-mail a ser deletado" required /><br>
            </div>

            <button type="submit" class="btn">Deletar E-mail</button>
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
