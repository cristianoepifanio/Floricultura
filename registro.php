<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" href="fotos/Rose.ico" type="image/x-icon">
  <!-- Links CSS -->
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/responsivo.css">

  <!-- Links JAVASCRIPT -->
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
      <h1><a href="index.php">Flores Rosas do Deserto</a></h1>
      <nav>
        <ul>
          <li type="none"><a href="index.php" class="button">LOGIN</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="register">
    <?php 
    if(isset($_SESSION['msg']))
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>
    <form  method="post"  action="cadastro.php">
      <input type="text" id="" name="nome" placeholder="NOME COMPLETO" required>
      <input type="phone" id="" name="telefone" placeholder="WHATSAPP" required>
      <input type="email" id="" name="email" placeholder="EMAIL" required>
      <input type="password" name="senha_usuario" placeholder="SENHA" required>
      
      <a href="#"><button type="submit">CADASTRAR</button></a>
    </form>
  </div>
  <footer>
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