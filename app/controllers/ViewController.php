<?php
  require_once(BASE_PATH . '/app/models/EntityBase.php');
  require_once(BASE_PATH . '/app/models/Genre.php');
  require_once(BASE_PATH . '/app/models/User.php');
  require_once(BASE_PATH . '/app/models/Group.php');

  class ViewController extends BaseController {
      private $entity;

      function __construct() {
          parent::__construct();
          $this->entity = "";
      }

      public function home() {
          $this->view("home", $this->entity, "");
      }

      public function admin() {
          $this->view("admin", $this->entity, "");
      }

      public function login(){
        $this->view("login", $this->entity, "");
      }

      public function signup(){
        //Create a new Genre model to be able to display a dropdown in signup
        $genre = new Genre();
        $genres = $genre->getAll();
        $this->view("signup", $this->entity, array(
            "genres" => $genres
        ));
      }

      public function groupForm(){
        //Create a new Genre model to be able to display a dropdown in signup
        $genre = new Genre();
        $genres = $genre->getAll();
        $this->view("addGroups", $this->entity, array(
            "genres" => $genres
        ));
      }

      public function messageForm(){
        //User model to get all users from database
        $user = new User();
        //Array with all the registered users
        $users = $user->getMessageReceivers();
        //Group model to get all the senders groups
        $group = new Group();
        //Array with all the registered groups
        $groups = $group->getMessageGroups();

        $this->view("sendMessage", $this->entity, array(
            "users" => $users,
            "groups" => $groups,
            "logged" => $_GET['id']
        ));
      }
  }
?>
