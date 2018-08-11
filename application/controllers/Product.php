<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $TitleGroup = $this->HomepageModel->SelectTitleGroup();
    $Group = $this->GroupModel->SelectGroup();
    $data = array(
      'TitleGroup' => $TitleGroup,
      'Group' => $Group,
    );
    $this->load->view('Front/themes/header',$data);
  }

  // public function index()
  // {
  //   $TitleGroup = $this->HomepageModel->SelectTitleGroup();
  //   $Group = $this->GroupModel->SelectGroup();
  //   $Category = $this->CategoryModel->HomeCategory($Group[0]['categroupId']);
  //
  //   $data = array(
  //     'Category' => $Category,
  //     'Group' => $Group,
  //     'TitleGroup' => $TitleGroup,
  //   );
  //
  //   $this->load->view('Front/themes/header',$data);
  //   $this->load->view('Front/themes/menu');
  //   $this->load->view('Front/ProductList');
  //   $this->load->view('Front/themes/footer');
  // }

  public function ShowProduct()
  {
    $cateId = $this->uri->segment(3);
    $Id = $this->uri->segment(4);
    $GroupSelect = $this->GroupModel->SelectGroupById($cateId);
    $CateSelect = $this->CategoryModel->SelectCategoryById($Id);
    $Product = $this->HomepageModel->SelectProductByCate($Id);
    $CateBrand = $this->CategoryModel->SelectBrandByCate($Id);

    if (count($GroupSelect) == 0 || count($CateSelect) == 0) {
      echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
      exit();
    }

    $data = array(
      'Product' => $Product,
      'GroupSelect' => $GroupSelect,
      'CateSelect' => $CateSelect,
      'CateBrand' => $CateBrand,
    );

    $this->load->view('Front/themes/filterCate',$data);
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function ShowProductFind()
  {
    $input = $this->input->post();
    $groupId = $this->uri->segment(3);
    $cateId = $this->uri->segment(4);
    if (isset($input['catebox']) || isset($input['brandbox']) || isset($input['sortbyprice']) ||  $input['min'] != '' || $input['max'] != '') {

    $GroupSelect = $this->GroupModel->SelectGroupById($groupId);
    $CateSelect = $this->CategoryModel->SelectCategoryById($cateId);
    $Product = $this->HomepageModel->SelectProductByFind($input,$groupId,$cateId);
    $CateBrand = $this->CategoryModel->SelectBrandByCate($cateId);
    $keyword = $input;

    if (count($GroupSelect) == 0 || count($CateSelect) == 0) {
      echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
      exit();
    }

    $data = array(
      'Product' => $Product,
      'GroupSelect' => $GroupSelect,
      'CateSelect' => $CateSelect,
      'CateBrand' => $CateBrand,
      'keyword' => $keyword,
    );

    $this->load->view('Front/themes/filterCate',$data);
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  } else {
    echo "<script>document.location='" . SITE_URL('Product/ShowProduct/'.$cateId."/".$groupId) . "'</script>";
}
}
  public function ProductDetail()
  {
    $cateId = $this->uri->segment(3);
    $Id = $this->uri->segment(4);
    $ProductId = $this->uri->segment(5);
    $GroupSelect = $this->GroupModel->SelectGroupById($cateId);
    $CateSelect = $this->CategoryModel->SelectCategoryById($Id);
    $Product = $this->HomepageModel->SelectProductByProduct($ProductId);
    if (count($GroupSelect) == 0 || count($CateSelect) == 0) {
      echo "<script>alert('เกิดข้อพิดพลาด ไม่พบสิ่งที่คุณต้องการ')</script>";
      echo "<script>document.location='" . SITE_URL('Home') . "'</script>";
      exit();
    }

    $data = array(
      'Product' => $Product,
      'GroupSelect' => $GroupSelect,
      'CateSelect' => $CateSelect,
    );

    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductDetail',$data);
    $this->load->view('Front/themes/footer');
  }
}
