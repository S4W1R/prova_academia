
<?php
require 'conexao.php';
// Criando a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Processando o formulário de cadastro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';

    // Validação de senha
    if ($password !== $confirmPassword) {
        echo "<script>alert('As senhas não coincidem!');</script>";
    } else {
        // Criptografando a senha
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Inserindo os dados no banco de dados
        $sql = "INSERT INTO login (email, password) VALUES ('$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Conta criada com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro: " . $conn->error . "');</script>";
        }
    }
}

$conn->close();  // Fechando a conexão com o banco de dados
?>

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
    <nav>
      <div class="nav__logo">
        <a href="#"><img src="images/logo (1).png" alt="logo" /></a>
      </div>
      <!-- Menu de navegação -->
      <ul class="nav__links">
        <li class="link"><a href="#">Início</a></li>
        <li class="link"><a href="#">Programa</a></li>
        <li class="link"><a href="#">Serviços</a></li>
        <li class="link"><a href="#">Sobre</a></li>
        <li class="link"><a href="#">Comunidade</a></li>
      </ul>
    </nav>

    <!-- Seção principal de cadastro -->
    <section class="section__container signup__container">
      <div class="signup__content">
        <h2 class="section__header">Login</h2>
        <!-- Formulário de cadastro -->
        <form action="" method="POST" class="signup__form">
          
          <!-- Campo de e-mail -->
          <div class="form__group">
            <label for="email">E-mail</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Digite seu e-mail"
              required
            />
          </div>

          <!-- Campo de senha -->
          <div class="form__group">
            <label for="password">Senha</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Digite sua senha"
              required
            />
          </div>

           <!-- Campo de confirmação de senha -->
           <div class="form__group">
            <label for="confirm-password">Confirmar Senha</label>
            <input
              type="password"
              id="confirm-password"
              name="confirm-password"
              placeholder="Confirme sua senha"
              required
            />
          </div>

          <!-- Botão de envio do formulário -->
          <button type="submit" class="btn"><a href="site.php">Entrar</a></button>
        </form>

        <!-- Link para fazer login caso o usuário já tenha uma conta -->
        <p class="signup__footer">
          Não tem uma conta? <a href="cadastro.php">Cria conta</a>
        </p>
      </div>
    </section>

    <!-- Seção do rodapé -->
    <footer class="section__container footer__container">
      <div class="footer__col">
        <div class="footer__logo"><img src="images/logo (1).png" alt="logo" /></div>
        
        <p>
          Dê o primeiro passo para uma vida mais saudável com nossos planos
          de preços imbatíveis. Vamos suar, alcançar e conquistar juntos!
        </p>

        <!-- Ícones de redes sociais -->
        <div class="footer__socials">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <a href="#"><i class="ri-instagram-line"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
        </div>
      </div>

      <!-- Coluna com links institucionais -->
      <div class="footer__col">
        <h4>Empresa</h4>
        <a href="#">Negócios</a>
        <a href="#">Franquia</a>
        <a href="#">Parcerias</a>
        <a href="#">Rede</a>
      </div>

      <!-- Coluna com informações sobre a empresa -->
      <div class="footer__col">
        <h4>Sobre nós</h4>
        <a href="#">Blogs</a>
        <a href="#">Segurança</a>
        <a href="#">Carreiras</a>
      </div>

      <!-- Coluna com links de contato -->
      <div class="footer__col">
        <h4>Contato</h4>
        <a href="#">Fale Conosco</a>
        <a href="#">Política de Privacidade</a>
        <a href="#">Termos e Condições</a>
        <a href="#">Calculadora de IMC</a>
      </div>
    </footer>


  </body>
</html>
