<?php

  /**
  * Data Acces Object class
  * Gets information from the database
  */
  class DAO {
      /**
       * @var null
       */
      private static $connection = NULL;

      /**
       * ConnDB constructor.
       */
      public function __construct() {

      }

      private function __clone() {

      }

      /**
      * Método que conecta con la base de datos. He elegido realizar la conexión mediante un PDO (Objeto de Datos de PHP),
      * ya que permite la conexión con varios drivers distintos
      */
      public static function getConn() {
          if (!isset(self::$connection)) {
              $dbparams = require_once 'database.php';
              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              self::$connection = new PDO($dbparams["driver"].':host='.$dbparams["host"].';dbname='.$dbparams["database"], $dbparams["user"], $dbparams["pass"], $pdo_options);
          }
          return self::$connection;
      }
  }

?>
