<?php
  session_start();
  //Si el usuario ha completado los dos campos
  if(isset($_POST['username']) && isset($_POST['password'])){
    //Abrimos conexión con la base de datos
    $db = mysqli_connect('localhost','root','','melogram');
    $usuario = $_POST['username'];
    $password = $_POST['password'];
    $checkUser = mysqli_query($db, "SELECT Nombre FROM usuarios WHERE Nombre = '$usuario'");
    //Comprobamos si el usuario está en la base de datos
    if(mysqli_num_rows($checkUser) == 0){
      //Si el usuario no existe, volvemos a la página de login
      header("Location: login.php");
    }
    else{
      //Sacamos la contraseña del usuario
      $passQuery = mysqli_query($db, "SELECT Password FROM usuarios WHERE Nombre = '$usuario'");
      $pwd = mysqli_fetch_object($passQuery);
      //Comprobamos si la contraseña proporcionada corresponde al usuario
      if($pwd->Password != $password){
        //Si la contraseña es incorrecta, volvemos a la página de login
        header("Location: login.php");
      }
      //Si la contraseña es correcta
      else{
        //Comprobamos si el usuario es administrador
        if($usuario == 'admin'){
          header("Location: admin.php");
        }
        else
          header("Location: profile.php");
      }
    }
    //Cerramos la conexión con la base de datos
    mysqli_close($db);
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrate</title>
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
           <h3>MELOGRAM</h3>
         </div>
       </div>
     </nav>
    </div>
    <!-- Content -->
    <div class="container main">
      <div class="jumbotron col-xs-offset-3 col-xs-6 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 login">
        <form>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="username" placeholder="Nombre de usuario" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-alert"></span></span>
            <input type="number" min="0" class="form-control" id="age" placeholder="Edad" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-music"></span></span>
            <input type="text" class="form-control" id="music" placeholder="Género preferido" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" id="pass1" placeholder="Contraseña" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" id="pass2" placeholder="Repite la contraseña" required="required">
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-lg entrar">Crear cuenta</button>
          <br><br>
          <div class="link">Ya tienes cuenta?<a href="login.php">Inicia Sesión!</a></div>
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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
