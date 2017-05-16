<?php
  require_once('Message.php');
  require_once('Group.php');

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
          //Variables to insert
          $id = $this->getId();
          $password = $this->getPassword();
          $age = $this->getAge();
          $music = $this->getMusic();

          $insert->bindParam(1, $id, PDO::PARAM_STR);
          $insert->bindParam(2, $password, PDO::PARAM_STR);
          $insert->bindParam(3, $age, PDO::PARAM_INT);
          $insert->bindParam(4, $music, PDO::PARAM_STR);
          //Execute prepared statement
          $insert->execute();
      }

      /**
      * Gets users that can receive a message by this user.
      * All registered users except admin and the sender itself.
      */
      public function getMessageReceivers(){
        $query=$this->db()->query("SELECT * FROM $this->table  WHERE id <> 'admin'");
        $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->getClass());
        return $resultSet;
      }

      /**
      * Inserts user into members table
      */
      public function addToGroups($id, $age, $music){
        $groups = $this->getUserGroups($age, $music);
        $count = sizeof($groups);
        while($count > 0){
          $insert = $this->db()->prepare("INSERT INTO members (user, chat_group) VALUES (?, ?)");
          $group = $groups[sizeof($groups)-$count]->getId();
          $insert->bindParam(1, $id, PDO::PARAM_STR);
          $insert->bindParam(2, $group, PDO::PARAM_STR);
          //Execute prepared statement
          $insert->execute();
          $count--;
        }
      }

      /**
      * Gets groups the user should be a member of after signing up
      */
      public function getUserGroups($age, $music){
        $query = $this->db()->prepare("SELECT * FROM groups WHERE genre = :music AND min_age <= :age AND max_age >= :age");
        $query->execute(array('music' => $music,'age' => $age));
        $resultSet = $query->fetchAll(PDO::FETCH_CLASS, "Group");
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
