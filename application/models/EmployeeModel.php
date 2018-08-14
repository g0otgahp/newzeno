<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeModel extends CI_Model
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

  public function Select()
  {

    $select = $this->db
    ->where('profile.profileStatus',1)
    ->join('admin','admin.profileId = profile.profileId')
    ->join('position','position.positionId = admin.adminPosition')
    ->get('profile')
    ->result_array();

    return $select;

  }


  public function Position()
  {

    $position = $this->db->get('position')->result_array();

    return $position;

  }

  public function Register($dataRegister)

  {

      $profile = array(
        'profileFname' => $dataRegister['profileFname'],
        'profileLname' => $dataRegister['profileLname'],
        'profileNickname' => $dataRegister['profileNickname'],
        'profileCitizenid' => $dataRegister['profileCitizenid'],
        'profileGender' => $dataRegister['profileGender'],
        'profilePhone' => $dataRegister['profilePhone'],
        'profileEmail' => $dataRegister['profileEmail'],
        'profileImg' => $dataRegister['profileImg'],
        'profileAddress' => $dataRegister['profileAddress'],
        'editId' => $_SESSION['adminId'],
      );

      $this->db->insert('profile',$profile);
      $id = $this->db->insert_id();


      $admin = array(
        'adminUsername' => $dataRegister['adminUsername'],
        'adminPassword' => md5($dataRegister['adminPassword']),
        'adminPosition' => $dataRegister['adminPosition'],
        'profileId' => $id

      );

      $this->db->insert('admin',$admin);


  }

  public function ShowDetail($profileId)
  {

    $dataDetail = $this->db
    ->where('profile.profileId',$profileId)
    ->join('admin','admin.profileId = profile.profileId')
    ->join('position','position.positionId = admin.adminPosition')
    ->get('profile')
    ->result_array();

    return $dataDetail;

  }

  public function Update($dataUpdate)
  {

    // echo "<pre>";
    // print_r($dataUpdate);
    // exit();

    $profile = array(
      'profileId' => $dataUpdate['profileId'],
      'profileFname' => $dataUpdate['profileFname'],
      'profileLname' => $dataUpdate['profileLname'],
      'profileNickname' => $dataUpdate['profileNickname'],
      'profileCitizenid' => $dataUpdate['profileCitizenid'],
      'profileGender' => $dataUpdate['profileGender'],
      'profilePhone' => $dataUpdate['profilePhone'],
      'profileEmail' => $dataUpdate['profileEmail'],
      'profileImg' => $dataUpdate['profileImg'],
      'profileAddress' => $dataUpdate['profileAddress'],
      'editId' => $_SESSION['adminId'],
    );

    $this->db
    ->where('profileId',$profile['profileId'])
    ->update('profile',$profile);

  }


    public function Delete($dataDelete)
    {

      $this->db
      ->where('profileId',$dataDelete['profileId'])
      ->update('profile',$dataDelete);

    }

}
