<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('layout/library.php'); ?>
    <title>Detalles del grupo</title>
</head>
<body>
    <!-- Header -->
    <?php require_once('layout/headerAdmin.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
          <?php foreach ($groups as $group) { ?>
              <h2>Grupo: <?php echo $group->getId(); ?></h2>
              <p class="text-info">Género musical: <?php echo $group->getGenre(); ?></p>
              <p class="text-info">Edad mínima: <?php echo $group->getMinAge(); ?></p>
              <p class="text-info">Edad máxima: <?php echo $group->getMaxAge(); ?></p>
          <?php } ?>
      </div>
    </div>
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
</body>
</html>
