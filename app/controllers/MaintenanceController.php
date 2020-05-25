<?php
  namespace Controllers;
  use Core\Controller;
  use Core\H;

  class MaintenanceController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model('Maintenance');
    }

    public function indexAction() {
      $maintenance = $this->MaintenanceModel;
      $maintenancePage = $maintenance->findFirst(['conditions'=>"deleted = ?", 'bind' => [0]]);
      $this->view->maintenance = $maintenancePage;
      $this->view->render('maintenance/index');
    }
  }
 