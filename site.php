<?php
// cadastrar.php

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe o e-mail e a senha do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Verifica se as senhas coincidem
    if ($password !== $confirmPassword) {
        echo "As senhas não coincidem. Tente novamente.";
        exit;
    }

    // Salva o e-mail no arquivo emails.txt
    $file = fopen('emails.txt', 'a'); // Abre o arquivo em modo de anexação
    if ($file) {
        fwrite($file, $email . PHP_EOL); // Escreve o e-mail no arquivo
        fclose($file); // Fecha o arquivo
        echo "Cadastro realizado com sucesso!<br>";
        echo "<a href='listar.php'>Ver lista de e-mails cadastrados</a>";
    } else {
        echo "Erro ao salvar o e-mail. Tente novamente mais tarde.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />  <!-- * Importação de ícones do remixicon, uma biblioteca de ícones de fácil uso -->
    <link rel="stylesheet" href="style2.css" />  <!-- * Importação do arquivo de estilo CSS (style2.css) -->
    <title>Maestria em Design Web | Fitclub</title>  <!-- * Título da página que aparecerá na aba do navegador -->
  </head>
  <body>
    <nav>
      <div class="nav__logo">
        <a href="#"><img src="images/logo (1).png" alt="logo" /></a>  <!-- * Logo do site com link -->
      </div>
      <ul class="nav__links">
        <li class="link"><a href="#">Início</a></li>  <!-- * Link para a página inicial -->
        <li class="link"><a href="#">Programa</a></li>  <!-- * Link para o programa do site -->
        <li class="link"><a href="#">Serviço</a></li>  <!-- * Link para a seção de serviços -->
        <li class="link"><a href="#">Sobre</a></li>  <!-- * Link para informações sobre a empresa -->
        <li class="link"><a href="#">Comunidade</a></li>  <!-- * Link para a seção da comunidade -->
      </ul>
      <button class="btn">Junte-se Agora</button>  <!-- * Botão de ação para adesão ao site -->
    </nav>

    <header class="section__container header__container">
      <div class="header__content">
        <span class="bg__blur"></span>  <!-- * Aplicação de efeito de desfoque no fundo -->
        <span class="bg__blur header__blur"></span>  <!-- * Segundo efeito de desfoque no fundo -->
        <h4>O MELHOR FITNESS DA CIDADE</h4>  <!-- * Título de seção com uma mensagem atrativa -->
        <h1><span>MODELE</span> SEU CORPO</h1>  <!-- * Título principal da seção -->
        <p>
          Liberte seu potencial e embarque em uma jornada rumo a um você mais forte...
        </p>  <!-- * Parágrafo que descreve os benefícios do programa -->
        <button class="btn">Comece Agora</button>  <!-- * Botão de ação para iniciar o programa -->
      </div>
      <div class="header__image">
        <img src="images/header.png" alt="header" />  <!-- * Imagem de destaque na página -->
      </div>
    </header>

    <section class="section__container explore__container">
      <div class="explore__header">

        <h2 class="section__header">EXPLORE NOSSO PROGRAMA</h2>  <!-- * Título da seção para explorar o programa -->

   
        <div class="explore__nav">
          <span><i class="ri-arrow-left-line"></i></span>  <!-- * Ícone de seta para a esquerda -->
          <span><i class="ri-arrow-right-line"></i></span>  <!-- * Ícone de seta para a direita -->
        </div>
      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-boxing-fill"></i></span>  <!-- * Ícone de boxe -->
          <h4>Força</h4>
          <p>
            Abrace a essência da força enquanto exploramos suas várias dimensões...
          </p>
          <a href="#">Junte-se Agora <i class="ri-arrow-right-line"></i></a>  <!-- * Link para aderir ao programa -->
        </div>
        <!-- * Repetição dos cards de diferentes programas, com seus respectivos ícones, títulos, descrições e links -->
      </div>
    </section>

    <section class="section__container class__container">
      <div class="class__image">
        <span class="bg__blur"></span>  <!-- * Efeito de desfoque aplicado ao fundo da imagem -->
        <img src="images/class-1.jpg" alt="aula" class="class__img-1" />  <!-- * Imagem representando uma aula -->
        <img src="images/class-2.jpg" alt="aula" class="class__img-2" />  <!-- * Segunda imagem representando uma aula -->
      </div>
      <div class="class__content">
        <h2 class="section__header">AULA QUE VOCÊ ENCONTRARÁ AQUI</h2>  <!-- * Título da seção sobre as aulas oferecidas -->
        <p>
          Liderada pela nossa equipe de instrutores especialistas...
        </p>
        <button class="btn">Reservar uma Aula</button>  <!-- * Botão de ação para reservar uma aula -->
      </div>
    </section>

    <section class="section__container join__container">
      <h2 class="section__header">POR QUE SE JUNTAR A NÓS?</h2>  <!-- * Título sobre os benefícios de se juntar ao programa -->
      <p class="section__subheader">
        Nossa base de membros diversificada cria uma atmosfera amigável...
      </p>
      <div class="join__image">
        <img src="images/join.jpg" alt="Junte-se" />  <!-- * Imagem relacionada à adesão ao programa -->
        <div class="join__grid">
          <!-- * Cards com ícones e informações sobre os benefícios do programa (Personal Trainer, Sessões de Prática, Boa Gestão) -->
        </div>
      </div>
    </section>

    <section class="section__container price__container">
      <h2 class="section__header">NOSSO PLANO DE PREÇOS</h2>  <!-- * Título da seção sobre planos de preços -->
      <p class="section__subheader">
        Nosso plano de preços oferece diferentes níveis de adesão...
      </p>
      <div class="price__grid">
        <div class="price__card">
          <div class="price__card__content">
            <h4>Plano Básico</h4>
            <h3>$16</h3>  <!-- * Detalhamento dos planos de preços -->
            <p><i class="ri-checkbox-circle-line"></i> Plano de treino inteligente</p>
            <!-- * Benefícios listados para o plano -->
          </div>
          <button class="btn price__btn">Junte-se Agora</button>  <!-- * Botão para se inscrever no plano -->
        </div>
        <!-- * Repetição de cards de planos de preços com detalhes e botão de adesão -->
      </div>
    </section>
        
    
    <!-- Seção de Gerenciamento de Conta -->
    <section class="section__container account-management__container">
      <div class="account-management__content">
        <h2 class="section__header">Gerenciamento de Conta</h2>

      <!-- Descrição breve sobre as opções disponíveis -->
      <p class="section__subheader">Aqui você pode editar suas informações, listar todas as contas cadastradas ou excluir a sua conta.</p>
      
      <!-- Div para Centralizar Botões -->
      <div class="account-management__buttons">
        <!-- Botão de Editar Conta -->
        <section class="section__container">
          <div class="content">
            <!-- Botão para acessar editar.php -->
            <a href="editar.php" class="btn">Editar Conta</a>
          </div>
        </section>
        <!-- Botão de Listar Contas -->
        <section class="section__container">
          <div class="content">
            <!-- Botão para acessar listar.php -->
            <a href="listar.php" class="btn">Ver Lista</a>
          </div>
        </section>
        <!-- Botão de Deletar Conta -->
        <section class="section__container">
          <div class="content">
            <!-- Botão para acessar deletar.php -->
            <a href="deletar.php" class="btn">Deletar Conta</a>
          </div>
        </section>
      </div>
    </div>
  </section>
  

  </body>
  </html>
  <section class="review">
    <div class="section__container review__container">
      <span><i class="ri-double-quotes-r"></i></span>  <!-- * Ícone de aspas para o feedback -->
      <div class="review__content">
        <h4>AVALIAÇÃO DOS MEMBROS</h4>  <!-- * Título da seção de avaliações -->
        <p>
          O que realmente diferencia esta academia é sua equipe especializada...
        </p>
        <div class="review__rating">
          <!-- * Ícones de estrelas para avaliação -->
        </div>
        <div class="review__footer">
          <div class="review__member">
            <img src="images/Captura de tela 2024-12-12 095641.png" alt="membro" />  <!-- * Imagem do membro que fez a avaliação -->
            <div class="review__member__details">
              <h4>Luan Borges</h4>
              <p>Desenvolvedor de Software</p>
            </div>
          </div>
          <div class="review__member">
            <img src="images/Captura de tela 2024-12-12 095559.png" alt="membro" />  <!-- * Imagem do membro que fez a avaliação -->
            <div class="review__member__details">
              <h4>Samir </h4>
              <p>Desenvolvedor de Software</p>
            </div>
          </div>
          <div class="review__nav">
            <span><i class="ri-arrow-left-line"></i></span>  <!-- * Navegação entre avaliações -->
            <span><i class="ri-arrow-right-line"></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>
