<?php

  class UserController extends BaseController{

      private $user;
      private $entity;

      public function __construct() {
          parent::__construct();
          require_once('app/models/user.php');

          $this->user = new User();
          $this->entity = "Users";
      }

      public function index() {
          // Store user in array
          $users = $this->user->getAll();
          $this->view("index", $this->entity, array(
              "users" => $users
          ));
      }

      public function show() {
          // we expect a url like ?controller=user&action=show&id=x
          // without an id we just redirect to the error page as we need the id to find it in the database
          if (!isset($_GET['id'])) {
              $this->view("error", "", array(
                  "key" => "Código de Error",
                  "desc" => "Descripción del Error"
              ));
          }

          $users = $this->user->getById($_GET['id']);
          $this->view("show", $this->entity, array(
              "users" => $users
          ));
      }
  }

?>
