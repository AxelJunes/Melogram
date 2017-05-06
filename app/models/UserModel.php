<?php
  class UserModel extends Model{
    public $name;
    public $password;
    public $group;

    /*
    Get logged user
    */
    public function getlogin(){
      if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
        //Save user and password from form control
        $user = $_REQUEST['username'];
        $pass = $_REQUEST['password'];
        if($this->checkUser($user)){
          /*
          If the logged user is administrator
          */
          if($user == 'admin' && $pass == 'admin'){
            return 'admin';
          }
          else{
            return 'user';
          }
        }
        else {
          return 'Invalid User!';
        }
      }
      else {
        echo "Fuck off";
      }
    }

    /*
    Check if user is in database
    */
    public function checkUser($username){
      $where = "Nombre = '" . $username . "'";
      return mysqli_num_rows($this->select("Nombre", "usuarios", $where)) > 0;
    }

  }


?>
