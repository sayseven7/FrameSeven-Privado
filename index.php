<?php
  if($_POST){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $emailTo=$_POST['toEmail'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $headers='From: '.$_POST['email'];

    if(mail($firstName, $lastName, $emailTo, $phone,$message,$headers)){
      echo '<div class="erro-msg alert alert-success text-center">
            Your message was sent, we will get back to you ASAP!</div>';
      header("Location: https://comunidadeconecta.com/enviaEmail");
    }else{
      echo '<div class="erro-msg alert alert-danger text-center">
            Your message couldn\'t be sent, please try again later</div>';
    }
  }
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="stylesheet" href="./css/carrosel.css">
    <link rel="stylesheet" href="./js/script.js">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="./imgs/shortcuticon.ico" type="image/x-icon">
    <title>Frame Seven®</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- range slider -->
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section" id="home">
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand d-lg-none" href="#home">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class=""></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <h1 onclick="getElementById('close-menu').checked = false;">
                                    <a href="#home"><img src="./imgs/FAME SEVEN FRAGON.png" widht="80px" height="70px" title="Frame Seven"></a>
                                </h1>
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link pl-lg-0" href="#home">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="tools">Tools</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about"> About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#whyuse">Why Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Assessments">Assessments</a>
                                    </li>
                                </ul>
                                <from class="search_form">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <button id="color1" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </from>
                            </div>
                        </a>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="slider-bg">
                <img src="imgs/Sem Título-1.png" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="detail-box">
                                        <h1>
                                            Seja Bem vindo ao <br> Frame Seven!
                                        </h1>
                                        <p>
                                            Aumente seu desempenho de verdade com Frame Seven: a ferramenta de pentest que vai além dos limites da segurança cibernética!
                                        </p>
                                        <a href="tools">
                                            Use já
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="detail-box">
                                        <h1>
                                            Novo na area da segurança cibernetica? <br> não sabe que ferramenta usar?
                                        </h1>
                                        <p>
                                            Código em Python para varreduras de segurança em sites, incluindo varredura de diretórios, varredura de administradores, varredura de portas e varredura de SMTP.
                                        </p>
                                        <a href="tools">
                                            Use já
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="detail-box">
                                        <h1>
                                            A ferra menta é totalmente gratis! <br> so basta clicar e usar!
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                                        </p>
                                        <a href="tools">
                                            Use já
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- Tools section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Tools</span>
                    </h2>
                    <p>
                        Código em Python para varreduras de segurança em sites, incluindo varredura de diretórios, varredura de administradores, varredura de portas e varredura de SMTP.
                    </p>
                </div>

                <div class="download-session">
                    <div>
                        <img src="./imgs/shortcuticon.png" />
                        <h3>Frame Seven</h3>
                        <p>
                            Clique em <span style="font-weight: bold;">See All</span> no link abaixo para efetuar o download do Frame-Seven e verificar mais informações sobre os programas
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="imgs/3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    SP DRAGON SCAN
                                </h5>
                                <p>
                                    O SP DRAGON SCAN é um programa em Python que permite a verificação de portas abertas em um determinado endereço IP ou nome de domínio. Com ele, é possível identificar quais portas estão disponíveis e acessíveis, o que pode ser útil para testes de segurança
                                    ou para solucionar problemas de conexão.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="imgs/2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    BFTP BASILISC
                                </h5>
                                <p>
                                    permite testar a segurança de servidores FTP. Com ele, é possível realizar ataques de força bruta, testando diversas combinações de usuário e senha até encontrar uma combinação válida e assim obter acesso ao servidor FTP.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="tools">
                        See All
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->

    <!-- about section -->

    <section class="about_section" id="about">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                We Provide <span>Best Service</span>
                            </h2>
                        </div>
                        <p>
                            O Framework Seven é uma ferramenta de pentest (teste de penetração) que oferece uma ampla gama de recursos para avaliação de segurança em sistemas de computador. Ele fornece um ambiente abrangente e modular para realizar testes de penetração de forma
                            sistemática e organizada, incluindo escaneamento de vulnerabilidades, exploração de falhas, análise de tráfego de rede, brute force, entre outros. O Framework Seven é altamente personalizável e permite que os usuários adicionem
                            seus próprios scripts e módulos para expandir suas funcionalidades. Além disso, possui uma interface de usuário amigável e intuitiva, facilitando a execução de testes de penetração mesmo para usuários com pouca experiência
                            na área. Oue está esperando, comece a ter a ajuda do seu amigo dragão de forma gratuita!
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box" id="move">
                        <img src="imgs/FAME SEVEN FRAGON DEFINITIVE1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- why us section -->

    <section class="why_us_section layout_padding" id="whyuse">
        <div class="container" id="#whyuse">
            <div class="heading_container heading_center">
                <h2>
                    why use <span>Frame Seven</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="imgs/relogio.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Speed of Functionality
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="imgs/computador.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                High efficiency
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="imgs/segurança.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Guaranteed Security
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why us section -->

    <!-- Assessments section -->

    <section class="client_section layout_padding" id="Assessments">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    User <span>Ratings</span>
                </h2>
            </div>
            <div class="carousel-wrap">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="client_id">
                                <div class="img-box">
                                    <img src="imgs/1661450439752.jpeg" alt="">
                                </div>
                                <div class="client_detail">
                                    <div class="client_info">
                                        <h6>
                                            Nicolas Mercuri
                                        </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="client_text">
                                <p>
                                    A ferramenta de pentest Frame Seven é altamente elogiada pela facilidade de uso e interface amigável, o que permite que os profissionais de segurança cibernética realizem testes de penetração de forma eficiente e intuitiva. Além disso, ela fornece relatórios
                                    personalizados com recomendações de correção de vulnerabilidades encontradas, o que facilita o trabalho do pentester. Com seu suporte técnico dedicado, a Frame Seven é uma opção de qualidade para quem busca uma ferramenta
                                    de pentest fácil de usar e eficiente.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="client_id">
                                <div class="img-box">
                                    <img src="imgs/1662483222053.jpeg" alt="">
                                </div>
                                <div class="client_detail">
                                    <div class="client_info">
                                        <h6>
                                            Vinicius Nascimento
                                        </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="client_text">
                                <p>
                                    A qualidade da ferramenta de pentest Frame Seven é notável, de acordo com minha análise.eu suporte técnico dedicado e facilidade de uso também são elogiados pelos usuários, tornando-a uma opção de qualidade para quem busca proteger seus sistemas e redes
                                    contra ameaças cibernéticas.
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="client_id">
                                <div class="img-box">
                                    <img src="imgs/1656941023904 (1).jpeg" alt="">
                                </div>
                                <div class="client_detail">
                                    <div class="client_info">
                                        <h6>
                                            Matheus Gonçalves
                                        </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="client_text">
                                <p>
                                    A ferramenta de pentest Frame Seven é altamente eficiente em identificar vulnerabilidades em sistemas e redes, graças à sua abordagem abrangente e automatizada. Além disso, é fácil de usar e conta com um suporte técnico dedicado, gerando relatórios personalizados
                                    com recomendações para correção de vulnerabilidades. Em resumo, é uma ferramenta confiável para proteger sistemas e redes contra ameaças cibernéticas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="client_id">
                                <div class="img-box">
                                    <img src="imgs/1592133668632.jpeg" alt="">
                                </div>
                                <div class="client_detail">
                                    <div class="client_info">
                                        <h6>
                                            Luiz Eduardo
                                        </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="client_text">
                                <p>
                                    A ferramenta de pentest Frame Seven é altamente rápida em identificar vulnerabilidades em sistemas e redes, graças à sua abordagem automatizada e integrada. Ela é capaz de lidar com grandes volumes de dados e realizar análises complexas de forma ágil,
                                    economizando tempo para os profissionais de segurança cibernética. Em resumo, a velocidade da ferramenta é um aspecto altamente elogiado pelos usuários, tornando-a uma opção eficaz para quem busca um teste de penetração
                                    rápido e eficiente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contact">

        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Contact <span>Us</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="form_container">
                        <div style="margin-top: 15px;" class='erro-msg'>
                            <form>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" />
                                  </div>
                                  <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" />
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="toEmail" id="toEmail" placeholder="Email" />
                                  </div>
                                  <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" />
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <textarea class="form-control message-box" name="message" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="btn-box">
                                  <button type="submit">Submit</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end contact section -->


    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_detail">
                        <h4>
                            About
                        </h4>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto footer-col">
                    <div class="footer_link_box">
                        <h4>
                            Links
                        </h4>
                        <div class="footer_links">
                            <a class="active" href="#home">
                                Home
                            </a>
                            <a class="" href="tools">
                                tools
                            </a>
                            <a class="" href="#about">
                                About
                            </a>
                            <a class="" href="#whyuse">
                                Why Us
                            </a>
                            <a class="" href="#contact">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Info
                        </h4>
                        <div class="contact_link_box">
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true">
                                    <span>
                                        Location
                                    </span>
                                </i>
                            </p>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true">
                                    <span>
                                        Call +55 71 991684997
                                    </span>
                                </i>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true">
                                    <span>
                                        Frame_Seven2023@gmail.com
                                    </span>
                                </i>
                            </a>
                            <p>
                                <i class="fa fa-clock-o" aria-hidden="true">
                                    <span>
                                        24 hours a day
                                    </span> 
                                </i>
                            </p>
                            <p>
                                <i class="fa fa-clock-o" aria-hidden="true">
                                    <span>
                                        Sunday: closed
                                     </span>
                                </i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 footer-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> Developed by:
                    <a href="https://www.linkedin.com/in/lucas-gomes-890073203/" id="colormaker1">Say Seven </a> <a>and</a>
                    <a href="https://www.linkedin.com/in/matheus-araujodev-317326248/" id="colormaker">Matheus Araujo</a> <a>and</a>
                    <a href="https://github.com/gabriel-logan" id="colormaker">Gabriel Logan</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

    <script type='text/javascript'>
        $('form').submit(function(e){
          var error='';
   
          if($('#email').val()==""){
            error +="The email field is required.<br>"
          }
          if($('#firstName').val()==""){
            error +="The to firstName field is required.<br>"
          }
          if($('#lastName').val()==""){
            error +="The to lastName field is required.<br>"
          }
          if($('#toEmail').val()==""){
            error +="The to email field is required.<br>"
          }
          if($('#subject').val()==""){
            error +="The subject field is required.<br>"
          }
          if($('#content').val()==""){
            error +="The content field is required.<br>"
          }
          if(error !=""){
            $("#error").html('<div class="alert alert-danger"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>')
            return false;
          }else{
            return true;
          }
        })      
      </script>

</body>

</html>