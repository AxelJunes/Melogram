<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('layout/library.php'); ?>
    <title>Show User - Details</title>
</head>
<body>
<div class="container">
    <?php require_once('layout/header.php'); ?>
    <section>
    <div class="row">
        <?php foreach ($users as $user) { ?>
            <div class="col-lg-12">
                <h2>User: <?php echo $user->getName(); ?></h2>
                <p class="text-info">Age: <?php echo $user->getAge(); ?></p>
                <p class="text-success">Music preference: <?php echo $user->getMusic(); ?></p>
                <p><a class="btn btn-primary" href="#" role="button">Volver &raquo;</a></p>
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
