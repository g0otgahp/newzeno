<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $TitleGroup = $this->HomepageModel->SelectTitleGroup();
    $Group = $this->GroupModel->SelectGroup();
    $data = array(
      'TitleGroup' => $TitleGroup,
      'Group' => $Group,
    );
    $this->load->view('Front/themes/header',$data);
  }

  public function index()
  {
    $input = $this->input->post();
    $Product = $this->HomepageModel->SearchProduct($input['keyword']);
    $data = array(
      'Product' => $Product,
    );
    // $this->load->view('Front/themes/slide');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductSearch',$data);
    $this->load->view('Front/themes/footer');
  }
}
