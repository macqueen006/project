<?php
namespace Models;
use Core\Model;


class Featured extends Model {
    // public $title, $content, $images, $id, $created_at, $updated_at, $author;

    public function __construct() {
      parent::__construct("featured_image");
    }
    
}