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
    $dataSelect = $this->db
    ->where('categroupStatus',1)
    ->get('categroup')
    ->result_array();

    $i=0;
    foreach ($dataSelect as $row) {
      $dataSelect[$i]['category'] = $this->db
      ->where('cateStatus',1)
      ->where('categroupId',$row['categroupId'])
      ->get('category')
      ->result_array();
      $i++;
    }
    // echo "<pre>";
    // print_r($dataSelect);
    // exit();
    return $dataSelect;
  }


  public function SelectTitleGroup()
  {
    $dataTitle = $this->db
    ->where('catetitleStatus',1)
    ->get('catetitle')
    ->result_array();

    // echo "<pre>";
    // print_r($dataTitle);
    // exit();
    return $dataTitle;
  }

  public function SelectGroupById($cateId)
  {
    $dataSelect = $this->db
    ->where('categroupStatus',1)
    ->where('categroupId',$cateId)
    ->get('categroup')
    ->result_array();
    
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
