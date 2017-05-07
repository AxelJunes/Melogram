<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link rel="shortcut icon" type="image/png" href="img/icons/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <!-- Header -->
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid">
         <div class="navbar-header">
           <img id="logo" src="img/logos/melogram.png">
         </div>
       </div>
     </nav>
    </div>
    <!-- Content -->
    <div class="container main">
      <div class="jumbotron col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 login">
        <?php
          echo "<h2>Perfil de " . $_SESSION['user'] . "</h2>";
        ?>
      </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <ul>
          <li class="footer-list" href="#">Contacto</li>
          <li class="footer-list" href="#">Quiénes somos</li>
          <li class="footer-list" href="#">Social</li>
        </ul>
      </div>
    </footer>
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below) -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
