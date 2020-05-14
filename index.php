<?php
  use Core\Session;
  use Core\Cookie;
  use Core\Router;
  use Models\Users;
  use Core\H;
  
  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', dirname(__FILE__));

  // load configuration and helper functions
  require_once(ROOT . DS . 'app' . DS . 'config' . DS . 'config.php');

  require_once(ROOT. DS ."vendor" . DS . "autoload.php");
  session_start();

  $url = isset($_SERVER['PATH_INFO']) ? explode('/', filter_var(ltrim(H::e($_SERVER['PATH_INFO']), '/'), FILTER_SANITIZE_URL)) : [];
  if(!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
    Users::loginUserFromCookie();
  }
  // Route the request
  Router::route($url);
