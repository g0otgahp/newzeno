<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GroupModel extends CI_Model
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

  public function SelectGroup()
  {
    $dataSelect = $this->db->where('categroupStatus',1)->get('categroup')->result_array();
    return $dataSelect;
  }

  public function SaveGroup($GroupData)
  {

    $this->db->insert('categroup',$GroupData);
    //
    // echo "<pre>";
    // print_r($GroupData);
    // exit();

  }

  public function UpdateGroup($GroupData)
  {

    $this->db
    ->where('categroupId',$GroupData['categroupId'])
    ->update('categroup',$GroupData);

    // echo "<pre>";
    // print_r($positionData);
    // exit();

  }


}
