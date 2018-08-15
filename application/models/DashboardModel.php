<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{

  /**
  * Index Page for this controller.
  *
  * Maps to the following URL
  *         http://example.com/index.php/welcome
  *    - or -
  *         http://example.com/index.php/welcome/index
  *    - or -
  * Since this controller is set as the default controller in
  * config/routes.php, it's displayed at http://example.com/
  *
  * So any other public methods not prefixed with an underscore will
  * map to /index.php/welcome/<method_name>
  * @see https://codeigniter.com/user_guide/general/urls.html
  */

  public function SelectLogProduct()
  {
    $dataLogProduct = $this->db
    ->order_by('logProductId','DESC')
    ->join('profile','profile.profileId = log_product.logProductProfileId')
    ->get('log_product')->result_array();

    // $this->debug->log($dataLogProduct);

    return $dataLogProduct;

  }

  public function SelectLogLogin()
  {
    $dataLogLogin = $this->db
    ->order_by('loginId','DESC')
    ->join('profile','profile.profileId = log_login.loginProfileId')
    ->get('log_login')->result_array();

    // $this->debug->log($dataLogLogin);

    return $dataLogLogin;

  }
}
