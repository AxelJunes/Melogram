<?php

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
          $insert->bindParam(1, $this->getId(), PDO::PARAM_STR);
          $insert->bindParam(2, $this->getGenre(), PDO::PARAM_STR);
          $insert->bindParam(3, $this->getMinAge(), PDO::PARAM_INT);
          $insert->bindParam(4, $this->getMaxAge(), PDO::PARAM_INT);
          //Execute prepared statement
          $insert->execute();
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
