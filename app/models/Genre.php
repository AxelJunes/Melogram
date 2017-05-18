<?php

  /**
   * Class Genre - for music genres
   * @
   */

  class Genre extends EntityBase {

      private $id;

      public function __construct() {
          $this->table = "genres";
          $class = "Genre";
          parent::__construct($this->table, $class);
      }

      /**
       * Create genre
       */
       public function create() {
           $insert = $this->db()->prepare("INSERT INTO genres (id) VALUES (?)");
           //Variables to insert
           $id = $this->getId();

           $insert->bindParam(1, $id, PDO::PARAM_STR);
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
