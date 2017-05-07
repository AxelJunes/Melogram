<?php
  session_start();
  //Abrimos conexión con la base de datos
  $db = mysqli_connect('localhost','root','','melogram');
  //Si el usuario ha completado los dos campos
  if(isset($_POST['username']) && isset($_POST['age']) && isset($_POST['music']) && isset($_POST['pass1']) && isset($_POST['pass2'])){
    //Comprobamos si el usuario ha escrito las dos contraseñas iguales
    if($_POST['pass1'] == $_POST['pass2']){
      //Guardamos los datos proporcionados por el usuario
      $usuario = $_POST['username'];
      $password = $_POST['pass1'];
      $age = $_POST['age'];
      $music = $_POST['music'];

      //Actualizamos la variable de sesión del usuario
      $_SESSION['user'] = $usuario;

      //Comprobamos si el usuario ya está en la base de datos
      $checkUsername = mysqli_query($db, "SELECT Nombre FROM usuarios WHERE Nombre = '$usuario'");
      if(mysqli_num_rows($checkUsername) != 0){
        //Si ya existe el nombre en la base de datos, redirigimos a la página de registro
        header("Location: signUp.php");
      }
      else{
        $checkUser = mysqli_query($db, "SELECT Nombre FROM usuarios WHERE Nombre = '$usuario'");
        //Comprobamos si el usuario está en la base de datos
        if(mysqli_num_rows($checkUser) != 0){
          //Si el usuario existe, volvemos a la página de registro
          header("Location: signUp.php");
        }
        else{
          $insert = "INSERT INTO usuarios (Nombre, Password, Edad, Musica) VALUES ('$usuario', '$password', '$age', '$music')";
          if(!mysqli_query($db, $insert)){
            //Si la inserción ha dado error
            header("Location: signUp.php");
          }
          else{
            header("Location: profile.php");
          }
        }
      }
    }
    else{
      //Si las dos contraseñas no son iguales, volvemos a la página de registro
      header("Location: signUp.php");
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
    <title>Registro</title>
    <link rel="shortcut icon" type="image/png" href="/img/icons/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signUp.css">
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
        <form action="signUp.php" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" name="username" placeholder="Nombre de usuario" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-alert"></span></span>
            <input type="number" min="0" class="form-control" name="age" placeholder="Edad" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-music"></span></span>
            <?php
              //Menú dropdown con los géneros registrados en la base de datos
              $generos = mysqli_query($db, "SELECT * FROM generos");
              echo "<select class='form-control genero' name='music'>";
              echo "<option selected disabled hidden>Música preferida</option>";
              while($res = mysqli_fetch_array($generos)){
                echo "<option value='" . $res['Genero'] . "'>" . $res['Genero'] . "</option>";
              }
              echo "</select>";
              echo "<br><br>";
            ?>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="pass1" placeholder="Contraseña" required="required">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="pass2" placeholder="Repite la contraseña" required="required">
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
