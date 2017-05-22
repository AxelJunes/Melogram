<div class="navbar navbar-inverse navbar-general">
  <div class="container">
    <nav class="container-fluid navigation-menu">
        <div class="navbar-header">
            <a href="<?php echo $helper->url('user','profile') ?>&id=<?php echo $logged; ?>"><img src="public/img/logos/melogram.png" class="img-responsive logo"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo $helper->url('user','signout'); ?>"><span class="glyphicon glyphicon-log-out top-right-logo"></span>Cerrar Sesión</a></li>
        </ul>
    </nav>
  </div>
</div>
