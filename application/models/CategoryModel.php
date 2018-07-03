<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
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

    $dataShow = $this->db->where('cateStatus',1)->get('category')->result_array();

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

}
