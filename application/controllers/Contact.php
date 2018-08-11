<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
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
    $dataContact = $this->ConfigModel->SelectContact();
    $data = array(
      'dataContact' => $dataContact,
    );

    // $this->load->view('Front/themes/slide');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/Contact',$data);
    $this->load->view('Front/themes/footer');
  }
}
