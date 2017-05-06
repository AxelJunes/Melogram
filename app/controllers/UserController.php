<?php
  include_once("Controller.php");
  include_once("./app/models/UserModel.php");

  class UserController extends Controller{
    public function __construct(){
      $this->model = new UserModel();
    }

    public function invoke(){
      $res = $this->model->getlogin();
      /*
      If admin logs in
      */
      if($res == 'admin'){
        include './app/views/admin.php';
      }
      /*
      If normal user logs in
      */
      elseif ($res == 'user') {
        include './app/views/profile.php';
      }
      else{
        echo $res;
        include './app/views/login.php';
      }
    }
  }
?>
