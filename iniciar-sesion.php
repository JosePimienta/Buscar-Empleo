<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN | BUSCAR EMPLEO</title>
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--oswald-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">
<!--animacion-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!--Icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--contacto-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->


    <!--ESTILOS DE CSS-->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>


    <div class="conteiner">
      <nav class="cabeza">
        <img src="img/logo.jpg" alt="prueba uno" class="imagen-uno">
        <h1>BUSCAR EMPLEO</h1>
      </nav></div>

<div class="formulariosDeEntrada conteiner">

    <!--INICIAR SESION-->
    <form class="formulario2" id="Form2" onsubmit="return iniciar()" method="post" action="loginProceso.php">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrar2"></i>
        </a>
        <h1 class="formulario-titulo">Ingreso Estudiante</h1>
        <input type="email" class="formulario-entrada" id="entradacorreo" name="Ecorreo">
        <label for="" class="formulario-label"><ion-icon name="person-outline"></ion-icon>Correo</label>
        <div id="errorcorreo"></div>
        <input type="password" class="formulario-entrada" id="entradacontrasena" name="Epasword">
        <label for="" class="formulario-label"><ion-icon name="lock-closed-outline"></ion-icon>Contraseña</label>
        <div id="errorcontrasena"></div>
        <button type="submit" class="enviar2" value="">Ingresar</button>
        <!-- <br>
        <a href="#" id="soyE">Soy empresa</a>
        <br> -->
        <br>
        <a href="recuperar.php" id="recuperar">¿has olvidado tu contraseña?</a>
        <br>
        <br>
        <a href="#">Crear cuenta</a>
        <br>
        <div id="error2"></div>
      </form>

      <form class="formularioEmpresa" id="FormEmpresa" method="post" action="loginEmpresa.php">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrarE"></i>
        </a>
        <h1 class="formulario-titulo">Ingreso Empresa</h1>
        <input type="email" class="formulario-entrada" id="entradacontacto" name="Econtacto" required>
        <label for="" class="formulario-label"><ion-icon name="person-outline"></ion-icon>Correo</label>
        <button type="submit" class="enviarE" value="">Ingresar</button>
      </form>
      </section>

</div>

<section class="social">
  <p>Contactanos</p>
  <div class="enlaces">
    <a href="https://www.facebook.com/joseluis.pimientavaliente" class="ico">
      <i class='fab fa-facebook-f'></i>
    </a>
    <a href="#" class="ico">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="mailto:pimientavalientejoseluis@gmail.com?Subject=Buscar%20empleo" class="ico">
      <i class="fa fa-envelope" aria-hidden="true"></i>
    </a>
    <a href="#" class="ico">
      <i class="fab fa-instagram"></i>
    </a>
  </div>
</section>

<footer class="pie">BUSCAR EMPLEO <ion-icon name="checkmark-circle-outline"></ion-icon></footer>


<!--script-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--<script type="text/javascript" src="main2.js"></script>-->
<script type="text/javascript" src="main.js"></script>
</body>
</html> 
   
   