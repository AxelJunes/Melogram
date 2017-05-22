<?php
  require_once(BASE_PATH . '/app/models/EntityBase.php');
  require_once(BASE_PATH . '/app/models/Genre.php');

  class GroupController extends BaseController{

      private $group;
      private $entity;

      public function __construct() {
          parent::__construct();
          require_once(BASE_PATH . '/app/models/Group.php');

          $this->group = new Group();
          $this->entity = "Groups";
      }

      public function index() {
          // Store group in array
          $groups = $this->group->getAll();
          $this->view("index", $this->entity, array(
              "groups" => $groups
          ));
      }

      /**
      * Show groups in a table, for the admin view
      */
      public function table() {
        session_start();
        if (!(isset($_SESSION["username"]) && isset($_SESSION["password"]))) {
            $this->view("error", "", array(
                "key" => "403",
                "desc" => "Acceso prohibido"
            ));
        }
        else{
          // Store group in array
          $groups = $this->group->getAll();
          $this->view("table", $this->entity, array(
              "groups" => $groups
          ));
        }
      }

      public function show() {
        session_start();
        if (!(isset($_SESSION["username"]) && isset($_SESSION["password"]))) {
            $this->view("error", "", array(
                "key" => "403",
                "desc" => "Acceso prohibido"
            ));
        }
        else{
          if (!isset($_GET['id'])) {
              $this->view("error", "", "");
          }
          else{
            $groups = $this->group->getById($_GET['id']);
            $this->view("show", $this->entity, array(
                "groups" => $groups
            ));
          }
        }
      }

      public function add(){
        session_start();
        if (!(isset($_SESSION["username"]) && isset($_SESSION["password"]))) {
            $this->view("error", "", array(
                "key" => "403",
                "desc" => "Acceso prohibido"
            ));
        }
        else{
          $this->group->setId($_POST['id']);
          $genre = new Genre();
          $genres = $genre->getAll();
          //Validate name of the group
          if(!$this->group->valid($this->group->getId())){
            //Check if group doesn't already exist
            if(!$this->group->exists()){
              //Set attributes
              $this->group->setGenre($_POST['music']);
              $this->group->setMinAge($_POST['minAge']);
              $this->group->setMaxAge($_POST['maxAge']);
              //Insert into database with given attributes
              $this->group->create();
              //Add users that should be members of the group
              $this->group->addUsersToGroups(
                $this->group->getId(),
                $this->group->getGenre(),
                $this->group->getMinAge(),
                $this->group->getMaxAge()
              );
              $message = "Grupo dado de alta correctamente";
              //Redirect to admin page
              $this->view("admin", "", array(
                  "message" => $message
              ));
            }
            else{
              //User already registered in database
              $message = "Ese nombre de grupo ya existe!";
              $this->view("add", "Groups", array(
                  "genres" => $genres,
                  "message" => $message
              ));
            }
          }
          else{
            //Group name is not valid
            $message = "El nombre del grupo no puede contener espacios!";
            $this->view("add", "Groups", array(
                "genres" => $genres,
                "message" => $message
            ));
          }
        }
      }
  }

?>
