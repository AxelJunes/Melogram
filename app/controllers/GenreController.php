<?php
  class GenreController extends BaseController{

      private $genre;
      private $entity;

      public function __construct() {
          parent::__construct();
          require_once(BASE_PATH . '/app/models/Genre.php');

          $this->genre = new Genre();
          $this->entity = "Genres";
      }

      public function index() {
          // Store genre in array
          $genres = $this->genre->getAll();
          $this->view("index", $this->entity, array(
              "genres" => $genres
          ));
      }
  }
?>
