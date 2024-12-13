<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />  
    <link rel="stylesheet" href="style2.css" />  
    <title>Maestria em Design Web | Fitclub</title>
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
        <li class="link"><a href="#">Serviço</a></li> 
        <li class="link"><a href="#">Sobre</a></li>  
        <li class="link"><a href="#">Comunidade</a></li>  
      </ul>
      <button class="btn">Junte-se Agora</button>  
    </nav>
<!-- * Sessão O melhor fitnes da cidade-->
    <header class="section__container header__container">
      <div class="header__content">
        <span class="bg__blur"></span>  
        <span class="bg__blur header__blur"></span>  
        <h4>O MELHOR FITNESS DA CIDADE</h4>  
        <h1><span>MODELE</span> SEU CORPO</h1>  

          Liberte seu potencial e embarque em uma jornada rumo a um você mais forte...
        </p>  
        <button class="btn">Comece Agora</button>  
      </div>
      <div class="header__image">
        <img src="images/header.png" alt="header" />  
      </div>
    </header>

    <!-- * Sessão Explore nosso programa-->
    <section class="section__container explore__container">
      <div class="explore__header">
        <h2 class="section__header">EXPLORE NOSSO PROGRAMA</h2>  
        <div class="explore__nav">
          <span><i class="ri-arrow-left-line"></i></span>  
          <span><i class="ri-arrow-right-line"></i></span>  
        </div>
      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-boxing-fill"></i></span>  
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

    <footer class="section__container footer__container">
      <span class="bg__blur"></span>  <!-- * Efeito de desfoque aplicado ao fundo do rodapé -->
      <div class="footer__col">
        <div class="footer__logo"><img src="images/logo (1).png" alt="logo" /></div>  <!-- * Logo do rodapé -->
        <p>
          Dê o primeiro passo rumo a um você mais saudável...
        </p>
        <div class="footer__socials">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <!-- * Links para redes sociais -->
        </div>
      </div>
      <!-- * Outras seções do rodapé com links de contato e informações sobre a empresa -->
    </footer>
    <div class="footer__bar">
      Copyright © 2023 Fitclub. Todos os direitos reservados.
    </div>  <!-- * Copyright do site -->
  </body>
</html>
