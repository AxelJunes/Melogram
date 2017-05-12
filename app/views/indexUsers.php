<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('layout/library.php'); ?>
    <title>Lista de Usuarios</title>
</head>
<body>
<div class="container">
    <!-- The justified navigation menu is meant for single line per list item.
     Multiple lines will require custom code not provided by Bootstrap. -->
    <?php require_once('layout/header.php'); ?>
    <section>
        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>All Users</h1>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Actualizar...</a></p>
        </div>

        <!-- Example row of columns -->
        <div class="row">
            <?php foreach ($users as $user) { ?>
                <div class="col-lg-4">
                    <h2>Nombre: <?php echo $user->getName(); ?></h2>
                    <p class="text-danger">
                       Edad: <?php echo $user->getAge(); ?>
                    </p>
                    <p>
                        <a class="btn btn-primary" href="<?php echo $helper->url('user','show') ?>&id=<?php echo $user->getId(); ?>" role="button">Ver detalle &raquo;</a>
                    </p>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- Site footer -->
    <?php require_once('layout/footer.php'); ?>

</div>
<script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
