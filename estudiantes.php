<?php
    session_start();
    if (!isset($_SESSION['EEmpresa'])) {
      header('Location: entrada.php');
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESTUDIANTES | BUSCAR EMPLEOS</title>
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--oswald-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">
<!--animacion-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!--contacto-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->


    <!--ESTILOS DE CSS-->
    <link rel="stylesheet" href="style.css">

    <!--<link rel="stylesheet" href="respuestas.php">-->



  </head>
  <body>

    <div class="conteiner">
      <nav class="cabeza">
        <img src="img/logo.jpg" alt="prueba uno" class="imagen-uno">
        <h1>BUSCAR EMPLEO</h1>
      </nav>

      <nav class="nav-main">

        <ul class="nav-menu">

          <li>
            <a href="empleosEmpresas.php" class="inicio">Trabajos</a>
          </li>
          <li>
            <a href="estudiantes.php" class="trab" id="color-tra">Estudiantes</a>
          </li>
          <!--<li>
            <a href="empresas.php">Empresas</a>
          </li>
          <li>
            <a href="ciudades.php">Ciudades</a>
          </li>-->

        </ul>


        <div class="usuycon2">
          <p id="entradat"><i class="fas fa-address-book"></i> <?php echo $_SESSION['EEmpresa'] ?></p>
          <a href="cerrar.php" id="cerrarSesion" onclick="return confirmarCierre()">cerrar sesion</a>
        </div>

<nav class="conRe">

  <ul class="contacto-boton"></ul>

  <ul class="registrate-boton"></ul>

  <form action="estudiantes.php" method="post" name="envv" class="b">
    <input type="text" name="buscarEs" value="">
    <input type="submit" value="BUSCAR" class="bb" placeholder="Empresa, trabajo...">
  </form>
</nav>

      </nav>

      <hr>

      <a href="#">Resultados de busqueda
        <i class="fas fa-arrow-right" id="resultadoBusqueda"></i>
      </a>

      <div class="BUSCARBUSCAR">
      <a href="#">
      <i class="fas fa-arrow-left" id="cerrarBuscar"></i>
      </a>

            <?php

            include("buscar2.php");

      $confirmar = 0;
            while ($row = mysqli_fetch_array($sql_query)){ $confirmar=1;?>

              <div class="uno">

            <tr>
                  <!--<div class="uno2">-->
                  <h3><?=$row['nombres']?></h3>
                  <h3><?=$row['apellidos']?></h3>
                  <p><?=$row['direccion']?></p>
                  <p><?=$row['universidad']?></p>
                  <p><?=$row['carrera']?></p>
                  <a href="mailto:<?=$row['correo']?>?Subject=HOJA%20DE%20VIDA:%20Buscar%20empleo"><p><?=$row['correo']?></p></a>
                </div>


                </tr>

      <!--  </div>-->

      <?php }?>

      <?php if ($confirmar==0) { ?>
      <h3>PARAMETRO DE BUSQUEDA NO ENCONTRADO</h3>
      <?php } ?>

            </div>





      <ul class="registrate-boton-op">
        <li>
          <a href="#" class="bt-estud"></a>

          <a href="#" class="bt-empre"></a>
        </li>
      </ul>
      <!--REGISTRO-->

<form class="formulario">
  <a href="#">
    <i class="fas fa-arrow-left" id="cerrar"></i>
  </a>
</form>

<form class="formulario2">
  <a href="#">
    <i class="fas fa-arrow-left" id="cerrar2"></i>
  </a>
</form>

<form class="formulario3" id="form" method="post" onsubmit="return AnanadirT()">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrar3"></i>
        </a>
      </form>



            <!--<div class="anadir2">
              <h1>El empleo ha sido añadido exitosamente</h1>
              <input type="button" name="" value="Aceptar" id="Acon">
            </div>-->



      <!--imagen principal-->
      <header class="shoucase" id="shoucase-trabajos">
        <h2>Estudiantes</h2>
        <p>Este espacio cuenta con la informacion campleta de los registrados en el sitema</p>
        <!--<a href="#" class="boton">Mirar mas <i class="fas fa-angle-double-right"></i></a>-->

      </header>


<div  class="trabajos">

<?php
$inc = include("baseDatos.php");
if ($inc) {
//$consulta = "SELECT nombreempresa, nombreempleo, descripcion, salario, ubicacion, horario, cierre, contacto FROM datos";
$consulta = "SELECT nombres, apellidos, direccion, universidad, carrera, correo FROM estudiantes";
$resultado = mysqli_query($estu,$consulta);
if ($resultado) {
  while ($row = $resultado->fetch_array()) {
    $nombres = $row['nombres'];
    $apellidos = $row['apellidos'];
    $direccion = $row['direccion'];
    $universidad = $row['universidad'];
    $carrera = $row['carrera'];
    $correo = $row['correo'];
    ?>


     <div>
      <div class="uno">
        <!--<img src="img/noticia1.jpg" alt="noticia uno">-->
        <h3><?php echo $nombres; ?></h3>
        <dt> <h3><?php echo $apellidos; ?></h3>
        <p><?php echo $direccion; ?></p>
        <p><?php echo $universidad; ?></p>
        <p><?php echo $carrera; ?></p></dt>
        <a href="mailto:<?php echo $cont; ?>?Subject=HOJA%20DE%20VIDA:%20Buscar%20empleo"><p><?php echo $correo; ?></p></a>
      </div>
    </div>

    <?php
  }
}
}
 ?>
</div>

      <section class="social">
        <p>Contactanos</p>
        <div class="enlaces">
          <a href="#" class="ico">
            <i class="fab fa-facebook-f"></i>
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

        <iframe class="mapa2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7852.657214932391!2d-75.19567482775581!3d10.23505892890024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e58a7b277373005%3A0x8f96c03e78ec42be!2sMahates%2C%20Bol%C3%ADvar!5e0!3m2!1ses!2sco!4v1624149738708!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </section>


    </div>



    <footer class="pie">BUSCAR EMPLEO <ion-icon name="checkmark-circle-outline"></ion-icon></footer>


<!--script-->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="main3.js"></script>
<!--<script type="text/javascript" src="main2.js"></script>-->

  </body>
</html>
