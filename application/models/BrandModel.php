<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BrandModel extends CI_Model
{

  public function SelectBrand()
  {
    $data = $this->db
    ->order_by('brandId','ASC')
    ->where('brandStatus',1)
    ->get('brand')
    ->result_array();
    return $data;
  }

  public function InsertBrand($input)
  {
    $this->db->insert('brand',$input);
  }

  public function UpdateBrand($input)
  {
    $this->db->where('brandId',$input['brandId'])->update('brand',$input);
  }

  public function LogDelete($id)
  {
    $item = $this->db->where('brandId',$id)->get('brand')->result_array();
    return $item;
  }
}
