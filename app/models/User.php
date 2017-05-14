<?php

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
        $key = "";
        try {
            if ($insert = $this->db()->prepare("INSERT INTO usuarios (id, password, age, music) VALUES (?, ?, ?, ?)")) {
                $insert->bind_param('sssss', $this->id, $this->password, $this->age, $this->music);
                if (!$insert->execute()) {
                    $key = "901"; //Error code: "El registro no se ha podido crear correctamente"
                } else {
                    $key = "100"; //Error code: "Registro creado correctamente"
                }
            } else {
                $key = $this->db()->error; //Error code: "Error directo de base de datos"
            }
        } catch (Exception $e) {
            header('Location: ../error.php?err=' . $e->getMessage() . "\n");
        }
        return $key;
    }

    /**
    * Checks if the user exists in the database
    */
    public function exists(){
      //Check if query returns anything
      if(count($this->getById($this->getId())) > 0){
        return True;
      }
      return False;
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
    public function setMusica($music){
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
