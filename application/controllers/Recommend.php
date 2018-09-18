<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recommend extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->HomepageModel->LoadHead();
  }

  public function index()
  {
    $Product = $this->HomepageModel->RecommendProduct();
    $data = array(
      'Product' => $Product,
    );
    // $this->load->view('Front/themes/slide');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductRecommend',$data);
    $this->load->view('Front/themes/footer');
  }
}
