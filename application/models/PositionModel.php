<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PositionModel extends CI_Model
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
    $data = $this->db
    ->where('positionStatus',1)
    ->get('position')->result_array();
    return $data;
  }

  public function SavePosition($positionData)
  {

    $this->db->insert('position',$positionData);

    // echo "<pre>";
    // print_r($positionName);
    // exit();

  }

  public function UpdatePosition($positionData)
  {

    $this->db->where('positionId',$positionData['positionId'])->update('position',$positionData);

    // echo "<pre>";
    // print_r($positionData);
    // exit();

  }


}
