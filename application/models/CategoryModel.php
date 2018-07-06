<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{

  public function SelectCategory()
  {

    $dataShow = $this->db->where('cateStatus',1)->get('category')->result_array();
    $i=0;
    foreach ($dataShow as $row) {
    $dataShow[$i]['sortby'] = $this->db
    ->where('sortbyCateid',$row['cateId'])
    ->get('sortby')
    ->result_array();
    $i++;
    }
    return $dataShow;
  }

  public function SaveCategory($dataInsert)
  {

    // echo "<pre>";
    // print_r($dataInsert);
    // exit();

    $this->db->insert('category',$dataInsert);

  }

  public function UpdateCategory($dataUpdate)
  {

    $this->db
    ->where('cateId',$dataUpdate['cateId'])
    ->update('category',$dataUpdate);

  }

  public function DeleteCategory($dataDelete)
  {

    $this->db
    ->where('cateId',$dataDelete['cateId'])
    ->update('category',$dataDelete);

  }

  public function DeleteSortby($cateid)
  {

    $this->db->where('sortbyCateid',$cateid)->delete('sortby');

  }

  public function InsertSortby($ConnectBrand)
  {

    $this->db->insert_batch('sortby',$ConnectBrand);

  }

}
