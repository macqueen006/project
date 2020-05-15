<?php
  namespace Controllers;
  use Core\Controller;
  use Core\H;

  class AboutController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model("About");
      $this->load_model("Author");
      $this->load_model("Featured");
    }

    public function indexAction() {
      $about = $this->AboutModel;
      $author = $this->AuthorModel;
      $featured_image = $this->FeaturedModel;
      $result = $about->findById(1);
      $authors = $author->find(['conditions'=>"deleted = ?", 'bind' => [0]]);
      $featured_images = $featured_image->findFirst(['conditions'=>"deleted = ?", 'bind' => [0]]);
     
      $this->view->featured = $featured_images;
      $this->view->author = $authors;
      $this->view->about = $result;
      $this->view->render('about/index');
    }
  }
