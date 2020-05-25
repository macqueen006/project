<?php
  namespace Controllers;
  use Core\Controller;
  use Core\H;
  use Core\DB;
  use Models\Posts;

  class HomeController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model("Posts");
    } 

    public function indexAction() {
      $db = DB::getInstance();
      $posts = $this->PostsModel;
      //slides bg images images
      $flexSliderImages = $posts->query("SELECT title, images, author FROM posts")->results();
      //Category
      $category = $db->query("SELECT * FROM category WHERE deleted = ?", [(int)0])->results();
      //links
      $facebook = $db->query("SELECT name,endpoint FROM links WHERE name = ?", ["facebook"])->first();
      $twitter = $db->query("SELECT name, endpoint FROM links WHERE name = ?", ["twitter"])->first();
      $skype = $db->query("SELECT name, endpoint FROM links WHERE name = ?", ["skype"])->first();
      $pinterest = $db->query("SELECT name, endpoint FROM links WHERE name = ?", ["pinterest"])->first();
      $instagram = $db->query("SELECT name, endpoint FROM links WHERE name = ?", ["instagram"])->first();
      //later taken out for the category page
      // $categorys = $db->query("SELECT category.*, p.category_id as id FROM category JOIN posts as p ON category.id = p.category_id WHERE category.deleted = ? ", [0])->results();
      //pagination and search

      $search = $this->request->get('search');
      $page = (!empty($this->request->get('page')))? $this->request->get('page') : 1;
      $limit = 2;
      $options = ['limit' => $limit, 'search' => $search];
      $results = Posts::featuredPosts($options, $page);
      $featuredPosts = $results['results'];
      $total = $results['total'];
      
      $this->view->page = $page;
      $this->view->limit = $limit;
      // total number of page and also the last page
      $this->view->totalPages = ceil($total / $limit); 
      //hero images
      $this->view->bgImages = $flexSliderImages;
      //the main posts
      $this->view->posts = $featuredPosts;
      //the category section
      $this->view->category = $category;
      //this are the links at the buttom of the footer
      $this->view->facebook = $facebook;
      $this->view->twitter = $twitter;
      $this->view->skype = $skype;
      $this->view->pinterest = $pinterest;
      $this->view->instagram = $instagram;
      $this->view->render('home/index');
    }

    public function PostAction($post_id) 
    {
      $posts = $this->PostsModel;
      $this->view->posts = $posts->findById($post_id);
      $this->view->render('home/single');
    }

  }
