<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->HomepageModel->LoadHead();
  }

  public function index()
  {
    $dataPayment = $this->ConfigModel->SelectPayment();
    $data = array(
      'dataPayment' => $dataPayment,
    );

    // $this->load->view('Front/themes/slide');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/Payment',$data);
    $this->load->view('Front/themes/footer');
  }
}
