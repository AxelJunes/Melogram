<!DOCTYPE html>
<html>
  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Profile</title>
  </head>
  <body>
    <!-- Header -->
    <?php require_once('layout/header.php'); ?>
    <!-- Content -->
    <div class="container">
      <div class="jumbotron">
        <?php foreach ($users as $user) { ?>
          <h2>User: <?php echo $user->getId(); ?></h2>
          <p class="text-info">Age: <?php echo $user->getAge(); ?></p>
          <p class="text-success">Music preference: <?php echo $user->getMusic(); ?></p>
        <?php } ?>
      </div>
    </div>
    <!-- Footer -->
    <?php require_once('layout/footer.php'); ?>
    <!-- Javascript -->
    <?php require_once('layout/scripts.php'); ?>
  </body>
</html>
