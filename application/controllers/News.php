<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->HomepageModel->LoadHead();
  }

  public function index()
  {
    $dataPayment = $this->ConfigModel->SelectPayment();
    $dataShow = $this->NewsModel->SelectNews();

    $data = array(
      'dataPayment' => $dataPayment,
      'dataShow' => $dataShow,
    );

    // $this->load->view('Front/themes/slide');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/News',$data);
    $this->load->view('Front/themes/footer');
  }

  public function NewsDetail()
  {
    $dataPayment = $this->ConfigModel->SelectPayment();
    $newsId = $this->uri->segment(3);
    $dataShow = $this->NewsModel->newsShowUpdate($newsId);

    $data = array(
      'dataPayment' => $dataPayment,
      'dataShow' => $dataShow,
    );

    // $this->load->view('Front/themes/slide');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/NewsDetail',$data);
    $this->load->view('Front/themes/footer');



  }
}
