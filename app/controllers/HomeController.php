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
      $posts = $this->PostsModel;
      //slides bg images images
      $flexSliderImages = $posts->query("SELECT title, images, author FROM posts")->results();
      //Category
      $category = $posts->query("SELECT category FROM posts")->results();
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
      
      $this->view->bgImages = $flexSliderImages;
      $this->view->posts = $featuredPosts;
      $this->view->category = $category;
      $this->view->render('home/index');
    }

    public function PostAction($post_id) 
    {
      $posts = $this->PostsModel;
      $this->view->posts = $posts->findById($post_id);
      $this->view->render('home/single');
    }

  }
