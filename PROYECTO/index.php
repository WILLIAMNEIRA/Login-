<?php require_once ('conexion.php'); $conexion=conectarBD();?>
<!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Empresa De Servicios Publicos</title>
      <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
      <link rel="stylesheet" href="../PROYECTO/css/estilos.css">
      <div class="login">
          <img  class="logotipo" src="img/logo3.png" alt="Login usuario">
          <div class="animate__animated animate__backInDown">
          <h1>Inicio de sesión</h1>
              <form action="validar.php" method="POST"> 
               <input type="text" placeholder=" Usuario " required><!--Usuario-->
               <input type="password" placeholder="&#128272; Contraseña" required><br><!--Contraseña-->
               <button class="botton">Aceptar</a><br><br>
             </form>
          </div>
           <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      </body>
      </html>
     
  </head>
  <body> 