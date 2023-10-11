<?php
  session_start();
  ///print_r($_SESSION);
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  
  }
  $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/site.css">
  <link rel="stylesheet" href="css/site.css">
  <link rel="shortcut icon" type="imagex/png" href="./css/imgs/favicon.ico">
  <title>MK CLÍNICA</title>
  
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#inicio">
            <h1><span>M</span>K <span>C</span>LÍNICA</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#inicio" data-after="inicio">inicio</a></li>
            <li><a href="#serviços" data-after="Serviços">Serviços</a></li>
            <li><a href="#sobre" data-after="Sobre">Sobre</a></li>
            <li><a href="#contato" data-after="Contato">Contato</a></li>  
            <li><a href="login.php" data-after="Login">Login</a></li>   
            <li><a href="registro.php" data-after="Cadastro">Cadastro</a></li>        
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--final Header -->


  <!-- frase na tela de inicio -->
  <section id="inicio">
    <div class="inicio container">
      <div>
        <h1>Olá, <span></span></h1>
        <h1>Bem vindos <span></span></h1>
        <h1>A MK CLÍNICA <span></span></h1>     
      </div>
    </div>
  </section>
  <!-- fim da frase na tela de inicio  -->

  <!-- S -->
  <section id="serviços">
    <div class="serviços container">
      <div class="serviços-top">
        <h1 class="section-title">ser<span>v</span>iços</h1>
        <p>Na MK Clínica, nosso compromisso é oferecer a você serviços de estética excepcionais que vão além do superficial. Cada tratamento é cuidadosamente planejado e personalizado para realçar a sua beleza natural e promover um senso de bem-estar duradouro. Com a mais recente tecnologia e uma equipe altamente qualificada,
        estamos aqui para ajudá-lo a alcançar os resultados que você merece.</p>
      </div>
      <div class="serviços-bottom">
        <div class="serviços-item">
          <div class="icon"><img src="./css/imgs/labial.png" /></div>
          <h2>Preenchimento Labial</h2>
          <p>O objetivo do preenchimento labial é melhorar a aparência dos lábios,
             suavizando rugas ou linhas de expressão e realçando a beleza natural do sorriso. </p>
             <a href="login.php" data-after="entrar em contato">Entrar em Contato</a>   
        </div>
        <div class="serviços-item">
          <div class="icon"><img src="./css/imgs/capilar.png" /></div>
          <h2>Tratamento Capilar</h2>
          <p>O Tratamento Capilar tem como objetivo de tratar a patologia de cada paciente, 
          que pode ser: quedas de cabelo, infecções, quebra dos fios, inflamação e doenças no couro cabeludo </p>
          <a href="https://wa.me/5597984246969?text=ol%C3%A1+gostaria+de+saber+sobre+o+procedimento+de+Tratamento+capilar" data-after="entrar em contato">Entrar em Contato</a>  
        </div>
        <div class="serviços-item">
          <div class="icon"><img src="./css/imgs/icone armonização facial.png" /></div>
          <h2>Harmonização Facial </h2>
          <p>A harmonização facial tem como objetivo equilibrar e realçar os 
            traços faciais, proporcionando uma aparência simétrica e estéticamente agradável.</p>
            <a href="https://wa.me/5597984246969?text=ol%C3%A1+gostaria+de+saber+sobre+o+procedimento+de+Harmoniza%C3%A7%C3%A3o+facial" data-after="entrar em contato">Entrar em Contato</a> 
        </div>
        <div class="serviços-item">
          <div class="icon"><img src="./css/imgs/depilação.png" /></div>
          <h2>Depilação</h2>
          <p>O objetivo da depilação consiste na remoção do pelo que se encontra rente à superfície da pele.
             O procedimento utiliza lâminas, cremes depilatórios, barbeadores e etc.</p>
             <a href="https://wa.me/5597984246969?text=ol%C3%A1+gostaria+de+saber+sobre+tratamento+de+depila%C3%A7%C3%A3o" data-after="entrar em contato">Entrar em Contato</a> 
        </div>
      </div>
    </div>
  </section>
  <!-- final seção de serviços -->

  <!-- About Section -->
  <section id="sobre">
    <div class="sobre container">
      <div class="col-left">
        <div class="sobre-img">
          <img src="css/imgs/me.avif">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Sobre a <span>MK</span></h1>
        <h2>MK CLÍNICA</h2>
        <p>A MK Clínica é um refúgio dedicado ao cuidado estético e bem-estar. 
          Com uma equipe altamente qualificada e tecnologia de ponta, oferecemos 
          uma ampla gama de tratamentos personalizados para realçar sua beleza natural. 
          Nossa missão é ajudar você a se sentir confiante e radiante em sua própria pele. 
          Venha descobrir um mundo de cuidados estéticos na MK Clínica, 
          a sua beleza e autoestima são nossa prioridade.</p>
       
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contato">
    <div class="contato container">
      <div>
        <h1 class="section-title">CONTA<span>TO</span></h1>
      </div>
      <div class="contato-items">
        <div class="contato-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contato-info">
            <h1>Telefone</h1>
            <h2>+xx xxxxxxxx</h2>
            <h2>+xx xxxxxxxx</h2>
          </div>
        </div>
        <div class="contato-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contato-info">
            <h1>Email</h1>
            <h2>xxxxx@xxxx.com</h2>
            <h2>xxxxx@xxxx.com</h2>
          </div>
        </div>
        <div class="contato-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contatot-info">
            <h1>Endereço</h1>
            <h2>Estado xxxxx, Rua xxxxx n° xxx</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="rodape">
    <div class="rodape container">
      <div class="brand">
        <h1><span>V</span>ER <span>M</span>AIS</h1>
      </div>
      <h2>VEJA MAIS EM NOSSAS REDES SOCIAIS</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
      
      </div>
      
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>