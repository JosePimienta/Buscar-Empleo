<?php
session_start();
if (isset($_SESSION['nombre'])) {
  header('Location: index2.php');
}

 ?>

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
      </nav>

      <nav class="nav-main">

                <ul class="contacto-boton">
                  <li>
                    <a href="#">
                      <i class="fas fa-address-book"> iniciar sesion</i>

                    </a>
                  </li>
                </ul>

      <ul class="registrate-boton">
        <li>
          <a href="#" class="bt">Regístrate</a>

        </li>
      </ul>

      <!--<form action="" method="post" target="_blank" class="buscar2">

        <p class="buscar"><input type="search" name="buscar" placeholder="Empresa, trabajo...">

           <input type="submit" value="Buscar" name="enviar" class="bb">

       </p>

     </form>-->

      <form class="" action="entrada.php" method="post" class="buscar2">

        <input type="text" name="bu" value="">
        <input type="submit" name="" value="Buscar" class="bb">

      </form>


      </nav>

      <hr>






        <ul class="registrate-boton-op">
          <li>
            <a href="#" class="bt-estud"><ion-icon name="school-outline"></ion-icon> Estudiante (Nuevo usuario)</a>

            <a href="#" class="bt-empre"><ion-icon name="business-outline"></ion-icon> Empresa (Añadir empleo)</a>
          </li>
        </ul>


      <!--REGISTRO-->
      <form class="formulario" id="Form" method="post" onsubmit="return Registro()" action="verificarNuevo.php">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrar"></i>
        </a>
        <h1 class="formulario-titulo">Registrate</h1>
        <input type="text" class="formulario-entrada" id="nom1" name="nom" autocomplete="off"><!-- oninvalid="ingresa el nombre" required-->
        <label for="" class="formulario-label"><ion-icon name="person-circle-outline"></ion-icon>Nombres</label>
        <div id="errorn"></div>
        <input type="text" class="formulario-entrada" id="ape1" name="ape" autocomplete="off">
        <label for="" class="formulario-label"><ion-icon name="person-circle-outline"></ion-icon>Apellidos</label>
        <div id="errora"></div>
        <input type="tel" class="formulario-entrada" id="tel1" name="tel" pattern="[0-9]+" autocomplete="off">
        <label for="" class="formulario-label"><ion-icon name="call-outline"></ion-icon>Telefono</label>
        <div id="errort"></div>
        <input type="text" class="formulario-entrada" id="dir1" name="dir" autocomplete="off">
        <label for="" class="formulario-label"><i class="material-icons">gps_fixed</i>Direccion</label>
        <div id="errord"></div>
        <input type="text" class="formulario-entrada" id="uni1" name="uni" autocomplete="off">
        <label for="" class="formulario-label"><ion-icon name="school-outline"></ion-icon>Universidad</label>
        <div id="erroru"></div>

        <input type="text" class="formulario-entrada" id="uni12" name="uni21" autocomplete="off">
        <label for="" class="formulario-label"><ion-icon name="school-outline"></ion-icon>¿Que estudia?</label>
        <div id="erroru2"></div>

        <input type="email" class="formulario-entrada" id="email1" name="email" autocomplete="off">
        <label for="" class="formulario-label"><ion-icon name="mail-outline"></ion-icon>Correo</label>
        <div id="errore"></div>
        <input type="password" class="formulario-entrada" id="pass1" name="pass" autocomplete="off">
        <label for="" class="formulario-label"><ion-icon name="lock-closed-outline"></ion-icon>Contraseña (6 o mas caracteres)</label>
        <div id="errorc"></div>
        <input type="password" class="formulario-entrada" id="conpass1" name="conpass" autocomplete="off">
        <label for="" class="formulario-label"><ion-icon name="lock-closed-outline"></ion-icon>Confirmar contraseña</label>
        <div id="errorcp"></div>
        <input type="text" class="conrr" value="estudiante registrado correctamente" name="conff">
        <button type="submit" class="enviar" name="restudiante">Enviar</button>
        <br>
        <div id="error1"></div>
      </form>

      <!--INICIAR SESION-->
      <form class="formulario2" id="Form2" onsubmit="return iniciar()" method="post" action="loginProceso.php">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrar2"></i>
        </a>
        <h1 class="formulario-titulo">Ingresar</h1>
        <input type="email" class="formulario-entrada" id="entradacorreo" name="Ecorreo">
        <label for="" class="formulario-label"><ion-icon name="person-outline"></ion-icon>Correo</label>
        <div id="errorcorreo"></div>
        <input type="password" class="formulario-entrada" id="entradacontrasena" name="Epasword">
        <label for="" class="formulario-label"><ion-icon name="lock-closed-outline"></ion-icon>Contraseña</label>
        <div id="errorcontrasena"></div>
        <button type="submit" class="enviar2" value="">Ingresar</button>
        <br>
        <a href="#" id="soyE">Soy empresa</a>
        <br>
        <br>
        <a href="recuperar.php" id="recuperar">¿has olvidado tu contraseña?</a>
        <br>
        <div id="error2"></div>
      </form>

      <form class="formularioEmpresa" id="FormEmpresa" method="post" action="loginEmpresa.php">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrarE"></i>
        </a>
        <h1 class="formulario-titulo">Ingresar</h1>
        <input type="email" class="formulario-entrada" id="entradacontacto" name="Econtacto" required>
        <label for="" class="formulario-label"><ion-icon name="person-outline"></ion-icon>Correo</label>
        <button type="submit" class="enviarE" value="">Ingresar</button>
      </form>


      <!--AÑADIR EMPRESA-->
      <form class="formulario3" id="form" method="post" onsubmit="return AnanadirT()">
        <a href="#">
          <i id="cerrar3"><ion-icon name="close-circle-outline"></ion-icon></i>
        </a>
        <h1 class="formulario-titulo">Nuevo empleo</h1>
        <input type="text" class="formulario-entrada" id="ann1" name="nombre" autocomplete="off">
        <label for="" class="formulario-label"><i class="material-icons">business</i>Nombre de la empresa:</label>
        <div id="errorempresa"></div>
        <input type="text" class="formulario-entrada" id="ann2" name="ann2" autocomplete="off">
        <label for="" class="formulario-label"><i class="material-icons">business_center</i>Nombre del trabajo:</label>
        <div id="errortrabajo"></div>
        <input type="text" class="formulario-entrada" id="ann3" name="ann3" autocomplete="off">
        <label for="" class="formulario-label"><i class='fas fa-pencil-alt'></i> Descripcion del trabajo:</label>
        <div id="errordestrabajo"></div>
        <input type="tel" class="formulario-entrada" id="ann7" name="ann7" pattern="[0-9]+" autocomplete="off">
        <label for="" class="formulario-label"><i class="fa fa-dollar"></i> Salario:</label>
        <div id="errorsalario"></div>
        <input type="text" class="formulario-entrada" id="ann4" name="ann4" autocomplete="off">
        <label for="" class="formulario-label"><i class="material-icons">gps_fixed</i>Ubicacion:</label>
        <div id="errorubicacion"></div>
        <input type="text" class="formulario-entrada" id="ann5" name="ann5" autocomplete="off">
        <label for="" class="formulario-label"><i class='far fa-calendar-alt'></i> Horario:</label>
        <div id="errorhorario"></div>
        <input type="text" class="formulario-entrada" id="ann8" name="ann8" autocomplete="off" placeholder="                                    dd/mm/aaaa">
        <label for="" class="formulario-label"><i class='far fa-calendar-alt'></i> Cierre de convocatoria:</label>
        <div id="errorconv"></div>
        <input type="email" class="formulario-entrada" id="ann6" name="ann6" autocomplete="off">
        <label for="" class="formulario-label"><i class="material-icons">email</i> Correo de contacto:</label>
        <div id="errorcontacto"></div>
        <input type="text" class="conrr" value="la empresa se ha registrado correctamente. ver en trabajos" name="conffE">
        <button type="submit" value="Añadir" class="anTra" name="registrar">Enviar</button>
        <br>
        <div id="error3"></div>
        </form>


