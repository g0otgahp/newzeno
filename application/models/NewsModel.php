<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsModel extends CI_Model
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

  public function newsShow()
  {
    $dataShow = $this->db->where('newsStatus',1)->get('news')->result_array();
    return $dataShow;

  }

  public function NewsInsert($dataInsert)
  {
    $this->db->insert('news',$dataInsert);

  }

  public function newsShowUpdate($newsId)
  {
    $dataShow = $this->db
    ->where('newsId',$newsId)
    ->where('newsStatus',1)
    ->get('news')
    ->result_array();

    return $dataShow;

  }

  public function NewsUpdate($dataUpdate)
  {

    $this->db
    ->where('newsId',$dataUpdate['newsId'])
    ->update('news',$dataUpdate);

  }

  public function NewsDelete($newsId)
  {

    $dataDelete = array(
      'newsId' => $newsId ,
      'editId' => $_SESSION['adminId'] ,
      'newsStatus' => 2 ,
    );

    $this->db
    ->where('newsId',$newsId)
    ->update('news',$dataDelete);

  }

  public function SelectNews()
  {
    $dataShow = $this->db->where('newsStatus',1)->get('news')->result_array();
    return $dataShow;

  }



}
