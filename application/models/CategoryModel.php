<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{

  public function HomeCategory($cateId)
  {

    $Category = $this->db
    ->where('categroupId',$cateId)
    ->where('cateStatus',1)
    ->get('category')
    ->result_array();

    return $Category;

  }

  public function SelectCategoryById($cateId)
  {

    $Category = $this->db
    ->where('cateId',$cateId)
    ->get('category')
    ->result_array();

    return $Category;

  }

  public function SelectCategory()
  {

    $dataShow = $this->db
    ->order_by('cateId','DESC')
    ->where('cateStatus',1)
    ->where('categroupStatus',1)
    ->join('categroup','categroup.categroupId = category.categroupId')
    ->get('category')
    ->result_array();

    $i=0;
    foreach ($dataShow as $row) {
    $dataShow[$i]['sortby'] = $this->db
    ->where('sortbyCateid',$row['cateId'])
    ->get('sortby')
    ->result_array();
    $i++;
    }

    // echo "<pre>";
    // print_r($dataShow);
    // exit();
    return $dataShow;
  }

  public function SelectBrandByCate($cateId)
  {

    $dataShow = $this->db
    ->order_by('cateId','DESC')
    ->where('cateId',$cateId)
    ->where('cateStatus',1)
    ->where('categroupStatus',1)
    ->join('categroup','categroup.categroupId = category.categroupId')
    ->get('category')
    ->result_array();

    $dataShow['sortby'] = $this->db
    ->where('sortbyCateid',$cateId)
    ->join('brand','sortby.sortbyBrandid = brand.brandId')
    ->get('sortby')
    ->result_array();

    // echo "<pre>";
    // print_r($dataShow);
    // exit();
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

    // echo "<pre>";
    // print_r($dataUpdate);
    // exit();

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
