<?php
  namespace Controllers;
  use Core\Controller;
  use Core\H;

  class ContactController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
    }

    public function indexAction() {
      $this->view->render('contact/index');
    }
  }
