<?php

  class UserController extends BaseController{

      private $user;
      private $entity;

      public function __construct() {
          parent::__construct();
          require_once(BASE_PATH . '/app/models/User.php');

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

      /**
      * Shows user profile
      */
      public function profile(){
        $users = $this->user->getById($_GET['id']);
        $this->view("profile", "", array(
            "users" => $users
        ));
      }

      /**
      * Log into application
      */
      public function login(){
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
              $this->view("admin", "", array(
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
            //Password doesn't match
            $this->view("login", "", "");
          }
        }
        else{
          //User doesn't exist
          $this->view("login", "", "");
        }
      }

      /**
      * Sign Up for application
      */
      public function signup(){
        $this->user->setId($_POST['id']);
        //Check if user doesn't already exist
        if(!$this->user->exists()){
          //Check if passwords match
          if($_POST['pass1'] == $_POST['pass2']){
            //Passwords match
            $this->user->setPassword($_POST['pass1']);
            $this->user->setAge($_POST['age']);
            $this->user->setMusic($_POST['music']);
            //Insert into database with given attributes
            $this->user->create();
            $this->user->addToGroups($this->user->getId(), $this->user->getAge(), $this->user->getMusic());
            //Redirect to user profile after inserting into database
            $users = $this->user->getById($this->user->getId());
            $this->view("profile", "", array(
                "users" => $users
            ));
          }
          else{
            //Passwords don't match
            echo "Passwords don't match!";
          }
        }
        else{
          //User already registered in database
          echo "User already exists!";
        }
      }

      /**
      * Send message to other users
      */
      public function sendMessage(){
        $sender = $_GET['id'];
        //We know the receiver exists, so we just have to check whether it
        //is a group, a user or everyone.
        $receiver = $_POST['receiver'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (strpos($receiver, '(Grupo)')){
          //If receiver is a group
          $splits = explode(" ", $receiver);
          //We know that what is left of the space is the name of the group,
          //because of the precondition
          $receiver = $splits[0];
          //Get group receivers
          $groups = $this->user->getGroupReceivers($receiver);
          //Send to all users in group
          foreach ($groups as $group) {
            $userRec = $group["user"];
            if($userRec != $sender){
              $this->user->createMessage($sender, $userRec, $subject, $message);
            }
          }
        }
        else {
          if($receiver == 'Todos'){
            //If the receivers are all the users
            $users = $this->user->getMessageReceivers();
            //Send to all users
            foreach ($users as $user){
              if($user->getId() != $sender){
                $this->user->createMessage($sender, $user->getId(), $subject, $message);
              }
            }
          }
          else{
            //If the receiver is one user
            $this->user->createMessage($sender, $receiver, $subject, $message);
          }
        }
        //Change view to profile
        $users = $this->user->getById($this->user->getId());
        $this->view("profile", "", array(
            "users" => $users
        ));
      }

      /**
      * Get messages sent by user
      */
      public function sentMessages(){
        $users = $this->user->getById($_GET['id']);
        $messages = $this->user->getSentMessages($_GET['id']);
        $this->view("sent", "Messages", array(
            "users" => $users,
            "messages" => $messages
        ));
      }

      /**
      * Get messages received by user
      */
      public function receivedMessages(){
        $users = $this->user->getById($_GET['id']);
        $messages = $this->user->getReceivedMessages($_GET['id']);
        $this->view("received", "Messages", array(
            "users" => $users,
            "messages" => $messages
        ));
      }
  }

?>
