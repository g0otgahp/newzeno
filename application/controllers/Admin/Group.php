<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Group extends CI_Controller
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
    $this->load->view('Back/GroupForm');
    $this->load->view('Back/GroupUpdate');
  }

  public function index()
  {

    $dataSelect = $this->GroupModel->SelectGroup();

    $dataTitle = $this->GroupModel->SelectTitleGroup();

    // echo "<pre>";
    // print_r($dataSelect);
    // exit();

    $value = array(
      'Result' => array(
        'dataSelect' => $dataSelect,
        'dataTitle' => $dataTitle,
      ),
      'View' => 'Back/Group',
    );
    $this->LoadPage($value);
  }

  public function SaveGroup()
  {

    $GroupData = $this->input->post();
    $GroupData['editId'] = $_SESSION['adminId'];

    // echo "<pre>";
    // print_r($GroupData);
    // exit();

    if(!empty($GroupData['categroupId'])){

      // echo "UpdatePosition";

      // echo "<pre>";
      // print_r($GroupData);
      // exit();

      $this->GroupModel->UpdateGroup($GroupData);
      echo "<script>alert('แก้ไขกลุ่มประเภทสินค้าเรียบร้อย')</script>";
      echo "<script>document.location=('".SITE_URL('Admin/Group')."')</script>";


    }else{

      // echo "SavePosition";

      $this->GroupModel->SaveGroup($GroupData);
      echo "<script>alert('บันทึกกลุ่มประเภทสินค้าเรียบร้อย')</script>";
      echo "<script>document.location=('".SITE_URL('Admin/Group')."')</script>";

    }



  }


  public function DeleteGroup()
  {

    $GroupId = $this->uri->segment(4);

    $GroupData = array(
      'categroupId' => $GroupId,
      'editId' => $_SESSION['adminId'],
      'categroupStatus' => 2,
    );

    $this->GroupModel->UpdateGroup($GroupData);

    echo "<script>alert('ลบกลุ่มประเภทสินค้าเรียบร้อย')</script>";
    echo "<script>document.location=('".SITE_URL('Admin/Group')."')</script>";
  }

}
