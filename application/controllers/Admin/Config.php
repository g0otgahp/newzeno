<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Config extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    @session_start();
    if(@$_SESSION['Status'] !="NZN"){
      echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
      echo "<script>document.location='" . SITE_URL('Login') . "'</script>";
    }
  }

  public function LoadPage($value){
    $data = $value['Result'];
    $this->load->view('Back/themes/header', $data);
    $this->load->view($value['View']);
    $this->load->view('Back/themes/footer');
  }

  public function index()
  {

    $dataConfig = $this->ConfigModel->SelectConfig();

    $value = array(
      'Result' => array(
        'dataConfig' => $dataConfig,
      ),
      'View' => 'Back/Config',
    );
    $this->LoadPage($value);
  }

  public function ConfigForm()
  {
    $id = $this->uri->segment(4);
    $dataConfig = $this->ConfigModel->SelectConfigById($id);
    $data = array(
      'id' => $id,
      'dataConfig' => $dataConfig,

  );

  // echo "<pre>";
  // print_r($data);
  // exit();

    $this->load->view('Back/themes/header',$data);
    $this->load->view('Back/ConfigForm');
    $this->load->view('Back/themes/footer');



  }

  public function UpdateConfig()
  {

    $input = $this->input->post();
    $this->ConfigModel->UpdateConfig($input);

    echo "<script>alert('บันทึกการตั้งค่าเรียบร้อย')</script>";
    echo "<script>window.location=('".SITE_URL('Admin/Config')."')</script>";

  }



}
