<!DOCTYPE html>
<html lang="es">
  <head>
      <?php require_once('layout/library.php'); ?>
      <title>Home</title>
  </head>

  <body>
    <?php require_once('layout/headerIndex.php'); ?>
    <div class="container">
        <div class="jumbotron">
          <ul>
            <li>
              <h2>Los grupos de chat son siempre los mismos?</h2>
              <p>
                No, los administradores añaden nuevos grupos continuamente.
              </p>
            </li>
            <li>
              <h2>Es posible elegir varios estilos de música al registrarse?</h2>
              <p>
                No, cada usuario tiene un tipo de música asignado.
              </p>
            </li>
            <li>
              <h2>Sólo se pueden ver los mensajes recibidos?</h2>
              <p>
                Aparte de los mensajes recibidos, también se pueden ver los mensajes enviados.
              </p>
            </li>
          </ul>
        </div><!-- Jumbotron -->
    </div>
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
