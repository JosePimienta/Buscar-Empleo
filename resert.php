<?php
if (isset($_GET['email']) && isset($_GET['token'])) {
  $email=$_GET['email'];
  $token=$_GET['token'];
}else {
  header('Location: resert.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background:rgba(103, 125, 250,0.9);">
    <form id="recu" method="post" action="verificarToken.php">

        <h1 id="rh">Recuperar contraseña</h1>
        <label for="" id="remail">Codigo:</label>
        <input type="number" class="entradacorreo2" name="codigo" required>
        <input type="hidden" class="entradacorreo2" name="email" value="<?php echo $email; ?>">
        <input type="hidden" class="entradacorreo2" name="token" value="<?php echo $token; ?>">
        <button type="submit" name="button" id="brest">Restablecer</button>

    </form>

    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
