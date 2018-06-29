<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{

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

  public function SelectProfile($CheckLogin)
  {
    $data = $this->db
    ->where('profileId', $CheckLogin[0]['profileId'])
    ->get('profile')
    ->result_array();
    return $data;
  }
}
