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
          // Store group in arraypredpred
          $groups = $this->group->getAll();
          $this->view("index", $this->entity, array(
              "groups" => $groups
          ));
      }

      /**
      * Show groups in a table, for the admin to see
      */
      public function table() {
          // Store group in array
          $groups = $this->group->getAll();
          $this->view("table", $this->entity, array(
              "groups" => $groups
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
            $groups = $this->group->getById($_GET['id']);
            $this->view("show", $this->entity, array(
                "groups" => $groups
            ));
          }
      }

      public function add(){
        $this->group->setId($_POST['id']);
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
            //Redirect to admin page
            $this->view("admin", "", "");
          }
          else{
            //User already registered in database
            echo "Group already exists!";
          }
        }
        else{
          //Group name is not valid
          echo "Group name is not valid!";
        }
      }
  }

?>
