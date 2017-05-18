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
          $messages = $this->message->getById($_GET['id']);
          $this->view("show", $this->entity, array(
              "messages" => $messages
          ));
      }

  }

?>
