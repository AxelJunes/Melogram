<?php
  /**
  * Controlador base
  */
  class BaseController {

      function __construct() {
          require_once ('app/models/entityBase.php');
      }

      //Funcionalidades

      public function view($view, $entity, $data){
          foreach ($data as $id_assoc => $valor) {
              ${$id_assoc} = $valor;
          }

          require_once 'app/models/helperView.php';

          $helper = new HelperView();

          require_once 'app/views/'.$view.$entity.'.php';
      }

      public function login(){
          require_once 'app/views/login.php';
      }

      public function redirect($controller=DEFAULT_CONTROLLER,$action=DEFAULT_ACTION){
          header("Location:index.php?controller=".$controller."&action=".$action);
      }

  }
?>
