<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductRestore extends CI_Controller
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

    $dataShow = $this->ProductModel->SelectProductRestore();

    $value = array(
      'Result' => array(
        'dataShow' => $dataShow,
      ),
      'View' => 'Back/ProductRestore',
    );
    $this->LoadPage($value);
  }

  public function Update()
  {

    $productId = $this->uri->segment(4);
    $this->ProductModel->UpdateProductRestore($productId);

    echo "<script>alert('กู้ข้อมูลเรียบร้อย')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/ProductRestore') . "'</script>";

  }



}
