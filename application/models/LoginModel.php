<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
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

  public function SelectAdmin($input)
  {
    $data = $this->db
    ->where('adminUsername', $input['userName'])
    ->where('adminPassword', $input['userPassword'])
    ->where('adminStatus', 1)
    ->join('position','admin.adminPosition = position.positionId')
    ->where('positionStatus', 1)
    ->get('admin')
    ->result_array();
    return $data;
  }
}
