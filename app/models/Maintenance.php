<?php
namespace Models;
use Core\Model;


class Maintenance extends Model {
    // public $title, $content, $images, $id, $created_at, $updated_at, $Maintenance;

    public function __construct() {
      parent::__construct("maintenance"); 
    }
    
}