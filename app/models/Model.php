<?php
  class Model {
    protected $db;

    /*
    Constructor
    */
    public function __construct(){
      $this->db = $this->connect();
    }

    /*
    Connect with the database
    */
    public function connect(){
         $host = 'localhost';
         $user = 'root';
         $pass = '';
         $db = 'Melogram';
         $connection = mysqli_connect($host, $user, $pass, $db);
         return $connection;
     }

     /*
     Selects from database
     */
     public function select( $column, $table , $where='' , $other='' ){
        if($where != '' ){
          $where = "WHERE " . $where;
        }
        $query = "SELECT " . $column . " FROM  " . $table . " " . $where . " " . $other;
        $res = mysqli_query($this->db, $query) or die(mysqli_error($this->db));
        return $res;
     }

     /*
     Inserts into database
     */
     public function insert( $column, $table , $where='' , $other='' ){
        if($where != '' ){
          $where = "WHERE " . $where;
        }
        $query = "SELECT " . $column . " FROM  " . $table . " " . $where . " " . $other;
        $res = mysqli_query($this->db, $query) or die(mysqli_error($this->db));
        return $res;
     }
  }
?>
