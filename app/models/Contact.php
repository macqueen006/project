<?php
namespace Models;
use Core\Model;


class Contact extends Model {
    // public $title, $content, $images, $id, $created_at, $updated_at, $author;

    public function __construct() {
      parent::__construct("contacts");
    }
    
}