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

    // echo "<pre>";
    // print_r($GroupData);
    // exit();

    if(!empty($TitleGroupData['catetitleId'])){

      // echo "UpdatePosition";

      // echo "<pre>";
      // print_r($TitleGroupData);
      // exit();

      $this->TitleGroupModel->UpdateTitleGroup($TitleGroupData);
      echo "<script>alert('แก้ไขหัวข้อสินค้าเรียบร้อย')</script>";
      echo "<script>document.location=('".SITE_URL('Admin/TitleGroup')."')</script>";


    }else{

      // echo "SavePosition";

      $this->TitleGroupModel->SaveTitleGroup($TitleGroupData);
      echo "<script>alert('บันทึกหัวข้อสินค้าเรียบร้อย')</script>";
      echo "<script>document.location=('".SITE_URL('Admin/TitleGroup')."')</script>";

    }



  }


  public function DeleteTitleGroup()
  {

    $GroupId = $this->uri->segment(4);

    $GroupData = array(
      'catetitleId' => $GroupId,
      'catetitleStatus' => 2,
    );

    $this->TitleGroupModel->UpdateTitleGroup($GroupData);

    echo "<script>alert('ลบกลุ่มประเภทสินค้าเรียบร้อย')</script>";
    echo "<script>document.location=('".SITE_URL('Admin/TitleGroup')."')</script>";
  }

}
