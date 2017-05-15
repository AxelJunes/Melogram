<?php
  require_once('Message.php');

  /**
   * Class User
   * @
   */
  class User extends EntityBase {
      private $id;
      private $password;
      private $age;
      private $music;

      public function __construct() {
          $this->table = "users";
          $class = "User";
          parent::__construct($this->table, $class);
      }

      /**
       * Create user
       */
      public function create() {
          $insert = $this->db()->prepare("INSERT INTO users (id, password, age, music) VALUES (?, ?, ?, ?)");
          $insert->bindParam(1, $this->getId(), PDO::PARAM_STR);
          $insert->bindParam(2, $this->getPassword(), PDO::PARAM_STR);
          $insert->bindParam(3, $this->getAge(), PDO::PARAM_INT);
          $insert->bindParam(4, $this->getMusic(), PDO::PARAM_STR);
          //Execute prepared statement
          $insert->execute();
      }

      /**
       * Gets users that will receive the message when sent to a group
       */
      public function getGroupReceivers($age, $music){
        $req = $this->db()->prepare("SELECT id FROM users WHERE age <= :age AND music = :music");
        $req->execute(array('age' => $age));
        $req->execute(array('music' => $music));
        $result = $req->fetchAll(PDO::FETCH_CLASS, $this->getClass());
        return $result;
      }

      /**
      * Gets users that can receive a message by this user.
      * All registered users except admin and the sender itself.
      */
      public function getMessageReceivers($id){
        $query=$this->db()->query("SELECT * FROM $this->table  WHERE id <> 'admin' AND id <> :id");
        $req->execute(array('id' => $id));
        $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->getClass());
        return $resultSet;
      }
      /**
      * Get messages sent by the user
      */
      public function getSentMessages($id){
        $req = $this->db()->prepare("SELECT * FROM messages WHERE sender = :id");
        $req->execute(array('id' => $id));
        $result = $req->fetchAll(PDO::FETCH_CLASS, "Message");
        return $result;
      }

      /**
      * Get messages sent by the user
      */
      public function getReceivedMessages($id){
        $req = $this->db()->prepare("SELECT * FROM messages WHERE receiver = :id");
        $req->execute(array('id' => $id));
        //Fetch messages as Message() objects
        $result = $req->fetchAll(PDO::FETCH_CLASS, "Message");
        return $result;
      }

      /**
      * Gets password given by id
      */
      public function getPassById($id){
        return $this->getById($id)->getPassword();
      }

      //Getter and setter methods

      /**
      * Get id
      */
      public function getId(){
          return $this->id;
      }

      /**
      * Set id
      */
      public function setId($id){
          $this->id = $id;
      }

      /**
      * Get password
      */
      public function getPassword(){
          return $this->password;
      }

      /**
      * Set password
      */
      public function setPassword($password){
          $this->password = $password;
      }

      /**
      * Get age
      */
      public function getAge(){
          return $this->age;
      }

      /**
      * Set age
      */
      public function setAge($age){
          $this->age = $age;
      }

      /**
      * Get music preference
      */
      public function getMusic(){
          return $this->music;
      }

      /**
      * Set music preference
      */
      public function setMusic($music){
          $this->music = $music;
      }

      /**
      * Get db table
      */
      public function getTable(){
          return $this->table;
      }

      /**
      * Set db table
      */
      function setTable($table){
          $this->table = $table;
      }
  }
?>
