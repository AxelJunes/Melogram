<?php
    require_once('/app/config/global.php');
    require_once('/app/config/DAO.php');
    require_once('/app/controllers/functions.php');
    require_once('/app/controllers/BaseController.php');

    if(isset($_GET["controller"])){
        $controllerObj = loadController($_GET["controller"]);
        execAction($controllerObj);
    }else{
        //Definimos el controlador por defecto
        $controllerObj=loadController(DEFAULT_CONTROLLER);
        execAction($controllerObj);
    }
?>
