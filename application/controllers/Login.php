<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    @session_start();
    if(@$_SESSION['Status'] == "NZN"){
      echo "<script>document.location='" . SITE_URL('Admin/Dashboard') . "'</script>";
    }
  }
  
  public function index()
  {
    $this->load->view('Back/Login');
  }

  public function CheckLogin()
  {
    $input = $this->input->post();
    $CheckLogin = $this->LoginModel->SelectAdmin($input);
    if (count($CheckLogin) == 1) {
      $Profile = $this->LoginModel->SelectProfile($CheckLogin);
      if (!empty($Profile)) {
        @session_start();
        $_SESSION['adminId'] = $CheckLogin[0]['adminId'];
        $_SESSION['adminUsername'] = $CheckLogin[0]['adminUsername'];
        $_SESSION['adminFullname'] = $Profile[0]['profileFname']." ".$Profile[0]['profileLname'];
        $_SESSION['positionId'] = $CheckLogin[0]['positionId'];
        $_SESSION['positionName'] = $CheckLogin[0]['positionName'];
        $_SESSION['Status'] = 'NZN';
        echo "<script>document.location='" . SITE_URL('Admin/Dashboard') . "'</script>";
      }
    } else {
      echo "<script>alert('บัญชีหรือรหัสผ่านไม่ถูกต้อง')</script>";
      echo "<script>document.location='" . SITE_URL('Login') . "'</script>";
    }
  }

  public function Logout()
  {
    session_start();
    session_destroy();
    echo "<script>alert('ออกจากระบบ')</script>";
    echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
  }
}
