<?php
  namespace Controllers;
  use Core\Controller;
  use Core\H;

  class PriceController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
    }

    public function indexAction() {
      $this->view->render('pricetable/index');
    }
  }
