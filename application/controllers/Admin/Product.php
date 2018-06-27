<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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

public function LoadPage($value)
{
  $data = $value['Result'];
  $this->load->view('Back/themes/header', $data);
  $this->load->view($value['View']);
  $this->load->view('Back/themes/footer');
}

public function index()
{
  $value = array(
    'Result' => array(
      // 'Config' => $Config,
    ),
    'View' => 'Back/ProductList',
  );
  $this->LoadPage($value);
}
}
