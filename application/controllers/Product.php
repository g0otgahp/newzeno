<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

  /**
  * Index Page for this controller.
  *
  * Maps to the following URL
  *         http://example.com/index.php/welcome
  *    - or -
  *         http://example.com/index.php/welcome/index
  *    - or -
  * Since this controller is set as the default controller in
  * config/routes.php, it's displayed at http://example.com/
  *
  * So any other public methods not prefixed with an underscore will
  * map to /index.php/welcome/<method_name>
  * @see https://codeigniter.com/user_guide/general/urls.html
  */
  public function index()
  {
    $Category = $this->CategoryModel->SelectCategory();
    $data = array('dataShow' => $Category);
    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function ProductDetail()
  {
    $Category = $this->CategoryModel->SelectCategory();
    $data = array('dataShow' => $Category);
    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductDetail');
    $this->load->view('Front/themes/footer');
  }
}
