<?php
  namespace Core;
  use Core\Application;
  use Core\View;
  use Core\Input;

  class Controller extends Application {
    protected $_controller, $_action;
    public $view, $request;

    public function __construct($controller, $action) {
      parent::__construct();
      $this->_controller = $controller;
      $this->_action = $action;
      $this->request = new Input();
      $this->view = View::resoponseView();
    }

    protected function load_model($model) {
      $modelPath = 'Models\\' . $model;
      if(class_exists($modelPath)) {
        $this->{$model.'Model'} = new $modelPath();
      }
    }

    public function jsonResponse($resp){
      header("Access-Control-Allow-Origin: *");
      header("Content-Type: application/json; charset=UTF-8");
      http_response_code(200);
      echo json_encode($resp);
      exit;
    }

  }
