<?php

error_reporting(0);
set_time_limit(0);
session_start();

if(!file_exists("Mohamedabday.txt")){
  $fopen = fopen("Mohamedabday.txt" , "a+");
  fclose($fopen);
}
if(isset($_SESSION['usuario']) and isset($_SESSION['senha'])){
  session_destroy();
  session_start();
}

?>

<!DOCTYPE html>
<html lang="pt" data-scribe-reduced-action-queue="true">
  <head>
    
    
    
    
    
    
    
    <meta charset="utf-8">
   
  <link rel="apple-touch-icon" href="assets/images/logo.png">
 
  <link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />
 
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
  <script src="scripts/sweetalert2.js"></script>
  <link rel="stylesheet" href="scripts/sweetalert3.css">
   
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MrX Central|Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
  
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">

                <div class="content">
				<center><img src="../assets/images/logo.png" height="20%" width="34%"></center>
                  <div class="logo">
                    <h1>MrX Central!</h1>
                  </div>
                  <p>A melhor e mais completa.</p>
				  <p> MrX Central é a central mais completa e mais rápida, suportamos mais de 40 lojas e provedores de e-mail, e estamos sempre atualizando com novidades. </p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
			
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
			  
                <div class="content">
				  <h1>Area De Login</h1>
                  <form id="login-form" method="post">
                    <div class="form-group">
					
                      <input id="login-username" type="text" name="usuario" required="" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="senha" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div><button type="submit" name="logar" class="btn btn-primary">Logar</button>
                  
                  </form><a href="#" class="forgot-pass">Esqueceu a senha?</a><br><small>Não tem uma conta? </small><a href="registrar.php" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
      <div class="copyrights text-center">
        <p> <div style="background-color:   #202023;">Design by <a href="" class="external" style="background-color:   #202023;"> M3T4FOX, Fundador da MrX Central.</a></p> </div>
      
    </div>
    </div>
   
		<?php
if(isset($_POST['usuario']) and isset($_POST['senha'])){
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $get = file_get_contents("Mohamedabday.txt");
  $array = file("Mohamedabday.txt");

if($usuario == "" or $senha == "" ){
  echo "<script>swal('erro' , 'Usuario ou senha Invalidos' , 'error');</script>";

}else{

  $logado = false;
  for($i=0;$i<count($array); $i++)
  {
    $explode = explode("|" , $array[$i]);

    if($explode[0] == $usuario and $explode[1] == $senha){
      $_SESSION['usuario'] = $usuario;
      $_SESSION['senha'] = $senha;
      $_SESSION['rank'] = $explode[2];
      $_SESSION['creditos'] = $explode[3];
      $_SESSION['foto'] = $explode[4];
      $logado = true;
    }

  }
if($logado){
   echo "<script>swal('Sucesso!' , 'Logado Com Sucesso!' , 'success');</script>";
   echo '<meta http-equiv="refresh" content="2;url=painel/">';
}else{
   echo "<script>swal('ERRO' , 'Usuario Ou Senha Incorretos' , 'error');</script>";
}


}

}
  ?>


<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="libs/jquery/underscore/underscore-min.js"></script>
  <script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery/PACE/pace.min.js"></script>

  <script src="scripts/config.lazyload.js"></script>

  <script src="scripts/palette.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>
 <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  <script src="scripts/app.js"></script>

  <!-- ajax -->
  <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->










  		
		



</body>
</html>