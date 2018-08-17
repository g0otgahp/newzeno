<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->HomepageModel->LoadHead();
  }

    public function index()
    {
      $dataService = $this->ConfigModel->SelectService();
      $data = array(
        'dataService' => $dataService,
      );
        // $this->load->view('Front/themes/slide');
        // $this->load->view('Front/themes/menu');
        $this->load->view('Front/Service',$data);
        $this->load->view('Front/themes/footer');
    }

    public function LoadCon(){
      echo "โหลด Controller ตัวอื่น";
    }
}
