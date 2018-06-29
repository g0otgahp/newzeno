<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function index()
    {
      session_start();
      session_destroy();
      echo "<script>alert('ออกจากระบบ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
    }
}
