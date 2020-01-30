<?php
class Sms extends CI_Controller {

  public function index()
  {
    require_once 
    $this->load->view('front-end/sms.php');
  }
}
