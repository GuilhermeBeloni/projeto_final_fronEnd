<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trading Zone</title>
    <link
      rel="shortcut icon"
      href="IMG/chart-4732549_50.ico"
      type="image/x-icon"
    />
    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <!--link_css-->
    <link rel="stylesheet" href="CSS/style.css" />
    <!--link_bootstrap-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <div id="barra_acessibilidade" class="col d-none">
        <ul>
          <li><a href="index.php" accesskey="1">Ir para menu [1]</a></li>
          <li>
            <a href="estudos.html" accesskey="2">Ir para estudos [2]</a>
          </li>
          <li>
            <a href="cotacao.html" accesskey="3">Ir para cotação [3]</a>
          </li>
          <li>
            <a href="contato.html" accesskey="4">Ir para cadastro [4]</a>
          </li>
        </ul>
      </div>
      <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
          <a href="index.php" class="navbar-brand">
            <img
              id="logo"
              src="IMG/chart-4732549_120.png"
              alt="Logo da empresa Trading Zone com um gráfico"
            />Trading Zone
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbar-links"
            aria-controls="navbar-links"
            aria-expanded="false"
            aria-label="Toglle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbar-links"
          >
            <div class="navbar-nav">
              <a class="nav-item nav-link" id="home-menu" href="index.php"
                >Home</a
              >
              <a class="nav-item nav-link" id="estudos-menu" href="estudos.html"
                >Estudos</a
              >
              <a class="nav-item nav-link" id="cotacao-menu" href="cotacao.html"
                >Cotação</a
              >
              <a
                class="nav-item nav-link"
                id="cadastro-menu"
                href="contato.html"
                >Cadastro</a
              >
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div class="container-flex">
        <div id="mainSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="1"></li>
            <li data-target="#mainSlider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="IMG/banner2.png"
                class="rounded mx-auto d-block"
                alt="Análise mercados internacionais"
              />
              <div class="carousel-caption d-md-block">
                <h2>
                  Estudo e análise dos mercados nacionais e internacionais.
                </h2>
                <a href="estudos.html" class="main-btn">Veja</a>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="IMG/banner3.png"
                class="rounded mx-auto d-block"
                alt="Aulas de Price Action"
              />
              <div class="carousel-caption d-md-block">
                <h2>Cotação ao vivo dos principais indices.</h2>
                <a href="cotacao.html" class="main-btn">Clique aqui</a>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="IMG/banner1.png"
                class="rounded mx-auto d-block"
                alt="A Maior comunidade de Traders do Brasil"
              />
              <div class="carousel-caption d-md-block">
                <h2>A Maior comunidade de Traders do Brasil!</h2>
                <a href="contato.html" class="main-btn">Participe</a>
              </div>
            </div>
          </div>
          <a
            href="#mainSlider"
            class="carousel-control-prev"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            href="#mainSlider"
            class="carousel-control-next"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!--Começo do about-->
        <div id="about-area">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h3 class="main-title">Sobre o Trading Zone</h3>
              </div>
              <div class="col-md-6">
                <img
                  class="img-fluid"
                  src="IMG/agencia.jpg"
                  alt="Agencia Trading Zone"
                />
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Uma comunidade que pensa no futuro!</h3>
                <p>
                  Olá! Seja muito bem-vindo ao Trading Zone, o site oficial da
                  metodologia Al Brooks de trading para brasileiros e
                  portugueses. O próprio Al está envolvido neste projeto.
                </p>
                <p>
                  O objetivo deste site é oferecer o material de apoio para você
                  aprender price action, em especial artigos, manuais e
                  apresentações.
                </p>
                <p>
                  A maioria do conteúdo é gratuito, e alguns dos materiais são
                  exclusivos e adaptados para a realidade brasileira.
                  <a href="contato.html">Cadastre-se</a> gratuitamente e tenha
                  acesso imediato a essa fonte única de aprendizado!
                </p>
                <p>Veja outros diferenciais:</p>
                <ul id="about-list">
                  <li><i class="fas fa-check"></i>Metodologia Avançada</li>
                  <li><i class="fas fa-check"></i>Análise tecnica clássica</li>
                  <li><i class="fas fa-check"></i>Ondas de Helliot</li>
                  <li><i class="fas fa-check"></i>Price Action Expert</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="row"></div>
    <footer class="row">
      <noscript>
        <!-- referência ao arquivo externo -->
        <a href="home.html">Home</a>
      </noscript>
      <div id="copy" class="col-sm-12 text-center">Copyright © 2022 - All rights reserved | Guilherme Beloni</div>
    </footer>

    <!--Script_fontAwesome-->
    <script
      src="https://kit.fontawesome.com/afaa4f3d45.js"
      crossorigin="anonymous"
    ></script>
    <!--Script_js-->
    <script src="JS/scripts.js"></script>
    <!--Scripts_bootstrap-->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
