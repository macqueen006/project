<?php
  namespace Controllers;
  use Core\Controller;
  use Core\H;

  class GalleryController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
    }

    public function indexAction() {
      $this->view->render('gallery/index');
    }
  }
