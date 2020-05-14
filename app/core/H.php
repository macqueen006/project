<?php
namespace Core;

class H {
  public static function dnd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
  }

  public static function currentPage() {
    $currentPage = $_SERVER['REQUEST_URI'];
    if($currentPage == PROOT || $currentPage == PROOT.'home/index') {
      $currentPage = PROOT . 'home';
    }
    return $currentPage;
  }

  public static function getObjectProperties($obj){
    return get_object_vars($obj);
  }

  //optimized sanitizing the output file from the database
  public static function e($value)
  {
    return \htmlspecialchars($value, ENT_QUOTES, "UTF-8");
  }
  //url slug for removing any unwanted file or hyphens from the url
  public function urlSlug($value = [])
  {
    $regex = '/[^\-\s\pN\pL]+/u';
    $spaceHyphens = '/[\-\s]+/';
    $value = preg_match($regex, "", mb_strtolower($value, 'UTF-8'));
    $value = preg_match($spaceHyphens, "", $value);
    return $value;
  }
}
