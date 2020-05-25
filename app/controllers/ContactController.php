<?php
  namespace Controllers;
  use Core\Controller;
  use Core\H;

  class ContactController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);
      $this->load_model("Contact");
    }

    public function indexAction() {
      $contactClass = $this->ContactModel;
      $compass = $contactClass->query("SELECT svg_image,title, body, contact FROM contacts WHERE id = ?", [(int)3])->first();
      $phone = $contactClass->query("SELECT svg_image,title, body, contact FROM contacts WHERE id = ?", [(int)1])->first();
      $envelope = $contactClass->query("SELECT svg_image,title, body, contact FROM contacts WHERE id = ?", [(int)2])->first();
      $topText = $contactClass->query("SELECT svg_image,title, body, contact FROM contacts WHERE id = ?", [(int)4])->first();
      $lowerText = $contactClass->query("SELECT svg_image,title, body, contact FROM contacts WHERE id = ?", [(int)5])->first();


      //for the top text and lower text of the context
      $this->view->toptext = $topText;
      $this->view->lowerText = $lowerText;


      //for all the columns in the contact
      $this->view->compass = $compass;
      $this->view->phone = $phone;
      $this->view->envelope = $envelope;
      $this->view->render('contact/index');
    }
  }
