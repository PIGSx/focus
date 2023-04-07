<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"> 
    <title>formulário</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
      <!-- menu -->
  <header>
    <nav>
      <a class="logo" href="index.html">
        <img class="logo-drope" src="img/png/drope.png" alt="" width="80px" height="80px">
      </a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">         
        <li><a href="tenis.html">tênis</a></li>
        <li><a href="#acessórios">acessórios</a></li>
        <li><a href="#sobre">sobre</a></li>
        <li class="log"><a href="login.html">login</a></li>
      </ul>
      <ul class="nav-login">
        <li><a href="login.html">login</a></li>
      </ul>
    </nav>
  </header>
  <script src="js/menu.js"></script>
  <!-- registre-se -->
  <?php
  session_start();
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>
  <div class="container">
    <div class="center">
      <h1>registre-se</h1>
      <form id="form" method="post" action="contato.act.php">
        <div>
          <input type="text" placeholder="nome" name="nome" class="inputs required" oninput="nameValidate()">
          <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
      </div>
      <div>
          <input type="email" placeholder="email" name="email" class="inputs required" oninput="emailValidate()">
          <span class="span-required">Digite um email válido</span>
      </div>
      <div>
          <input type="password" placeholder="Senha" name="senha" class="inputs required" oninput="mainPasswordValidate()">
          <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
      </div>
      <div>
          <input type="password" placeholder="confirme sua senha" class="inputs required" oninput="comparePassword()">
          <span class="span-required">Senhas devem ser compatíveis</span>
      </div>
          <input type="submit" name="submit" value="enviar">
          <div class="sign-link">
            <p>ja tem uma conta ? <a href="login.html">clique aqui</a></p>
          </div>
      </form>
    </div>
  </div>
  <script src="js/form.js"></script>
   <!-- rodapé -->
   <footer>
      <h1 id="sobre"></h1>
      <img class="logo-drope" src="img/png/drope.png" alt="" width="80px" height="80px">
      <div class="services">
        <div class="service">
          <h3>Atitude nos pés que faça você recusar o resto.</h3>
          <p>Revendedora exclusiva e oficial. Uma das melhores marcas de Streetwear do mundo, referência e destino nos
            lançamentos mundiais dos mais limitados Sneakers.</p>
        </div>
        <div class="service">
          <h3>siga a drope</h3>
          <a href="https://www.instagram.com/x.pigs/"><ion-icon class="icons" name="logo-instagram"></ion-icon></a>
          <a href="https://twitter.com/pigslindo"><ion-icon class="icons" name="logo-twitter"></ion-icon></a>
          <a
            href="https://api.whatsapp.com/send?phone=5511967866367&text=eae%20pigs%2C%20vim%20do%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20os%20sneakers."><ion-icon class="icons" name="logo-whatsapp"></ion-icon></a>
        </div>
      </div>
      <!-- importação dos icons -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </footer>

</body>
</html>
