<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    @session_start();
    if(@$_SESSION['Status'] !="NZN"){
      echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
      echo "<script>document.location='" . SITE_URL('Login') . "'</script>";
    }
  }

  public function LoadPage($value){
    $data = $value['Result'];
    $this->load->view('Back/themes/header', $data);
    $this->load->view($value['View']);
    $this->load->view('Back/themes/footer');
  }

  public function index()
  {

    $dataShow = $this->NewsModel->newsShow();

    $value = array(
      'Result' => array(
        'dataShow' => $dataShow,
      ),
      'View' => 'Back/News',
    );
    $this->LoadPage($value);
  }

  public function OpenForm()
  {

    $value = array(
      'Result' => array(
        // 'dataConfig' => $dataConfig,
      ),
      'View' => 'Back/NewsForm',
    );
    $this->LoadPage($value);
  }

  public function NewsInsert(){

    $dataInsert = $this->input->post();

    $pathinfo = pathinfo($_FILES['newsImage']['name'], PATHINFO_EXTENSION);
    $new_file = date('YmdHis') . "." . $pathinfo;
    move_uploaded_file($_FILES['newsImage']['tmp_name'], "uploads/News/" . $new_file);

    $dataInsert['newsImage'] = $new_file;

    $this->NewsModel->NewsInsert($dataInsert);

    echo "<script>alert('เพิ่มข่าวสารเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/News')."'</script>";

  }

  public function OpenFormUpdate()
  {

    $newsId = $this->uri->segment(4);
    $dataShow = $this->NewsModel->newsShowUpdate($newsId);

    $value = array(
      'Result' => array(
        'dataShow' => $dataShow,
      ),
      'View' => 'Back/NewsUpdate',
    );
    $this->LoadPage($value);
  }

  public function NewsUpdate(){

    $dataUpdate = $this->input->post();

    if(!empty($_FILES['newsImage']['name'])){

      $pathinfo = pathinfo($_FILES['newsImage']['name'], PATHINFO_EXTENSION);
      $new_file = date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['newsImage']['tmp_name'], "uploads/News/" . $new_file);

      $dataUpdate['newsImage'] = $new_file;

    }

    $this->NewsModel->NewsUpdate($dataUpdate);

    echo "<script>alert('แก้ไขข่าวสารเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/News')."'</script>";

  }

  public function NewsDelete(){

    $newsId = $this->uri->segment(4);

    $this->NewsModel->NewsDelete($newsId);

    echo "<script>alert('ลบข่าวสารเรียบร้อย')</script>";
    echo "<script>window.location='".SITE_URL('Admin/News')."'</script>";

  }



}
