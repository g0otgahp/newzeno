<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
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

    $select = $this->EmployeeModel->Select();

    // echo "<pre>";
    // print_r($select);
    // exit();

    $value = array(
      'Result' => array(
        'select' => $select,
      ),
      'View' => 'Back/EmployeeList',
    );
    $this->LoadPage($value);
  }

  public function EmployeeForm()
  {

    $position = $this->EmployeeModel->Position();

    $value = array(
      'Result' => array(
        'position' => $position,
      ),
      'View' => 'Back/EmployeeForm',
    );
    $this->LoadPage($value);
  }

  public function Register()
  {

    $dataRegister = $this->input->post();

    $check = $this->db
    ->where('adminUsername',$dataRegister['adminUsername'])
    ->get('admin')
    ->num_rows();

    if($check == 0){


    $pathinfo = pathinfo($_FILES['profileImg']['name'], PATHINFO_EXTENSION);
    $new_file = date('YmdHis') . "." . $pathinfo;
    move_uploaded_file($_FILES['profileImg']['tmp_name'], "uploads/Employees/" . $new_file);

    $dataRegister['profileImg'] = $new_file;

    $this->EmployeeModel->Register($dataRegister);

    echo "<script>alert('สมัครสมาชิกเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/Employee')."'</script>";

  }else{

    echo "<script>alert('ไอดีเข้าสู่ระบบ ซ้ำ')</script>";
    echo "<script>history.go(-1)</script>";

  }

  }

  public function ShowDetail()
  {

    $profileId = $this->uri->segment(4);

    $position = $this->EmployeeModel->Position();

    $dataDetail = $this->EmployeeModel->ShowDetail($profileId);

      // echo "<pre>";
      // print_r($dataDetail);
      // exit();

    $value = array(
      'Result' => array(
        'position' => $position,
        'dataDetail' => $dataDetail,
      ),
      'View' => 'Back/EmployeeUpdate',
    );
    $this->LoadPage($value);
  }

  public function Update()
  {

    $dataUpdate = $this->input->post();

    // echo "<pre>";
    // print_r($dataUpdate);
    // echo $_FILES['profileImg']['name'];
    // exit();

    if(!empty($_FILES['profileImg']['name'])){

      $pathinfo = pathinfo($_FILES['profileImg']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['profileImg']['tmp_name'], "uploads/Employees/" . $new_file);

      $dataUpdate['profileImg'] = $new_file;

    }

    $this->EmployeeModel->Update($dataUpdate);

    echo "<script>alert('แก้ไขพนักงานเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/Employee')."'</script>";

  }

  public function Delete()
  {

    $profileId = $this->uri->segment(4);

    $dataDelete = array(
      'profileId' => $profileId,
      'editId' => $_SESSION['adminId'],
      'profileStatus' => 2
    );

    $this->EmployeeModel->Delete($dataDelete);

    echo "<script>alert('ลบพนักงานเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/Employee')."'</script>";


  }

}
