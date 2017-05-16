<?php

  class MessageController extends BaseController{

      private $message;
      private $entity;

      public function __construct() {
          parent::__construct();
          require_once(BASE_PATH . '/app/models/Message.php');

          $this->message = new Message();
          $this->entity = "Messages";
      }

      public function index() {
          // Store message in array
          $messages = $this->message->getAll();
          $this->view("index", $this->entity, array(
              "messages" => $messages
          ));
      }

      /**
      * Show message by id
      */
      public function show() {
          if (!isset($_GET['id'])) {
              $this->view("error", "", array(
                  "key" => "Código de Error",
                  "desc" => "Descripción del Error"
              ));
          }
          else{
            $messages = $this->message->getById($_GET['id']);
            $this->view("show", $this->entity, array(
                "messages" => $messages
            ));
          }
      }

      public function add(){
        $this->group->setId();
        //Set attributes
        $this->group->setGenre($_POST['music']);
        $this->group->setMinAge($_POST['minAge']);
        $this->group->setMaxAge($_POST['maxAge']);
        //Insert into database with given attributes
        $this->group->create();
        //Redirect to admin page
        $this->view("admin", "", "");
        }
        else{
          //User already registered in database
          echo "Group already exists!";
        }
      }


  }

?>
