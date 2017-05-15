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
       * Create user
       */
      public function create() {
          $key = "";
          try {
              if ($insert = $this->db()->prepare("INSERT INTO genres (id) VALUES (?)")) {
                  $insert->bind_param('sssss', $this->id);
                  if (!$insert->execute()) {
                      $key = "901"; //Error code: "El registro no se ha podido crear correctamente"
                  } else {
                      $key = "100"; //Error code: "Registro creado correctamente"
                  }
              } else {
                  $key = $this->db()->error; //Error code: "Error directo de base de datos"
              }
          } catch (Exception $e) {
              header('Location: views/error.php?err=' . $e->getMessage() . "\n");
          }
          return $key;
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
