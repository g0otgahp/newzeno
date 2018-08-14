<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function index()
    {

      session_start();

      $date = Date('Y-m-d H:i:s');

      $dataLog = array(
        'loginId' => $_SESSION['idLog'],
        'loginTimeOut' => $date,
      );

      // $this->debug->prevalue($dataLog);

      $this->db->where('loginId',$dataLog['loginId'])->update('log_login',$dataLog);

      session_destroy();
      echo "<script>alert('ออกจากระบบ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
    }
}
