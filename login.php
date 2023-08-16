<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='font-size: 25px; color: #ff0000;'>Erro: Necessário fazer login para acessar a página!</p>";
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="fotos/Rose.ico" type="image/x-icon">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/responsivo.css">

  <script src="https://kit.fontawesome.com/20b170574e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="js/main.js">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


  <title>Floricultura Teresinha</title>
</head>

<body>
  <header>
    <div class="conteiner">
      <h1>Flores Rosas do Deserto</h1>
      <nav>
        <ul>
          <li type="none"><a href="#Catalogo" class="button">Catálogo</a></li>
          <li type="none"><a href="#NossoJogo" class="button">Nosso Jogo</a></li>
          <li type="none"><a href="#Contatos" class="button">Fale conosco</a></li>
          <li type="none"><a href="sair.php" class="button">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <section class="box">
      <div class="login">
        <p class="login">SEJA BEM VINDO(A), <?php echo $_SESSION['nome']; ?> </p>
      </div>
    </section>

    <section class="bloco perfil">
      <h2>Sobre nós</h2>
      <p class="bloco-texto">Somos uma floricultura especializada em Rosas do Deserto. Em nossa preocupação com a
        ecologia, nós fazemos o nosso próprio composto orgânico e reutilizamos itens reclicavéis como potes e pneus que
        normalmente são descartados de forma indevida, para a cultivação das nossas Rosas do Deserto. </p>
    </section>
    <section class="bloco" id="Catalogo">
      <div id="owl-example" class="owl-carousel owl-theme">
        <div class="item"><img src="fotos/img/brotos.jpeg" alt="Brotos"></div>
        <div class="item"><img src="fotos/img/rosa branca.jpeg" alt="Rosa Branca"></div>
        <div class="item"><img src="fotos/img/rosa branca media.jpeg" alt="Rosa Branca Enxerto"></div>
        <div class="item"><img src="fotos/img/rosa única.jpeg" alt="Rosa Única"></div>
        <div class="item"><img src="fotos/img/rosa de duas.jpeg" alt="Rosa de Duas"></div>
        <div class="item"><img src="fotos/img/rosa cheia.jpeg" alt="Rosa Cheia"></div>
      </div>
      <a href="catalogologin.html" class="reserva"><button>Faça sua reserva</button></a>
    </section>
    <section id="NossoJogo" class="bloco jogo">
      <h2>Jogo da floricultura</h2>
      <br>
      <p>Baixe nosso beta de jogo <a href="jogo.rar" download="jogo.rar" type="application/rar">aqui</a></p>
   </section>
  </main>
  <footer id="Contatos">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4199838989034!2d-34.91207619681826!3d-7.851037161345874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab14d4e2705717%3A0x4c7433749eb8713f!2sCentro%20Mari%C3%A1polis%20Santa%20Maria!5e0!3m2!1spt-BR!2sbr!4v1668990442002!5m2!1spt-BR!2sbr"
    width="30%" height="40%" margin="auto" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    <div class="adress">
        <h2>Endereço</h2>
        <address>Av. Alfredo Bandeira de Melo, 1 - Ana de Albuquerque, Igarassu - PE, 53630-030</address>
            <div class="contatos">
                <h2>
                  Contatos:
                </h2>
                <a href="tel:++55081998636465"><i class="fa-brands fa-whatsapp"></i>+55 081 998636465</a> <a
                href="https://www.instagram.com/floriculturatere/?igshid=YmMyMTA2M2Y%3D" target="_blank"><i
                    class="fa-brands fa-instagram"></i>rdterezinha_</a>
            </div>
    </div>
</footer>

  <script src="js/main.js"></script>

</body>

</html>