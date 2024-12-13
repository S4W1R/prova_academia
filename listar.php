<?php
// Verifica se o arquivo emails.txt existe
$emails = [];
if (file_exists("emails.txt")) {
    // Lê os e-mails do arquivo emails.txt (um e-mail por linha)
    $emails = file("emails.txt", FILE_IGNORE_NEW_LINES);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Lista de Emails | Fitclub</title>
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

    <!-- Seção de Gerenciamento de Emails -->
    <section class="section__container">
      <div class="account-management__content">
        <h2 class="section__header">Lista de Emails Cadastrados</h2>

        <!-- Tabela para Listar Emails -->
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($emails)): ?>
                <?php foreach ($emails as $index => $email): ?>
                <tr>
                  <td><?php echo $index + 1; ?></td> <!-- ID automático baseado no índice -->
                  <td><?php echo htmlspecialchars($email); ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2">Nenhum email cadastrado.</td>
                </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
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
      <div class="footer__col">
        <h4>Empresa</h4>
        <a href="#">Negócios</a>
        <a href="#">Franquia</a>
        <a href="#">Parcerias</a>
        <a href="#">Rede</a>
      </div>
      <div class="footer__col">
        <h4>Sobre nós</h4>
        <a href="#">Blogs</a>
        <a href="#">Segurança</a>
        <a href="#">Carreiras</a>
      </div>
      <div class="footer__col">
        <h4>Contato</h4>
        <a href="#">Fale Conosco</a>
        <a href="#">Política de Privacidade</a>
        <a href="#">Termos e Condições</a>
        <a href="#">Calculadora de IMC</a>
      </div>
    </footer>

    <div class="footer__bar">
      Copyright © 2023 Web Design Mastery. Todos os direitos reservados.
    </div>
  </body>
</html>
