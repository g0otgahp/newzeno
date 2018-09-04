<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->HomepageModel->LoadHead();
  }

  public function index()
  {
    $Product = $this->HomepageModel->SelectProductRecommend();
    $NewProduct = $this->HomepageModel->SelectProductNew();
    $data = array(
      'NewProduct' => $NewProduct,
      'Product' => $Product,
    );
    // $this->load->view('Front/themes/slide');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/Home',$data);
    $this->load->view('Front/themes/footer');
  }

  public function CategoryHome()
  {
    $GroupId = $this->uri->segment(3);
    $GroupSelect = $this->GroupModel->SelectGroupById($GroupId);
    if (count($GroupSelect) == 0) {
      echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
      exit();
    }
    $Product = $this->HomepageModel->SelectProductByGroup($GroupId);
    $Filter = $this->HomepageModel->FilterGroup($GroupId);

    $data = array(
      'Product' => $Product,
      'GroupSelect' => $GroupSelect,
      'Filter' => $Filter,
    );

    $this->load->view('Front/themes/filter',$data);
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function CategoryFind()
  {
    $input = $this->input->post();
    $groupId = $this->uri->segment(3);
    $cateId = 0;
    if (isset($input['catebox']) || isset($input['brandbox']) || isset($input['sortbyprice']) || isset($input['resolution']) || isset($input['tech']) || isset($input['Size']) ||  $input['min'] != '' || $input['max'] != '' || $input['wordsearch'] != '') {
      $GroupSelect = $this->GroupModel->SelectGroupById($groupId);
      if (count($GroupSelect) == 0) {
        echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
        echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
        exit();
      }
      $Product = $this->HomepageModel->SelectProductByFind($input,$groupId,$cateId);
      $Filter = $this->HomepageModel->FilterGroup($groupId);
      $keyword = $input;
      $data = array(
        'Product' => $Product,
        'GroupSelect' => $GroupSelect,
        'keyword' => $keyword,
        'Filter' => $Filter,

      );

      $this->load->view('Front/themes/filter',$data);
      // $this->load->view('Front/themes/menu');
      $this->load->view('Front/ProductList');
      $this->load->view('Front/themes/footer');
    } else {
      echo "<script>document.location='" . SITE_URL('Home/CategoryHome/'.$groupId) . "'</script>";
    }
  }
}
