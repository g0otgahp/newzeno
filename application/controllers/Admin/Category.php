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
    $brand = $this->BrandModel->SelectBrand();
    $dataShow = $this->CategoryModel->SelectCategory();
    $group = $this->GroupModel->SelectGroup();

    $value = array(
      'Result' => array(
        'dataShow' => $dataShow,
        'brand' => $brand,
        'group' => $group,
      ),
      'View' => 'Back/CategoryList',
    );
    $this->LoadPage($value);
  }


  public function SaveCategory()
  {
    $dataInsert = $this->input->post();
    $dataInsert['editId'] = $_SESSION['adminId'];

    if(!empty($_FILES['cateImg']['name'])){

      $pathinfo = pathinfo($_FILES['cateImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['cateImg']['tmp_name'], "uploads/Categorys/" . $new_file);

      $dataInsert['cateImg'] = $new_file;

    }

    $id = $this->CategoryModel->SaveCategory($dataInsert);

    $LogInsert = array(
      'logProductProfileId' => $_SESSION['adminId'],
      'logProductStatus' => 'เพิ่ม',
      'logProductType' => 'ประเภทสินค้า',
      'logProductItem' => $dataInsert['cateName'],
    );

    $this->LogModel->LogProduct($LogInsert);

    echo "<script>alert('เพิ่มประเภทสินค้าสำเร็จ')</script>";
    echo "<script>window.location='".SITE_URL('Admin/Category')."'</script>";
  }

  public function UpdateCategory()
  {
    $dataUpdate = $this->input->post();
    $dataUpdate['editId'] = $_SESSION['adminId'];

    if(!empty($_FILES['cateImg']['name'])){

      $pathinfo = pathinfo($_FILES['cateImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['cateImg']['tmp_name'], "uploads/Categorys/" . $new_file);

      $dataUpdate['cateImg'] = $new_file;

    }

    $this->CategoryModel->UpdateCategory($dataUpdate);

    $LogUpdate = array(
      'logProductProfileId' => $_SESSION['adminId'],
      'logProductStatus' => 'แก้ไข',
      'logProductType' => 'ประเภทสินค้า',
      'logProductItem' => $dataUpdate['cateName'],
    );

    $this->LogModel->LogProduct($LogUpdate);

    echo "<script>alert('แก้ไขประเภทสินค้าสำเร็จ')</script>";
    echo "<script>window.location='".SITE_URL('Admin/Category')."'</script>";


  }

  public function DeleteCategory()
  {

    // echo "Delete";
    $idDelete = $this->uri->segment(4);

    $dataDelete = array(
      'cateId' => $idDelete,
      'editId' => $_SESSION['adminId'],
      'cateStatus' => 2,
    );

    $this->CategoryModel->DeleteCategory($dataDelete);

    $item = $this->CategoryModel->LogDelete($idDelete);

    $LogDelete = array(
      'logProductProfileId' => $_SESSION['adminId'],
      'logProductStatus' => 'ลบ',
      'logProductType' => 'ประเภทสินค้า',
      'logProductItem' => $item[0]['cateName'],
    );

    $this->LogModel->LogProduct($LogDelete);

    echo "<script>alert('ลบประเภทสินค้าสำเร็จ')</script>";
    echo "<script>history.go(-1)</script>";

  }
}
