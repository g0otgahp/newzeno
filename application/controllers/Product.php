<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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

  public function index()
  {

    $Group = $this->GroupModel->SelectGroup();
    $Category = $this->CategoryModel->HomeCategory($Group[0]['categroupId']);

    $data = array(
      'Category' => $Category,
      'Group' => $Group,
    );

    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function ShowProduct()
  {
    $cateId = $this->uri->segment(3);
    $Id = $this->uri->segment(4);
    $Group = $this->GroupModel->SelectGroup();
    $Category = $this->CategoryModel->HomeCategory($cateId);
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
      'Category' => $Category,
      'Group' => $Group,
      'CateBrand' => $CateBrand,
    );

    // echo "<pre>";
    // print_r($data);
    // exit();
    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/filterCate');
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductList');
    $this->load->view('Front/themes/footer');
  }

  public function ShowProductFind()
  {
    $input = $this->input->post();
    $groupId = $this->uri->segment(3);
    $cateId = $this->uri->segment(4);
    if (isset($input['catebox']) || isset($input['brandbox']) || $input['min'] != '' || $input['max'] != '') {

    $Group = $this->GroupModel->SelectGroup();
    $Category = $this->CategoryModel->HomeCategory($groupId);
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
      'Category' => $Category,
      'Group' => $Group,
      'CateBrand' => $CateBrand,
      'keyword' => $keyword,
    );

    // echo "<pre>";
    // print_r($data);
    // exit();
    $this->load->view('Front/themes/header',$data);
    $this->load->view('Front/themes/filterCate');
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
    $Group = $this->GroupModel->SelectGroup();
    $Category = $this->CategoryModel->HomeCategory($cateId);
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
      'Category' => $Category,
      'Group' => $Group,
    );

    $this->load->view('Front/themes/header',$data);
    // $this->load->view('Front/themes/menu');
    $this->load->view('Front/ProductDetail');
    $this->load->view('Front/themes/footer');
  }
}
