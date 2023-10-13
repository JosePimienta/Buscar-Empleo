<?php
    session_start();
    if (!isset($_SESSION['nombre'])) {
      header('Location: entrada.php');
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INICIO | BUSCAR EMPLEO</title>
    <meta charset="utf-8">
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
            <a href="trabajos.php" class="trab">Trabajos</a>
          </li>
          <li>
            <a href="empresas.php" class="empresas">Empresas</a>
          </li>
          <li>
            <a href="ciudades.php" class="ciudad">Ciudades</a>
          </li>
        </ul>

        <div class="usuycon2">
          <p id="entradat"><i class="fas fa-address-book"></i> <?php echo $_SESSION['nombre'] ?></p>
          <a href="cerrar.php" id="cerrarSesion" onclick="return confirmarCierre()">cerrar sesion</a>
        </div>

           <nav class="conRe2">

                <ul class="contacto-boton"></ul>

                <ul class="registrate-boton"></ul>

                <form action="index2.php" method="post" class="buscar2">
                  <!--<input type="text" name="buscarin">
                  <input type="submit" value="BUSCAR">-->


                </form>

      </nav>

      </nav>
      <hr>







        <ul class="registrate-boton-op">
          <li>
            <a href="#" class="bt-estud">Soy estudiante</a>

            <a href="#" class="bt-empre">Soy empresa</a>
          </li>
        </ul>


      <!--REGISTRO-->
      <form class="formulario" id="Form" method="post" onsubmit="return Registro()">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrar"></i>
        </a>
      </form>

      <form class="formulario2" id="Form2" onsubmit="return iniciar()">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrar2"></i>
        </a>
      </form>

      <form class="formulario3" id="form" method="post" onsubmit="return AnanadirT()">
        <a href="#">
          <i class="fas fa-arrow-left" id="cerrar3"></i>
        </a>
        </form>

<?php
include("registrar.php");
?>

      <!--imagen principal-->
      <header class="shoucase" id="shoucase-index">
        <h2>¡BIENVENIDO!</h2>
        <p>Continua con tu proceso para buscar empleo.<br>En BUSCAR EMPLEO encotraras ofertas de empleo ofrecidas por diferentes empresas en las cuales podras elegir la que mas se acomode a tus necesidades.</p>
      </header>

        <div  class="trabajos2">

       <?php
       $inc = include("baseDatos.php");
       $i=0;
       if ($inc) {
       $consulta = "SELECT nombreempresa, nombreempleo, descripcion, salario, ubicacion, horario, cierre, contacto FROM datos";
       $resultado = mysqli_query($conex,$consulta);
       if ($resultado) {
         while (($row = $resultado->fetch_array()) && $i<4) {
           $empresa = $row['nombreempresa'];
           $trabajo = $row['nombreempleo'];
           $descri = $row['descripcion'];
           $sala = $row['salario'];
           $ubi = $row['ubicacion'];
           $hor = $row['horario'];
           $cie = $row['cierre'];
           $cont = $row['contacto'];
           $i++;
           ?>

           <div>
             <div class="uno">
               <!--<img src="img/noticia1.jpg" alt="noticia uno">-->
               <h3><?php echo $empresa; ?></h3>
               <h3><?php echo $trabajo; ?></h3>
               <p><?php echo $descri; ?></p>
               <p>Salario: <?php echo $sala; ?></p>
               <p><?php echo $ubi; ?></p>
               <p><?php echo $hor; ?></p>
               <p>Cierre de convocatoria: <?php echo $cie; ?></p>
               <a href="mailto:<?php echo $cont; ?>?Subject=Buscar%20empleo%20PREGUNTA"><p><?php echo $cont; ?></p></a>
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
          <h2>¡OBSERVA!</h2>
          <p>En la opcion Trabajos encontraras todas las ofertas de empleo ofrecidas por diferentes empresas con todos los detalles necesarios para tu eleccion.</p>
        </div>
      </section>

      <div  class="trabajos2">

     <?php
     $inc = include("baseDatos.php");
     $i=0;
     $j=6;
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
         $cont = $row['contacto'];
         $j++;
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
             <a href="<?php echo $cont; ?>"><p><?php echo $cont; ?></p></a>
           </div>
         </div>

         <?php

       }
     }
     }
      ?>
     </div>


      <section class="seccion2">
        <div class="contenido">
          <h2>¡DECIDETE!</h2>
          <p>Elige entre todos los empleos ofrecidos enviando tu hoja de vida al correo suministrado por la empresa.</p>
        </div>
      </section>

      <section class="social">
        <p>Contactanos</p>
        <div class="enlaces">
          <a href="https://www.facebook.com/joseluis.pimientavaliente" class="ico">
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
      </section>

    </div>


    <footer class="pie">BUSCAR EMPLEO <ion-icon name="checkmark-circle-outline"></ion-icon></footer>


<!--script-->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="main.js"></script>
<!--<script type="text/javascript" src="main2.js"></script>-->

<!--<script>
Swal.fire({
  //position: 'top-end',
  //icon: 'success',
  title: 'BIENVENIDO',
  showConfirmButton: false,
  timer: 1500,
  background: 'rgba(109, 250, 84, 0.5)'
});
</script>-->
  </body>
</html>
