<?php
namespace Core;

  class View {
    protected static $_head, $_body, $_siteTitle = SITE_TITLE, $_outputBuffer, $_layout = DEFAULT_LAYOUT;

    public static function resoponseView()
    {
      return new View();
    }

    public function render($viewName) {
      $viewAry = explode('/', $viewName);
       $viewString = implode(DS, $viewAry);
      if(file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php')) {
        include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
        include(ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . self::$_layout . '.php');
      } else {
        die('The view \"' . $viewName . '\" does not exist.');
      }
    }

     public static function content($type) {
      if($type == 'head') {
        return self::$_head;
      } elseif($type == 'body') {
        return self::$_body;
      }
      return false;
    }

     public static function start($type) {
      self::$_outputBuffer = $type;
      ob_start();
    }

     public static function end() {
      if(self::$_outputBuffer == 'head') {
        self::$_head = ob_get_clean();
      } elseif(self::$_outputBuffer == 'body') {
        self::$_body = ob_get_clean();
      } else {
        die('You must first run the start method.');
      }
    }

     public static function siteTitle() {
      return self::$_siteTitle;
    }

     public static function setSiteTitle($title) {
      self::$_siteTitle = $title;
    }

     public static function setLayout($path) {
      self::$_layout = $path;
    }

    public function insert($path){
      include ROOT . DS . 'app' . DS . 'views' . DS . $path . '.php';
     }

    public function partial($group, $partial){
      include ROOT . DS . 'app' . DS . 'views' . DS . $group . DS . 'partials' . DS . $partial . '.php';
    }

  }
