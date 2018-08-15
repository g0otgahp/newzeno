<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TitleGroupModel extends CI_Model
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

  public function SelectTitleGroup()
  {
    $dataSelect = $this->db
    ->where('catetitleStatus',1)
    ->get('catetitle')
    ->result_array();

    // $i=0;
    // foreach ($dataSelect as $row) {
    //   $dataSelect[$i]['category'] = $this->db
    //   ->where('cateStatus',1)
    //   ->where('categroupId',$row['categroupId'])
    //   ->get('category')
    //   ->result_array();
    //   $i++;
    // }
    // echo "<pre>";
    // print_r($dataSelect);
    // exit();
    return $dataSelect;
  }

  // public function SelectGroupById($cateId)
  // {
  //   $dataSelect = $this->db->where('categroupStatus',1)->where('categroupId',$cateId)->get('categroup')->result_array();
  //   return $dataSelect;
  // }

  public function SaveTitleGroup($TitleGroupData)
  {

    $this->db->insert('catetitle',$TitleGroupData);
    
  }

  public function UpdateTitleGroup($GroupData)
  {

    // echo "<pre>";
    // print_r($positionData);
    // exit();

    $this->db
    ->where('catetitleId',$GroupData['catetitleId'])
    ->update('catetitle',$GroupData);

  }

  public function LogDelete($GroupId)
  {
    $item = $this->db
    ->where('catetitleId',$GroupId)
    ->get('catetitle')
    ->result_array();

    return $item;
  }


}
