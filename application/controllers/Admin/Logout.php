<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
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

    public function index()
    {
        @session_start();
        @session_destroy();
        echo "<script>alert('ออกจากระบบ')</script>";
        echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
    }
}
