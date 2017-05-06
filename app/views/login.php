<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicia Sesión</title>
    <link rel="shortcut icon" type="image/png" href="./public/img/icons/favicon.png"/>
    <link  rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/login.css">
  </head>
  <body>
    <!-- Header -->
    <div class="container-fluid">
      <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid">
         <div class="navbar-header">
           <a class="navbar-brand" href="index.php">MELOGRAM</a>
         </div>
       </div>
     </nav>
    </div>
    <!-- Content -->
    <div class="container main">
      <div class="jumbotron col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 login">
        <form action="" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required="required">
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-lg entrar" name="submit">Entrar</button>
          <br>
        </form>
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
    <script src="./public/js/bootstrap.min.js"></script>
  </body>
</html>
