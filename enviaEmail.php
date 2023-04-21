<?php
  if($_POST){
    $emailTo=$_POST['toEmail'];
    $subject=$_POST['subject'];
    $content=$_POST['content'];
    $headers='From: '.$_POST['email'];

    if(mail($emailTo,$subject,$content,$headers)){
      echo '<div class="container alert alert-success text-center">
            Your message was sent, we will get back to you ASAP!</div>';
      header("Location: https://comunidadeconecta.com/enviaEmail");
    }else{
      echo '<div class="container alert alert-danger text-center">
            Your message couldn\'t be sent, please try again later</div>';
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Pagina teste para enviar emails gratuitos, criada pela Comunidade Conecta.">
    <title>Formulario de contato</title>
    <link rel="stylesheet" href="./cssGeral.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <!-- JS -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
  </head>
  <body>
  <div id="main">
        <header>
            <h1>ENVIAR EMAIL</h1>
        </header>
        <div class="menu">
            <div class="subDom">
                <h4><a href="/">Pagina Principal</a></h4>
            </div>
            <div class="subDom">
                <h4><a href="/calculadoras">Calculadoras</a></h4>
            </div>
            <div class="subDom">
                <h4><a href="/Criptografia">Criptografia</a></h4>
            </div>
            <div class="subDom">
                <h4>ENVIAR EMAIL</h4>
            </div>
            <div class="subDom">
                <h4><a href="/programasGerais">Programas em Geral</a></h4>
            </div>
            <div class="subDom">
                <h4><a href="/geradores">Geradores</a></h4>
            </div>
            <div class="subDom">
                <h4><a href="/downloadPage">Arquivos para baixar</a></h4>
            </div>
            <div class="subDom">
                <h4>
                    <a href="/cooler">Cooler Game</a>
                </h4>
            </div>
            <div id="menu_toggle">
                <h1 id="h1_toggle">Menu</h1>
                <div id="submenus">
                    <div>
                        <h4><a href="/">Pagina Principal</a></h4>
                    </div>
                    <div>
                        <h4><a href="/calculadoras">Calculadoras</a></h4>
                    </div>
                    <div>
                        <h4><a href="/Criptografia">Criptografia</a></h4>
                    </div>
                    <div>
                        <h4>ENVIAR EMAIL</h4>
                    </div>
                    <div>
                        <h4><a href="/programasGerais">Programas em Geral</a></h4>
                    </div>
                    <div>
                        <h4><a href="/geradores">Geradores</a></h4>
                    </div>
                    <div>
                        <h4><a href="/downloadPage">Arquivos para baixar</a></h4>
                    </div>
                    <div>
                        <h4>
                            <a href="/cooler">Cooler Game</a>
                        </h4>
                    </div>

                </div>
            </div>
        </div>
        <script src="./js/index/menu.js"></script>
      <div style="margin-top: 15px;" class='container'> 
      <h1>Envie seu email gratuito</h1>
      <div id='error'></div>
      <form style="margin-bottom: 15px;" method='POST'>
        <fieldset class='form-group'>
          <label for='email'>De: Email address</label>
          <input type='email' class='form-control' id='email' name='email'>
          <small class='text-muted'>nunca compartilharemos seu Email com mais ninguém</small>
        </fieldset>
        <fieldset class='form-group'>
          <label for='toEmail'>Para: Email address</label>
          <input type='email' class='form-control' id='toEmail' name='toEmail'>
          <small class='text-muted'>Nunca compartilharemos seu toEmail com mais ninguém</small>
        </fieldset>
        <fieldset class='form-group'>
          <label for='subject'>Assunto</label>
          <input type='text' class='form-control' id='subject' name='subject'>
        </fieldset>
        <fieldset class='form-group'>
          <label for='content'>Descrição do email</label>
          <textarea class='form-control' id='content' name='content' rows='3'></textarea>
        </fieldset>
        <button type='submit' id='submit' class='btn btn-primary'>Enviar</button>
      </form>

   <script type='text/javascript'>
     $('form').submit(function(e){
       var error='';

       if($('#email').val()==""){
         error +="The email field is required.<br>"
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

      
      </div>
      
          
  </body>
</html>
