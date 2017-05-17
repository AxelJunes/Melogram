<?php
  require_once('User.php');

  /**
   * Class Group
   * @
   */

  class Group extends EntityBase {

      private $id;
      private $genre;
      private $min_age;
      private $max_age;

      public function __construct() {
          $this->table = "groups";
          $class = "Group";
          parent::__construct($this->table, $class);
      }

     /**
      * Create group
      */
      public function create() {
          $insert = $this->db()->prepare("INSERT INTO groups (id, genre, min_age, max_age) VALUES (?, ?, ?, ?)");
          //Variables to insert
          $id = $this->getId();
          $genre = $this->getGenre();
          $minAge = $this->getMinAge();
          $maxAge = $this->getMaxAge();

          $insert->bindParam(1, $id, PDO::PARAM_STR);
          $insert->bindParam(2, $genre, PDO::PARAM_STR);
          $insert->bindParam(3, $minAge, PDO::PARAM_INT);
          $insert->bindParam(4, $maxAge, PDO::PARAM_INT);
          //Execute prepared statement
          $insert->execute();
      }

      /**
      * Inserts group into members table
      */
      public function addUsersToGroups($id, $music, $min_age, $max_age){
        $users = $this->getUsersInGroups($music, $min_age, $max_age);
        $count = sizeof($users);
        while($count > 0){
          $insert = $this->db()->prepare("INSERT INTO members (user, chat_group) VALUES (?, ?)");
          $user = $users[sizeof($users)-$count]->getId();
          $insert->bindParam(1, $user, PDO::PARAM_STR);
          $insert->bindParam(2, $id, PDO::PARAM_STR);
          //Execute prepared statement
          $insert->execute();
          $count--;
        }
      }

      /**
      * Gets users that are members of the group
      */
      public function getUsersInGroups($music, $min_age, $max_age){
        $query = $this->db()->prepare("SELECT * FROM users WHERE music = :music AND age >= :min_age AND age <= :max_age");
        $query->execute(array('music' => $music, 'min_age' => $min_age, 'max_age' => $max_age));
        $resultSet = $query->fetchAll(PDO::FETCH_CLASS, "User");
        return $resultSet;
      }

      /**
       * Gets groups that will receive the message
       */
      public function getMessageGroups($id){
        //Get group id
        $req = $this->db()->prepare("SELECT chat_group FROM members WHERE user = :id");
        $req->execute(array('id' => $id));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      }

      /**
      * Checks if the name is valid.
      * The name is valid if it has no spaces
      */
      public function valid($id){
        return strpos($id, ' ');
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
      * Get genre
      */
      public function getGenre(){
          return $this->genre;
      }

      /**
      * Set genre
      */
      public function setGenre($genre){
          $this->genre = $genre;
      }

      /**
      * Get minimum age
      */
      public function getMinAge(){
          return $this->min_age;
      }

      /**
      * Set minimum age
      */
      public function setMinAge($min_age){
          $this->min_age = $min_age;
      }

      /**
      * Get maximum age
      */
      public function getMaxAge(){
          return $this->max_age;
      }

      /**
      * Set maximum age
      */
      public function setMaxAge($max_age){
          $this->max_age = $max_age;
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
