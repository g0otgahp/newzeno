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
    $this->load->view('Front/themes/slide');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/Home',$data);
    $this->load->view('Front/themes/footer');
  }

  public function CategoryHome()
  {
    $cateId = $this->uri->segment(3);
    $GroupSelect = $this->GroupModel->SelectGroupById($cateId);
    if (count($GroupSelect) == 0) {
      echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
      exit();
    }
    $Category = $this->CategoryModel->HomeCategory($cateId);
    $Product = $this->HomepageModel->SelectProductByGroup($cateId);
    $Brand = $this->BrandModel->SelectBrand($cateId);


    $data = array(
      'Product' => $Product,
      'Category' => $Category,
      'GroupSelect' => $GroupSelect,
      'Brand' => $Brand,
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
    if (isset($input['catebox']) || isset($input['brandbox']) || isset($input['sortbyprice']) ||  $input['min'] != '' || $input['max'] != '') {
      $GroupSelect = $this->GroupModel->SelectGroupById($groupId);
      if (count($GroupSelect) == 0) {
        echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
        echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
        exit();
      }
      $Category = $this->CategoryModel->HomeCategory($groupId);
      $Product = $this->HomepageModel->SelectProductByFind($input,$groupId,$cateId);
      $Brand = $this->BrandModel->SelectBrand($groupId);
      $keyword = $input;

      $data = array(
        'Product' => $Product,
        'Category' => $Category,
        'GroupSelect' => $GroupSelect,
        'Brand' => $Brand,
        'keyword' => $keyword,
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
