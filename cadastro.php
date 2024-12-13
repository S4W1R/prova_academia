<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Cadastro | Fitclub</title>
  </head>
  <body>
    <!-- Navegação -->
    <nav>
      <div class="nav__logo">
        <a href="#"><img src="images/logo (1).png" alt="logo" /></a>
      </div>
      <ul class="nav__links">
        <li class="link"><a href="#">Início</a></li>
        <li class="link"><a href="#">Programa</a></li>
        <li class="link"><a href="#">Serviços</a></li>
        <li class="link"><a href="#">Sobre</a></li>
        <li class="link"><a href="#">Comunidade</a></li>
      </ul>
    </nav>

    <!-- Seção de Cadastro -->
    <section class="section__container signup__container">
      <div class="signup__content">
        <h2 class="section__header">Faça Cadastro</h2>

        <!-- Formulário de Cadastro -->
        <form action="cadastrar.php" method="POST" class="signup__form">
          <div class="form__group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required />
          </div>

          <div class="form__group">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required />
          </div>

          <div class="form__group">
            <label for="confirm-password">Confirmar Senha</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirme sua senha" required />
          </div>

          <!-- Botão de Cadastro -->
          <button type="submit" class="btn">Cadastrar</button>
        </form>

        <p class="signup__footer">
          Já tem uma conta? <a href="login.php">Faça Login</a>
        </p>
      </div>
    </section>

    <!-- Rodapé -->
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

    <!-- Barra de Direitos Autorais -->
    <div class="footer__bar">
      Copyright © 2023 Web Design Mastery. Todos os direitos reservados.
    </div>
  </body>
</html>