<?php
include("registrar.php");
?>

      <!--imagen principal-->
      <header class="shoucase" id="shoucase-entrada">
        <h2>BUSCAR EMPLEO.</h2>
        <p>Buscar empleo es una herramienta creada por estudiantes de la univercidad de cartagena con el fin de ayudar a estudiantes de diferentes universidades a conseguir un empleo de acuerdo a sus necesidades para que así no se vean en la necesidad de abandonar sus estudios.</p>
      </header>


        <div  class="trabajos2">

  <?php
       $inc = include("baseDatos.php");
       $i=0;
       if ($inc) {
       $consulta = "SELECT nombreempresa, nombreempleo, descripcion, ubicacion, horario, contacto FROM datos";
       $resultado = mysqli_query($conex,$consulta);
       if ($resultado) {
         while (($row = $resultado->fetch_array()) && $i<4) {
           $empresa = $row['nombreempresa'];
           $trabajo = $row['nombreempleo'];
           $descri = $row['descripcion'];
           $ubi = $row['ubicacion'];
           $hor = $row['horario'];
           //$cont = $row['contacto'];
           $i++;
  ?>

           <div>
             <div class="uno">
               <!--<img src="img/noticia1.jpg" alt="noticia uno">-->
               <h3><?php echo $empresa; ?></h3>
               <h3><?php echo $trabajo; ?></h3>
               <p><?php echo $descri; ?></p>
               <p><?php echo $ubi; ?></p>
               <p><?php echo $hor; ?></p>
             </div>
           </div>

           <?php

         }
       }
     }
        ?>
       </div>

      <section class="seccion">

        <div class="contenido">
          <h2>Crea tu perfil</h2>
          <p> Registra tu hoja de vida y empieza. Registra tu hoja de vida y empieza a aplicar a los trabajos disponibles gratis. Conoce las vacantes.</p>
        </div>
      </section>

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
