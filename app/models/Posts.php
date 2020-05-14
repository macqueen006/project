<?php
namespace Models;
use Core\Model;
use Core\DB;

class Posts extends Model {
    public $title, $content, $images, $id, $created_at, $updated_at, $author;

    public function __construct() {
      parent::__construct("Posts");
    }
    public static function featuredPosts($options, $page){
      $db = DB::getInstance();
      $limit = (array_key_exists('limit',$options) && !empty($options['limit']))? $options['limit'] : 4;
      $startLimit = ($page - 1) * $limit; 
      $where = "deleted = ?";
      $hasFilters = self::hasFilters($options);
      $binds = [];
      if(array_key_exists('search',$options) && !empty($options['search'])){
        $where .= " AND (title LIKE ? OR author LIKE ?)";
        $binds[] = "%" . $options['search'] . "%";
        $binds[] = "%" . $options['search'] . "%";
      }
      $sql = "SELECT * FROM posts WHERE {$where}";

      $group = ($hasFilters)? " ORDER BY id" : " ORDER BY title DESC";

      $pager = " Limit {$startLimit},$limit ";
      $binds[] = 0;

      $total = $db->query($sql.$group,$binds)->count();
      $results = $db->query($sql.$group.$pager,$binds)->results();
      
      return ['results'=> $results,'total'=> $total];
     
    }

    public static function hasFilters($options){
      foreach($options as $key => $value){
        if(!empty($value) && $key != 'limit' && $key != 'offset') return true;
      }
      return false;
    }
    public function createLinks($links, $list_class) {

      if ($limit == "all") {
        # query the database ane get all the data
      }
      $link = 5;
      $last = ceil($total / $limit);
      $start = (($page - $links) > 0)? $page - $links : 1;
      $end = (($page + $links) < $last)? $page + $links : $last;

      $html = "<ul class'".$list_class."'>";

      $class = ($page == 1)? "disabled" : "";
      
      //previous page
      $previous_page = ($page == 1)?'<a href="">
      <li class="'.$class.'">&laquo</li>
      </a>' : '<li class="'.$class.'"><a href="home?limit='.$limit.'"&page="'.($page -1).'"></a></li>';
      $html .= $previous_page;
      if ($start > 1) {
        $html .='<li class="'.$class.'"><a href="home?limit='.$limit.'"&page=1>1</a></li>';//print first page
        $html .= '<li class="disabled"><span>...</span></li>';//print 3 dots if not on first page
      }
        //print all the numbered links
        for ($i=$start; $i < $end; $i++) { 
          $class = ($page ==1)? "active" : "";
        $html .='<li class="'.$class.'"><a href="home?limit='.$limit.'"&page='.$i.'">'. $i .'</a></li>';
        }
      if ($end < $last) {
        $html .= "<span class='disabled'>...</span>";
        $html .='<li class="'.$class.'"><a href="home?limit='.$limit.'"&page='.$last.'">'. $last .'</a></li>';
      }
      $class = ($page == $last)? "disabled": "";

      // this page + 1 for the next\
      $next_page = ($page == $last)?
        '<a href=""><li class="'.$class.'">&laquo</li></a>' :
        '<li class="'.$class.'"><a href="home?limit='.$limit.'"&page="'.($page + 1).'"></a></li>';
        $html .= $next_page;
        $html .= "</ul>";
        return $html;

    }

    
    // public static function findByUserId($user_id,$params=[]){
    //     $conditions = [
    //       'conditions' => "user_id = ?",
    //       'bind' => [(int)$user_id],
    //       'order' => 'name'
    //     ];
        
    //     $params = array_merge($conditions, $params);
    //     return self::find($params);
    //   }
  
    //   public static function findByIdAndUserId($id, $user_id){
    //     $conditions = [
    //       'conditions' => "id = ? AND user_id = ?",
    //       'bind' => [(int)$id, (int)$user_id]
    //     ];
    //     return self::findFirst($conditions);
    //   }
}