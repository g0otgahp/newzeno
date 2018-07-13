<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agent extends CI_Controller
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
    $this->load->view('Back/themes/header',$data);
    $this->load->view($value['View']);
    $this->load->view('Back/themes/footer');
  }

  public function index()
  {

    $dataSelect = $this->AgentModel->AgentSelect();

    $value = array(
      'Result' => array(
        'dataSelect' => $dataSelect,
      ),
      'View' => 'Back/AgentList',
    );
    $this->LoadPage($value);
  }

  public function AgentForm()
  {

    $this->load->view('Back/themes/header');
    $this->load->view('Back/AgentForm');
    $this->load->view('Back/themes/footer');

  }

  public function AgentRegister()
  {

    $input = $this->input->post();
    $this->AgentModel->AgentRegister($input);

    echo "<script>alert('เพิ่มตัวแทนจำหน่ายเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/Agent')."'</script>";

  }

  public function AgentDelete()
  {

    $agentId = $this->uri->segment(4);

    $this->AgentModel->AgentDelete($agentId);

    echo "<script>alert('ลบตัวแทนจำหน่ายเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/Agent')."'</script>";

  }

  public function ShowAgentUpdate()
  {

    $agentId = $this->uri->segment(4);
    $dataSelect = $this->AgentModel->SelectUpdate($agentId);

    $data = array('dataSelect' => $dataSelect, );

    // echo "<pre>";
    // print_r($dataSelect);
    // exit();

    $this->load->view('Back/themes/header',$data);
    $this->load->view('Back/AgentUpdate');
    $this->load->view('Back/themes/footer');

  }

  public function AgentUpdate()
  {

    $dataUpdate = $this->input->post();

    // echo "<pre>";
    // print_r($dataUpdate);
    // exit();

    $this->AgentModel->AgentUpdate($dataUpdate);

    echo "<script>alert('แก้ไขตัวแทนจำหน่ายเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/Agent')."'</script>";




  }






}
