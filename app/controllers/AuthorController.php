<?php
  namespace Controllers;
  use Core\Controller;
  use Core\H;

  class AuthorController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model("Author");
    }

    public function indexAction() {
      $authorClass = $this->AuthorModel;

      $author = $authorClass->query("SELECT * FROM author WHERE deleted = ? LIMIT 4 ", [(int)0])->results();
      $hero_image = $authorClass->query("SELECT * FROM author WHERE id = ?", [(int)5])->first();
     
      $this->view->author = $author;
      //this is the background image but i will later modify it
      $this->view->bg_image = $hero_image;
      $this->view->render('author/index');
    }
  }
