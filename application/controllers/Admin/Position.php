<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Position extends CI_Controller
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
    $this->load->view('Back/PositionForm');
    $this->load->view('Back/PositionUpdate');
  }

  public function index()
  {

    $data = $this->PositionModel->Select();
    $value = array(
      'Result' => array(
        'data' => $data,
      ),
      'View' => 'Back/PositionList',
    );
    $this->LoadPage($value);
  }

  public function SavePosition()
  {

    $positionData = $this->input->post();

    // echo "<pre>";
    // print_r($positionName);
    // exit();

    if(!empty($positionData['positionId'])){

      // echo "UpdatePosition";

      $this->PositionModel->UpdatePosition($positionData);
      echo "<script>alert('แก้ไขตำแหน่งเรียบร้อย')</script>";
      echo "<script>document.location=('".SITE_URL('Admin/Position')."')</script>";


    }else{

      // echo "SavePosition";

      $this->PositionModel->SavePosition($positionData);
      echo "<script>alert('บันทึกตำแหน่งเรียบร้อย')</script>";
      echo "<script>document.location=('".SITE_URL('Admin/Position')."')</script>";

    }



  }


  public function DeletePosition()
  {

    $positionId = $this->uri->segment(4);

    $positionData = array(
      'positionId' => $positionId,
      'positionStatus' => 2,
    );

    $this->PositionModel->UpdatePosition($positionData);

    echo "<script>alert('ลบตำแหน่งเรียบร้อย')</script>";
    echo "<script>document.location=('".SITE_URL('Admin/Position')."')</script>";
  }

}
