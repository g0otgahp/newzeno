<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brand extends CI_Controller
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
    $this->load->view('Back/BrandForm');
    $this->load->view('Back/BrandUpdate');
  }

  public function index()
  {
    $BrandList = $this->BrandModel->SelectBrand();
    $value = array(
      'Result' => array(
        'BrandList' => $BrandList,
      ),
      'View' => 'Back/BrandList',
    );
    $this->LoadPage($value);
  }

  public function UploadsImg($Img)
  {
    $parinfo = pathinfo($Img['name'], PATHINFO_EXTENSION);
    $new_file = date('YmdHis') . "." . $parinfo;
    move_uploaded_file($Img['tmp_name'], "uploads/Logo/" . $new_file);
    return $new_file;
  }

  //เพิ่ม แก้ไข รายการ
  public function SaveBrand()
  {
    $input = $this->input->post();
    if (!empty($input['brandId'])) {
      if (!empty($_FILES['Img']['name'])) {
        $new_file = $this->UploadsImg($_FILES['Img']);
        $input['brandImg'] = $new_file;
      }
      $this->BrandModel->UpdateBrand($input);
    } else {
      $new_file = $this->UploadsImg($_FILES['Img']);
      $input['brandImg'] = $new_file;
      $this->BrandModel->InsertBrand($input);
    }
    //Alert
    echo "<script>alert('บันทึกรายการแบรนด์เสร็จสิ้น')</script>";
    echo "<script>document.location='" . SITE_URL('Admin/Brand') . "'</script>";
  }

  //ลบรายการ
  public function DeleteBrand()
  {
    $id = $this->uri->segment(4);

    $input = array(
      'brandId' => $id,
      'brandStatus' => 2,
     );

     $this->BrandModel->UpdateBrand($input);

     //Alert
     echo "<script>alert('ลบรายการแบรนด์เสร็จสิ้น')</script>";
     echo "<script>document.location='" . SITE_URL('Admin/Brand') . "'</script>";
  }
}
