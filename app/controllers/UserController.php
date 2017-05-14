<?php

  class UserController extends BaseController{

      private $user;
      private $entity;

      public function __construct() {
          parent::__construct();
          require_once('app/models/User.php');

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
          if (!isset($_GET['id'])) {
              $this->view("error", "", array(
                  "key" => "Código de Error",
                  "desc" => "Descripción del Error"
              ));
          }
          else{
            $users = $this->user->getById($_GET['id']);
            $this->view("show", $this->entity, array(
                "users" => $users
            ));
          }
      }

      public function login(){
        if (isset($_POST['id'])) {
          $this->user->setId($_POST['id']);
          //Check if user exists
          if($this->user->exists()){
            $this->user->setPassword($_POST['password']);
            //Compare database users password with submitted password
            $users = $this->user->getById($this->user->getId());
            if($users[0]->getPassword() == $this->user->getPassword()){
              //If the passwords match
              if($this->user->getId() == 'admin'){
                //If administrator
                $this->view("index", $this->entity, array(
                    "users" => $users
                ));
              }
              else{
                //If normal user
                $this->view("profile", "", array(
                    "users" => $users
                ));
              }
            }
            else {
              echo "The password doesn't match";
            }
          }
          else{
            //Inform if user doesn't exist
            $this->view("login", "", array(
                "desc" => "Usuario o contraseña incorrectos"
            ));
          }
        }
      }
  }

?>
