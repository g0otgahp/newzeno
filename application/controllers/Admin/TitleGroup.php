<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TitleGroup extends CI_Controller
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
    $this->load->view('Back/TitleGroupForm');
    $this->load->view('Back/TitleGroupUpdate');
  }

  public function index()
  {

    $dataSelect = $this->TitleGroupModel->SelectTitleGroup();

    // echo "<pre>";
    // print_r($dataSelect);
    // exit();

    $value = array(
      'Result' => array(
        'dataSelect' => $dataSelect,
      ),
      'View' => 'Back/TitleGroup',
    );
    $this->LoadPage($value);
  }

  public function SaveTitleGroup()
  {

    $TitleGroupData = $this->input->post();
    $TitleGroupData['editId'] = $_SESSION['adminId'];

    // echo "<pre>";
    // print_r($GroupData);
    // exit();

    if(!empty($TitleGroupData['catetitleId'])){

      // echo "UpdatePosition";

      // echo "<pre>";
      // print_r($TitleGroupData);
      // exit();

      $this->TitleGroupModel->UpdateTitleGroup($TitleGroupData);

      $LogUpdate = array(
        'logProductProfileId' => $_SESSION['adminId'],
        'logProductStatus' => 'แก้ไข',
        'logProductType' => 'หัวข้อสินค้า',
        'logProductItem' => $TitleGroupData['catetitleName'],
      );

      $this->LogModel->LogProduct($LogUpdate);

      echo "<script>alert('แก้ไขหัวข้อสินค้าเรียบร้อย')</script>";
      echo "<script>document.location=('".SITE_URL('Admin/TitleGroup')."')</script>";


    }else{

      // echo "SavePosition";

      $id = $this->TitleGroupModel->SaveTitleGroup($TitleGroupData);

      $LogInsert = array(
        'logProductProfileId' => $_SESSION['adminId'],
        'logProductStatus' => 'เพิ่ม',
        'logProductType' => 'หัวข้อสินค้า',
        'logProductItem' => $TitleGroupData['catetitleName'],
      );

      $this->LogModel->LogProduct($LogInsert);

      echo "<script>alert('บันทึกหัวข้อสินค้าเรียบร้อย')</script>";
      echo "<script>document.location=('".SITE_URL('Admin/TitleGroup')."')</script>";

    }

  }


  public function DeleteTitleGroup()
  {

    $GroupId = $this->uri->segment(4);

    $GroupData = array(
      'catetitleId' => $GroupId,
      'editId' => $_SESSION['adminId'],
      'catetitleStatus' => 2,
    );

    $this->TitleGroupModel->UpdateTitleGroup($GroupData);

    $item = $this->TitleGroupModel->LogDelete($GroupId);

    $LogDelete = array(
      'logProductProfileId' => $_SESSION['adminId'],
      'logProductStatus' => 'ลบ',
      'logProductType' => 'หัวข้อสินค้า',
      'logProductItem' => $item[0]['catetitleName'],
    );

    $this->LogModel->LogProduct($LogDelete);

    echo "<script>alert('ลบกลุ่มประเภทสินค้าเรียบร้อย')</script>";
    echo "<script>document.location=('".SITE_URL('Admin/TitleGroup')."')</script>";
  }

}
