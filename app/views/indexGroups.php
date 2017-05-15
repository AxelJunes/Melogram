

<!DOCTYPE html>
<html>
  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Página de administrador</title>
  </head>
  <body>
    <!-- Header -->
    <?php require_once('layout/headerAdmin.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
        <?php foreach ($groups as $group) { ?>
            <h2><?php echo $group->getId(); ?></h2>
            <p>
                <a class="btn btn-primary" href="<?php echo $helper->url('group','show') ?>&id=<?php echo $group->getId(); ?>" role="button">Ver detalle</a>
            </p>
        <?php } ?>
      </div>
    </div>
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
