<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
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
    $this->load->view('Back/CategoryForm');
    $this->load->view('Back/CategoryUpdate');
  }

  public function index()
  {

    $dataShow = $this->CategoryModel->Select();

    $value = array(
      'Result' => array(
        'dataShow' => $dataShow,
      ),
      'View' => 'Back/CategoryList',
    );
    $this->LoadPage($value);
  }


  public function SaveCategory()
  {

    $dataInsert = $this->input->post();

    if(!empty($_FILES['cateImg']['name'])){

      $pathinfo = pathinfo($_FILES['cateImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['cateImg']['tmp_name'], "uploads/Categorys/" . $new_file);

      $dataInsert['cateImg'] = $new_file;

    }

    $this->CategoryModel->SaveCategory($dataInsert);

    echo "<script>alert('เพิ่มประเภทสินค้าสำเร็จ')</script>";
    echo "<script>history.go(-1)</script>";


  }

  public function UpdateCategory()
  {

    $dataUpdate = $this->input->post();

    if(!empty($_FILES['cateImg']['name'])){

      $pathinfo = pathinfo($_FILES['cateImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['cateImg']['tmp_name'], "uploads/Categorys/" . $new_file);

      $dataUpdate['cateImg'] = $new_file;

    }

    $this->CategoryModel->UpdateCategory($dataUpdate);

    echo "<script>alert('แก้ไขประเภทสินค้าสำเร็จ')</script>";
    echo "<script>history.go(-1)</script>";


  }

  public function DeleteCategory()
  {

    // echo "Delete";
    $idDelete = $this->uri->segment(4);

    $dataDelete = array(
      'cateId' => $idDelete,
      'cateStatus' => 2,
     );

     $this->CategoryModel->DeleteCategory($dataDelete);

     echo "<script>alert('ลบประเภทสินค้าสำเร็จ')</script>";
     echo "<script>history.go(-1)</script>";

  }
}
